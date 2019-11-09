<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TienNghi extends Model
{
	  protected $table = 'tiennghi';

    protected $fillable = ['tentiennghi'];

     public function Phong()
    {
    	return $this->belongTo('App\Phong','phong_id','id');
    }
}
