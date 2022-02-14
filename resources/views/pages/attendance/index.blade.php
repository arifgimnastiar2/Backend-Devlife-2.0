@extends('layouts.template.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card bg-default shadow">
                    <!-- Card header -->
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0 text-white">Daftar Kehadiran Siswa</h3>
                    </div>

                    <!-- Table Daftar Hadir Siswa -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nis</th>
                                    <th>Name</th>
                                    <th>Lokasi</th>
                                    <th>Face Detector</th>
                                    <th>Jam Masuk</th>
                                    <th>Keterangan</th>
                                    <th>Jam Keluar</th>
                                </tr>
                            </thead >
                            <tbody class="list">
                                @foreach ($data as $key => $attend)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $attend->user_nis }}</td>
                                    <td>{{ $attend->user->name }}</td>
                                    <td>{{ $attend->lokasi }} </td>
                                    <td>
                                        <img src="{{ $attend->base64 }}" alt="{{ $attend->base64 }}" style="max-width: 200px; max-height: 100px; border-radius: 0.8rem"/>
                                    </td>
                                    <td>{{ $attend->jam_masuk }}</td>
                                    <td>
                                        @if ($attend->keterangan == 'Tepat Waktu')
                                            <span class="badge badge-pill badge-success font-bold">{{ $attend->keterangan }}</span>
                                        @elseif ($attend->keterangan == 'Terlambat')
                                            <span class="badge badge-pill badge-danger font-bold">{{ $attend->keterangan }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $attend->jam_keluar }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-end my-3 mx-3">
                            <a href="{{ route('dashboard') }}" class="btn btn-primary text-decoration-none mt-3" style="font-size: .7rem">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection