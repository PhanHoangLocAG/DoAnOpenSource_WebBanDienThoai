@extends('frontend.layouts.index')

@section('content')


<div class="container" style="margin-top: 40px;">
    <div class="row">
                    <div class="col-lg-6 col-12">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                    @endforeach
                            </div>
                        @endif
                        <form enctype="multipart/form-data" action="{{URL::to('frontend/muahang/'.$khachhang->chungminhnhandan)}}" method="post" id="FormMuaHang">
                            @csrf()    
                        <div class="checkbox-form">
                                <h3>Chi tiết hóa đơn</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Họ và tên <span class="required">*</span></label>
                                            <input placeholder="" name="ten" value="{{$khachhang->tenkhachhang}}" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Địa chỉ nhận hàng <span class="required">*</span></label>
                                            <input placeholder="Street address" name="diachi" value="{{$khachhang->diachi}}" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email <span class="required">*</span></label>
                                            <input placeholder="" name="email"  value="{{$khachhang->email}}" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Số điện thoại <span class="required">*</span></label>
                                            <input type="text" name="sodienthoai" value="{{$khachhang->sodienthoai}}" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label style="display: block;">Phương thức giao hàng <span class="required">*</span></label>
                                        <div class="form-check-inline" style="margin-left: 60px;">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="giaohang" value="0" checked>Giao hàng thông thường
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="giaohang" value="1">Giao hàng nhanh (24 giờ)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="your-order">
                            <h3>Đơn hàng</h3>
                            <div class="your-order-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="cart-product-name">Sản phẩm</th>
                                            <th class="cart-product-total">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if($cart != null)
                                        @foreach($cart->products as $key => $value)
                                        <tr class="cart_item">
                                            <td class="cart-product-name"> {{$key}}<strong class="product-quantity">
                                            × {{$value['quantity']}}</strong></td>
                                            <td class="cart-product-total"><span class="amount">{{number_format($value['price'],0,"",".")."VND"}}</span></td>
                                        </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                    <tfoot>
                            
                                        <tr class="order-total">
                                            <th>Tổng tiền</th>
                                            <td><strong><span class="amount">
                                            @if($cart != null)
                                            {{number_format($cart->totalPrice,0,"",".")."VND"}}
                        
                                            @endif
                                            </span></strong></td>
                                        </tr>

                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    
                                    <div class="order-button-payment">
                                        <input value="Đặt hàng" form="FormMuaHang" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>

@endsection