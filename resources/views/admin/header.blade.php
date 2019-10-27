<div id="mySidenav" class="sidenav">
    <div class="container header_top">
        <div class="right">
            <ul class="social">
                <li><a href="https://www.facebook.com/Truy%E1%BB%87n-ch%C3%BA-m%C3%A8o-con-104213484322000/"
                        target="_blank"><i class="icon icon-social-facebook"></i></a></li>
                <li><a href="../#" target="_blank"><i class="icon icon-social-youtube"></i></a></li>
                <li><a href="../#" target="_blank"><i class="icon icon-social-twitter"></i></a></li>
            </ul>
            <ul class="login">
                <li class="has-child dropdown">
                    @if(Auth::check())
                    <a href="../#" class="expand dropdown-toggle login-success-top dotted-line-1" data-toggle="dropdown"
                        aria-expanded="false"><i class="icon icon-user" aria-hidden="true"></i>
                        {{Auth::user()->full_name}}</a>
                    <a href="../#" class="btn-logout hidden-md hidden-lg"><i
                            class=" hidden-xs hidden-sm icon icon-sign-out" aria-hidden="true"></i> Đăng xuất</a>
                    @else
                    <a href="../dang-nhap" class="btn-register"><i class="icon icon-user" aria-hidden="true"></i> Đăng
                        nhập</a>
                    <span class="hidden-xs hidden-sm">|</span>
                    <a href="../dang-ky" class="btn-register">Đăng ký</a>
                    @endif
                    <div class="hidden-xs hidden-sm sub dropdown-menu sub-menu-user">
                        <ul class="sub-menu-user">
                            @if(Auth::check())                                
                            <li>
                                <a href="../tai-khoan">Tài khoản</a>
                            </li>
                            <li>
                                <a href="../posts">Viết bài</a>
                            </li>
                            <li>
                                <a href="../dang-phim-hoat-hinh">Đăng phim hoạt hình</a>
                            </li>
                            <li>
                                <a href="../my-posts">Bài viết</a>
                            </li>
                            <!-- <li>
                                <a href="../messages">Tin nhắn</a>
                            </li>
                            <li>
                                <a href="../notifice">Thông báo</a>
                            </li> -->
                            <li>
                                <a href="../dang-xuat" class="btn-logout"><i class="icon icon-sign-out"
                                        aria-hidden="true"></i>
                                    Đăng xuất</a>
                            </li>
                            @else
                            <li class="login-ct">
                                <a href="../dang-nhap" class="btn-login">Đăng nhập</a>
                                <p>or</p>
                                <a href="../dang-ky-nhanh" class="btn-login">Đăng ký nhanh</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="left" hidden>
            <nav class="menu-main">
                <ul>
                <li class="nav-item logo hidden-xs hidden-sm"><a class="logo" href="{!! assetRemote('index') !!}"><img
                            src="{!! assetRemote('img/img-logo.png') !!}" alt="Logo truyện chú mèo con"></a></li>
                <li class="nav-item search">

                    <form class="search-form hidden-xs hidden-sm" action="/search" method="get">
                        <div class="txt-search-top">
                            <input type="text" name="q" placeholder="Search..">
                            <button class="icon icon-search btn"></button></div>
                    </form>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div id="main">
    <!--End Header-->