<div class="kenne-content_wrapper" style="padding:15px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3 style="text-transform: uppercase;font: 11px/18px Helvetica,Arial,'DejaVu Sans','Liberation Sans',Freesans,sans-serif;/* font-family: initial; */font-weight: bold;font-size:19px">Tất cả sản phẩm</h3>
                    
                </div>
            </div>
            <div class="col-lg-12">
                <div class="shop-product-wrap grid gridview-4 row">


                    @foreach($sanpham as $item)
                    <?php
                        $arr=explode(";",$item->hinh);
                        $hinh=$arr[0];
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="product-item" style="width: 240px;" >
                            <div class="single-product" style="padding: 0px;border: none;">
                                <div class="product-img">
                                    <a href="frontend/detailProduct/{{$item->masanpham}}">
                                        <img class="primary-img" src="upload/img/{{$hinh}}" height="238px" alt="Kenne's Product Image">
                                    </a>
                                    @if(!is_null($item->discount))
                                    <span class="sticker">
                                       {{$item->discount."%"}}
                                    </span>
                                    @endif
                                    <div class="add-actions">
                                        <ul>
                                            <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="frontend/detailProduct/{{$item->masanpham}}" data-toggle="tooltip" data-placement="right" title="Xem chi tiết sản phẩm"><i class="ion-ios-search"></i></a>
                                            </li>
                                            <li><a 
                                            @if(isset($_COOKIE['cmnd']))
                                                href="frontend/themyeuthich/{{Cookie::get('cmnd')}}/{{$item->masanpham}}" 
                                            @else
                                                href="frontend/dangnhap"
                                            @endif
                                                data-toggle="tooltip" data-placement="right" title="Sản phẩm yêu thích"><i
                                                    class="ion-ios-heart-outline"></i></a>
                                            </li>
                                            <li><a 
                                            @if(isset($_COOKIE['cmnd']))
                                                href="frontend/add/{{$item->masanpham}}"
                                            @else
                                                href="frontend/dangnhap"
                                            @endif
                                            data-toggle="tooltip" data-placement="right" title="Thêm vào giỏ hàng"><i class="ion-bag"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content" style="padding: 0px;text-align: left;">
                                    <div class="product-desc_info">
                                        <h3 class="product-name"><a href="frontend/detailProduct/{{$item->masanpham}}">{{$item->tensanpham}}</a></h3>
                                        <div class="price-box">
                                            @if(isset($item->Money_discount))
                                            <span class="new-price">{{number_format($item->Money_discount,0,"",".")."VND"}}</span>
                                            <span class="old-price">{{number_format($item->giaban,0,"",".")."VND"}}</span>
                                            @else
                                            <span class="new-price">{{number_format($item->giaban,0,"",".")."VND"}}</span>
                                            @endif
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="kenne-paginatoin-area">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="kenne-pagination-box primary-color">
                                        <li class="active"><a href="javascript:void(0)">1</a></li>
                                        <li><a href="javascript:void(0)">2</a></li>
                                        <li><a href="javascript:void(0)">3</a></li>
                                        <li><a href="javascript:void(0)">4</a></li>
                                        <li><a href="javascript:void(0)">5</a></li>
                                        <li><a class="Next" href="javascript:void(0)">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>