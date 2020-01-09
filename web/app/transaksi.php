<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table="tbltransaksi";

    protected $fillable = ['pelanggan_id','tanggal','wisata_id','kendaraan_id','jlhpenumpang',
                            'jlhhari','total','image'];


    public function pelanggan()
    {
     return $this->belongsTo('App\pelanggan');
    }
    public function wisata()
    {
     return $this->belongsTo('App\wisata');
    }
    public function kendaraan()
    {
     return $this->belongsTo('App\kendaraan');
    }
                            
}
