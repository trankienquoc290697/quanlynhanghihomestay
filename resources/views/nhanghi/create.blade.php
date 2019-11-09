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

                    <form action="{{ route('nhanghi.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>ID địa điểm</label>
                                 <select name="diadiem_id" class="form-control" required>
                                @foreach($diadiem as $dd)
                                <option value="{{$dd->id}}">{{$dd->id}}</option>
                                @endforeach
                            </select>
                            </div>

                            <div class="form-group">
                                <label>Tên nhà nghỉ</label>
                                <input class="form-control" name="tennhanghi" />
                            </div>
                             <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="diachi"  />
                                 <div class="form-group"><br>
                                <label>Số phòng</label>
                                <input class="form-control" name="sophong"  />
                            </div>
                             <div class="form-group"><br>
                                <label>Giờ mở cửa</label>
                                <select  name="giomocua">
                                    <option value="00:00:00">0h</option>
                                    <option value="01:00:00">1h</option>
                                    <option value="02:00:00">2h</option>
                                    <option value="03:00:00">3h</option>
                                    <option value="04:00:00">4h</option>
                                    <option value="05:00:00">5h</option>
                                    <option value="06:00:00">6h</option>
                                    <option value="07:00:00">7h</option>
                                    <option value="08:00:00">8h</option>
                                    <option value="09:00:00">9h</option>
                                    <option value="10:00:00">10h</option>
                                    <option value="11:00:00">11h</option>
                                    <option value="12:00:00">12h</option>
                                    <option value="13:00:00">13h</option>
                                    <option value="14:00:00">14h</option>
                                    <option value="15:00:00">15h</option>
                                    <option value="16:00:00">16h</option>
                                    <option value="17:00:00">17h</option>
                                    <option value="18:00:00">18h</option>
                                    <option value="19:00:00">19h</option>
                                    <option value="20:00:00">20h</option>
                                    <option value="21:00:00">21h</option>
                                    <option value="22:00:00">22h</option>
                                    <option value="23:00:00">23h</option>
                                    <option value="24:00:00">24h</option>
                      </select>
                            </div>
                            
                             <div class="form-group"><br>
                                <label>Ghi chú</label>
                                <input class="form-control" name="ghichu"  />
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