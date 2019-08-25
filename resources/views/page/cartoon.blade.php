@extends('master')
@section('content')
<link rel="stylesheet" href="../css/cartoon.css">
<section class="wrapper">
    <div class="container media container_page">
        <div class="media-body">
            <div class="list-mototube">
                @foreach($list_posts as $key=>$item)
                <article class="mototube-items">
                    <a>
                        <input id="value_iframe" type="hidden" value="{{$item->summary}}">
                        <img class="lazy thumb-mototube" src="img/bg-img.jpg" data-src="{{$item->image}}"
                            alt="Name images">
                        <i class="video-play-button" href="#"><span></span></i>
                    </a>
                    <div class="mototube-items-body">
                        <h3 class="title dotted-line-2">{{$item->title}}</h3>
                        <div class="meta">
                            <a href="#" class="hidden-md hidden-lg"><i class="icon icon-like"></i> 1</a> <a href="#"
                                class="hidden-md hidden-lg "><i class="icon icon-dislike"> </i>0</a><time><i
                                    class="icon icon-viewtube hidden-md hidden-lg"> </i>{{$item->num_view}}
                                views</time>
                        </div>
                    </div>
                </article>
                @endforeach
                <!-- <article class="mototube-items">
                    <a>
                        <img class="lazy thumb-mototube" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news03.jpg" />
                        <i class="video-play-button" href="#"><span></span></i>
                    </a>
                    <div class="mototube-items-body">
                        <h3 class="title dotted-line-2">[Webike Motoreport] CBR1000RR SP Test ride</h3>
                        <div class="meta">
                            <a href="#" class="hidden-md hidden-lg"><i class="icon icon-like"></i> 1</a> <a href="#"
                                class="hidden-md hidden-lg "><i class="icon icon-dislike"> </i>0</a><time><i
                                    class="icon icon-viewtube hidden-md hidden-lg"> </i>81,083 views</time>
                        </div>
                    </div>
                </article> -->
            </div>
        </div>
        <div class="hidden-sm hidden-xs sidebar">
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
                            <h3 class="title dotted-line-3"><a href="../bai-viet/{{$item->id}}">{{$item->title}}</a>
                            </h3>
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
                            <h3 class="title dotted-line-3"><a href="../bai-viet/{{$item->id}}">{{$item->title}}</a>
                            </h3>
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
<script>

</script>
@endsection