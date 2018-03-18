<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    //
     protected $table = 'transaksi';
	protected $primaryKeys = 'id';
     protected $fillable = ['nama','kar','kon','merek','tanggal','jumlah','harga','total'];
    protected $visible = ['nama','kar','kon','merek','tanggal','jumlah','harga','total'];
    public  $timestamps = true;

     public function mobil(){
     	return $this->belongsTo('App\mobil','id_mobil');
     }
	
	
}
