@extends('layouts.app')

@section('content')
<section class="app_feature_area">
    <div class="container">
        <div class="main_title">
            <h2>Hasil dari survey anda</h2>
            <p>disini anda akan melihat hasil penilaiannya</p>
        </div>

        <center>
            @if( $deteksi->jml_ya <= 7 )
                <h1 class=" display-1 text-success">Resiko terkena Covid-19 Rendah</h1>
            @elseif ( $deteksi->jml_ya <= 14 )
                <h1 class=" display-1 text-warning">Resiko terkena Covid-19 Sedang</h1>
            @elseif ( $deteksi->jml_ya <= 21)
                <h1 class=" display-1 text-danger">Resiko terkena Covid-19 Tinggi</h1>
            @endif
        </center>

        <br><br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" class="form-control" readonly value="{{ $deteksi->name }}" style="text-align: center">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <input type="text" id="jk" name="jk" class="form-control" readonly value="{{ $deteksi->jk == 'L' ? 'Laki-Laki' : 'Perempuan' }}" style="text-align: center">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="umur">Usia</label>
                    <input type="text" id="umur" name="umur" class="form-control" readonly value="{{ $deteksi->umur }}" style="text-align: center">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" name="alamat" class="form-control" readonly style="text-align: center;" value="{{ $deteksi->jalan }},  Prov.{{ $deteksi->provinsi }}, Kab.{{ $deteksi->kota }}, Kec.{{ $deteksi->kecamatan }}, Des.{{ $deteksi->desa }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <center>
                    <button class="btn btn-primary" onclick="document.location.href='{{ route('home') }}'">Kembali</button>
                </center>
            </div>
        </div>
    </div>
</section>
@endsection