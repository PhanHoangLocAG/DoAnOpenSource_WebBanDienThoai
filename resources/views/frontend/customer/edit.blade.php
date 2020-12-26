@extends('frontend.layouts.index')

@section('content')
 
<div class="myaccount-details" style="width:700px;margin-top: 20px;">
    <h2>Thông tin cá nhân</h2>
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
    @if(count($errors)>0)
        <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}}<br>
                @endforeach
        </div>
    @endif
    <form action="#" class="kenne-form" >
        <div class="kenne-form-inner">
            <div class="single-input single-input-half" style="margin-top: 0px;">
                <label >Họ và tên:</label>
                <input type="text" value="{{$khachhang->tenkhachhang}}">
            </div>
            <div class="single-input single-input-half"  style="margin-top: 0px;">
                <label>Số điện thoại</label>
                <input type="text" value="{{$khachhang->sodienthoai}}">
            </div>
            <div  style="margin-top: 0px;">
                <label  style="display:block ;margin-bottom: 15px;">Giới tính</label>
                <div class="form-check form-check-inline" style="margin-left: 40px;">
                    @if($khachhang->gioitinh==1)
                    <input class="form-check-input" type="radio" checked>
                    @else
                    <input class="form-check-input" type="radio" >
                    @endif
                    <label class="form-check-label">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    @if($khachhang->gioitinh==0)
                    <input class="form-check-input" type="radio" checked>
                    @else
                    <input class="form-check-input" type="radio" >
                    @endif
                    <label class="form-check-label">Nữ</label>
                </div>
            </div>
            <div class="single-input single-input-half"  style="margin-top: 0px;">
                <label>Ngày sinh</label>
                <input type="date" value="{{$khachhang->ngaysinh}}">
            </div>
            <div class="single-input"  style="margin-top: 0px;">
                <label >Chứng minh nhân dân</label>
                <input type="text"  value="{{$khachhang->chungminhnhandan}}" >
            </div>
            <div class="single-input"  style="margin-top: 0px;">
                <label >Địa chỉ</label>
                <input type="text" value="{{$khachhang->diachi}}">
            </div>
            <div class="single-input"  style="margin-top: 0px;">
                <label >Email</label>
                <input type="email" value="{{$khachhang->email}}" >
            </div>
            <div class="single-input"  style="margin-top: 0px;">
                <a href="" class="btn" data-toggle="modal" data-target="#myModal1" style="margin-top: 15px;margin-right: 15px;padding: 10px 5px;background-color: black;color:white;">Sửa thông tin</a>
                <a href="" class="btn" data-toggle="modal" data-target="#myModal" style="margin-top: 15px;padding: 10px 5px;background-color: black;color:white;">Đổi mật khẩu</a>
            </div>

        </div>
    </form>
</div> 
<!-- Mat khau  -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="font-family: Arial, Helvetica, sans-serif;">Thay đổi mật khẩu</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="{{URL::to('frontend/update/'.Cookie::get('cmnd'))}}" enctype="multipart/form-data" method="post">
            @csrf()
            <div class="form-group">
                <label >Mật khẩu cũ:</label>
                <input type="password" class="form-control" name="pass"  placeholder="Nhập mật khẩu" >
            </div>

            <div class="form-group">
                <label >Mật khẩu mới:</label>
                <input type="password" class="form-control" name="passNew" placeholder="Nhập mật khẩu" >
            </div>

            <div class="form-group">
                <label >Xác nhận mật khẩu:</label>
                <input type="password" class="form-control" name="passConfirm" placeholder="Nhập mật khẩu" >
            </div>

            <button type="submit" class="btn btn-primary" style="background-color:blue;padding:5px 8px;">Cập nhật</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Chinh sua thong tin -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="font-family: Arial, Helvetica, sans-serif;">Cập nhật thông tin</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="{{URL::to('frontend/sua/'.Cookie::get('cmnd'))}}" class="kenne-form" enctype="multipart/form-data" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="kenne-form-inner">
            <div class="single-input single-input-half" style="margin-top: 0px;">
                <label >Họ và tên:</label>
                <input type="text" name="ten" value="{{$khachhang->tenkhachhang}}">
            </div>
            <div class="single-input single-input-half"  style="margin-top: 0px;">
                <label>Số điện thoại</label>
                <input type="text" name="sodienthoai" value="{{$khachhang->sodienthoai}}">
            </div>
            <div  style="margin-top: 0px;">
                <label  style="display:block ;margin-bottom: 15px;">Giới tính</label>
                <div class="form-check form-check-inline" style="margin-left: 40px;">
                    @if($khachhang->gioitinh==1)
                    <input class="form-check-input" name="gioitinh" value="1" type="radio" checked>
                    @else
                    <input class="form-check-input" name="gioitinh" value="1" type="radio" >
                    @endif
                    <label class="form-check-label">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    @if($khachhang->gioitinh==0)
                    <input class="form-check-input" name="gioitinh" value="0" type="radio" checked>
                    @else
                    <input class="form-check-input" name="gioitinh" value="0" type="radio" >
                    @endif
                    <label class="form-check-label">Nữ</label>
                </div>
            </div>
            <div class="single-input single-input-half"  style="margin-top: 0px;">
                <label>Ngày sinh</label>
                <input type="date" name="ngaysinh" value="{{$khachhang->ngaysinh}}">
            </div>
            <div class="single-input"  style="margin-top: 0px;">
                <label >Địa chỉ</label>
                <input type="text" name="diachi" value="{{$khachhang->diachi}}">
            </div>
            <div class="single-input"  style="margin-top: 0px;">
                <label >Email</label>
                <input type="email" name="email" value="{{$khachhang->email}}" >
            </div>
            <div class="single-input"  style="margin-top: 10px;">
            <button type="submit" class="btn btn-primary" style="background-color:blue;padding:5px 8px;">Cập nhật</button>
            </div>

            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection