@extends('layouts.template.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card bg-default shadow">
                    <!-- Card header -->
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0 text-white">Daftar Izin Siswa</h3>
                    </div>

                    <!-- Table Izin Siswa -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Bukti Lampiran</th>
                                    <th>Keterangan</th>
                                    <th>Deskripsi</th>
                                    <th>Jam Izin</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($data as $key => $permission)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $permission->detailUser->name }}</td>
                                    <td>{{ $permission->detailUser->jurusan }}</td>
                                    <td><img src="{{ url($permission->lampiran) }}" alt="lampiran" style="max-width: 200px; max-height: 200px; border-radius: 12px;"></td>
                                    <td>{{ $permission->keterangan }}</td>
                                    <td>{{ $permission->deskripsi }}</td>
                                    <td>{{ $permission->jam_izin }}</td>
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