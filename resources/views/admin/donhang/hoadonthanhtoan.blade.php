@extends('admin.layouts.index')

@section('content')

<div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hóa đơn đã thanh toán
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <!-- @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Mã hóa đơn</th>
                                <th>Tên khách hàng</th>
                                <th>Email </th>
                                <th>Số điện thoại </th>
                                <th>Nhân viên phụ trách</th>
                                <th>Ngày lập hóa đơn</th>
                                <th>Thanh toán</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($hoadon))
                                @foreach($hoadon as $item)
                                    <tr class="even gradeC" align="center">
                                        <td>{{ $item->mahoadon }}</td>
                                        <td>{{ $item->tenkhachhang }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->sodienthoai }}</td>
                                        <td>{{ $item->manhanvien }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            @if( $item->thanhtoan == 1 )
                                                {{"Chưa thanh toán"}}
                                        
                                            @else
                                                {{"Đã thanh toán"}}
                                            @endif
                                        </td>
                                        <td>{{ number_format($item->thanhtien,0,'','.')." VNĐ" }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="even gradeC" align="center">
                                    <td colspan="9">Chưa có đơn hàng</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection