 <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img" alt="app-logo">
          <h2 class="d-inline-block ml-1 mt-4">Devector</h2>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard')? "text-primary" : "" }}" href="{{ route('dashboard') }}">
                <i class="ni ni-app"></i>
                <span class="nav-link-text">Halaman Utama</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('kelas')? "text-primary" : "" }}" href={{ route('kelas') }}>
                <i class="ni ni-bullet-list-67"></i>
                <span class="nav-link-text">Daftar Kelas</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-text">Daftar Pengguna Baru</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('permission')? "text-primary" : "" }}" href="{{ route('permission') }}">
                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Daftar Izin Siswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('attendance')? "text-primary" : "" }}" href="{{ route('attendance') }}">
                <i class="ni ni-hat-3"></i>
                <span class="nav-link-text">Daftar Kehadiran Siswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="ni ni-single-copy-04"></i>
                <span class="nav-link-text">Dokumentasi</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Tentang Sekolah</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://smkn4bdg.sch.id/berita" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Kabar Terbaru</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.google.co.id/maps/place/SMKN+4+Bandung/@-6.9415418,107.6266874,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e86413eb50ad:0xf9930b5268e3fee1!8m2!3d-6.9415397!4d107.6288457" target="_blank">
                <i class="ni ni-square-pin"></i>
                <span class="nav-link-text">Lokasi Sekolah</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://belajar.smkn4bdg.sch.id/" target="_blank">
                <i class="ni ni-hat-3"></i>
                <span class="nav-link-text">LMS</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>