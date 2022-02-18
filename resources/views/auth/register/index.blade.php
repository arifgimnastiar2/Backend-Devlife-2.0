@extends('layouts.template.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
            <form action="/register" method="post">
                @csrf
                <div class="mb-5">
                    <a href="#" class="text-decoration-none" style="color: #4E4081; font: 30px Raleway, sans-serif;">
                        <img src="http://127.0.0.1:8000/img/logo.png" class="navbar-brand-img" alt="app-logo" width="57" height="57">
                        Dev App
                    </a>
                </div>
                <div class="nip mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip" placeholder="NIP anda" autocomplete="off" value="{{ old('nip') }}" onkeypress="return event.charCode >= 48 && event.charCode <=57" required>
                    @error('nip')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="nama mb-3">
                    <label for="nama_guru" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama_guru') is-invalid @enderror" name="nama_guru" id="nama_guru" placeholder="Nama anda" autocomplete="off" value="{{ old('nama_guru') }}" required>
                    @error('nama_guru')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="kompetensi_keahlian mb-3">
                    <label for="kompetensi_keahlian" class="form-label">Kompetemsi Keahlian</label>
                    <input type="text" class="form-control @error('kompetensi_keahlian') is-invalid @enderror" name="kompetensi_keahlian" id="kompetensi_keahlian" placeholder="Kompetemsi keahlian anda" autocomplete="off" required>
                    @error('kompetensi_keahlian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="email mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email anda" autocomplete="off" required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="password mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Kata sandi anda" autocomplete="off" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit" style="background-color:#4E4081;">Masuk</button>
            </form>
            <small><a href="/login" class="text-decoration-none mb-3">Sudah punya akun?</a></small>
        </div>
    </div>
</div>
@endsection