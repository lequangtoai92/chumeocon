@extends('master')
@section('content')
<link rel="stylesheet" href="css/signin.css">
<section class="wrapper page page-signin">
    <div class="container media container_page">
        <div class="media-body">
            <form action="{{route('signin')}}" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                @if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}}
							@endforeach
						</div>
					@endif
					@if(Session::has('thanhcong'))
						<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
					@endif
                    <div class="col-left">
                        <div class="form-block">
                            <label for="your_last_name">Họ và tên(*)</label>
                            <input type="text" name="fullname" required>
                        </div>

                        <div class="form-block">
                            <label for="username">Tên đăng nhập(*)</label>
                            <input type="text" name="username" required>
                        </div>

                        <div class="form-block">
                            <label for="email">Email address(*)</label>
                            <input type="email" name="email" required>
                        </div>

                        <div class="form-block">
                            <label for="password">Mật khẩu(*)</label>
                            <input type="password" name="password" required>
                        </div>
                        <div class="form-block">
                            <label for="password">Nhập lại mật khẩu(*)</label>
                            <input type="password" name="re_password" required>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="form-block">
                            <label for="birdth">Ngày sinh</label>
                            <input data-toggle="datepicker-birthday" name="birdth">
                        </div>

                        <div class="form-block">
                            <label for="gender">Giới tính</label>
                            <input type="text" name="gender">
                        </div>

                        <div class="form-block">
                            <label for="adress">Địa chỉ</label>
                            <input type="text" name="address">
                        </div>


                        <div class="form-block">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                        </div>

                        <div class="form-block">
                            <label for="phone">Biệt danh</label>
                            <input type="text" name="nickname">
                        </div>
                    </div>


                    <div class="form-block col-button">
                        <button type="submit" class="btn btn-primary">Đăng ký</button>
                    </div>

                </div>
            </form>
        </div>
        <div class="hidden-sm hidden-xs sidebar">
            <div class="wrapper-youtube">
                <div class="heading">
                    <h2>MotoTube</h2>
                </div>
                <!-- <iframe width="300" height="250" src="https://www.youtube.com/embed/LopMoV5ahqg" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe> -->
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
@endsection