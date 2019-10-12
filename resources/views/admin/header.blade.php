<div id="mySidenav" class="sidenav">
    <div class="container header_top">
        <div class="right">
            <ul class="social">
                <li><a href="../#" target="_blank"><i class="icon icon-social-facebook"></i></a></li>
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
                    <li class="nav-item show">
                        <a class="chevron right" href="javascript:void(0)"><i class="icon icon-wholesale"></i> Chú mèo
                            con</a>
                        <nav class="navbar hidden-md hidden-lg menu-media">
                            <ul class="navbar-nav">
                            @if(Auth::check())
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="../#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Cá nhân</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="../tai-khoan">Tài khoản</a>
                                        <a class="dropdown-item" href="../posts">Viết bài</a>
                                        <a class="dropdown-item" href="../dang-phim-hoat-hinh">Đăng phim hoạt hình</a>
                                        <a class="dropdown-item" href="../my-posts">Bài viết</a>
                                    </div>
                                </li>
                                @endif
                                <li class="nav-item">
                                    <a class="dropdown-item" href="../truyen-moi">Truyện mới</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="../co-tich" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Cổ tích</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="../co-tich-viet-nam">Cổ tích Việt Nam</a>
                                        <a class="dropdown-item" href="../co-tich-nhat-ban">Cổ tích Nhật Bản</a>
                                        <a class="dropdown-item" href="../truyen-co-grimms">Truyện cổ Grimms</a>
                                        <a class="dropdown-item" href="../than-thoai-hi-lap">Thần thoại Hi Lạp</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="../ca-dao-tuc-ngu">Ca dao - Tục ngữ</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="phim-hoat-hinh" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Phim hoạt hình</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="do-re-mon">Đô rê mon</a>
                                        <a class="dropdown-item" href="tom-and-jerry">Tom and Jerry</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="tho">Thơ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="../truyen-cuoi">Truyện cười</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="../gop-y">Góp ý</a>
                                </li>

                            </ul>
                        </nav>
                    </li>
                    <li class="nav-item"><a href="#" class="chevron right"><i class="icon icon-deals"></i> Special Deals</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div id="main">
    <!--End Header-->