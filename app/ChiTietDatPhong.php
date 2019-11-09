<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDatPhong extends Model
{
     protected $table = "chi_tiet_dat_phong";
    public function DatPhong()
    {
    	return $this->hasManyThrough('App\DatPhong','datphong_id','id');
    }

     public function Phong()
    {
    	return $this->hasManyThrough('App\Phong','App\DatPhong','phong_id','datphong_id','id');
    }
    public function Users()
    {
    	return $this->belongTo('App\Users','users_id','id');
    }
}
