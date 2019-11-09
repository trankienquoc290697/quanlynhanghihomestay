@extends('layout1.index')
@section('content')


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Phòng
                    <small>Danh sách</small>
                    <form action="{{ route('phong.create') }}" method="GET" style="">
                        @csrf
                        <button class="btn btn-success">Thêm Phòng</button>
                    </form>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Nhà nghỉ ID</th>
                        <th>Tên phòng</th>
                        <th>Chiều dài</th>
                        <th>Chiều rộng</th>
                        <th>Sức chứa</th>
                        <th>Ghi chú</th>
                        <th>Hình ảnh</th>
                        <th>Trạng thái</th>
                        <th>Đơn giá</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($phong as $p)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $p -> id }}</td>
                        <td>{{ $p -> nhanghi_id }}</td>
                        <td>{{ $p -> tenphong }}</td>
                        <td>{{ $p -> chieudai }}</td>
                        <td>{{ $p -> chieurong }}</td>
                        <td>{{ $p -> succhuatoida }}</td>
                        <td>{{ $p -> ghichu }}</td>
                        <td>{{ $p -> hinhanh }}</td>
                        <td>{{ $p -> trangthai }}</td>
                        <td>{{ $p -> dongia }}</td>
                        
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="phong/{{$p->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin1/theloai/sua/{{ $p -> id }}">Sửa</a></td>
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