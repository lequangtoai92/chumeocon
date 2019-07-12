@extends('master')
@section('content')
<link rel="stylesheet" href="css/info.css">
<section class="wrapper page-info">
    <div class="container media container_page">
        <div class="media-body">
            <div id="info_account" class="tabcontent" style="display: block;">
                <div class="row">
                    <div class="body-info body-left">
                        <div class="form-group">
                            <label for="user_name">Họ và tên</label><label class="user-name-import">(*)</label>
                            <input type="text" class="form-control" v-model="items.TK151" id="user_name"
                                placeholder="Họ và tên" name="user_name">
                        </div>
                        <div class="form-group">
                            <label for="user_id">Tên đăng nhập:</label>
                            <input type="text" class="form-control" placeholder="Tên đăng nhập" name="user_id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label><label class="email-import">(*)</label>
                            <input type="email" class="form-control" v-model="items.TK156" id="email"
                                placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="birthday">Ngày sinh</label><label class="birthday-import">(*)</label>
                            <input type="birthday" class="form-control" v-model="items.TK152" id="birthday"
                                placeholder="Ngày sinh" name="birthday">
                        </div>

                    </div>
                    <div class=" body-info body-right">
                        <div class="form-group">
                            <label for="sex">Giới tính</label><label class="sex-import">(*)</label>
                            <select class="form-control select-option" v-model="items.TK153">
                                <option class="select-option" disabled value="items.TK153"></option>
                                <option class="select-option" value="1">Nam</option>
                                <option class="select-option" value="2">Nữ</option>
                                <option class="select-option" value="3">Khác</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ:</label>
                            <input type="text" class="form-control" v-model="items.TK154" id="address"
                                placeholder="Địa chỉ" name="address">
                        </div>

                        <div class="form-group">
                            <label for="telephone">Số điện thoại:</label>
                            <input type="text" class="form-control" v-model="items.TK155" id="telephone"
                                placeholder="Số điện thoại" name="telephone">
                        </div>
                        <div class="form-group">
                            <label for="nickname">Biệt danh</label><label class="nickname-import">(*)</label>
                            <input type="text" class="form-control" v-model="items.TK157" id="nickname"
                                placeholder="nick name" name="nickname">
                        </div>
                    </div>
                    <div class="footer-info">
                        <ul class="list-button">
                            <button class="btn btn-success" id="updateDetails">Cập nhật</button>
                            <button class="btn btn-info" id="openInfo" href="">Giới thiệu</button>
                            <button class="btn btn-primary" id="openChangePW" href="">Đổi mật khẩu</button>
                        </ul>
                        <div class="group-scores">
                            <div class="heading">
                                <h2>Điểm</h2>
                            </div>
                            <div class="list-news">
                                <article class="media news-items">
                                    <div class="media-body news-items-body">
                                        <h3>Cấp bậc</h3>
                                        <div class="meta">
                                            <time>Tiếp sĩ</time>
                                        </div>
                                    </div>
																</article>
																<article class="media news-items">
                                    <div class="media-body news-items-body">
                                        <h3>Tổng điểm</h3>
                                        <div class="meta">
                                            <time>5000</time>
                                        </div>
                                    </div>
																</article>
																<article class="media news-items">
                                    <div class="media-body news-items-body">
                                        <h3>Đã sử dụng</h3>
                                        <div class="meta">
                                            <time>3000</time>
                                        </div>
                                    </div>
																</article>
																<article class="media news-items">
                                    <div class="media-body news-items-body">
                                        <h3>Còn lại</h3>
                                        <div class="meta">
                                            <time>2000</time>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden-sm hidden-xs sidebar">
            <div class="wrapper-youtube">
                <div class="heading">
                    <h2>MotoTube</h2>
                </div>
                <iframe width="300" height="250" src="https://www.youtube.com/embed/LopMoV5ahqg" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="wrapper-ranking">
                <div class="heading">
                    <h2>Viewed Ranking</h2>
                </div>
                <div class="list-news">
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news11.jpg" alt="name image">
                            <p class="ranking-num">1</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news11.jpg" alt="name image">
                            <p class="ranking-num">2</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news10.jpg" alt="name image">
                            <p class="ranking-num">3</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news09.jpg" alt="name image">
                            <p class="ranking-num">4</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news08.jpg" alt="name image">
                            <p class="ranking-num">5</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="follow-us">
                <div class="heading">
                    <h2>Follow Us</h2>
                </div>
                <ul class="follow-us-ct">
                    <li>
                        <a class="btn-facebook" href="#"><i class="icon icon-social-facebook-side"></i> facebook</a>
                    </li>
                    <li> <a class="btn-twitter" href="#"><i class="icon icon-social-twitter-side"></i> twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@include('include.dialog_intro')
@include('include.dialog_change_pass_word')

<!-- <script>
(function() {
  var updateButton = document.getElementById('updateDetails');
  var favDialog = document.getElementById('favDialog');
  updateButton.addEventListener('click', function() {
    favDialog.showModal();
  });
})();
</script> -->

@endsection