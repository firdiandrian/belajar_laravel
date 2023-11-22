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

        @include('komponen.pesan')
        <form action="{{ route('employees.search') }}" method="GET" class="mb-3">
            <div class="w-[95%] h-12 flex justify-center items-center mx-auto mt-4 border-2 rounded-2xl sm:w-[65%] md:w-[50%] lg:w-[30%]">
                <img src="{{ url('/storage/gambar/search-logo.png') }}" alt="" class="w-7 h-7">
                <input type="text" name="keyword" class="w-full px-2 outline-none" placeholder="Search by name email address" value="{{ session('employee_search_keyword') }}">
                <button type="submit" class="mx-4 ">Search</button>
            </div>
        </form>

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


    @extends('komponen.footer')
</body>
</html>
<script>
    function deleteEmployee(id) {
        if (confirm("Are you sure you want to delete?")) {
            document.getElementById('employee-edit-action-'+id).submit();
        }
    }
</script>