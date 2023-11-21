<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('komponen.navbar')
    <div class="flex justify-between px-5 py-5 ">
            <div> 
                <a href="{{ route('employees.create') }}" class=" mx-1 px-4 py-2 rounded-xl bg-green-600 text-white hover:text-white hover:bg-slate-600">Create</a>
            </div>
        </div>

    <div class="grid my-6 mx-6 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    @foreach ($employees as $employee)
        <div class="pb-5">
        <img src="{{ url('/storage/photo/'.$employee->image) }}" alt="" class="w-full h-52 object-cover rounded-xl">
        <h6 class=" text-xs mt-2">{{ $employee -> email}}</h6>
        <h4 class=" text-xl font-bold mt-2">{{ $employee -> name}}</h4>
        <a href="{{ route('employees.show',$employee->id)}}">
            <button class="flex bg-[#F1F5F9] items-center justify-center border-2 py-2 w-full rounded-full mt-4 gap-2 hover:bg-slate-700 hover:text-white">Detail</button>
        </a>
        <div class="mt-3 flex gap-4 justify-center">
            <a href="{{ route('employees.edit',$employee->id) }}">
                <button class="bg-[#F1F5F9] border-2 w-40 rounded-full py-1 hover:bg-green-600 hover:text-white ">Edit</button>
            </a>
            <form id="employee-edit-action-{{ $employee->id }}" action="{{ route('employees.destroy',$employee->id) }}" method="post">
             @csrf
            @method('delete')
            <button class="bg-[#F1F5F9] border-2 w-40 rounded-full py-1 hover:bg-red-600 hover:text-white">Delete</button>
            </form> 
        </div> 
        </div>
        @endforeach    
    </div>

    <!-- <div class="container ">
        <div class="d-flex justify-content-between py-5">
            <div>
                <a href="{{ route('employees.create') }}" class="btn btn-primary">Create</a>
            </div>
        </div>

        

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th width="30">ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th width="200">Action</th>
                    </tr>

                    @if($employees->isNotEmpty())
                    @foreach ($employees as $employee)
                    <tr valign="middle">
                        <td>{{ $employee->id }}</td>
                        <td>
                            @if($employee->image != '' && file_exists(public_path().'/storage/photo/'.$employee->image))
                            <img src="{{ url('/storage/photo/'.$employee->image) }}" alt="" width="40" height="40" class="rounded-circle">
                            @else
                            <img src="{{ url('assets/images/no-image.png') }}" alt="" width="40" height="40" class="rounded-circle">
                            @endif
                        </td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>
                            {{-- <a href="" class="btn btn-primary btn-sm"></a> --}}
                            <a href="{{ route('employees.show',$employee->id)}}" class="btn btn-secondary btn-sm">Detail</a>
                            <a href="{{ route('employees.edit',$employee->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" onclick="deleteEmployee({{ $employee->id }})" class="btn btn-danger btn-sm">Delete</a>

                            <form id="employee-edit-action-{{ $employee->id }}" action="{{ route('employees.destroy',$employee->id) }}" method="post">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                    @else
                    <tr>
                        <td colspan="6">Record Not Found</td>
                    </tr>
                    @endif

                </table>
            </div>
        </div>

        <div class="mt-3">
            {{ $employees->links() }}
        </div>

    </div> -->

    @extends('komponen.footer')
</body>
</html>
<!-- <script>
    function deleteEmployee(id) {
        if (confirm("Are you sure you want to delete?")) {
            document.getElementById('employee-edit-action-'+id).submit();
        }
    }
</script> -->