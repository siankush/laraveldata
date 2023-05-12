@extends('layouts.main')

@section('content')

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>Eamil</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Image</th>
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
                                    <td>{{ $customer->type }}</td>
                                    <td>
                                        @if($customer->status == 1 )
                                        <span class="badge text-white bg-success">Success</span>
                                        @else
                                        <span class="badge text-white bg-danger">Success</span>
                                         @endif  
                                    </td>
                                    <td> <img class="rounded-pill" src="/images/{{ $customer->image }}" width="60px"></td>
                                    <!-- <td>
                                    <a class="btn btn-primary" href="{{ url('customer/customeredit') }}/{{ $customer->id}}">Edit</a>
                                    <a href="{{ url('customer/delete') }}/{{ $customer->id }}"><button type="submit" class="btn btn-warning">Trash</button></a>
                                    </td> -->
                                    </tr>
                                    <?php $n++; ?>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->
@endsection            
