@extends('layouts.template.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card bg-default shadow">
            <!-- Card header -->
            <div class="card-header bg-transparent border-0">
                <h3 class="mb-0 text-white">Tabel Siswa</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No Absen</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="list">
                    <tr>
                    <th scope="row">
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">1</span>
                        </div>
                        </div>
                    </th>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">1920118001</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Ananta</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">0896229173016</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Bandung</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-success">Detail Kelas</a>
                    </td>
                    </tr>
                    <tr>
                    <tr>
                    <th scope="row">
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">2</span>
                        </div>
                        </div>
                    </th>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">1920118002</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Camelia</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">0816572173901</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Bandung</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-neutral">Detail Kelas</a>
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">3</span>
                        </div>
                        </div>
                    </th>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">1920118003</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Davin</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">0831329173096</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Bandung</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-neutral">Detail Kelas</a>
                    </td>
                    </tr>
                    <tr>
                    <tr>
                    <th scope="row">
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">4</span>
                        </div>
                        </div>
                    </th>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">1920118004</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Hizna</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">0897629172136</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Bandung</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-neutral">Detail Kelas</a>
                    </td>
                    </tr>
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
