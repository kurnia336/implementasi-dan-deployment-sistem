<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Provinsi;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.data.body',[
	    'customers' => Customer::all()
	]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create1()
    {
        return view('customer.tambah-1.body',[
	    'provinsis' => Provinsi::all()
	]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create2()
    {
        return view('customer.tambah-2.body',[
	    'provinsis' => Provinsi::all()
	]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        $validatedData = $request->validate([
	    'name' => 'required|max:100',
	    'address' => 'required|max:100',
	    'province' => 'required',
	    'city' => 'required',
	    'district' => 'required',
	    'subdistrict' => 'required',
	    'photo' => 'required'
	]);

	$customer = Customer::create([
    	    'nama' => $request->name,
	    'alamat' => $request->address,
	    'foto' => $request->photo,
	    'id_kel' => $request->subdistrict
	]);

	return redirect('/customer/data')->with('success', 'Customer baru telah ditambahkan!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        $validatedData = $request->validate([
	    'name' => 'required|max:100',
	    'address' => 'required|max:100',
	    'province' => 'required',
	    'city' => 'required',
	    'district' => 'required',
	    'subdistrict' => 'required',
	    'photo' => 'required'
	]);
	
	$file = uniqid();
	$file = "customer-images/".$file.".png";

	$base64_code = explode(',', $request->photo);
	$base64_code = end($base64_code);
	$fp = fopen('storage/' . $file, "w+");

	fwrite($fp, base64_decode($base64_code));

	$customer = Customer::create([
    	    'nama' => $request->name,
	    'alamat' => $request->address,
	    'file_path' => $file,
	    'id_kel' => $request->subdistrict
	]);

	return redirect('/customer/data')->with('success', 'Customer baru telah ditambahkan!');
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
}
