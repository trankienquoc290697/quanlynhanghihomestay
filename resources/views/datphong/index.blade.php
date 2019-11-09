@extends('layout1.index')
@section('content')


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đặt Phòng
                    <small>Danh sách</small>
                    <form action="{{ route('datphong.create') }}" method="GET" style="">
                        @csrf
                        <button class="btn btn-success">Thêm Đặt Phòng</button>
                    </form>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Phòng ID</th>
                        <th>Tên</th>
                        <th>Địa chỉ</th>
                        <th>Đơn giá</th>
                        <th>Ngày trả</th>
                        <th>Ngày nhận</th>
                        <th>Trạng thái</th>
                        
                    </tr>
                </thead>
                <tbody>
                                @foreach ($datphong as $dp)
                                    <tr class="no-b" style="color: black">
                                        <td>{{$dp->id}}</td>
                                        <td>{{$dp->users['id']}}</td>
                                        <td>{{$dp->phong['id']}}</td>
                                    
                                        <td>{{$dp->ten}}</td>
                                        <td>{{$dp->diachi}}</td>
                                        <td>{{$dp->dongia}}</td>
                                        <td>{{$dp->ngaytra}}</td>
                                        <td>{{$dp->ngaynha}}</td>


                                        @if($dp->trangthai == 1)
                                        <td>
                                            Thanh toán khi nhận hàng
                                        </td>
                                        @else if($dp->trangthai == 2)
                                        <td>
                                            Thanh toán qua thẻ ngân hàng
                                        </td>
                                        @endif

                                        <td >
                                            <i class="icon icon-data_usage"></i>{{$dp->created_at}}</td>
                                        </td>
                                        <td align="center">
                                            <form action="{{ route('datphong.show',$dp->id) }}" method="GET">
                                            @csrf
                                                <button class="btn-fab btn-fab-sm btn-primary shadow text-white icon-eye"></i></button> 
                                            </form>
                                            <!-- <i class="icon-eye mr-3"></i> -->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection