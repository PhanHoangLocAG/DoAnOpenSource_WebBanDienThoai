@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể loại 
                    <small></small>
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
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
               
                <form action="{{URL::to('admin/theloai/sua/'.$theloai->maloai)}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>Mã loại</label>
                        <input type="text" disabled class="form-control" value="{{$theloai->maloai}}" name='maloai' placeholder="Nhập loại sản phẩm">
                    </div>
                    <div class="form-group">
                        <label>Tên loại</label>
                        <input type="text" class="form-control" value="{{$theloai->tenloai}}" name='tenloai' placeholder="Nhập tên loại sản phẩm">
                    </div>
                    <div class="form-group">
                        <label>Nhà sản xuất</label>
                        <input type="text" class="form-control" value="{{$theloai->nhasanxuat}}" name='nhasanxuat' placeholder="Nhập nhà sản xuất">
                    </div>
                    <div class="form-group">
                        <label>Đơn vị lắp ráp</label>
                        <input type="text" class="form-control" value="{{$theloai->donvilaprap}}" name='donvilaprap' placeholder="Nhập đơn vị lắp ráp">
                    </div>
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" class="form-control" name='logo'>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection