@extends('layouts.template.main')
{{-- @dd($slug) --}}
@section('content')
    <div class="row">
        <div class="col">
            <div class="card bg-default shadow">
            <!-- Card header -->
            <div class="card-header bg-transparent border-0">
                <h3 class="mb-0 text-white">Kelas</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Guru</th>
                    <th scope="col">Tahun Angkatan</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($data as $key => $item)
                        <tr>
                            <td>
                                <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $key+1 }}</span>
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $item->nip_guru }}</span>
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $item->nama }}</span>
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $item->walikelas->nama_guru }}</span>
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $item->tahun_angkatan }}</span>
                                </div>
                                </div>
                            </td>
                            <td>
                                <a href="/kelas/detail/{{ $item->slug }}" class="btn btn-sm btn-neutral">Lihat</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer bg-transparent border-0 py-4">
                <nav aria-label="...">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item disabled">
                            <a class="page-link text-dark" href="#" tabindex="-1">
                                <i class="fas fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link text-white" href="#">1</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link text-dark" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li class="page-item">
                            <a class="page-link text-dark" href="#">3</a>
                        </li>
                        
                        <li class="page-item">
                            <a class="page-link text-dark" href="#">
                                <i class="fas fa-angle-right" ></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
