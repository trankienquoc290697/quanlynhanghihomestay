@extends('layout1.index')
@section('content')


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users
                    <small>Danh sách</small>
                    <form action="{{ route('users.create') }}" method="GET" style="">
                        @csrf
                        <button class="btn btn-success">Thêm Users</button>
                    </form>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Giới tính</th>
                        <th>SĐT</th>
                        <th>Hình ảnh</th>
                        <th>Địa chỉ</th>
                        <th>Remember_token</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $u)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $u -> id }}</td>
                        <td>{{ $u -> name }}</td>
                        <td>{{ $u -> email }}</td>
                        <td>{{ $u -> password }}</td>
                        <td>{{ $u -> role }}</td>
                        <td>{{ $u -> sex }}</td>
                        <td>{{ $u -> phone }}</td>
                        <td>{{ $u -> image }}</td>
                        <td>{{ $u -> address }}</td>
                        <td>{{ $u -> remember_token }}</td>
                        
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="phong/{{$u->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin1/theloai/sua/{{ $u -> id }}">Sửa</a></td>
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