@extends('layouts.template.auth')

@section('content')
<body class="bg-default">
<!-- Navbar -->
<nav id="navbar-main" class="navbar navbar-horizontal fixed-top navbar-transparent navbar-main navbar-expand-lg" style="background-color: #<div class="header py-7 py-lg-8 pt-lg-9" style="background-color: #825ee4">
    <div class="container">
      <a class="navbar-brand" href="">
        <div class="d-flex">
            <img class="" src="img/logo.png" width="25" height="25">
            <a class="navbar-brand" href="" style="color:#4E4081; font-size:1.3rem;">Devector</a>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="dashboard.html" class="nav-link" style="color: #ffffff">
              <span class="nav-link-inner--text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="login.html" class="nav-link" style="color: #ffffff">
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="register.html" class="nav-link" style="color: #ffffff">
              <span class="nav-link-inner--text">Register</span>
            </a>
          </li>
      </div>
    </div>
  </nav>
<!-- Akhir Navbar -->
<!-- Header -->
<section id="header">
<div class="header py-7 py-lg-8 pt-lg-9" style="background-color: #825ee4">
  <div class="container">
    <div class="header-body text-center mb-7">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
          <h1 class="text-white"></h1>
          <p class="text-lead text-white"></p>
        </div>
      </div>
    </div>
  </div>
  <div class="separator separator-bottom separator-skew zindex-100">
    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
    </svg>
  </div>
</section>
<!-- Akhir Header -->
<!-- Awal Content -->
<div class="container">
    <div class="row justify-content-center mt--9 pb-5">
        <div class="col-lg-6 col-md-8">
            <!-- harus ada -->  
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card border-0 mb-5 col-lg-12" style="background-color: #ffffff">
                        <div class="card-header bg-transparent pb-5">
            <form action="/login" method="post">
                @csrf
                <div class="mt-4 mb-5 ms-3">
                    <a href="#" class="text-decoration-none" style="color: #4E4081; font: 30px Raleway, sans-serif;">
                        <h1 class="text-title ml--3 mb-3" style="color: #4E4081;">Welcome!</h1>
                        <p class="text-lead ml--3" style="color: #4E4081;">To Admin Face Detector</p>
                    </a>
                </div>
                <div class="nip mt--3 mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip" placeholder="NIP anda" autocomplete="off" value="{{ old('nip') }}" onkeypress="return event.charCode >= 48 && event.charCode <=57" required>
                    @error('nip')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="password mb-5">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Kata sandi anda" autocomplete="off" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary mt--4" type="submit" style="background-color:#4E4081;">Masuk</button>
            </form>
            <!-- akhir harus ada -->
            <small><a href="/register" class="text-decoration-none">Sudah punya akun?</a></small>
                    </div>
                    </div>
                </div>
        </div>
        </div>
        </div>
    </div>
    <!-- Akhir Content -->
    <!-- Footer -->
    <footer class="py-5" id="footer-main">
      <div class="container">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2020 <a href="" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Website Us</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Devlife 2.0</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->
</div>
</body>
@endsection