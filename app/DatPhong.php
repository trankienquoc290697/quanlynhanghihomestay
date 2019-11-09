<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatPhong extends Model
{
     protected $table = "datphong";
    public function Users()
    {
    	return $this->belongsTo('App\Users','users_id','id');
    }
    public function Phong()
    {
    	return $this->belongsTo('App\Phong','phong_id','id');
    }
     public function ChiTietDatPhong()
    {
    	return $this->belongsTo('App\SanPham','sanpham_id','id');
    }

    }
