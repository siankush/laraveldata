<html>
    <head>
        <title>staff logged page</title>
</head>
<style>
    table, th, td{
        border : 1px solid black;
    }
    </style>
<body>

    <h2>staff login successful </h2>
    <p>staff name - {{$name}}</p>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="2">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>Eamil</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $n = 1; ?>
                                        @foreach ($schools as $customer)
                                        <tr>
                                            <td>{{ $n }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <!-- <td>
                                        <a class="btn btn-primary" href="{{ url('customer/customeredit') }}/{{ $customer->id}}">Edit</a>
                                        <a href="{{ url('customer/delete') }}/{{ $customer->id }}"><button type="submit" class="btn btn-warning">Trash</button></a>
                                    </td> -->
                                </tr>
                                <?php $n++; ?>
                                @endforeach
                            </tbody>
                        </table>
</body>
</html>    