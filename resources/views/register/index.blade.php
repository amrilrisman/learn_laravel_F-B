@extends('layouts.main_empty')

@section('title')
    Daftar Akun
@endsection

@section('body')
    <div class="col-4 position-absolute top-50 start-50 translate-middle">
        <h1 class="h3 mb-1 fw-normal">Buat Akun Baru</h1>

        <p class="mb-4 fw-normal">Daftar akun untuk menikmati fitur yang tersedia</p>

        <form action="/register" method="post">
            @csrf

            <div class="form-floating mb-2">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    value="{{ old('name') }}" name="name" placeholder="Name" required>
                <label for="name">Name</label>
                @error('name')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                    value="{{ old('username') }}" name="username" placeholder="Username" required>
                <label for="username">Username</label>
                @error('username')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-2">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    value="{{ old('email') }}" name="email" placeholder="Email" required>
                <label for="email">Email</label>
                @error('email')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" placeholder="Pa ssword" required>
                <label for="password">Password</label>
                @error('password')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Buat Akun</button>
        </form>
        <p class="mt-3">Sudah punya akun? <a href="/login" style="text-decoration: none"> Masuk Akun</a></p>
    </div>
@endsection
