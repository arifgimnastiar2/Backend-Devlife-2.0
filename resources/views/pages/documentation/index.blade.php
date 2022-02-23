@extends('layouts.template.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('img/computer.jpg') }}" class="navbar-brand-img" alt="app-logo" style="width:200px;">
                </div>
                <div class="col-8">
                    <h2 class="card-title mt-1">Dokumentasi</h2>
                    <p class="card-text" >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="row mt-6">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('img/buku.jpg') }}" class="navbar-brand-img" alt="app-logo" style="width:100px;">
                </div>
                <div class="col-8">
                    <h4 class="card-title mt-1">Panduan</h4>
                    <p class="card-text" style="font-size:15px;">Some quick example text to build on the card title</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('img/user.jpg') }}" class="navbar-brand-img" alt="app-logo" style="width:100px;">
                </div>
                <div class="col-8">
                    <h4 class="card-title mt-1">Deteksi Wajah</h4>
                    <p class="card-text" style="font-size:15px;">Some quick example text to build on the card title.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('img/help.jpg') }}" class="navbar-brand-img" alt="app-logo" style="width:100px;">
                </div>
                <div class="col-8">
                    <h4 class="card-title mt-1">Bantuan</h4>
                    <p class="card-text" style="font-size:15px;">Some quick example text to build on the card title</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img" alt="app-logo" style="width:100px;">
                </div>
                <div class="col-8">
                    <h4 class="card-title mt-1">Tentang Kami</h4>
                    <p class="card-text" style="font-size:15px;">Some quick example text to build on the card title.</p>
                </div>
            </div>
        </div>
    </div>
@endsection