@extends('master')
@section('content')
<link rel="stylesheet" href="css/my-posts.css">
<section class="wrapper page-my-posts">
    <div class="container media container_page">
        <div class="media-body">
            <div class="list-news">
            @foreach($list_posts as $key=>$item)
                @if ($key == 4)
                <div class="ads">
                    <a href="#">
                        <img src="img/img_test/ad/img-ad01.png" alt="name image">
                    </a>
                </div>
                @endif
                <article class="news-items">
                    <a href="../bai-viet/{{$item->id}}">
                        <img class="lazy" src="img/bg-img.jpg" data-src="{{$item->image}}"
                            alt="name image">
                    </a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a class="dotted-line-1" href="{{$item->categories}}">{{$item->name_categories}}</a></p>
                        <h3 class="title"><a href="../bai-viet/{{$item->id}}">{{$item->title}}</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">{{$item->summary}}</p>
                        <div class="meta">
                            <time>{{$item->num_view}} views</time>
                            <ul class="list-button">
                                <a class="btn btn-danger" onclick="myFunction({{$item->id}})" >Xóa</a>
                                <a class="btn btn-primary" href="../change-my-posts/{{$item->id}}">Chỉnh sửa</a>
                            </ul>
                        </div>
                    </div>
                </article>
                @endforeach
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
                                    Boom? 2019-2020 KATANA Revives on Neoclassic Boom?</a></h3>
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
                        <div class="fb-page"
                            data-href="https://www.facebook.com/WebikeJapan/?__tn__=%2Cd%2CP-R&eid=ARCWwrr5S8PpLip_zYBVEWzrsxtEbqkOKbGy4BWAfo64LytNa2ZzSRQ7jAmB7pGlOEAhMBWlUKf18ESx"
                            data-width="340" data-hide-cover="false" data-show-facepile="true"></div>
                    </li>
                    <li>
                        <a class="twitter-timeline" data-width="272" data-height="700" data-dnt="true"
                            data-link-color="#2B7BB9" href="https://twitter.com/WebikeJapan?ref_src=twsrc%5Etfw">Tweets
                            by WebikeJapan</a>
                        <!--<a class="btn-twitter" href="#"><span><i class="icon icon-social-twitter-side"></i></span> twitter</a>-->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script src="../js/user.js"></script>
<!--Footer-->
@endsection