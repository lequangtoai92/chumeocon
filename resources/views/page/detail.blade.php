@extends('master')
@section('content')
<link rel="stylesheet" href="../css/detail.css">
<section class="wrapper">
    <div class="container media container_page">
        <div class="media-body">
            <div class="detail-news">
                <h1 class="article-title">{{$posts->title}}</h1>
                <ul class="single-meta">
                    <li>Update {{$posts->time_creat}}</li>
                    <li><i class="icon icon-view"></i> {{$posts->num_view}} views</li>
                    <li class="social-detail">
                        <a href=""><i class="icon icon-detail-facebook"></i></a>
                        <a href=""><i class="icon icon-detail-twitter"></i></a>
                        <a href=""><i class="icon icon-detail-like"></i></a>
                    </li>
                </ul>
                <div><?php echo $posts->content ?></div>
                <!-- <div>{{$posts->content}}</div> -->
                <p class="source">({{$posts->source}})</p>
                <ul class="single-meta">
                    <li class="social-detail bottom">
                        <a href=""><i class="icon icon-detail-facebook"></i></a>
                        <a href=""><i class="icon icon-detail-twitter"></i></a>
                        <a href=""><i class="icon icon-detail-like"></i></a>
                    </li>
                </ul>
            </div>
            <div class="recommendation">
                <p><a href="#">See SUZUKI Moto Index Page</a></p>
                <p><a href="#">See Accessories for SUZUKI GSX-R1000R</a></p>
                <p><a href="#">See Accessories for SUZUKI GSX1100S KATANA (GS1100S)</a></p>
            </div>
            <div class="related-post">
                <div class="heading02">
                    <h2>Related Post</h2>
                </div>
                <div class="list-news grid related-post-grid">
                    <article class="news-items">
                        <a href=""><img class="lazy" src="../img/bg-img.jpg" data-src="../img/img_test/news/img-news11.jpg"
                                alt="name image"></a>
                        <div class="news-items-body">
                            <h3 class="title dotted-line-3"><a href="#">The initial production of Engine Cover and Oil
                                    Pump Cover for Kawasaki Z1/Z2 are completed.</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="news-items">
                        <a href=""><img class="lazy" src="../img/bg-img.jpg" data-src="../img/img_test/news/img-news10.jpg"
                                alt="name image"></a>
                        <div class="news-items-body">
                            <h3 class="title dotted-line-3"><a href="#">The initial production of Engine Cover and Oil
                                    Pump Cover for Kawasaki Z1/Z2 are completed.</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="news-items">
                        <a href=""><img class="lazy" src="../img/bg-img.jpg" data-src="../img/img_test/news/img-news09.jpg"
                                alt="name image"></a>
                        <div class="news-items-body">
                            <h3 class="title dotted-line-3"><a href="#">The initial production of Engine Cover and Oil
                                    Pump Cover for Kawasaki Z1/Z2 are completed.</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="news-items">
                        <a href=""><img class="lazy" src="../img/bg-img.jpg" data-src="../img/img_test/news/img-news08.jpg"
                                alt="name image"></a>
                        <div class="news-items-body">
                            <h3 class="title dotted-line-3"><a href="#">The initial production of Engine Cover and Oil
                                    Pump Cover for Kawasaki Z1/Z2 are completed.</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="hidden-sm hidden-xs sidebar">
            <div>
                <a href="#">
                    <img img width="300" height="250" class="lazy" src="../img/bg-img.jpg"
                        data-src="../img/img_test/ad/img-ad02.png" alt="">
                </a>
            </div>
            <div class="wrapper-ranking">
                <div class="heading">
                    <h2>Viewed Ranking</h2>
                </div>
                <div class="list-news">
                    <article class="media news-items">
                        <a href=""><img width="105" height="80" class="lazy" src="../img/bg-img.jpg"
                                data-src="../img/img_test/news/img-news11.jpg" alt="name image">
                            <p class="ranking-num">1</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title"><a href="#">2019-2020 KATANA Revives on Neoclassic Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href=""><img width="105" height="80" class="lazy" src="../img/bg-img.jpg"
                                data-src="../img/img_test/news/img-news10.jpg" alt="name image">
                            <p class="ranking-num">2</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="#">2019-2020 KATANA Revives on Neoclassic Boom?</a>
                            </h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href=""><img width="105" height="80" class="lazy" src="../img/bg-img.jpg"
                                data-src="../img/img_test/news/img-news07.jpg" alt="name image">
                            <p class="ranking-num">3</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="#">2019-2020 KATANA Revives on Neoclassic Boom?</a>
                            </h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href=""><img width="105" height="80" class="lazy" src="../img/bg-img.jpg"
                                data-src="../img/img_test/news/img-news09.jpg" alt="name image">
                            <p class="ranking-num">4</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="#">2019-2020 KATANA Revives on Neoclassic Boom?</a>
                            </h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href=""><img width="105" height="80" class="lazy" src="../img/bg-img.jpg"
                                data-src="../img/img_test/news/img-news08.jpg" alt="name image">
                            <p class="ranking-num">5</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="#">2019-2020 KATANA Revives on Neoclassic Boom?</a>
                            </h3>
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