@extends('layouts.template.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card bg-default shadow">
                    <!-- Card header -->
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0 text-white">Daftar Kelas</h3>
                    </div>

                    <!-- Table Siswa -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="sort" data-sort="no">No</th>
                                    <th scope="col" class="sort" data-sort="jurusan">Nama Kelas</th>
                                    <th scope="col" class="sort" data-sort="kelas">Kelas</th>
                                    <th scope="col" class="sort" data-sort="kelas">Walikelas</th>
                                    <th scope="col" class="sort" data-sort="kelas">Kode Guru</th>
                                    <th scope="col" >Action</th>
                                </tr>
                            </thead>

                            <tbody class="list">
                                @foreach ($data as $key => $data)
                                    <tr>
                                        <td class="budget">{{ $key+1 }}</td>
                                        <td class="budget">{{ $data->nama }}</td>
                                        <td class="budget">{{ $data->kelas }}</td>
                                        <td class="budget">{{ $data->walikelas->nama_guru }}</td>
                                        <td class="budget">{{ $data->walikelas->kode_guru }}</td>
                                        <td>
                                            <a href="#" class="btn btn-success px-3 py-2" style="font-size: .7rem">Detail Kelas</a>
                                        </td>
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
