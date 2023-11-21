<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    
    <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white text-center">CRUD</div>
        </div>
    </div>

    <div class="container ">
        <div class="d-flex justify-content-between py-5">
            <div>
                <a href="{{ route('employees.create') }}" class="btn btn-primary">Create</a>
            </div>
            <div>
                @if(Auth::check())
                <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                @endif
                
            </div>
        </div>

        @include('komponen.pesan')

        <form action="{{ route('employees.search') }}" method="GET" class="mb-3">
            <div class="input-group justify-content-end">
                <input type="text" name="keyword" class="form-control col-md-3" placeholder="Search by name email address" value="{{ session('employee_search_keyword') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
        
        

        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th width="30">NO</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th width="200">Action</th>
                    </tr>

                    @if($employees->isNotEmpty())
                        @php
                            $counter = 1;
                        @endphp
                    @foreach ($employees as $employee)
                    <tr valign="middle">
                        {{-- <td>{{ $employee->id }}</td> --}}
                        <td>{{ $counter++ }}</td>
                        <td>
                            @if($employee->image != '' && file_exists(public_path().'/storage/photo/'.$employee->image))
                            <img src="{{ url('/storage/photo/'.$employee->image) }}" alt="" width="40" height="40" class="rounded-circle">
                            @else
                            <img src="{{ url('assets/images/no-image.png') }}" alt="" width="40" height="40" class="rounded-circle">
                            @endif
                        </td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>
                            {{-- <a href="" class="btn btn-primary btn-sm"></a> --}}
                            <a href="{{ route('employees.show',$employee->id)}}" class="btn btn-secondary btn-sm">Detail</a>
                            <a href="{{ route('employees.edit',$employee->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" onclick="deleteEmployee({{ $employee->id }})" class="btn btn-danger btn-sm">Delete</a>

                            <form id="employee-edit-action-{{ $employee->id }}" action="{{ route('employees.destroy',$employee->id) }}" method="post">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                    @else
                    <tr>
                        <td colspan="6">Record Not Found</td>
                    </tr>
                    @endif

                </table>
            </div>
        </div>

        <div class="mt-3">
            {{ $employees->links() }}
        </div>

    </div>

    
</body>
</html>
<script>
    function deleteEmployee(id) {
        if (confirm("Are you sure you want to delete?")) {
            document.getElementById('employee-edit-action-'+id).submit();
        }
    }
</script>