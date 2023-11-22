<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    public function index() {

        $employees = Employee::orderBy('id','DESC')->paginate(5);

        return view('employee.list',['employees' => $employees]);
    }

    function show($id) {
        $employees = Employee::find($id);
        return view('employee.detail')->with('employee', $employees);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        session(['employee_search_keyword' => $keyword]);

        $employees = Employee::when($keyword, function ($query) use ($keyword) {
                $query->where('name', 'like', "%$keyword%")
                    ->orWhere('email', 'like', "%$keyword%")
                    ->orwhere('address', 'like', "%$keyword%");
            })
            ->orderBy('id', 'DESC')
            ->paginate(5);

        return view('employee.list', ['employees' => $employees, 'keyword' => $keyword]);
    }

    public function create() {
        return view('employee.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:employees|ends_with:.com',
            'image' => 'sometimes|mimes:png,jpeg,jpg'
        ],
        [
            'name.required' => 'name wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'silakan masukkan email dengan tanda @',
            'email.unique' => 'silakan pilih email yg lain',
            'email.ends_with' => 'email harus .com',
            'image.mimes' => 'format image tidak didukung'
        ]);

        if ( $validator->passes() ) {

            // option #1
            // Save data here
            // $employee = new Employee();
            // $employee->name = $request->name;
            // $employee->email = $request->email;
            // $employee->address = $request->address;
            // $employee->save();

            // option #2
            // $employee = new Employee();
            // $employee->fill($request->post())->save();

            // option #3
            $employee = Employee::create($request->post());

            // Upload image here
            if ($request->image) {
                $ext = $request->image->getClientOriginalExtension();
                $newFileName = time().'.'.$ext;
                $request->image->move(public_path().'/storage/photo/',$newFileName); // This will save file in a folder
                
                $employee->image = $newFileName;
                $employee->save();
            }
            
            return redirect()->route('employees.index')->with('success','Employee added successfully.');


        } else {
            // return with errrors
            return redirect()->route('employees.create')->withErrors($validator)->withInput();
        }
    }

    public function edit(Employee $employee) {
        //$employee = Employee::findOrFail($id);       
        return view('employee.edit',['employee' => $employee]);
    }

    public function update(Employee $employee, Request $request) {

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:employees|ends_with:.com',
            'address' => 'required|max:200', // Menambahkan validasi pada field address, maksimal 200 karakter
            'image' => 'sometimes|mimes:png,jpeg,jpg'
        ], [
            'name.required' => 'Name wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silakan update email dengan tanda @',
            'email.unique' => 'silakan pilih email yg lain',
            'email.ends_with' => 'Email harus .com',
            'address.required' => 'Address wajib diisi',
            'address.max' => 'Address tidak boleh lebih dari 200 kata', // Pesan untuk validasi maksimal 200 kata pada address
            'image.mimes' => 'Format image tidak didukung'
        ]);
        if ( $validator->passes() ) {
            // Save data here
            // $employee = Employee::find($id);
            // $employee->name = $request->name;
            // $employee->email = $request->email;
            // $employee->address = $request->address;
            // $employee->save();

            $employee->fill($request->post())->save();
            

            // Upload image here
            if ($request->image) {
                $oldImage = $employee->image;

                $ext = $request->image->getClientOriginalExtension();
                $newFileName = time().'.'.$ext;
                $request->image->move(public_path().'/storage/photo/',$newFileName); // This will save file in a folder
                
                $employee->image = $newFileName;
                $employee->save();
  
                File::delete(public_path().'/storage/photo/'.$oldImage);
            }            

            return redirect()->route('employees.index')->with('success','Employee updated successfully.');


        } else {
            // return with errrors
            return redirect()->route('employees.edit',$employee->id)->withErrors($validator)->withInput();
        }
    }

    public function destroy(Employee $employee, Request $request) {
        //$employee = Employee::findOrFail($id);                
        File::delete(public_path().'/storage/photo/'.$employee->image);
        $employee->delete();        
        return redirect()->route('employees.index')->with('success','Employee deleted successfully.');
    }
}
