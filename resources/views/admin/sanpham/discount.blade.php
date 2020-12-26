@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Giảm giá</small>
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
                        <form action="{{URL::to('admin/sanpham/discount/'.$sanpham->masanpham)}}" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Mã sản phẩm</label>
                                <input type="text" class="form-control" value="{{$sanpham->masanpham}}" name='masanpham' placeholder="Nhập mã sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" value="{{$sanpham->tensanpham}}" name='tensanpham' placeholder="Nhập tên loại sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Mức giảm giá</label>
                                    <select class="form-control" name="giamgia" >
                                        @for($i=5;$i<=100;$i+=5)
                                        <option value="{{$i}}">{{"Giảm giá ".$i."%"}}</option>
                                        @endfor
                                    </select>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection