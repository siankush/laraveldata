@extends('layouts.main')

@section('content')

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create!</h1>
                            </div>
                            <form class="user" action="{{url('/')}}/customer" method="POST" enctype="multipart/form-data">
                               @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Name" value="{{old('name')}}">
                                            <span class="text-danger">
                                              @error('name')
                                              {{ $message }}
                                              @enderror
                                             </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Email Address" value="{{old('email')}}">
                                            <span class="text-danger">
                                                @error('email')
                                               {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        </div>
                                    <div class="form-group row">
                                   <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="phone" maxlength="10" class="form-control form-control-user" id="exampleInputPhone"
                                        placeholder="Phone" value="{{old('phone')}}">
                                        <span class="text-danger">
                                             @error('phone')
                                            {{ $message }}
                                             @enderror
                                             </span>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="textarea" name="address" class="form-control form-control-user" id="exampleInputAddress"
                                           placeholder="Address" value="{{old('address')}}">
                                           <span class="text-danger">
                                               @error('address')
                                              {{ $message }}
                                               @enderror
                                               </span>
                                    </div>
                                     </div>
                                   <div class="form-group row">
                                      <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select  class="form-control rounded-pill" name="type" id="type" value="{{old('type')}}">
                                            <option value="" disable>choose one</option>
                                            <option value="private">Private</option>
                                            <option value="government">Governemnt</option>
                                        </select>
                                        <span class="text-danger">
                                                @error('type')
                                               {{ $message }}
                                                @enderror
                                        </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Password" value="{{old('password')}}">
                                            <span class="text-danger">
                                                @error('password')
                                               {{ $message }}
                                                @enderror
                                                </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="file" name="image" class="form-control form-control-user" id="exampleInputImage"
                                           placeholder="Image" value="{{old('image')}}">
                                           <span class="text-danger">
                                               @error('image')
                                              {{ $message }}
                                               @enderror
                                           </span>
                                    </div>
                                 </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
