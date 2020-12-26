@extends('admin.layouts.index')

@section('content')

<div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Mức lương
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
                                <th>Mã mức lương</th>
                                <th>Số tiền</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                           {{ $stt=1}}
                            @foreach($luong as $item)
                            <tr class="even gradeC" align="center">
                                <td>{{ $stt++ }}</td>
                                <td>{{ $item->mamucluong }}</td>
                                <td>{{ $item->sotien }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/luong/xoa/{{$item->mamucluong}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/luong/sua/{{$item->mamucluong}}">Edit</a></td>
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