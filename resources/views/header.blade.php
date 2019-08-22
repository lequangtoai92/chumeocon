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
                            <!-- <li>
                                <a href="../dang-phim-hoat-hinh">Đăng phim hoạt hình</a>
                            </li> -->
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
                                    Log out</a>
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
                                <li class="nav-item">
                                    <a class="dropdown-item" href="../truyen-moi">Truyện mới</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="../#" role="button" data-toggle="dropdown"
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
                </ul>
            </nav>
        </div>
    </div>
</div>
<div id="main">
    <header>
        <div class="header_middle">
            <div class="container header">
                <div class="search">
                    <button type="submit" class="hidden-md hidden-lg btn-search-mobile"><i
                            class="icon icon-search"></i></button>
                    <form class="search-form">
                        <div class="hidden-md hidden-lg header-search">
                            <a class="chevron left btn-back " href="#">Back</a>
                            <h3>Search</h3>
                        </div>
                        <div class="txt-search-top"><input type="text" placeholder="Enter Keyword"><i
                                class="icon icon-search"></i></div>
                        <div class="hidden-md hidden-lg suggestion">
                            <label>Recent search list</label>
                            <div class="recent-list">
                                <a href="detail.html">Parts & Gear</a>
                                <a href="detail.html">Columns</a>
                                <a href="detail.html">Motorcycle Review</a>
                                <a href="detail.html">Asia</a>
                                <a href="detail.html">Worldwide</a>
                                <a href="detail.html">Triumth</a>
                                <a href="detail.html">Custom Motorcycle</a>
                                <a href="detail.html">Honda cb250</a>
                                <a href="detail.html">Parts</a>
                                <a href="detail.html">News</a>
                            </div>
                        </div>
                    </form>
                </div>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"></a>
                <span class="btn-navmenu" onclick="openNav()">&#9776;</span>
                <a class="logo" href="../index"><img src="../img/img-logo.png" alt="Logo webike"></a>
            </div>
            <div class="media container menu_second">
                <nav class="media-body">
                    <ul>
                        <li><a href="../truyen-moi">Truyện mới</a></li>
                        <li class="dropdown">
                            <a class="nav-link" href="../">Cổ tích</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="chevron right" href="../co-tich-viet-nam">Cổ tích Việt Nam</a></li>
                                    <li><a class="chevron right" href="../co-tich-nhat-ban">Cổ tích Nhật Bản</a></li>
                                    <li><a class="chevron right" href="../truyen-co-grimms">Truyện cổ Grimms</a></li>
                                    <li><a class="chevron right" href="../than-thoai-hi-lap">Thần thoại Hi Lạp</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link" href="../phim-hoat-hinh">Phim hoạt hình</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="chevron right" href="../do-re-mon">Đô rê mon</a></li>
                                    <li><a class="chevron right" href="../tom-and-jerry">Tom and Jerry</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="../ca-dao-tuc-ngu">Cao dao tục ngữ</a></li>
                        <li><a href="../tho">Thơ</a></li>
                        <li><a href="../truyen-cuoi">Truyện cười</a></li>
                        <li><a href="../gop-y">Góp ý</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--End Header-->