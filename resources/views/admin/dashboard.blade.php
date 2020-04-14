@extends('layouts.admin')

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hai, {{ Auth::user()->name }}</h4>
                        </div>
                        <div class="card-body">
                            Selamat datang kembali, Tuan {{ Auth::user()->name }}
                            <hr>
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Jumlah Masyarakat yang sudah melakukan test</h6>
                                    <h5 class="card-title">{{ count($deteksis) }}</h5>
                                </div>
                            </div>

                            <table class="table table-bordered" id="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($deteksis as $d)
                                    <tr>
                                        <td>{{ $d->name }}</td>
                                        <td>{{ $d->jk }}</td>
                                        <td>{{ $d->umur }}</td>
                                        <td>{{ $d->kecamatan. ', '.$d->kota. ', '.$d->provinsi. ', '.$d->jalan }}</td>
                                        <td>
                                            <button class="btn btn-secondary" data-toggle="modal" data-target="#detail"
                                                data-id="{{ $d->id }}"
                                                data-name="{{ $d->name }}"
                                                data-jk="@if($d->jk == 'L') Laki-Laki @elseif($d->jk=='P') Perempuan @endif"
                                                data-tanggaL="{{ $d->tanggal_lahir }}"
                                                data-umur="{{ $d->umur }}"
                                                data-provinsi="{{ $d->provinsi }}"
                                                data-kota="{{ $d->kota }}"
                                                data-kecamatan="{{ $d->kecamatan }}"
                                                data-desa="{{ $d->desa }}"
                                                data-jalan="{{ $d->jalan }}"
                                                data-jmlya="@if($d->jml_ya>=0 && $d->jml_ya<=7) Resiko Rendah @elseif($d->jml_ya>=8 && $d->jml_ya<=14) Resiko Sedang @elseif($d->jml_ya>=15 && $d->jml_ya<=21) Resiko Tinggi @endif">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<!-- Modal -->
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle" style="margin-top: 7px;">View Detail</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -22px;">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12 ml-4">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td id="name"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td id="jk"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td id="tanggal"></td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td>:</td>
                            <td id="umur"></td>
                        </tr>
                        <tr>
                            <td>Provinsi</td>
                            <td>:</td>
                            <td id="provinsi"></td>
                        </tr>
                        <tr>
                            <td>kota</td>
                            <td>:</td>
                            <td id="kota"></td>
                        </tr>
                        <tr>
                            <td>kecamatan</td>
                            <td>:</td>
                            <td id="kecamatan"></td>
                        </tr>
                        <tr>
                            <td>desa</td>
                            <td>:</td>
                            <td id="desa"></td>
                        </tr>
                        <tr>
                            <td>jalan</td>
                            <td>:</td>
                            <td id="jalan"></td>
                        </tr>
                        <tr>
                            <td>Hasil</td>
                            <td>:</td>
                            <td id="jmlya"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

@endsection


@section('js')
    <script>
        $(function () {
            $("#table").DataTable();

            $('#detail').on('show.bs.modal', function(e){
                $(this).find('#name').text($(e.relatedTarget).data('name'));
                $(this).find('#jk').text($(e.relatedTarget).data('jk'));
                $(this).find('#tanggal').text($(e.relatedTarget).data('tanggal'));
                $(this).find('#umur').text($(e.relatedTarget).data('umur'));
                $(this).find('#provinsi').text($(e.relatedTarget).data('provinsi'));
                $(this).find('#kota').text($(e.relatedTarget).data('kota'));
                $(this).find('#kecamatan').text($(e.relatedTarget).data('kecamatan'));
                $(this).find('#desa').text($(e.relatedTarget).data('desa'));
                $(this).find('#jalan').text($(e.relatedTarget).data('jalan'));
                $(this).find('#jmlya').text($(e.relatedTarget).data('jmlya'));
            });
        });
    </script>
@endsection