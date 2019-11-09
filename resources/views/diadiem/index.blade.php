@extends('layout1.index')
@section('content')


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Địa điểm
                    <small>Danh sách</small>
                    <form action="{{ route('location.create') }}" method="GET" style="">
                        @csrf
                        <button class="btn btn-success">Thêm Đia điểm</button>
                    </form>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Quốc gia</th>
                        <th>Quận huyện</th>
                        <th>Thành phố</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($diadiem as $dd)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $dd -> id }}</td>
                        <td>{{ $dd -> quocgia }}</td>
                        <td>{{ $dd -> quanhuyen }}</td>
                        <td>{{ $dd -> thanhpho }}</td>
                        
                        <td class="center">
                            <form action="{{ route('location.destroy',$dd->id) }}" method="POST">
                            @csrf
                            @method('delete') 
                             <button class="btn-fab btn-fab-sm btn-danger shadow text-white icon-trash">Xóa</button>       
                            </form>&nbsp;
                        </td>

                         <td class="center">
                            <form action="{{ route('location.edit',$dd->id) }}" method="GET">
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