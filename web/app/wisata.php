<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{

    protected $table="tblwisata";
    protected $fillable = ['kode','nama','lokasi'];
}
