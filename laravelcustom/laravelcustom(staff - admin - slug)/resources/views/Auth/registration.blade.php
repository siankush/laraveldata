@extends('layout')
@section('content')
<main class="signup-form">
<div class="cotainer">
<div class="row justify-content-center">
<div class="col-md-4">
<span class="text-danger">
    @if ($message = Session::get('success'))
        <p class="text-center">{{ $message }}</p>
    @endif
</span>
<div class="card">
<h3 class="card-header text-center">Register User</h3>
<div class="card-body">
<form action="{{ route('register.custom') }}" method="POST">
@csrf
<div class="form-group mb-3">
<input type="text" placeholder="Name" id="name" class="form-control" name="name" value="{{old('name')}}" autofocus>
<span class="text-danger">
@error('name')
{{$message}}
@enderror
</span>
</div>
<div class="form-group mb-3">
<input type="text" placeholder="Email" id="email_address" class="form-control" value="{{old('email')}}" name="email" autofocus>
<span class="text-danger">
@error('email')
{{$message}}
@enderror
</span>
</div>
<div class="form-group mb-3">
<input type="password" placeholder="Password" id="password" class="form-control" value="{{old('password')}}" name="password">
<span class="text-danger">
@error('password')
{{$message}}
@enderror
</span>
</div>
<div class="form-group mb-3">
<input type="password" placeholder="confirm Password" id="password" class="form-control" value="{{old('password_confirm')}}" name="password_confirm">
<span class="text-danger">
@error('password_confirm')
{{$message}}
@enderror
</span>
</div>
<!-- <div class="form-group mb-3">
<div class="checkbox">
<label><input type="checkbox" name="remember"> Remember Me</label>
</div>
</div> -->
<div class="d-grid mx-auto">
<button type="submit" class="btn btn-dark btn-block">Sign up</button>
</div>
<p class="text-center pt-2"><a class="text-decoration-none" href="/login">Already have an account</a></p>
</form>
</div>
</div>
</div>
</div>
</div>
</main>
@endsection