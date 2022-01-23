@extends('layouts.template.main')

@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tables as $key => $table)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $table->nis }}</td>
                <td>{{ $table->name }}</td>
                <td>{{ $table->kelas }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/dashboard-admin" class="btn btn-success text-decoration-none mt-3">Kembali</a>
@endsection