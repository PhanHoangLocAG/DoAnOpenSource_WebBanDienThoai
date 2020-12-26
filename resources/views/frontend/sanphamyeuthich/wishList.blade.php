@extends('frontend.layouts.index')

@section('content')

<div class="kenne-wishlist_area">
            <div class="container">
                <div class="row">
                <h2>Danh sách sản phẩm yêu thích</h2>
                    <div class="col-lg-12">
                        <form action="javascript:void(0)">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="kenne-product_remove">Xóa</th>
                                            <th class="kenne-product-thumbnail">Hình ảnh</th>
                                            <th class="cart-product-name">Tên sản phẩm</th>
                                            <th class="kenne-product-stock-status">Trạng thái</th>
                                            <th class="kenne-cart_btn">Thêm vào giỏ hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($yeuthich) && $yeuthich!=null)
                                            @foreach($yeuthich as $item)
                                            <?php 
                                                $arr=explode(';',$item->hinh);
                                            ?>
                                            <tr>
                                                <td class="kenne-product_remove"><a href="frontend/xoayeuthich/{{Cookie::get('cmnd')}}/{{$item->masanpham}}"><i class="fa fa-trash"
                                                    title="Remove"></i></a></td>
                                                <td class="kenne-product-thumbnail"><a href="javascript:void(0)"><img src="upload/img/{{$arr[0]}}" width="100px" height="100px" alt="Kenne's Wishlist Thumbnail"></a>
                                                </td>
                                                <td class="kenne-product-name"><a href="javascript:void(0)">{{$item->tensanpham}}</a></td>
                                                <td class="kenne-product-stock-status"><span class="in-stock">@if($item->soluong>0){{"Còn hàng"}} @else {{"Hết hàng"}} @endif</span></td>
                                                <td class="kenne-cart_btn"><a 
                                                @if($item->soluong>0)
                                                  href="frontend/add/{{$item->masanpham}}/{{Cookie::get('cmnd')}}"
                                                @else
                                                  href="javascript:void(0)"
                                                @endif
                                                >Thêm vào giỏ hàng</a></td>
                                            </tr>
                                            @endforeach
                                        @else 
                                        <tr>
                                            <td colspan="6">
                                                <h4>Không có sản phẩm để hiển thị</h4>
                                            </td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection