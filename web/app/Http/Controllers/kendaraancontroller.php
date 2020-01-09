<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kendaraan;

class kendaraancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kendaraan::paginate(10);
        return view("kendaraan.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kendaraan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|max:10',
            'nama' => 'required|max:100',
            'type' => 'required|max:10',
            'seat' => 'required|max:3',
            'harga' => 'required|max:20'
        ]);
        $kendaraan = new kendaraan;
        $kendaraan->kode = $request->kode;
        $kendaraan->nama = $request->nama;
        $kendaraan->type = $request->type;
        $kendaraan->seat = $request->seat;
        $kendaraan->harga = $request->harga;
        $kendaraan->save();

        $request->session()->flash("info","Berhasil Tambah Data Kendaraan");
        return redirect()->route("kendaraan.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = kendaraan::find($id);
        return view("kendaraan.form",compact("data"));
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
        $request->validate([
            'kode' => 'required|max:10',
            'nama' => 'required|max:100',
            'type' => 'required|max:10',
            'seat' => 'required|max:3',
            'harga' => 'required|max:20'
        ]);

    kendaraan::where("id",$id)
            ->update($request->except(["_token","_method"]));

    $request->session()->flash("info","Berhasil Rubah Data Kendaraan");

    return redirect()->route("kendaraan.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kendaraan::destroy($id);

        return redirect()->route("kendaraan.index")
            ->with("info","Berhasil Hapus Data Kendaraan");
    }
}
