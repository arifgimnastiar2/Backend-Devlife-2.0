{{-- @dd($attedence) --}}
@extends('layouts.template.main')

@section('content')
<table class="table table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Name</th>
            <th>Longitude</th>
            <th>latitude</th>
            <th>base64</th>
            <th>jam_masuk</th>
            <th>jam_keluar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($attedence as $key => $attend)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $attend->user_nis }}</td>
            <td>{{ $attend->user->name }}</td>
            <td>{{ $attend->latitude }}</td>
            <td>{{ $attend->longitude }}</td>
            <td><img src="{{ $attend->base64 }}" alt="{{ $attend->base64 }}"/></td>
            <td>{{ $attend->jam_masuk }}</td>
            <td>{{ $attend->jam_keluar }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/dashboard-admin" class="btn btn-success text-decoration-none mt-3">Kembali</a>
@endsection