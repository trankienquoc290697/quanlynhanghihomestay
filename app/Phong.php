<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    protected $table = 'phong';

    protected $fillable = ['tenphong', 'chieudai', 'chieurong','succhuatoida','ghichu','hinhanh','trangthai','dongia'];

     public function DatPhong()
    {
    	return $this->hasMany('App\DatPhong','datphong_id','id');
    }

     public function TienNghi()
    {
    	return $this->hasMany('App\TienNghi','tiennghi_id','id');
    }

     public function NhaNghi()
    {
    	return $this->hasMany('App\NhaNghi','nhanghi_id','id');
    }
}
