<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Register Form</title>
</head>
<body>
    <div class="container mt-5">
        <div class="w-96 mx-auto mt-40">
            <div class="px-4 py-4">
                <h1 class="text-center text-2xl font-bold">Daftar</h1>
                <form action="/sesi/create" method="post">
                    @csrf
                    <div class="mb-3">
                        <h4 class="text-sm">Nama Pengguna</h4>
                        <input type="text" name="name" value="{{ Session::get('name') }}" class="w-[350px] mt-2 outline-none border p-2 rounded-lg" placeholder="Nama Pengguna">
                    </div>
                    <div class="mb-3">
                        <h4 class="text-sm">Email</h4>
                        <input type="email" name="email" value="{{ Session::get('email') }}" class="w-[350px] mt-2 outline-none border p-2 rounded-lg" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <h4 class="text-sm">Passowrd</h4>
                        <input type="password" name="password" class="w-[350px] mt-2 outline-none border p-2 rounded-lg" placeholder="Password">
                    </div>
                    <div class="flex justify-center mt-4 rounded-lg p-2 border hover:bg-[#0F172A] hover:text-white">
                        <button type="submit" name="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
