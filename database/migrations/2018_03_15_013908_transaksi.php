<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transaksi', function (Blueprint $table) {
        $table->increments('id');
             $table->string('tanggal');
            $table->integer('harga');
            $table->integer('total');
            $table->integer('id_mobil')->unsigned();
            $table->foreign('id_mobil')->references('id')->on('mobils')->onUpdate('cascade')->onDelete('cascade');
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
        //
    }
}
