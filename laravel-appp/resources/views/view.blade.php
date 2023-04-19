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
                <div class="pull-left">
                    <h2>Laravel 9 CRUD Example</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{url('/customer/create')}}"> Create Company</a>
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
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Dob</th>
                    <th>Status</th>
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
                        <td>
                        @if($customer->gender == 'M')
                           <?php echo 'male'; ?>
                            @elseif($customer->gender == 'F')
                           <?php echo 'female'; ?>
                            @else
                          <?php  echo 'other'; ?>
                        @endif  
                        </td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->dob }}</td>
                        <td>@if($customer->status == 1)
                           <?php echo 'active'; ?>
                            @else
                          <?php  echo 'inactive'; ?>
                        @endif</td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('customer/edit') }}/{{ $customer->customer_id }}">Edit</a>
                            <a href="{{ url('customer/delete') }}/{{ $customer->customer_id }}"><button type="submit" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    <?php $n++; ?>
                    @endforeach
            </tbody>
        </table>
       
    </div>
</body>
</html>