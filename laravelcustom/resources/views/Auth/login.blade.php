@extends('layout')
 
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
            <span class="text-danger">
                    @if ($message = Session::get('success'))
                    <p class="text-center">{{ $message }}</p>
                        @endif
                 </span>
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                    autofocus>
                                <span class="text-danger">
                                     @error('email')
                                   {{ $message }}
                                      @enderror
                                </span>
                            </div>
 
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password">
                                <span class="text-danger">
                                    @error('password')
                                {{ $message }}
                                    @enderror
                                </span>
                            </div>
 
                            <!-- <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div> -->
 
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                            <p class="text-center pt-2"><a class="text-decoration-none" href="/registration">New user</a></p>

                        </form>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection