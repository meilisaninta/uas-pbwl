@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('/pelanggan/create') }}" class="btn btn-warning float-end mb-3">Tambah Data Pelanggan</a>
    <table class="table">
        <thead class="table table-success">
            <tr class="text-center">
                <th>ID</th>
                <th width="200px">Nama Pelanggan</th>
                <th>Handphone</th>
                <th width="300px">Alamat</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach ($data as $pelanggan)
            <tr class="text-center">
                <td>{{ $pelanggan->id_pelanggan }}</td>
                <td>{{ $pelanggan->nama_pelanggan }}</td>
                <td>{{ $pelanggan->hp_pelanggan }}</td>
                <td>{{ $pelanggan->alamat_pelanggan }}</td>
                <td width="100px"><a href="{{ url('pelanggan/edit') }}/{{ $pelanggan->id_pelanggan }}" class="btn btn-primary">Edit</a></td>
                <td width="100px"><a href="{{ url('pelanggan/destroy') }}/{{ $pelanggan->id_pelanggan }}" class="btn btn-danger" onclick="return confirm('Ingin Menghapus pelanggan Ini ?');">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection