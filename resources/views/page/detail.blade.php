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
                        <div class="fb-like" data-href="{!! assetRemote('bai-viet/'.$posts->id) !!}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    </li>
                </ul>
                <div class="image-top">
                <img src="{!! assetRemote($posts->image) !!}">
                </div>
                <div><?php echo $posts->content ?></div>
                <p class="source"><a href="{!! assetRemote('tac-gia/'.$posts->id_account) !!}">{{$posts->author}} </a> ({{$posts->source}})</p>
                <ul class="single-meta">
                    <li class="social-detail bottom">
                        <div class="fb-like" data-href="{!! assetRemote('bai-viet/'.$posts->id) !!}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    </li>
                </ul>
            </div>
            <div class="related-post">
                <div class="heading02">
                    <h2>Bài cùng chủ đề</h2>
                </div>
                <div class="list-news grid related-post-grid">
                    @foreach($related_post as $key=>$item)
                    <article class="news-items">
                    <a href="{!! assetRemote('bai-viet/'.$item->id) !!}"><img class="lazy" src="{!! assetRemote('img/bg-img.jpg') !!}"
                        data-src="{!! assetRemote($item->image) !!}" alt="Name images"></a>
                        <div class="news-items-body">
                        <h3 class="title dotted-line-3"><a href="{!! assetRemote('bai-viet/'.$item->id) !!}">{{$item->title}}</a></h3>
                        <div class="meta">
                                <time>{{$item->num_view}} views</time>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            <div class="fb-comments" data-href="{!! assetRemote('bai-viet/'.$posts->id) !!}" data-width="100vh" data-numposts="5"></div>
        </div>
        @include('include.col_right_no_youtube')
    </div>
</section>

@endsection