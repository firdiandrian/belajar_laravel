<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="card" style="margin:20px;">
        <div class="card-header">Page</div>
        <div class="card-body">
            <div class="card-body row col-lg-12">
                <div class="col-lg-8">
                    <h5 class="card-title">Name : {{ $employee->name  }}</h5>
                    <h5 class="card-title">Email : {{ $employee->email  }}</h5>
                    <p class="card-text">Alamat : {{ $employee->address }}</p>
                </div>
                <div class="my-2 col-lg-4 d-flex justify-content-end ">
                    <img src="{{ asset('uploads/employees/' . $employee->image) }}" width="200px">
                    
                </div>
            </div>

        </div>
    </div>

</body>
</html>



    