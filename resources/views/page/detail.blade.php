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
                <p class="source" href="../tac-gia/{{$posts->id_account}}"><a href="../tac-gia/{{$posts->id_account}}">{{$posts->author}} </a> ({{$posts->source}})</p>
                <ul class="single-meta">
                    <li class="social-detail bottom">
                        <a href=""><i class="icon icon-detail-facebook"></i></a>
                        <a href=""><i class="icon icon-detail-twitter"></i></a>
                        <a href=""><i class="icon icon-detail-like"></i></a>
                    </li>
                </ul>
            </div>
            <!-- <div class="recommendation"> -->
                <!-- <p><a href="#">See SUZUKI Moto Index Page</a></p>
                <p><a href="#">See Accessories for SUZUKI GSX-R1000R</a></p>
                <p><a href="#">See Accessories for SUZUKI GSX1100S KATANA (GS1100S)</a></p> -->
            <!-- </div> -->
            <div class="related-post">
                <div class="heading02">
                    <h2>Related Post</h2>
                </div>
                <div class="list-news grid related-post-grid">
                    @foreach($related_post as $key=>$item)
                    <article class="news-items">
                    <a href="../bai-viet/{{$item->id}}"><img class="lazy" src="img/bg-img.jpg"
                        data-src="{{$item->image}}" alt="Name images"></a>
                        <div class="news-items-body">
                        <h3 class="title dotted-line-3"><a href="../bai-viet/{{$item->id}}">{{$item->title}}</a></h3>
                        <div class="meta">
                                <time>{{$item->num_view}} views</time>
                            </div>
                        </div>
                    </article>
                    @endforeach
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
                    <h2>Xem nhiều trong tuần</h2>
                </div>
                <div class="list-news">
                    @foreach($list_ranking_week as $key=>$item)
                    <article class="media news-items">
                    <a href="../bai-viet/{{$item->id}}"><img class="lazy" src="img/bg-img.jpg"
                        data-src="{{$item->image}}" alt="Name images">
                            <p class="ranking-num">{{$key + 1}}</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="../bai-viet/{{$item->id}}">{{$item->title}}</a></h3>
                            <div class="meta">
                                <time>{{$item->num_view}} views</time>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            <div class="wrapper-ranking">
                <div class="heading">
                    <h2>Xem nhiều trong tháng</h2>
                </div>
                <div class="list-news">
                    @foreach($list_ranking_month as $key=>$item)
                    <article class="media news-items">
                    <a href="../bai-viet/{{$item->id}}"><img class="lazy" src="img/bg-img.jpg"
                        data-src="{{$item->image}}" alt="Name images">
                            <p class="ranking-num">{{$key + 1}}</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="../bai-viet/{{$item->id}}">{{$item->title}}</a></h3>
                            <div class="meta">
                                <time>{{$item->num_view}} views</time>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection