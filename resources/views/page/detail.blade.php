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
                        <!-- <a href=""><i class="icon icon-detail-facebook"></i></a>
                        <a href=""><i class="icon icon-detail-twitter"></i></a>
                        <a href=""><i class="icon icon-detail-like"></i></a> -->
                        <div class="fb-like" data-href="http://chumeocon.com/bai-viet/{{$posts->id}}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    </li>
                </ul>
                <div><?php echo $posts->content ?></div>
                <!-- <div>{{$posts->content}}</div> -->
                <p class="source" href="../tac-gia/{{$posts->id_account}}"><a href="../tac-gia/{{$posts->id_account}}">{{$posts->author}} </a> ({{$posts->source}})</p>
                <ul class="single-meta">
                    <li class="social-detail bottom">
                        <!-- <a href=""><i class="icon icon-detail-facebook"></i></a>
                        <a href=""><i class="icon icon-detail-twitter"></i></a>
                        <a href=""><i class="icon icon-detail-like"></i></a> -->
                        <div class="fb-like" data-href="http://chumeocon.com/bai-viet/{{$posts->id}}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
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
            <!-- <div class="fb-comments" data-href="http://chumeocon.com/bai-viet/{{$posts->id}}" data-width="100vh" data-numposts="5"></div> -->
        </div>
        @include('include.col-right')
    </div>
</section>

@endsection