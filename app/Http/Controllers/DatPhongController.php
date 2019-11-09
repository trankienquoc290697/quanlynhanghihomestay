<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatPhong;
use App\Users;
use App\Phong;
use App\ChiTietDatPhong;
use App\NhaNghi;

class DatPhongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datphong = DatPhong::all();
         $nhanghi = NhaNghi::all();
        return view('datphong.index',compact('datphong','nhanghi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    public function show($id){
    	$datphong = DatPhong::findOrFail($id);
        $ctdp = ChiTietDatPhong::where('datphong_id',$id)->get();
        $usr = User::findOrFail($datphong->users_id);

        return view('datphong.detail',compact('datphong','ctdp','usr'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request,$id)
    {   
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diadiem = DiaDiem::findOrFail($id);
        $diadiem->delete();
        return redirect()->route('location.index')->with('thongbao','Đã xóa thành công!');
        // return redirect('admin/san-pham')->with('thongbao','Đã xóa thành công!');
    }
}
