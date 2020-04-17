<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deteksi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pernyataan = array(
            '1' => 'Saya pergi keluar rumah.',
            'Saya menggunakan transportasi umum: online, angkot, bus, taksi, kereta api.',
            'Saya tidak memakai masker pada saat berkumpul dengan orang lain.',
            'Saya berjabat tangan dengan orang lain.',
            'Saya tidak membersihkan tangan dengan hand sanitizer/tissue basah sebelum pegang kemudi mobil/motor.',
            'Saya menyentuh benda / uang yang juga disentuh orang lain.',
            'Saya tidak berjarak 1,5 meter dengan orang lain ketika: belanja, bekerja, belajar, ibadah.',
            'Saya makan di luar rumah (warung / restaurant).',
            'Saya tidak minum hangat & cuci tangan dengan sabun setelah tiba di tujuan.',
            'Saya berada di wilayah kelurahan tempat pasien tertular.',
            'Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang gagang (handle) pintu masuk rumah.',
            'Saya tidak mencuci tangan dengan sabun setelah tiba di rumah.',
            'Saya tidak menyediakan: tissues basah/antiseptic, masker, sbun antiseptic bagi keluarga di rumah.',
            'Saya tidak segera merendam baju & celanan bekas pakai di luar rumah kedalam air panas/sabun.',
            'Saya tidak segera mandi keramas setelah saya tiba di rumah.',
            'Saya tidak mensosialisasikan checklist penilaian resiko pribadi ini kepada keluarga dirumah.',
            'Saya dalam sehari tidak kena cahaya matahari minimal 15 menit.',
            'Saya tidak jalan kaki / berolahraga minimal 30 menit.',
            'Saya jarang minum vitamin C & E dan kurang tidur.',
            'Usia saya diatas 60 tahun',
            'Saya mempunyai penyakit: jantung/diabetes/gangguan pernafasan kronik'
        );
        $bulan = array(
            '1'=>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );

        $deteksis = Deteksi::orderBy('created_at', 'DESC')->get();
        $deteksi = $deteksis->first();
        
        return view('home', compact('bulan', 'pernyataan', 'deteksi'));
    }

    public function result($uniqid)
    {
        $deteksis = Deteksi::where('uniqid',$uniqid)->get();
        $deteksi = $deteksis->first();

        return view('result', compact('uniqid', 'deteksi'));
    }

    public function notFound()
    {
        return "<script>document.location.href='/covid';</script>";
    }
}
