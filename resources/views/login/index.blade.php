@extends('layouts.main_empty')

@section('title')
    Login
@endsection

@section('body')
    <div class="col-3 position-absolute top-50 start-50 translate-middle">
        <h1 class="h3 mb-3 fw-normal">Masukan akun anda</h1>

        @if (session()->has('success create account'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ Session('success create account') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session()->has('error login'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ Session('error login') }}</strong>
                <form action="{{ back() }}">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </form>
            </div>
        @endif

        <form action="/login" method="post">

            @csrf

            <div class="form-floating mb-2">
                <input type="email" class="form-control @error('email') is-invalid @enderror "id="email"
                    placeholder="Example@example.com" name="email" value="{{ old('email') }}" required>
                <label for="email">Email address</label>
            </div>
            @error('email')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password"
                    required>
                <label for="floatingPassword">Password</label>
            </div>


            <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Sign in</button>

        </form>
        <p class="mt-3">Belum punya akun? <a href="/register" style="text-decoration: none"> Buat Akun</a></p>
    </div>
@endsection
