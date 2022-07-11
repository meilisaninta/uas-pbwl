@extends('layouts.app')

@section('content')
<div class="container w-50">
    <div class="card p-5" style="background-color: #9966ff;">
        <h3 class="mb-4">Edit Data Pakaian</h3>
        <form method="post" action="{{ url('pakaian/update') }}/{{ $data->id_pakaian }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Pakaian</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Jenis Pakaian" name="jenis_pakaian" value="{{ $data->jenis_pakaian }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Harga Perkilo</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Rp." name="harga_perkilo" value="{{ $data->harga_perkilo }}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Simpan</button>
        </form>
    </div>

</div>
@endsection