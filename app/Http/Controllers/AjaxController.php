<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Toko;

class AjaxController extends Controller
{
    public function kota(Request $request)
    {
        return view('ajax.kota',[
	    'kotas' => Kota::where('prov_id', $request->id)->get(),
	]);
    }

    public function kecamatan(Request $request)
    {
        return view('ajax.kecamatan',[
	    'kecamatans' => Kecamatan::where('city_id', $request->id)->get(),
	]);
    }

    public function kelurahan(Request $request)
    {
        return view('ajax.kelurahan',[
	    'kelurahans' => Kelurahan::where('dis_id', $request->id)->get(),
	]);
    }

    public function toko(Request $request)
    {
        return view('ajax.toko',[
	    'toko' => Toko::where('barcode', $request->id)->first(),
	]);
    }

    public function kunjungan(Request $request)
    {
        return view('ajax.kunjungan',[
	    'status' => $request->status,
	    'latitude' => $request->latitude,
	    'longitude' => $request->longitude,
	    'accuracy' => $request->accuracy,
	]);
    }
}
