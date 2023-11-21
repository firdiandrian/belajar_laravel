<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="flex items-center py-4 px-6 w-full">
            <img src="{{ asset('storage/gambar/nav-logo.png') }}" alt="" class="w-auto">
            <ul class="flex gap-8 ml-8">
                <li>
                    <a href="/" class="font-bold hover:text-blue-500">Home</a>
                </li>
                <li>
                    <a href="{{ route('employees.index') }}" class="font-bold hover:text-blue-500">Employee</a>
                </li>
            </ul>
            <ul class="flex items-center ml-auto">
            <li >
                @if(Auth::check())
                    <button class="border-2 px-4 py-1 rounded-full border-slate-700 hover:text-white hover:bg-red-600 hover:border-red-600"><a href="{{ route('logout') }}" class=" font-semibold">Logout</a></button>
                
                @else
                    <a href="{{ route('sesi') }}" class="border-2 px-4 py-1 rounded-full border-slate-700 hover:text-white hover:bg-slate-600">Log In</a>
                
                @endif
                </li>
            </ul>
        </div>
    </nav>
