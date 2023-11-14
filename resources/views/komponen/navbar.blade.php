<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="container flex p-4">
            <a href=""><img src="{{ asset('storage/gambar/nav-logo.png') }}" alt="" class="w-auto"></a>
            <ul class="flex items-center gap-8 ml-8">
                <li>
                    <a href="" class="font-bold">Home</a>
                </li>
                <li>
                    <a href="" class="font-bold">Employee</a>
                </li>
            </ul>
            <div class="flex ml-auto">
                <a href="{{ route('logout') }}" class="btn btn-danger ">Logout</a>
            </div>
        </div>
    </nav>
</body>
</html>