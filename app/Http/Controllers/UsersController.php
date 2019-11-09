<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::all();
        return view('users.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Users::all();
        return view('users.create',['users'=>$users]);
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this ->validate ($request,
            [
                'name' => 'required|unique:Users,name|min:3|max:100',
                'email' => 'required|unique:Users,email|min:3|max:100',
                'password' => 'required|unique:Users,password|min:3|max:100',
                'role' => 'required|unique:Users,role|min:3|max:100',
                'sex' => 'required|unique:Users, sex|min:3|max:100',
                'phone' => 'required|unique:Users, phone|min:3|max:100',
                'image' => 'required|unique:Users,image|min:3|max:500',
                'address' => 'required|unique:Users,address|min:3|max:500',



            ],
            [
                'name.required'=>'ban chưa nhập tên',
                'name.unique'=>'Tên đã tồn tại',
                'name.min'=>'tên phải có độ dài từ 3 đến 100 ký tự',
                'name.max'=>'tên phải có độ dài từ 3 đến 100 ký tự',

                'email.required'=>'ban chưa nhập email',
                'email.unique'=>'Email đã tồn tại',
                'email.min'=>'tên phải có độ dài từ 3 đến 100 ký tự',
                'email.max'=>'tên phải có độ dài từ 3 đến 100 ký tự',

                'password.required'=>'ban chưa nhập password',
                'password.min'=>'tên phải có độ dài từ 3 đến 100 ký tự',
                'password.max'=>'tên phải có độ dài từ 3 đến 100 ký tự',

                'role.required'=>'ban chưa nhập vai trò',
                'role.min'=>'tên phải có độ dài từ 3 đến 100 ký tự',
                'role.max'=>'tên phải có độ dài từ 3 đến 100 ký tự',

                'sex.required'=>'ban chưa nhập giới tính',
                'sex.min'=>'tên phải có độ dài từ 3 đến 100 ký tự',
                'sex.max'=>'tên phải có độ dài từ 3 đến 100 ký tự',

                'phone.required'=>'ban chưa số điện thoại',
                'phone.unique'=>'Số điênh thoại đã tồn tại',
                'phone.min'=>'tên phải có độ dài từ 3 đến 100 ký tự',
                'phone.max'=>'tên phải có độ dài từ 3 đến 100 ký tự',

                'address.required'=>'ban chưa nhập địa chỉ',
                'address.unique'=>'Địa chỉ đã tồn tại',
                'address.min'=>'tên phải có độ dài từ 3 đến 100 ký tự',
                'address.max'=>'tên phải có độ dài từ 3 đến 100 ký tự',
            ]);
        $users= new Users;
        $users->name= $request->name;
        $users->email= $request->email;
        $users->password= $request->password;
        $users->role= $request->role;
        $users->sex= $request->sex;
        $users->phone= $request->phone;
        $users->address= $request->address;
        $users-> save();

        return redirect()->route('users.create')->with('thongbao','Thêm thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diadiem = DiaDiem::find($id);
        $diadiem->delete();
        return redirect()->route('location.index')->with('thongbao','Xóa thành công');
    }
}
