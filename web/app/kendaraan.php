<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    //
    protected $table="tbltransportasi";
    protected $fillable = ['kode','nama','type','seat','harga'];
}
