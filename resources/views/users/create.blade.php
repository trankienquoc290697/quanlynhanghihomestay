@extends('layout1.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Phòng
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">


               @if(count($errors)>0)
               <div class=" alert alert-danger">

                @foreach ($errors->all() as $err)
                {{$err}}<br>

                @endforeach

            </div>
            @endif

            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif

            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Tên</label>
                        <input class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" >
                        <div class="form-group"><br>
                            <label>Password</label>
                            <input class="form-control" name="password" >
                        </div>
                        <div class="form-group"><br>
                            <label>Vai trò</label>
                            <input class="form-control" name="role" >
                        </div>
                        <div class="form-group"><br>
                            <label>Giới tính</label><br>
                            <input type="radio" name="sex" value="nam"> Nam
                            <input type="radio" name="sex" value="nu"> Nữ
                        </div>
                        <div class="form-group"><br>
                            <label>SĐT</label>
                            <input class="form-control" name="phone" >
                        </div>
                        <div class="form-group"><br>
                            <label>Hình ảnh</label>
                            <input class="form-control" name="image" >
                        </div>
                        <div class="form-group"><br>
                            <label>Địa chỉ</label>
                            <input class="form-control" name="address" >
                        </div>

                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

        @endsection