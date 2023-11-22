<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('komponen.navbar')

    <div class="container">
        <div class="mt-4 mx-6 py-3">
            <div class="h4"></div>
            <div>
                <a href="{{ route('employees.index') }}" class="border-2 bg-blue-500 text-white px-4 py-2 mr-4 rounded-xl">Back</a>
            </div>
        </div>

        @include('komponen.pesan')
        <form action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex mx-auto py-4 w-[500px] border-2 border-none shadow-lg rounded-lg">
                <div class="flex flex-col mx-auto">
                    <div class="mb-3">
                    <h1 class="text-sm">Name</h1>
                        <input type="text" name="name" id="name" placeholder="Enter Name" class="w-[350px] mt-2 outline-none border border-slate-600 p-2 rounded-lg @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror
                            
                    </div>

                    <div class="mb-3">
                    <h1 class="text-sm">Email</h1>
                        <input type="text" name="email" id="email" placeholder="Enter Email" class="w-[350px] mt-2 outline-none border border-slate-600 p-2 rounded-lg @error('email') is-invalid @enderror" value="{{ old('email') }}">     
                        @error('email')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="my-3">
                        <h1 class="text-sm">Address</h1>
                        <textarea name="address" id="address" cols="30" rows="4" placeholder="Enter Address" class="w-[350px] mt-2 outline-none border border-slate-600 p-2 rounded-lg">{{ old('address') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label"></label>
                        <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror">

                        @error('image')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror     
                    </div>
                
                    <button class="flex mx-auto bg-green-600 px-6 py-2 my-3">Save</button>
                </div>
            </div>

            

        </form>
    </div>

    
</body>
</html>