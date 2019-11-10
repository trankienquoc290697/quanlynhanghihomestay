<?php

namespace App\Http\Controllers;
use App\NhaNghi;
use App\DiaDiem;
use App\Phong;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	  $nhanghi = NhaNghi::all();
    	  $diadiem = DiaDiem::all();
    	  $phong = Phong::all();
   
          return view('layout.index',['nhanghi'=>$nhanghi,'diadiem'=>$diadiem,'phong'=>$phong]);
    	
    }
}
