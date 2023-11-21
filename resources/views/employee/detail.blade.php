<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('komponen.navbar')

    <div class="flex mt-4 ml-4">
        <a href="{{ route('employees.index') }}" class="border-2 bg-blue-500 text-white px-4 py-2 mr-4 rounded-xl">Back</a>
    </div>

    <div class="container flex flex-col m-10 mx-auto max-w-md ">
    <img src="{{ url('/storage/photo/'.$employee->image) }}" alt="" class="w-full h-80 object-cover ">
    <h6 class="text-xs mt-2 mx-2 ">{{ $employee -> email}}</h6>
    <h1 class="text-2xl font-bold mx-2">{{ $employee->name  }}</h1>
    <ul class="flex items-center gap-1 ml-2 my-2">
            <li><img src="{{ url('/storage/gambar/location-detail.png') }}" alt=""></li>
            <li class="text-sm text-slate-500">{{ $employee->address }}</li>
        </ul>
        <p class="text-[#64748B] mx-2 my-2">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore quidem enim dolorum
            fugiat modi ratione asperiores dolore soluta aspernatur inventore consequatur,
            perferendis veniam est pariatur blanditiis cupiditate earum architecto placeat,
            necessitatibus quam! Reprehenderit quia qui odio doloribus nostrum, assumenda quisquam.
        </p>
        <p class="text-[#64748B] mx-2 my-2">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore quidem enim dolorum
            fugiat modi ratione asperiores dolore soluta aspernatur inventore consequatur,
            perferendis veniam est pariatur blanditiis cupiditate earum architecto placeat,
            necessitatibus quam! Reprehenderit quia qui odio doloribus nostrum, assumenda quisquam.
        </p>
        <p class="text-[#64748B] flex mx-2 my-2">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore quidem enim dolorum
            fugiat modi ratione asperiores dolore soluta aspernatur inventore consequatur.
        </p>
    </div>
    
    <!-- <div class="d-flex justify-content-between py-3 ">
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
    </div> -->

</body>
</html>



    