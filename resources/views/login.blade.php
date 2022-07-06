@extends('base')
@section('content')

@if (session('success'))
        <script>
            Swal.fire(
            'Sukses!',
            'Akun berhasil didaftarkan, silahkan login!',
            'success'
        )
        </script>
    @endif

    
@if (session('error'))
<script>
    Swal.fire(
        'Gagal!',
        'Username atau Password salah, silahkan coba lagi!',
        'error'
    )
</script>
@endif

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <form action="{{ route('login-acc') }}" method="POST" class="form-group">
                @csrf
                <label class="" for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control @error('usernane')is-invalid @enderror" placeholder="Username" value="{{ old('username') }}">
                <label class="mt-2" for="password">password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                <input type="submit" value="Login" class="mt-2 btn btn-success">
            </form>
            <small>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></small>
        </div>
    </div>
</div>


@endsection()