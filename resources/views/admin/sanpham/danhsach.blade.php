@extends('admin.layouts.index')

@section('content')

<div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
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
                                <th>Hình</th>
                                <th>Mã sản phẩm </th>
                                <th>Tên sản phẩm</th>
                                <th>Loại sản phẩm</th>
                                <th>Delete</th>
                                <th>Edit</th>
                                <th>Discount</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{$stt=1}}
                            @foreach($sanpham as $item)
                            <tr class="even gradeC" align="center">
                                <td>{{$stt++}}</td>
                                <td>
                                    <?php
                                        $arr=explode(';',$item->hinh);
                                        $hinh=$arr[0];
                                    ?>
                                    <img src="upload/img/{{$hinh}}" width="50px" height="50px" alt="">
                                </td>
                                <td>{{$item->masanpham}}</td>
                                <td>{{$item->tensanpham}}</td>
                                <td>{{$item->loaisanpham}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/{{$item->masanpham}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/sua/{{$item->masanpham}}">Edit</a></td>
                                <td class="center"><i class="fas fa-percent"></i> <a href="admin/sanpham/discount/{{$item->masanpham}}">Discount</a></td>
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