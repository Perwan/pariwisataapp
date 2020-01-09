<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelanggan;
class pelanggancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = pelanggan::paginate(10);
        return view("pelanggan.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pelanggan.form');
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
            'nonik' => 'required|max:20',
            'alamat' => 'required|max:100',
            'jenis' => 'required|max:10',
            'telepon' => 'required|max:20'
        ]);
        $pelangggan = new pelanggan;
        $pelangggan->kode = $request->kode;
        $pelangggan->nama = $request->nama;
        $pelangggan->nonik = $request->nonik;
        $pelangggan->alamat = $request->alamat;
        $pelangggan->jenis = $request->jenis;
        $pelangggan->telepon = $request->telepon;
        $pelangggan->save();

        $request->session()->flash("info","Berhasil Tambah Data Pelanggan");
        return redirect()->route("pelanggan.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = pelanggan::find($id);
        return view("pelanggan.form",compact("data"));
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
            'nonik' => 'required|max:20',
            'alamat' => 'required|max:100',
            'jenis' => 'required|max:10',
            'telepon' => 'required|max:20'
        ]);

    pelanggan::where("id",$id)
            ->update($request->except(["_token","_method"]));

    $request->session()->flash("info","Berhasil Rubah Data Pelanggan");

    return redirect()->route("pelanggan.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pelanggan::destroy($id);

        return redirect()->route("pelanggan.index")
            ->with("info","Berhasil Hapus Data Pelanggan");
    }
}
