<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Company Form - Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Customer</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{url('/')}}/customer" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('name')}}">
                        <span class="text-danger">
                        @error('name')
                       {{ $message }}
                        @enderror
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                        <span class="text-danger">
                          @error('email')
                            {{ $message }}
                             @enderror
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender:</strong>
                        
                        <input type="radio" id="html" name="gender" value="M">
                        <label for="html">Male</label><br>
                        <input type="radio" id="css" name="gender" value="F">
                        <label for="css">Female</label><br>
                        <input type="radio" id="javascript" name="gender" value="O">
                        <label for="javascript">Other</label>
                        <span class="text-danger">
                          @error('gender')
                            {{ $message }}
                             @enderror
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <input type="text" name="address" class="form-control" placeholder="Company Address" value="{{old('address')}}">
                        <span class="text-danger">
                        @error('address')
                       {{ $message }}
                        @enderror
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Date Of Birth:</strong>
                        <input type="date" name="dob" class="form-control" placeholder="D.O.B" value="{{old('dob')}}">
                        <span class="text-danger">
                        @error('dob')
                       {{ $message }}
                        @enderror
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" name="password" class="form-control" placeholder="password" value="{{old('password')}}">
                        <span class="text-danger">
                        @error('password')
                       {{ $message }}
                        @enderror
                        </span>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>