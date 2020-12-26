@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể loại
                            <small>Thêm</small>
                        </h1>
                    </div>
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    @if(session('thongbaoloi'))
                        <div class="alert alert-danger">
                            {{session('thongbaoloi')}}
                        </div>
                    @endif
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px ;width:700px;">

                        <form action="{{URL::to('admin/nhanvien/them')}}" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div style="float: left;width: 318px;">
                            <div class="form-group">
                                <label>Mã nhân viên</label>
                                <input type="text" class="form-control" name='manhanvien' placeholder="Nhập mã nhân viên">
                            </div>
                            <div class="form-group">
                                <label>Tên nhân viên</label>
                                <input type="text" class="form-control" name='tennhanvien' placeholder="Nhập tên nhân viên">
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <div class="radio">
                                    <label><input type="radio" name="gioitinh" value="1" checked>Nam</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="gioitinh" value="0">Nữ</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" class="form-control" name='diachi' placeholder="Nhập địa chỉ nhân viên">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control" name='sodienthoai' placeholder="Nhập số điện thoại nhân viên">
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh</label>
                                <input type="date" class="form-control" name='ngaysinh' >
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" class="form-control" name='hinhanh'>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                        <div style="float: right;width:300px;">
                            <div class="form-group">
                                <label >Chức vụ:</label>
                                <select class="form-control" name="chucvu">
                                    @foreach($chucvu as $item)
                                        <option value="{{$item->machucvu}}">{{$item->tenchucvu}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ngày vào làm</label>
                                <input type="date" class="form-control" name='ngayvaolam' placeholder="Nhập ngày vào làm">
                            </div>
                            <div class="form-group">
                                <label>Mức lương</label>
                                <select class="form-control" name="maluong">
                                    @foreach($luong as $item)
                                        <option value="{{$item->mamucluong}}">{{$item->sotien}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name='email' placeholder="Nhập email nhân viên">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name='password' placeholder="Nhập password">
                            </div>
                            <div class="form-group">
                                <label>Password Confirm</label>
                                <input type="password" class="form-control" name='passwordconfirm' placeholder="Nhập password confirm">
                            </div>
                        </div>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection