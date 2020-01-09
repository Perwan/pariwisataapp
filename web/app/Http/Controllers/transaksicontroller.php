<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use App\pelanggan;
use App\wisata;
use App\kendaraan;
class transaksicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = transaksi::paginate(10);
        return view("transaksi.list",compact("data"));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pelanggan = pelanggan::all();
        $wisata = wisata::all();
        $kendaraan = kendaraan::all();

       
        return view('transaksi.form',compact("pelanggan","wisata","kendaraan"));
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
            "tanggal" => "required",
            "jlhpenumpang" => "required",
            "jlhhari" => "required",
            "total" => "required",
            
        ]);
        $transaksi = new transaksi;
        $transaksi->pelanggan_id = $request->pelanggan_id;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->wisata_id = $request->wisata_id;
        $transaksi->kendaraan_id = $request->kendaraan_id;
        $transaksi->jlhpenumpang = $request->jlhpenumpang;
        $transaksi->jlhhari = $request->jlhhari;
        $transaksi->total = $request->total;
   
          if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/resi/', $filename);
            $transaksi->image = $filename;
        }else {
            return $request;
            $transaksi->image = '';
        }
        
        $transaksi->save();

        $request->session()->flash("info","Berhasil Tambah Data Transaksi");
        return redirect()->route("transaksi.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = transaksi::find($id);
        $pelanggan = pelanggan::all();
        $wisata = wisata::all();
        $kendaraan = kendaraan::all();
        return view("transaksi.form",compact("data","pelanggan","wisata","kendaraan"));
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
            "tanggal" => "required",
            "jlhpenumpang" => "required",
            "jlhhari" => "required",
            "total" => "required",
        ]);

    transaksi::where("id",$id)
            ->update($request->except(["_token","_method"]));

    $request->session()->flash("info","Berhasil Rubah Data Transaksi");

    return redirect()->route("transaksi.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        transaksi::destroy($id);

        return redirect()->route("transaksi.index")
            ->with("info","Berhasil Hapus Data Transaksi");
    }
    public function detail($id){
        $data = transaksi::find($id);
       

        return view("transaksi.detail",compact("data"));
    }
    public function selesai($id){
        $data = transaksi::find($id)
              ->update(['status' => 1]);

              return redirect()->route("transaksi.index");
    }

   
    
}
