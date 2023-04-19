<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD Tutorial Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="">
                    <h2>Laravel 9 CRUD Example</h2>
                  
                </div>
                <div class=" mb-2">
                    <a class="btn btn-success" href="{{url('/customer/create')}}">Add Customer</a>
                    <a class="btn btn-primary float-right ml-2" href="{{url('signout')}}"> Logout</a>
                    <a class="btn btn-success float-right " href="{{url('customer/view')}}"> All Customer</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 1; ?>
                @foreach ($customer as $customer)
                    <tr>
                        <td>{{ $n }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>
                            <a class="btn btn-danger" href="{{ url('customer/forcedelete') }}/{{ $customer->id}}">Delete</a>
                            <a href="{{ url('customer/restore') }}/{{ $customer->id }}"><button type="submit" class="btn btn-warning">Restore</button></a>
                        </td>
                    </tr>
                    <?php $n++; ?>
                    @endforeach
            </tbody>
        </table>
       
    </div>
</body>
</html>