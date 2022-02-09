@extends('layouts.template.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            {{-- alert success register --}}
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            {{-- alert success login --}}
            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            {{-- logo --}}
            <div class="mb-5">
                <a href="#" class="text-decoration-none" style="color: #4E4081; font: 30px Raleway, sans-serif;" >
                    <img src="http://127.0.0.1:8000/img/logo.png" class="navbar-brand-img" alt="app-logo" width="57" height="57">
                    Dev App
                </a>
            </div>
            <div class="register mb-3">
                <h5>Belum punya akun? <a href="/register" class="text-decoration-none">Buat di sini</a></h5>
            </div>


            {{-- form login --}}
            <form action="/login" method="POST">
                @csrf
                <div class="nip mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip" placeholder="nip anda" autocomplete="off" autofocus required value="{{ old('nip') }}">
                    @error('nip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                <div class="password mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Kata sandi anda" autocomplete="off" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <a href="forgotpassword" class="txt-forgot-password text-decoration-none">Lupa kata sandi Anda?</a>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit" style="background-color:#4E4081;">Masuk</button>
            </form>        
        </div>
    </div>
</div>
@endsection