<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaNghi extends Model
{
	protected $table = 'nhanghi';

	protected $fillable = ['tennhanghi', 'diachi', 'sophong','giomocua','ghichu'];


     public function DiaDiem()
    {
    	return $this->hasMany('App\DiaDiem','diadiem_id','id');
    }
}
