@extends('layouts.template.app')

@section('content')
<div class="row">
    <div class="col-xl-8">
        <div class="card bg-default">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                <div class="col">
                    <h6 class="text-light text-uppercase ls-1 mb-1">Rekapan Data Absensi (per Semester)</h6>
                    <h5 class="h3 text-white mb-0">Total Absensi</h5>
                </div>
                <div class="col">
                    <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                        <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                        <span class="d-none d-md-block">Bulan</span>
                        <span class="d-md-none">B</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                        <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                        <span class="d-none d-md-block">Minggu</span>
                        <span class="d-md-none">M</span>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        
            <div class="card-body">
            <!-- Chart -->
            <div class="chart">
            <!-- Chart wrapper -->
            <canvas id="chart-sales-dark" class="chart-canvas"></canvas>
            </div>
        </div>
        </div>
    </div>
    
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase text-muted ls-1 mb-1">Rekapan Data Absensi (per Minggu)</h6>
                        <h5 class="h3 mb-0">Total Absensi</h5>
                    </div>
                </div>
            </div>
            
            <div class="card-body">
                <!-- Chart -->
                <div class="chart">
                <canvas id="chart-bars" class="chart-canvas"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
      
<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Tabel Absensi</h3>
                    </div>
                    
                    <div class="col text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Lihat Semua</a>
                    </div>
                </div>
            </div>
            
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam Masuk</th>
                        <th scope="col">Jam Keluar</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <th scope="row">
                                1
                            </th>
                            
                            <td>
                                Senin, 03-01-2022
                            </td>
                            
                            <td>
                                06:45:00
                            </td>
                            
                            <td>
                                <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            
                            <td>
                                Selasa, 04-01-2022
                            </td>
                            
                            <td>
                                06:45:00
                            </td>
                            
                            <td>
                                <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                            </td>
                        </tr>
                        
                        <tr>
                            <th scope="row">
                                3
                            </th>
                            
                            <td>
                                Rabu, 05-01-2022
                            </td>
                            
                            <td>
                                06:45:00
                            </td>
                            
                            <td>
                                <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                            </td>
                        </tr>
                        <tr>
                        <th scope="row">
                            4
                        </th>
                        <td>
                            Kamis, 06-01-2022
                        </td>
                        <td>
                            06:45:00
                        </td>
                        <td>
                            <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">
                            5
                        </th>
                        <td>
                            Jumat, 07-01-2022
                        </td>
                        <td>
                            06:45:00
                        </td>
                        <td>
                            <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Mata Pelajaran</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Lihat Semua</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Hadir</th>
                    <th scope="col">Absen</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      Matematika
                    </th>
                    <td>
                      8
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">0</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Bahasa Indonesia
                    </th>
                    <td>
                      7
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">1</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Bahasa Inggris
                    </th>
                    <td>
                      8
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">0</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Fisika
                    </th>
                    <td>
                      5
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">3</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Kimia
                    </th>
                    <td>
                      5
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">3</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection