@extends('layout1.index')
@section('content')


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tiện nghi
                    <small>Danh sách</small>
                    <form action="{{ route('tiennghi.create') }}" method="GET" style="">
                        @csrf
                        <button class="btn btn-success">Thêm Tiện nghi</button>
                    </form>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Mã phòng ID</th>
                        <th>Tên tiện nghi</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tiennghi as $tn)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $tn -> id }}</td>
                        <td>{{ $tn -> maphong_id }}</td>
                        <td>{{ $tn -> tentiennghi }}</td>
                        
                           <td class="center">
                            <form action="{{ route('tiennghi.destroy',$tn->id) }}" method="POST">
                            @csrf
                            @method('delete') 
                             <button class="btn-fab btn-fab-sm btn-danger shadow text-white icon-trash">Xóa</button>       
                            </form>&nbsp;
                        </td>

                         <td class="center">
                            <form action="{{ route('tiennghi.edit',$tn->id) }}" method="GET">
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