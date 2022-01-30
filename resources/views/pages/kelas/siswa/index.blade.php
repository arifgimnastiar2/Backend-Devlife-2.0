@extends('layouts.template.main')
{{-- @dd($data) --}}
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
                                    <th scope="col" class="sort" data-sort="telepon">Telepon</th>
                                    <th scope="col" class="sort" data-sort="alamat">Alamat</th>
                                    <th scope="col" class="sort" data-sort="action">Action</th>
                                </tr>
                            </thead>

                            <tbody class="list">
                                @foreach ($data as $key => $table)
                                    <tr>
                                        
                                            <td class="budget">{{ $key+1 }}</td>
                                            <td class="budget">{{ $table->nis }}</td>
                                            <td class="budget">{{ $table->name }}</td>
                                            <td class="budget">{{ $table->kelas }}</td>
                                            <td class="budget">{{ $table->telepon }}</td>
                                            <td class="budget">{{ $table->alamat  }}</td>
                                            <td class="budget"><a href="/kelas/detail" class="btn btn-sm btn-neutral">Absensi</a></td>
                            
                                    </tr>
                                @endforeach            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection