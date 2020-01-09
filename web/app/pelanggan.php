<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $table="tblpelanggan";
    protected $fillable = ['kode','nama','nonik','alamat','jenis','telepon'];
}
