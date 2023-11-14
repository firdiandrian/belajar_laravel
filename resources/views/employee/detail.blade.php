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
    <div class="bg-dark py-3 shadow-lg">
        <div class="container">
            <div class="h4 text-white text-center">CRUD</div>
        </div>
    </div>
    <div class="d-flex justify-content-between py-3 ">
        <div class="h4">&nbsp</div>
        <div style="margin-right:20px; margin-top:10px;">
            <a href="{{ route('employees.index') }}" class="btn btn-primary">Back</a>
        </div>
        
    </div>
    <div class="card shadow-lg" style="margin:20px;">
        <div class="card-header shadow p-3">Detail</div>
        <div class="card-body ">
            <div class="card-body row col-lg-12 ">
                <div class="col-lg-8" style="margin-top:50px;" >
                    <h5 class="card-title">Name : {{ $employee->name  }}</h5>
                    <h5 class="card-title">Email : {{ $employee->email  }}</h5>
                    <p class="card-text"> <b>Alamat :</b> {{ $employee->address }}</p>
                </div>
                <div class="my-2 col-lg-4 d-flex justify-content-end ">
                    @if($employee->image != '' && file_exists(public_path().'/storage/photo/'.$employee->image))
                    <img src="{{ url('/storage/photo/'.$employee->image) }}" alt="" width="200px" height="200px">
                    @else
                    <img src="{{ url('assets/images/no-image.png') }}" alt="" width="200px" height="200px">
                    @endif
                </div>
            </div>

        </div>
    </div>

</body>
</html>



    