<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <!-- Mengimpor Bootstrap CSS (Pastikan Anda telah mengunduh dan menyertakan file Bootstrap CSS) -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="w-50 mx-auto">
            <div class="border rounded px-4 py-4">
                <h1 class="text-center">Register</h1>
                <form action="/sesi/create" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ Session::get('name') }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" value="{{ Session::get('email') }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Mengimpor Bootstrap JS (Opsional, tergantung kebutuhan Anda) -->
    <script src="path-to-bootstrap-js/bootstrap.min.js"></script>
</body>
</html>
