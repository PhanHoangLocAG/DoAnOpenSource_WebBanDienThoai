@extends('admin.layouts.index')

@section('content')

<div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Kích thước
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
                                <th>Loại kích thước</th>
                                <th>Kích thước</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                           {{ $stt=1}}
                            @foreach($kichthuoc as $item)
                            <tr class="even gradeC" align="center">
                                <td>{{ $stt++ }}</td>
                                <td>{{ $item->makichthuoc }}</td>
                                <td>{{ $item->kichthuoc }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/kichthuoc/xoa/{{$item->makichthuoc}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/kichthuoc/sua/{{$item->makichthuoc}}">Edit</a></td>
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