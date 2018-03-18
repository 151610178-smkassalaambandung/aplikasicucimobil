<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    //
    protected $table = 'karyawans';
	protected $primaryKeys = 'id';
      protected $fillable = ['nama','status','email','no_hp','alamat'];
    protected $visible =  ['nama','status','email','no_hp','alamat'];
    public  $timestamps = true;

    	
}
