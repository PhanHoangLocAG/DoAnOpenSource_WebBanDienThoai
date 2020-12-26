@extends('admin.layouts.index')

@section('content')

<div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm giảm giá
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
                                <th>Giảm giá</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{$stt=1}}
                            @foreach($sanpham as $item)
                            <?php $hinh = explode(";",$item->hinh) ?>
                            <tr class="even gradeC" align="center">
                                <td>{{$stt++}}</td>
                                <td>
                                    <img src="upload/img/{{$hinh[0]}}" width="50px" height="50px" alt="">
                                </td>
                                <td>{{$item->masanpham}}</td>
                                <td>{{$item->tensanpham}}</td>
                                <td>{{$item->discount."%"}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/deleteDiscount/{{$item->masanpham}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/editDiscount/{{$item->masanpham}}">Edit</a></td>
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