<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    //
    public function getTypeAttribute($type){
        $type = "";
        if($type=="m"){
            $typekendaraan = "minibus";
        }elseif($type=="b"){
            $typekendaraan = "bus";
        }
        return $typekendaraan;
    }

    protected $table="tblwisata";

    protected $fillable = ['kodekendaraan','type','seat','harga'];
}
