<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login Form</title>
</head>
<body>
@include('komponen.pesan')
    <div class="container">
        <div class=" w-96 mx-auto mt-40">
            <div class="px-4 py-4">
                <h1 class="text-center text-2xl font-bold p-1">Masuk</h1>
                <p class="text-center p-2 text-slate-400">Silahkan Masukkan Akun Anda</p>
                <form action="/sesi/login" method="post">
                    @csrf
                    <div class="mb-3">
                        <h4 class="text-sm">Email Pengguna</h4>
                        <input type="email" name="email" value="{{ Session::get('email') }}" class="w-[350px] mt-2 outline-none border p-2 rounded-lg" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <h4 class="text-sm">Password</h4>
                        <input type="password" name="password" class="w-[350px] mt-2 outline-none border p-2 rounded-lg" placeholder="Password">
                    </div>
                    <div class="flex justify-center mt-4 rounded-lg p-2 border hover:bg-[#0F172A] hover:text-white">
                        <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
                <p class="text-center mt-3">Apakah Anda Sudah Punya AKun? <a href="/sesi/register" class="text-blue-500 hover:text-[#0F172A]">Daftar</a></p>
            </div>
        </div>
    </div>
</body>
</html>
