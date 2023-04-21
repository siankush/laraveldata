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
                   <span class=""> {{$logname}} logged in.. </span>
                </div>
                <div class=" mb-2">
                    <a class="btn btn-success" href="{{url('/customer/create')}}">Add Customer</a>
                    <a class="btn btn-primary float-right ml-2" href="{{url('signout')}}"> Logout</a>
                    <a class="btn btn-warning float-right"  href="{{url('customer/trash')}}"> Move trash</a>
                </div>
                <div class="mb-2">
                    <form action="" method="">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control col-4" placeholder="search by name" value="{{$search}}">
                    </div>
                    <button type="submit" class="btn btn-primary">search</button>
                    <a href="{{url('customer/view')}}"><button type="button" class="btn btn-success">Reset</button></a>
                  </form>
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
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $n }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('customer/edit') }}/{{ $customer->customer_id }}">Edit</a>
                            <a href="{{ url('customer/delete') }}/{{ $customer->id }}"><button type="submit" class="btn btn-warning">Trash</button></a>
                        </td>
                    </tr>
                    <?php $n++; ?>
                    @endforeach
            </tbody>
        </table>
        <div class="row float-right">
        @if(!$search)
       {{$customers->links('pagination::bootstrap-5')}}
       @endif
      </div>     
    </div>
</body>
</html>