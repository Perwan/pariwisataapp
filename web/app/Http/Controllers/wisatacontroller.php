<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wisata;

class wisatacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = wisata::paginate(10);
        return view("wisata.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wisata.form');
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
            'lokasi' => 'required|max:100'
        ]);
        $wisata = new wisata;
        $wisata->kode = $request->kode;
        $wisata->nama = $request->nama;
        $wisata->lokasi = $request->lokasi;
        $wisata->save();

        $request->session()->flash("info","Berhasil Tambah Data Wisata");
        return redirect()->route("wisata.index");

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = wisata::find($id);
        return view("wisata.form",compact("data"));
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
            'lokasi' => 'required|max:100'
        ]);

    wisata::where("id",$id)
            ->update($request->except(["_token","_method"]));

    $request->session()->flash("info","Berhasil Rubah Data Wisata");

    return redirect()->route("wisata.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        wisata::destroy($id);

        return redirect()->route("wisata.index")
            ->with("info","Berhasil Hapus Data Wisata");
    }
}
