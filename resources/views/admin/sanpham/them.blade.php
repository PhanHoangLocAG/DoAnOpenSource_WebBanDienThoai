@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

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
                        <form action="{{URL::to('admin/sanpham/them')}}" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Mã sản phẩm</label>
                                <input type="text" class="form-control" name='masanpham' placeholder="Nhập mã sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name='tensanpham' placeholder="Nhập tên loại sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                                    <select class="form-control" name="loaisanpham" >
                                        @foreach($loaisanpham as $item)
                                        <option value="{{$item->maloai}}">{{$item->tenloai}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Bộ nhớ</label>
                                <input type="text" class="form-control" name='bonho' placeholder="Nhập bộ nhớ sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Hệ điều hành</label>
                                <input type="text" class="form-control" name='hedieuhanh' placeholder="Nhập hệ điều hành sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Màn hình</label>
                                <input type="text" class="form-control" name='manhinh' placeholder="Nhập thông tin màn hình">
                            </div>
                            <div class="form-group">
                                <label>Camera</label>
                                <input type="text" class="form-control" name='camera' placeholder="Nhập thông tin camera">
                            </div>
                            <div class="form-group">
                                <label>Kết nối không dây</label>
                                <input type="text" class="form-control" name='ketnoi' placeholder="Nhập thông tin kết nối không dây">
                            </div>
                            <div class="form-group">
                                <label>Trọng lượng</label>
                                <input type="text" class="form-control" name='trongluong' placeholder="Nhập trọng lượng sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Pin</label>
                                <input type="text" class="form-control" name='pin' placeholder="Nhập thông tin về pin sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Giá bán</label>
                                <input type="text" class="form-control" name='gia' placeholder="Nhập giá sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Màu sắc</label>
                                    <select class="form-control" name="mausac" >
                                        @foreach($mausac as $item)
                                        <option value="{{$item->mamau}}">{{$item->tenmau}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Kích thước</label>
                                    <select class="form-control" name="kichthuoc" >
                                        @foreach($kichthuoc as $item)
                                        <option value="{{$item->makichthuoc}}">{{$item->kichthuoc}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input type="text" class="form-control" name='soluong' placeholder="Nhập số lượng sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" class="form-control" name='hinhanh[]' multiple='multiple'>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection