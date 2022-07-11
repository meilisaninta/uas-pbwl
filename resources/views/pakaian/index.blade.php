@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('/pakaian/create') }}" class="btn btn-warning float-end mb-3">Tambah Data Pakaian</a>
    <table class="table">
        <thead class="table table-success">
            <tr class="text-center">
                <th>ID</th>
                <th>Jenis Pakaian</th>
                <th>Harga Perkilo</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach ($data as $pakaian)
            <tr class="text-center">
                <td>{{ $pakaian->id_pakaian }}</td>
                <td>{{ $pakaian->jenis_pakaian }}</td>
                <td>Rp. {{ $pakaian->harga_perkilo }}</td>
                <td width="100px"><a href="{{ url('pakaian/edit') }}/{{ $pakaian->id_pakaian }}" class="btn btn-primary">Edit</a></td>
                <td width="100px"><a href="{{ url('pakaian/destroy') }}/{{ $pakaian->id_pakaian }}" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Pakaian Ini ?');">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection