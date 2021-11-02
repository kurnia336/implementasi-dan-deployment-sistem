<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;
use PDF;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('geolocation.list-toko.body',[
	    'tokos' => Toko::all()
	]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('geolocation.input-titik-awal.body');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	$jumlah = Toko::count();
	if($jumlah == 0){
	    $barcode = "00000000";
	} else {
	    $barang = Toko::orderBy('barcode','desc')->first();
	    $barcode = $barang->barcode + 1;
	    $barcode = str_pad($barcode, 8, "0", STR_PAD_LEFT);
	}

	$validatedData = $request->validate([
	    'store_name' => 'required|max:50',
	    'latitude' => 'required',
	    'longitude' => 'required',
	    'accuracy' => 'required'
	]);

	$toko = Toko::create([
	    'barcode' => $barcode,
    	    'nama_toko' => $request->store_name,
	    'latitude' => $request->latitude,
	    'longitude' => $request->longitude,
	    'accuracy' => $request->accuracy
	]);

	return redirect('/geolocation/listtoko')->with('success', 'Data toko telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Print a single of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function print($id)
    {
	$pdf = PDF::loadView('print.barcode-toko', [
	    'id' => $id
	]);
	return $pdf->download('Toko.pdf');
    }

    /**
     * Display the barcode scanner.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function barcodeScanner()
    {
        return view('geolocation.titik-kunjungan.body');
    }
}
