@extends('layout1.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể loại
                    <small>{{$diadiem ->quocgia}}</small>
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


            <form action="{{ route('location.update',$diadiem->id) }}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                @method('put')
                <div class="form-group">
                    <label>Quốc gia</label>
                    <input class="form-control" name="quocgia"  value="{{$diadiem->quocgia}}">
                </div>
                <div class="form-group">
                    <label>Quận huyện</label>
                    <input class="form-control" name="quanhuyen"  value="{{$diadiem->quanhuyen}}">
                </div>
                <div class="form-group"><br>
                    <label>Thành phố</label>
                    <input class="form-control" name="thanhpho"  value="{{$diadiem->thanhpho}}">
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
                <button type="reset" class="btn btn-default">Làm mới</button>
            </div>

            <form>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


@endsection