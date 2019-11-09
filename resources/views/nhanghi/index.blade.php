@extends('layout1.index')
@section('content')


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nhà Nghỉ
                    <small>Danh sách</small>
                    <form action="{{ route('nhanghi.create') }}" method="GET" style="">
                        @csrf
                        <button class="btn btn-success">Thêm nhà nghỉ</button>
                    </form>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                
                        <th>Địa điểm ID</th>
                        <th>Tên nhà nghỉ</th>
                        <th>Địa chỉ</th>
                        <th>Số phòng</th>
                        <th>Giờ mở cửa</th>
                        <th>Ghi chú</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($nhanghi as $nn)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $nn -> id }}</td>
              
                        <td>{{ $nn -> diadiem_id }}</td>
                        <td>{{ $nn -> tennhanghi }}</td>
                        <td>{{ $nn -> diachi }}</td>
                        <td>{{ $nn -> sophong }}</td>
                        <td>{{ $nn -> giomocua }} giờ</td>
                        <td>{{ $nn -> ghichu }}</td>
                        
                        
                       <td class="center">
                            <form action="{{ route('nhanghi.destroy',$nn->id) }}" method="POST">
                            @csrf
                            @method('delete') 
                             <button class="btn-fab btn-fab-sm btn-danger shadow text-white icon-trash">Xóa</button>       
                            </form>&nbsp;
                        </td>

                         <td class="center">
                            <form action="{{ route('nhanghi.edit',$nn->id) }}" method="GET">
                            @csrf
                            <button class="btn-fab btn-fab-sm btn-primary shadow text-white icon-pencil">Sửa</button> 
                            </form>
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