@extends('admin.layouts.index')

@section('content')

<div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể loại
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
                                <th>Logo</th>
                                <th>Mã loại </th>
                                <th>Tên</th>
                                <th>Nhà sản xuất</th>
                                <th>Lắp ráp</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                           {{ $stt=1}}
                            @foreach($theloai as $item)
                            <tr class="even gradeC" align="center">
                                <td>{{ $stt++ }}</td>
                                <td><img src="upload/img/{{$item->logo}}" width="150px" height="70px" alt=""></td>
                                <td>{{ $item->maloai }}</td>
                                <td>{{ $item->tenloai }}</td>
                                <td>{{ $item->nhasanxuat }}</td>
                                <td>{{ $item->donvilaprap }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/theloai/xoa/{{$item->maloai}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/theloai/sua/{{$item->maloai}}">Edit</a></td>
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