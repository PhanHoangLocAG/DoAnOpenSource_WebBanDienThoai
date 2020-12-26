@extends('admin.layouts.index')

@section('content')

<div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Khách hàng
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <!-- @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Mã khách hàng </th>
                                <th>Tên</th>
                                <th>Giới tính</th>
                                <th>Ngày sinh</th>
                                <th>Địa chỉ</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($khachhang))
                            @foreach($khachhang as $item)
                           
                            <tr class="even gradeC" align="center">
                                <td>{{ $item->chungminhnhandan }}</td>
                                <td>{{ $item->tenkhachhang }}</td>
                                <td>
                                    @if($item->gioitinh == 1)
                                    {{ "Nam" }}
                                    @else
                                    {{ "Nữ" }}
                                    @endif
                                </td>
                                <td>{{ $item->ngaysinh }}</td>
                                <td>{{ $item->diachi }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->sodienthoai }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/khachhang/xoa/{{$item->chungminhnhandan}}"> Delete</a></td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection