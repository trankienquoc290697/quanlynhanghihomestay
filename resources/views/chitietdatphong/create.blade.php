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

                    <form action="{{ route('location.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>Tên phòng</label>
                                <input class="form-control" name="tennhanghi" placeholder="Nhập tên nhà nghỉ" />
                            </div>
                             <div class="form-group">
                                <label>Chiều dài</label>
                                <input class="form-control" name="diachi" placeholder="Nhập địa chỉ" />
                                 <div class="form-group"><br>
                                <label>Chiều rộng</label>
                                <input class="form-control" name="sophong" placeholder="Nhập số phòng" />
                            </div>
                             <div class="form-group"><br>
                                <label>Sức chứa</label>
                                <input class="form-control" name="giomocua" placeholder="Nhập giờ mở cửa" />
                            </div>
                             <div class="form-group"><br>
                                <label>Ghi chú</label>
                                <input class="form-control" name="giodongcua" placeholder="Nhập giờ đóng cửa" />
                            </div>
                             <div class="form-group"><br>
                                <label>Hình ảnh</label>
                                <input class="form-control" name="ghichu" placeholder="Nhập ghi chú" />
                            </div>
                            <div class="form-group"><br>
                                <label>Trạng thái</label>
                                <input class="form-control" name="ghichu" placeholder="Nhập ghi chú" />
                            </div>
                            <div class="form-group"><br>
                                <label>Đơn giá</label>
                                <input class="form-control" name="ghichu" placeholder="Nhập ghi chú" />
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