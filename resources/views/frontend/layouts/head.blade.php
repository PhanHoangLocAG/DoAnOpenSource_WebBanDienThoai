<header class="main-header_area-2">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="header-top_nav">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="header-top_right">
                                    <ul>
                                        @if(isset($_COOKIE['khachhang']))
                                        <li>
                                            <a href="frontend/edit/{{Cookie::get('cmnd')}}"><i class="fas fa-user-alt"></i>{{Cookie::get("ten")}}</a>
                                        </li>
                                        <li>
                                            <a href="frontend/yeuthich/{{Cookie::get('cmnd')}}"><i class="fas fa-grin-hearts"></i> Yêu thích</a>
                                        </li>
                                        <li>
                                            <a href="frontend/dangxuat"><i class="fas fa-door-open"></i>  Đăng xuất</a>
                                        </li>
                                        @else
                                        <li>
                                            <a href="frontend/dangnhap"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-menu_area position-relative">
                                <nav class="main-nav d-flex justify-content-center">
                                    <ul>
                                        <li class="dropdown-holder"><a href="frontend/trangchu">Trang chủ</a></li>
                                        <li class="megamenu-holder position-static"><a href="javacript:void(0)">Sản phẩm<i
                                                class="ion-chevron-down"></i></a>
                                            <ul class="kenne-megamenu">
                                                @foreach($branch as $item)
                                                <li>
                                                    <span>{{$item->tenloai}}</span>
                                                    <ul>
                                                        <a href="javascript:void(0)">
                                                            <img src="upload/img/{{$item->logo}}" width="145px" height="60px" alt="Brand Images">
                                                        </a>
                                                    </ul>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a 
                                        @if(isset($_COOKIE['cmnd']))
                                            href="frontend/donhang/{{Cookie::get('cmnd')}}"
                                        @else
                                            href="frontend/dangnhap"
                                        @endif
                                        
                                        >Đơn hàng</a>
                                        </li>
                                        <li><a href="javascript:void(0)">Hỏi đáp</a>
                                            
                                        </li>
                                        <li><a href="javascript:void(0)">Liên hệ </a></li>
                                        <li><a href="javascript:void(0)">Thông tin</a></li>
                                    </ul>
                                <div class="input-group mb-3" style="width: 270px;margin-top: 11px;margin-right: 30px;">
                                    <form action="{{URL::to('frontend/timkiem') }}" class="form-inline" method="post">
                                        @csrf()
                                        <input type="text" class="form-control" name='search' placeholder="Nhập tên sản phẩm">
                                        <div class="input-group-append">
                                            <button class="btn " style="background-color:rgb(56,156,243);width:48px;height: 37px;color: white;" type="submit" style="width: 35px;"><i class="ion-ios-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="header-right_area d-none d-lg-inline-block" style="height:46px;margin-top:6px;">
                                    <ul>
                                        <li class="mobile-menu_wrap d-flex d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                        <li class="minicart-wrap">
                                            <a 
                                            @if(isset($_COOKIE['cmnd']))
                                                href="frontend/giohang" 
                                            @else
                                                href="frontend/dangnhap"
                                            @endif
                                            
                                            class="minicart-btn">
                                                <div class="minicart-count_area">
                                                    <i class="ion-bag"></i>
                                                </div>
                                                <div class="minicart-front_text">
                                                    <span>Giỏ hàng</span>
                                                    
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>