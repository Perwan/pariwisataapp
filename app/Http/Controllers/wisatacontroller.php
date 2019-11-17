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
        $data = wisata::all();
        return view('wisata.list',['data,$data']);
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
            'kodekendaraan' =>'required|max:20',
            'harga'=>'required|digits_between:4,6|numeric'
        ]);
        Menu::create($request->except("_token"));

        $request->session()->flash('info','Berhasil tambah data menu');

        return redirect()->route('wisata.index');
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

        return view('wisata.form',compact('data'));
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
<<<<<<< HEAD:app/Http/Controllers/wisatacontroller.php
        return view('wisata.index');
=======
        $request->validate([
            'kodekendaraan' =>'required|max:20',
            'harga'=>'required|digits_between:4,6|numeric'
        ]);

        Menu::where('id',$id)
            ->update($request->except(['_token','_method']));

        $request->session()->flash('info','Berhasil ubah data menu');

        return redirect()->route('wisata.index');
>>>>>>> 369cd9c4ab68a27c7cc0de412f0ec37b5508eb8d:web/web/app/Http/Controllers/wisatacontroller.php
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::destroy($id);
         return redirect()->route('wisata.index')
        ->with('info','Berhasil hapus data menu');
    }
}
