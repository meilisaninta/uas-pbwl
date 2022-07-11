@extends('layouts.app')

@section('content')
<div class="container w-50">
    <div class="card p-5" style="background-color: #9966ff;">
        <h3 class="mb-4">Edit Data Transaksi</h3>
        @foreach ($data as $transaksi)
        <form method="post" action="{{ url('transaksi/update') }}/{{ $transaksi->id_transaksi }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pelanggan</label>
                <div class="col-sm-8">
                    <select class="form-select" name="pelanggan_transaksi">
                        <option value="{{ $transaksi->pelanggan_transaksi }}">{{ $transaksi->nama_pelanggan }}</option>
                        @foreach ($pelanggans as $pelanggan)
                        <option value="{{ $pelanggan->id_pelanggan }}">{{ $pelanggan->nama_pelanggan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Pakaian</label>
                <div class="col-sm-8">
                    <select class="form-select" name="pakaian_transaksi">
                        <option value="{{ $transaksi->pakaian_transaksi }}">{{ $transaksi->jenis_pakaian }}</option>
                        @foreach ($pakaians as $pakaian)
                        <option value="{{ $pakaian->id_pakaian }}">{{ $pakaian->jenis_pakaian }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Berat (Kg)</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Berat (Kg)" name="berat_transaksi" value="{{ $transaksi->berat_transaksi }}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Simpan</button>
        </form>
        @endforeach
    </div>

</div>
@endsection