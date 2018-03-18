<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    //
    protected $table = 'mobils';
	protected $primaryKeys = 'id';
     protected $fillable = ['nama','mk','nk','warna','plat_nomer','id_konsumen'];
    protected $visible = ['nama','mk','nk','warna','plat_nomer','id_konsumen'];
    public  $timestamps = true;

    public function konsumen()
	{
		return $this->belongsTo('App\konsumen','id_konsumen');
	}

	public function transaksi()
    {
    	return $this->hasMany('App\transaksi','mobil_id');
    }

}

