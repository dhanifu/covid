<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deteksi;

class DeteksiController extends Controller
{

	public function dashboard()
	{
		$deteksis = Deteksi::orderBy('created_at', 'DESC')->get();

		return view('admin.dasboard', compact('deteksis'));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'jeniskelamin' => 'required',
            'tanggal_lahir' => 'required', 'bulan_lahir' => 'required', 'tahun_lahir' => 'required',
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'kecamatan' => 'required|string',
            'desa' => 'required|string',
            'jalan' => 'required|string|max:250',
            'no1' => 'required', 'no2' => 'required', 'no3' => 'required', 'no4' => 'required', 
            'no5' => 'required', 'no6' => 'required', 'no7' => 'required', 'no8' => 'required', 
            'no9' => 'required', 'no10' => 'required', 'no11' => 'required', 'no12' => 'required', 
            'no13' => 'required', 'no14' => 'required', 'no15' => 'required', 'no16' => 'required', 
            'no17' => 'required', 'no18' => 'required', 'no19' => 'required', 'no20' => 'required', 'no21' => 'required'
        ]);

        $uniqID = uniqid().date('dm');
        $jml_ya = $request->jml_ya;
        $tanggal_lahir = $request->tahun_lahir . '-' . $request->bulan_lahir . '-' . $request->tanggal_lahir;
        
        list($year,$month,$day) = explode('-', $tanggal_lahir);
        $year_diff = date("Y") - $year;
        $month_diff = date("m") - $month;
        $day_diff = date("d") - $day;

        if ($month_diff < 0) $year_diff--;
            elseif (($month_diff==0) && ($day_diff<0)) $year_diff--;
        
        $umur = $year_diff;

        $no1 = $request->no1; $no2 = $request->no2; $no3 = $request->no3; 
        $no4 = $request->no4; $no5 = $request->no5; $no6 = $request->no6; 
        $no7 = $request->no7; $no8 = $request->no8; $no9 = $request->no9; 
        $no10 = $request->no10; $no11 = $request->no11; $no12 = $request->no12;
        $no13 = $request->no13; $no14 = $request->no14; $no15 = $request->no15; 
        $no16 = $request->no16; $no17 = $request->no17; $no18 = $request->no18; 
        $no19 = $request->no19; $no20 = $request->no20; $no21 = $request->no21;
        $total = $no1+$no2+$no3+$no4+$no5+$no6+$no7+$no8+$no9+$no10+$no11+$no12+$no13+$no14+$no15+$no16+$no17+$no18+$no19+$no20+$no21;

        $deteksi = Deteksi::create([
            'uniqid' => $uniqID,
            'name' => $request->name,
            'jk' => $request->jeniskelamin,
            'tanggal_lahir' => $tanggal_lahir,
            'umur' => $umur,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'jalan' => $request->jalan,
            'jml_ya' => $total
        ]);

        $id = Deteksi::select('uniqid')->where('uniqid', $deteksi['uniqid'])->get();
        $uniqid = substr($id, 12, 17);
        return redirect('result/'. $uniqid);

        // return back()->with('success', true);
    }

}
