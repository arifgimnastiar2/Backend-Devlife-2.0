@extends('layouts.template.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card bg-default shadow">
                    <!-- Card header -->
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0 text-white">Light table</h3>
                    </div>

                    <!-- Table Siswa -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="sort" data-sort="no">No</th>
                                    <th scope="col" class="sort" data-sort="nis">Nis</th>
                                    <th scope="col" class="sort" data-sort="name">Nama</th>
                                    <th scope="col" class="sort" data-sort="kelas">Kelas</th>
                                </tr>
                            </thead>

                            <tbody class="list">
                                @foreach ($tables as $key => $table)
                                    <tr>
                                        
                                            <td class="budget">{{ $key+1 }}</td>
                                            <td class="budget">{{ $table->nis }}</td>
                                            <td class="budget">{{ $table->name }}</td>
                                            <td class="budget">{{ $table->kelas }}</td>
                            
                                    </tr>
                                @endforeach            
                            </tbody>
                        </table>

                            <div class="d-flex justify-content-end my-3 mx-3">
                            <a href="/dashboard-admin" class="btn btn-success text-decoration-none mt-3">Kembali</a>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection