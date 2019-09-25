@extends('master')
@section('content')
@section('title', 'Truyện chú mèo con')
@section('meta_description', 'Nơi lưu trữ những mẫu truyện hay, mang tính giáo dục để bố mẹ kể cho bé nghe nhằm giúp cho bé phát triển tư duy tốt hơn và gắn kết tình cảm giữa bố mẹ và con cái')
@section('meta_author', 'Truyện chú mèo con')
@section('meta_og_title', 'Truyện chú mèo con')
@section('meta_og_type', 'website')
@section('meta_og_url', 'http://truyenchumeocon.com')
@section('meta_og_image', 'http://truyenchumeocon.com/img/img-logo.png')
@section('meta_og_description', 'Nơi lưu trữ những mẫu truyện hay, mang tính giáo dục để bố mẹ kể cho bé nghe nhằm giúp cho bé phát triển tư duy tốt hơn và gắn kết tình cảm giữa bố mẹ và con cái')

<section class="wrapper">
    <div class="container media container_page">
        <div class="media-body">
            <div class="list-news">
                <form action="{{route('upload')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="file" name="filesTest" required="true" id="myFile">
                    <br />
                    <input type="submit" value="upload">
                </form>
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
@endsection