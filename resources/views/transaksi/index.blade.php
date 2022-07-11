@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('/transaksi/create') }}" class="btn btn-warning float-end mb-3">Tambah Data Transaksi</a>
    <table class="table">
        <thead class="table table-success">
            <tr class="text-center">
                <th>ID</th>
                <th width="200px">Nama Pelanggan</th>
                <th>Jenis Pakaian</th>
                <th>Berat (Kg)</th>
                <th>Total (Rp)</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach ($data as $transaksi)
            <tr class="text-center">
                <td>{{ $transaksi->id_transaksi }}</td>
                <td>{{ $transaksi->nama_pelanggan }}</td>
                <td>{{ $transaksi->jenis_pakaian }}</td>
                <td>{{ $transaksi->berat_transaksi }} Kg</td>
                <td>Rp. {{ $transaksi->berat_transaksi * $transaksi->harga_perkilo }}</td>
                <td width="100px"><a href="{{ url('transaksi/edit') }}/{{ $transaksi->id_transaksi }}" class="btn btn-primary">Edit</a></td>
                <td width="100px"><a href="{{ url('transaksi/destroy') }}/{{ $transaksi->id_transaksi }}" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Transaksi Ini ?');">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection