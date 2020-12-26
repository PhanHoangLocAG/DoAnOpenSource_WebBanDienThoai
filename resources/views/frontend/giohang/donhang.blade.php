@extends('frontend.layouts.index')

@section('content')

    <div class="container" style="margin-top: 40px;">
        <!-- Thong bao -->
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
        <!-- Kết thúc thông báo -->
        @if($hoadon != null)
            @foreach($hoadon as $item)
                <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <!-- Xu li hoa don -->
                                <h3>Thông tin hóa đơn</h3>   
                                <div class="your-order-table table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="cart-product-name"><strong class="product-quantity">Mã hóa đơn</strong></td>
                                                <td class="cart-product-total"><span class="amount">{{$item['hoadon']->mahoadon}}</span></td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="cart-product-name"><strong class="product-quantity">Tên khách hàng</strong></td>
                                                <td class="cart-product-total"><span class="amount">{{$item['hoadon']->tenkhachhang}}</span></td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="cart-product-name"><strong class="product-quantity">Địa chỉ giao hàng</strong></td>
                                                <td class="cart-product-total"><span class="amount">{{$item['hoadon']->diachi}}</span></td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="cart-product-name"><strong class="product-quantity">Số điện thoại</strong></td>
                                                <td class="cart-product-total"><span class="amount">{{$item['hoadon']->sodienthoai}}</span></td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="cart-product-name"><strong class="product-quantity">Email</strong></td>
                                                <td class="cart-product-total"><span class="amount">{{$item['hoadon']->email}}</span></td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="cart-product-name"><strong class="product-quantity">Ngày lập hóa đơn</strong></td>
                                                <td class="cart-product-total"><span class="amount">{{$item['hoadon']->created_at}}</span></td>
                                            </tr>
                                            
                                        </tbody>
                                    
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- thong tin khach hang -->
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <h3>Chi tiết sản phẩm</h3>
                                <div class="your-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-product-name">Sản phẩm</th>
                                                <th class="cart-product-total">Thành tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                @foreach($item['sanpham'] as $item1)
                                                <tr class="cart_item">
                                                    <td class="cart-product-name">{{$item1->masanpham}}<strong class="product-quantity">
                                                    × {{$item1->soluong}}</strong></td>
                                                    <td class="cart-product-total"><span class="amount">{{number_format($item1->thanhtien,0,"",".")." VND"}}</span></td>
                                                </tr>
                                                @endforeach
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>
                                                    Phương thức giao hàng 
                                                </td>
                                                <td>
                                                    
                                                        @if($item['hoadon']->phuongthucgiaohang == 1)
                                                            {{"Giao hàng nhanh    +30.000 VND "}}
                                                        @else
                                                            {{"Giao hàng bình thường"}}
                                                        @endif
                                                    
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Tổng tiền</th>
                                                <td><strong><span class="amount">
                                                
                                                    {{number_format($item['tongtien'],0,"",".")." VND"}}
                                                
                                                </span></strong></td>
                                            </tr>

                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        
                                        <div class="order-button-payment">
                                            <input value="Hủy đơn hàng"  onclick="location.href='frontend/huydon/{{$item['hoadon']->mahoadon}}'" type="button">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            @endforeach
        @else
        <h3>Không có hóa đơn hiển thị</h3>
        @endif
    </div>

@endsection