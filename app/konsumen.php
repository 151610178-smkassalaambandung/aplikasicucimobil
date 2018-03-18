<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class konsumen extends Model
{
    //
    protected $table = 'konsumens';
	protected $primaryKeys = 'id';
      protected $fillable = ['nama','jk','alamat','no_hp'];
    protected $visible =  ['nama','jk','alamat','no_hp'];
    public  $timestamps = true;


    public function mobil()
    {
    	return $this->hasMany('App\mobil','konsumen_id');
    }
}
