@extends('admin.layouts.index')

@section('content')

<div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhân viên
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Số TT</th>
                                <th>Hình ảnh</th>
                                <th>Mã nhân viên </th>
                                <th>Tên nhân viên</th>
                                <th>Giới tính</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Chức vụ</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                           {{$stt=1}}
                            @foreach($nhanvien as $item)
                            <tr class="even gradeC" align="center">
                                <td>{{$stt++}}</td>
                                <td>
                                    <img src="upload/img/{{$item->hinhanh}}" alt="" width="50px" height="50px">
                                </td>
                                <td>{{$item->manhanvien}}</td>
                                <td>{{$item->tennhanvien}}</td>
                                <td>
                                    @if($item->gioitinh==1)
                                        {{'Nam'}}
                                    @else
                                        {{'Nữ'}}
                                    @endif
                                </td>
                                <td>{{$item->sodienthoai}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->tenchucvu}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/nhanvien/xoa/{{$item->manhanvien}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/nhanvien/sua/{{$item->manhanvien}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection