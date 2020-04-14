@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main_title">
            <h2>Hasil dari survey anda</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
        </div>
        <div class="row">
                
            <div class="col-md-12">
                <div class="row col-md-6">
                    <div class="form-group col-md-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $deteksi->name }}" placeholder="Your Name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jeniskelamin" id="jeniskelamin" value="{{ $deteksi->jk == "L" ? "Laki-Laki" : "Perempuan" }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="provinsi">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ $deteksi->provinsi }}" placeholder="Provinsi">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="umur">Umur</label>
                        <input type="text" class="form-control" id="umur" name="umur" value="{{ $deteksi->umur }}" placeholder="Provinsi">
                    </div>
                </div>
                <div class="row col-md-6">
                    <div class="form-group col-md-12">
                        <label for="kota">Kota/Kab.</label>
                        <input type="text" class="form-control" id="kota" name="kota" value="{{ $deteksi->kota }}" placeholder="Kota">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $deteksi->kecamatan }}" placeholder="Kecamatan">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="desa">Desa/Kel.</label>
                        <input type="text" class="form-control" id="desa" name="desa" value="{{ $deteksi->desa }}" placeholder="Desa">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="jalan">Jalan & No.</label>
                        <input type="text" class="form-control" id="jalan" name="jalan" value="{{ $deteksi->jalan }}" placeholder="Jl. Raya, No. 00">
                    </div>
                </div>
                @if ($deteksi->jml_ya <= 7)
                    RESIKO RENDAH
                @elseif ($deteksi->jml_ya <= 14)
                    RESIKO SEDANG
                @elseif ($deteksi->jml_ya <= 21)
                    RESIKO TINGGI
                @endif
            </div>
            <a href="{{ url('/') }}" class="btn btn-secondary">back</a>
        </div>
    </div>
@endsection