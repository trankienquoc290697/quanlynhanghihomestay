<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TheLoai;

class theloaiController extends Controller
{
    public function getdanhsach(){
    	$theloai = TheLoai::all();
    	return view('theloai.danhsach',['theloai'=>$theloai]);
    }

     public function getthem(){
     	return view('theloai.them');
     }	

     public function postthem(Request $request){
  		$this ->validate ($request,
  			[
  				'Ten' => 'required|unique:TheLoai,Ten|min:3|max:100'


  			],
  			[
  				'Ten.required'=>'ban chưa nhập tên thể loại',
  				'Ten.unique'=>'Tên thể loại đã tồn tại',
  				'Ten.min'=>'tên phải có độ dài từ 3 đến 100 ký tự',
  				'Ten.max'=>'tên phải có độ dài từ 3 đến 100 ký tự',
  			]);
  		$theloai= new TheLoai;
  		$theloai->Ten= $request->Ten;
  		$theloai->TenKhongDau=changeTitle($request->Ten);
  		echo changeTitle($request->Ten);
  		$theloai-> save();

  		return redirect ('admin1/theloai/them')->with('thongbao','Thêm thành công');

    }

     public function getsua($id){
     	$theloai= TheLoai:: find($id);
     	return view('admin1.theloai.sua', ['theloai' => $theloai]); 
     }
    	
    public function postsua(request $request,$id){
    	$theloai= TheLoai:: find($id);
    	$this-> validate ($request,
    		[
    			'Ten'=>
    				'required|unique:TheLoai,Ten|min:3|max:100'

    		],

    		[
    			'Ten.required'=>'ban chưa nhập tên thể loại',
  				'Ten.unique'=>'Tên thể loại đã tồn tại',
  				'Ten.min'=>'tên phải có độ dài từ 3 đến 100 ký tự',
  			]
  		);
		$theloai->Ten= $request->Ten;
  		$theloai->TenKhongDau=changeTitle($request->Ten);
  		$theloai-> save();

  		return redirect ('admin1/theloai/sua/'.$id)->with('thongbao','Sửa thành công');

    	
    }

    public function getxoa($id)
    {
     	$theloai = TheLoai::find($id);
     	$theloai->delete();
     	return redirect ('admin1/theloai/danhsach')->with('thongbao','Xóa thành công');
     }
	
}
