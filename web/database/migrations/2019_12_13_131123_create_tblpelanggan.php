<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpelanggan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("kode");
            $table->string("nama");
            $table->string("nonik");
            $table->string("alamat");
            $table->string("jenis");
            $table->string("telepon");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblpelanggan');
    }
}
