@extends('layouts.app')

@section('content')
<div class="container w-50">
    <div class="card p-5" style="background-color: #9966ff;">
        <h3 class="mb-4">Tambah Data Pelanggan</h3>
        <form method="post" action="{{ url('pelanggan/store') }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Nama Pelanggan" name="nama_pelanggan" value="{{ old('nama_pelanggan') }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Handphone</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Handphone" name="hp_pelanggan" value="{{ old('hp_pelanggan') }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat_pelanggan" value="{{ old('alamat_pelanggan') }}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Tambah</button>
        </form>
    </div>

</div>
@endsection