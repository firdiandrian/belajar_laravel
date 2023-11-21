<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class SessionController extends Controller
{
    function index() {
        return view("sesi/index");
    }
    function login(Request $request) {

        Session::flash('email', $request->email,);

    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ], [
        'email.required' => 'Email wajib diisi',
        'password.required' => 'Password wajib diisi'
    ]);

    $infologin = [
        'email' => $request->email,
        'password' => $request->password
    ];
    if (Auth::attempt($infologin)) {
        $request->session()->regenerate();
        return redirect()->intended('/')->with('success','Log In berhasil');
    }else{
        return redirect('sesi')->withErrors('Username dan Password Tidak Valid ');
    }
    
    
}
function logout(Request $request) {
    Auth::logout();
        $request->session()->invalidate();  
        $request->session()->regenerateToken(); 
        return redirect('')->with('success','Log Out Berhasil');;
}
function register() {
    return view("sesi/register");
}
function create(Request $request) {
    Session::flash('name', $request->name);
    Session::flash('email', $request->email);

    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users|ends_with:.com',
        'password' => 'required|min:5'
    ], [
        'name.required' => 'name wajib diisi',
        'email.required' => 'Email wajib diisi',
        'email.email' => 'Silakan update email dengan tanda @',
        'email.unique' => 'silakan pilih email yg lain',
        'email.ends_with' => 'Email harus .com',
        'password.required' => 'Password wajib diisi',
        'password.min' => 'minimum 5 karakter', 
    ]);

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ];
    User::create($data);

    $infologin = [
        'email' => $request->email,
        'password' => $request->password
    ];
     if (Auth::attempt($infologin)) {
        return redirect()->intended('/')->with('success', 'Berhasil register dan login');
    } else {
        return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak sesuai');
    }
    // return redirect()->route('employees.edit',$employee->id)->withErrors($validator)->withInput();
}
}
