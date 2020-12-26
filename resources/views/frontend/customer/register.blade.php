@extends('frontend.layouts.index')

@section('content')

<div class="kenne-login-register_area" style="padding-top: 30px;">
            <div class="container">
                <div class="row"  style="justify-content: center;">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                        @if(session('thongbao'))
                                <div class="alert alert-danger">
                                    {{session('thongbao')}}
                                </div>
                        @endif
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                    @endforeach
                            </div>
                        @endif
                        <form action="{{URL::to('frontend/dangky')}}" enctype="multipart/form-data" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="login-form">
                                <h4 class="login-title" >Đăng kí</h4>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Họ và tên</label>
                                        <input type="text" name="hoten" value="{{old('hoten')}}" placeholder="Nhập họ và tên">
                                    </div>
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Số điện thoại</label>
                                        <input type="text" name="sodienthoai" value="{{old('sodienthoai')}}" placeholder="Nhập số điện thoại">
                                    </div>
                                    <div  class="col-md-6 col-12 mb--20">
                                        <label>Ngày sinh</label>
                                        <input type="date" value="{{old('ngaysinh')}}" name="ngaysinh" >
                                    </div>
                                    <div class="col-md-6 col-12 mb--20 form-group">
                                        <label>Giới tính</label>
                                        <div>
                                        <input type="radio" style="width: 45px; margin-bottom: 11px;" value="1" name="gioitinh" checked>Nam
                                        </div>
                                        <input type="radio" style="width: 45px;" name="gioitinh"  value="0">Nữ
                                    </div>
                                    <div class="col-md-12">
                                        <label>Chứng minh nhân dân</label>
                                        <input type="text" name="cmnd" value="{{ old('cmnd') }}" placeholder="Nhập chứng minh nhân dân">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Địa chỉ </label>
                                        <input type="text" value="{{ old('diachi') }}" name="diachi" placeholder="Nhập địa chỉ ">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Email</label>
                                        <input type="email" value="{{ old('email') }}" name="email" placeholder="Nhập địa chỉ email">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mật khẩu</label>
                                        <input type="password" value="{{ old('matkhau') }}" name="matkhau" placeholder="Nhập mật khẩu">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Xác nhận mật khẩu</label>
                                        <input type="password"  value="{{ old('xacnhanmatkhau') }}" name="xacnhanmatkhau" placeholder="Xác nhận mật khẩu">
                                    </div>
                                    <div class="col-12">
                                        <button class="kenne-register_btn">Đăng ký</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection