@extends('layouts.template.main')
{{-- @dd($permissions) --}}
@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Mata Pelajaran</th>
                <th>keterangan</th>
                <th>Jam Izin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $key => $permission)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $permission->user_nis }}</td>
                <td>{{ $permission->detailuser->name }}</td>
                <td>{{ $permission->detailmatpel->nama_matpel }}</td>
                <td>{{ $permission->keterangan }}</td>
                <td>{{ $permission->jam_izin }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/dashboard-admin" class="btn btn-success text-decoration-none mt-3">Kembali</a>
@endsection