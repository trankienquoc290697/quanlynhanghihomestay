<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaDiem extends Model
{

	protected $table = 'diadiem';

	protected $fillable = ['quocgia', 'quanhuyen', 'thanhpho'];

    public function NhaNghi()
    {
    	return $this->hasMany('App\NhaNghi','nhanghi_id','id');
    }
}
