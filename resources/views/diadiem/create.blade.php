@extends('layout1.index')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Địa điểm
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
                                <label>Quốc gia</label>
                                <input class="form-control" name="quocgia" placeholder="Nhập quốc gia" />
                            </div>
                             <div class="form-group">
                                <label>Quận huyện</label>
                                <input class="form-control" name="quanhuyen" placeholder="Nhập tên quận huyện" />
                            </div>
                            <div class="form-group"><br>
                                <label>Thành phố</label>
                                <input class="form-control" name="thanhpho" placeholder="Nhập tên thành phố" />
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