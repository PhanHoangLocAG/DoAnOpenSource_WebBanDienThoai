@extends('frontend.layouts.index')

@section('content')

<div class="kenne-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @if(session('thongbao'))
                            <div class="alert alert-danger">   
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="{{URL::to('frontend/editCart')}}">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="kenne-product-remove">Xóa</th>
                                            <th class="kenne-product-thumbnail">Hình ảnh</th>
                                            <th class="cart-product-name">Sản phẩm</th>
                                            <th class="kenne-product-price">Giá</th>
                                            <th class="kenne-product-quantity">Số lượng</th>
                                            <th class="kenne-product-subtotal">Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($cart != null)
                                            @foreach($cart->products as $key => $value)
                                                <tr>
                                                    <td  class="kenne-product-remove"><a href="frontend/deleteCart/{{$key}}"><i class="fa fa-trash" 
                                                        title="Remove"></i></a></td>
                                                    <td class="kenne-product-thumbnail"><a href="javascript:void(0)"><img src="upload/img/{{$value['productInfo']->hinh}}" width="100px" height="115px" alt="Uren's Cart Thumbnail"></a></td>
                                                    <td class="kenne-product-name"><a href="javascript:void(0)">{{$key}}</a></td>
                                                    <td class="kenne-product-price"><span class="amount">{{number_format($value['productInfo']->giaban , 0 , "" ,'.')." VND"}}</span></td>
                                                    <td class="quantity">
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" name = "{{$key}}"  value="{{$value['quantity']}}" type="text">
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal"><span class="amount">{{number_format($value['price'] , 0 , "" ,'.' )." VND"}}</span></td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon2">
                                            <input class="button"  value="Cập nhật giỏ hàng" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Tổng</h2>
                                        <ul>
                                            <li>Total 
                                            @if($cart != null)
                                                <span>{{ number_format( $cart->totalPrice , 0 , "" , "." )." VND" }}</span>
                                            @endif
                                            </li>
                                        </ul>
                                        <a href="frontend/dathang/{{Cookie::get('cmnd')}}">Đặt hàng</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection