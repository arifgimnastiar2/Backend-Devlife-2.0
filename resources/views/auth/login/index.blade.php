@extends('layouts.template.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <form action="">
                <div class="mb-5">
                    <a href="#" class="text-decoration-none" style="color: #4E4081; font: 30px Raleway, sans-serif;" >
                        <img src="http://127.0.0.1:8000/img/logo.png" class="navbar-brand-img" alt="app-logo" width="57" height="57">
                        Dev App
                    </a>
                </div>
                <div class="register mb-3">
                    <h5>Belum punya akun? <a href="/register" class="text-decoration-none">Buat di sini</a></h5>
                </div>
                <div class="nip mb-3">
                    <label for="NIP" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="NIP" placeholder="NIP anda" autocomplete="off">
                  </div>
                <div class="password mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="text" class="form-control" id="password" placeholder="Kata sandi anda" autocomplete="off">
                    <a href="forgotpassword" class="txt-forgot-password text-decoration-none">Lupa kata sandi Anda?</a>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit" style="background-color:#4E4081;">Masuk</button>
            </form>        
        </div>
    </div>
</div>
@endsection