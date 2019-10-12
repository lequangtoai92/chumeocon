<div id="mySidenav" class="sidenav">
    <div class="container header_top">
        <div class="right">
            <ul class="social">
                <li><a href="https://www.facebook.com/Truy%E1%BB%87n-ch%C3%BA-m%C3%A8o-con-104213484322000/" target="_blank"><i class="icon icon-social-facebook"></i></a></li>
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
                    <a href="{!! assetRemote('dang-nhap') !!}" class="btn-register"><i class="icon icon-user"
                            aria-hidden="true"></i> Đăng
                        nhập</a>
                    <span class="hidden-xs hidden-sm">|</span>
                    <a href="{!! assetRemote('dang-ky') !!}" class="btn-register">Đăng ký</a>
                    @endif
                    <div class="hidden-xs hidden-sm sub dropdown-menu sub-menu-user">
                        <ul class="sub-menu-user">
                            @if(Auth::check())
                            @if (Auth::user()->authorities < 3 ) <li>
                                <a href="{!! assetRemote('admin') !!}">Admin</a>
                </li>
                @endif
                <li>
                    <a href="{!! assetRemote('tai-khoan') !!}">Tài khoản</a>
                </li>
                <li>
                    <a href="{!! assetRemote('posts') !!}">Viết bài</a>
                </li>
                <li>
                    <a href="{!! assetRemote('dang-phim-hoat-hinh') !!}">Đăng phim hoạt hình</a>
                </li>
                <li>
                    <a href="{!! assetRemote('my-posts') !!}">Bài viết</a>
                </li>
                <!-- <li>
                                <a href="{!! assetRemote('messages') !!}">Tin nhắn</a>
                            </li>
                            <li>
                                <a href="{!! assetRemote('notifice') !!}">Thông báo</a>
                            </li> -->
                <li>
                    <a href="{!! assetRemote('dang-xuat') !!}" class="btn-logout"><i class="icon icon-sign-out"
                            aria-hidden="true"></i>
                        Đăng xuất</a>
                </li>
                @else
                <li class="login-ct">
                    <a href="{!! assetRemote('dang-nhap') !!}" class="btn-login">Đăng nhập</a>
                    <p>or</p>
                    <a href="{!! assetRemote('dang-ky-nhanh') !!}" class="btn-login">Đăng ký nhanh</a>
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
                <li class="nav-item search">    
                    <form class="search-form hidden-xs hidden-sm" action="/search" method="get">
                        <div class="txt-search-top">
                            <input type="text" name="q" placeholder="Search..">
                            <button class="icon icon-search btn"></button></div>
                    </form>   
                    <nav class="navbar hidden-md hidden-lg menu-media">
                        <ul class="navbar-nav">
                            @if(Auth::check())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="../#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Cá nhân</a>
                                <div class="dropdown-menu">
                                    @if (Auth::user()->authorities < 3 ) <a class="dropdown-item"
                                        href="{!! assetRemote('tai-khoan') !!}">Admin</a>
                                        @endif
                                        <a class="dropdown-item" href="{!! assetRemote('tai-khoan') !!}">Tài khoản</a>
                                        <a class="dropdown-item" href="{!! assetRemote('posts') !!}">Viết bài</a>
                                        <a class="dropdown-item" href="{!! assetRemote('dang-phim-hoat-hinh') !!}">Đăng
                                            phim hoạt hình</a>
                                        <a class="dropdown-item" href="{!! assetRemote('my-posts') !!}">Bài viết</a>
                                </div>
                            </li>
                            @endif
                            <li class="nav-item">
                                <a class="dropdown-item" href="{!! assetRemote('truyen-moi') !!}">Truyện mới</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{!! assetRemote('co-tich') !!}" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cổ tích</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{!! assetRemote('co-tich-viet-nam') !!}">Cổ tích
                                        Việt Nam</a>
                                    <a class="dropdown-item" href="{!! assetRemote('co-tich-nhat-ban') !!}">Cổ tích
                                        Nhật Bản</a>
                                    <a class="dropdown-item" href="{!! assetRemote('truyen-co-grimms') !!}">Truyện cổ
                                        Grimms</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{!! assetRemote('ca-dao-tuc-ngu') !!}">Ca dao - Tục
                                    ngữ</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="phim-hoat-hinh" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Phim hoạt
                                    hình</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="do-re-mon">Đô rê mon</a>
                                    <a class="dropdown-item" href="tom-and-jerry">Tom and Jerry</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="tho">Thơ</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{!! assetRemote('ve') !!}">Vè</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{!! assetRemote('cau-do') !!}">Câu đố</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="dropdown-item" href="{!! assetRemote('tin-tuc') !!}">Tin tức</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="dropdown-item" href="{!! assetRemote('truyen-cuoi') !!}">Truyện cười</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{!! assetRemote('gop-y') !!}">Góp ý</a>
                            </li>

                        </ul>
                    </nav>
                </li>
                <!-- <li class="nav-item logo">
                <a class="logo" href="{!! assetRemote('index') !!}"><img src="{!! assetRemote('img/img-logo.png') !!}"
                        alt="Logo truyện chú mèo con"></a>
                </li> -->
            </ul>
        </nav>
    </div>
</div>
</div>
<div class="background">
<div class="container container-page">
<div id="main">
    <header>
        <div class="header_middle">
            <div class="container header">
                <div class="search">
                    <button type="submit" class="hidden-md hidden-lg btn-search-mobile"><i
                            class="icon icon-search"></i></button>
                    <form class="search-form" action="/search" method="get">
                        <div class="hidden-md hidden-lg header-search">
                            <a class="chevron left btn-back " href="#">Back</a>
                            <h3>Search</h3>
                        </div>
                        <div class="txt-search-top hidden-md hidden-lg"><input type="text" name="q" placeholder="Search.."><i
                                class="icon icon-search"></i></div>
                    </form>
                </div>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"></a>
                <span class="btn-navmenu" onclick="openNav()">&#9776;</span>
                <a class="logo" href="{!! assetRemote('index') !!}"><img src="{!! assetRemote('img/img-logo.png') !!}"
                        alt="Logo truyện chú mèo con"></a>
            </div>
            <div class="media container menu_second">
                <nav class="media-body">
                    <ul>
                        <li><a href="{!! assetRemote('truyen-moi') !!}">Truyện mới</a></li>
                        <li class="dropdown">
                            <a class="nav-link" href="{!! assetRemote('co-tich') !!}">Cổ tích</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="chevron right" href="{!! assetRemote('co-tich-viet-nam') !!}">Cổ
                                            tích Việt Nam</a></li>
                                    <li><a class="chevron right" href="{!! assetRemote('co-tich-nhat-ban') !!}">Cổ
                                            tích Nhật Bản</a></li>
                                    <li><a class="chevron right" href="{!! assetRemote('truyen-co-grimms') !!}">Truyện
                                            cổ Grimms</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link" href="{!! assetRemote('phim-hoat-hinh') !!}">Phim hoạt hình</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="chevron right" href="{!! assetRemote('do-re-mon') !!}">Đô rê mon</a>
                                    </li>
                                    <li><a class="chevron right" href="{!! assetRemote('tom-and-jerry') !!}">Tom and
                                            Jerry</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="{!! assetRemote('ca-dao-tuc-ngu') !!}">Cao dao tục ngữ</a></li>
                        <li><a href="{!! assetRemote('tho') !!}">Thơ</a></li>
                        <li><a href="{!! assetRemote('ve') !!}">Vè</a></li>
                        <li><a href="{!! assetRemote('cau-do') !!}">Câu đố</a></li>
                        <!-- <li><a href="{!! assetRemote('tin-tuc') !!}">Tin tức</a></li> -->
                        <li><a href="{!! assetRemote('truyen-cuoi') !!}">Truyện cười</a></li>
                        <li><a href="{!! assetRemote('gop-y') !!}">Góp ý</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--End Header-->