@extends('base')
@section('content')

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <h2>Register</h2>
            <form action="{{ route('register-acc') }}" method="POST" class="form-group">
                @csrf
                <label class="" for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control @error('username')is-invalid @enderror" placeholder="Username" value="{{ old('username') }}">
                <label class="mt-2" for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control @error('email')is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                <label class="mt-2" for="password">password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                <input type="submit" value="Login" class="mt-2 btn btn-success">
            </form>
            <small>Sudah punya akun? <a href="{{ route('login') }}">Login</a></small>
        </div>
    </div>
</div>


@endsection()