@extends('master')
@section('content')
@section('title', $posts->title)
@section('meta_description', $posts->summary)
@section('meta_author', $posts->author)
@section('meta_og_type', 'website')
@section('meta_og_url', assetRemote('bai-viet/'.$posts->slug))
@section('meta_og_image', assetRemote($posts->image))
@section('meta_og_description', $posts->summary)
@section('meta_og_title', $posts->title)
<link rel="stylesheet" href="../css/detail.css">
<section class="wrapper">
    <div class="container media container_page">
        <div class="media-body">
            <div class="detail-news">
                <h1 class="article-title">{{$posts->title}}</h1>
                <ul class="single-meta">
                    <li>Ngày viết {{$posts->time_creat}}</li>
                    <li><i class="icon icon-view"></i> {{$posts->num_view}} views</li>
                    <li class="social-detail">
                        <div class="fb-like" data-href="{!! assetRemote('bai-viet/'.$posts->slug) !!}" data-width=""
                            data-layout="button_count" data-action="like" data-size="small" data-show-faces="true"
                            data-share="true"></div>
                    </li>
                </ul>
                <div class="image-top">
                    <img src="{!! assetRemote($posts->image) !!}" alt="{{$posts->title}}">
                </div>
                <div>{!! $posts->content !!}</div>
                <p class="source"><a href="{!! assetRemote('tac-gia/'.$posts->id_account) !!}">{{$posts->author}} </a>
                    ({{$posts->source}})</p>
                <ul class="single-meta">
                    <li class="social-detail bottom">
                        <div class="fb-like" data-href="{!! assetRemote('bai-viet/'.$posts->slug) !!}" data-width=""
                            data-layout="button_count" data-action="like" data-size="small" data-show-faces="true"
                            data-share="true"></div>
                    </li>
                </ul>
                
            </div>
            @if (isset($connotation->connotation) && !empty($connotation->connotation))
            <div class="connotation-post">
                <h2>Ý nghĩa bài viết:</h2>
                <p>{!! $connotation->connotation !!}</p>
            </div>
            @endif
            @if (isset($connotation->question) && !empty($connotation->question))
            <div class="connotation-post">
                <h2>Câu hỏi thảo luận cùng bé:</h2>
                <p>{!! $connotation->question !!}</p>
            </div>
            @endif
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- quangcao_detail -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4664812161671730"
                    data-ad-slot="6741293709" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            <div class="related-post">
                <div class="heading02">
                    <h2>Bài cùng chủ đề</h2>
                </div>
                <div class="list-news grid related-post-grid">
                    @foreach($related_post as $key=>$item)
                    <article class="news-items">
                        <a href="{!! assetRemote('bai-viet/'.$item->slug) !!}"><img class="lazy image-related"
                                src="{!! assetRemote('img/bg-img.jpg') !!}" data-src="{!! assetRemote($item->image) !!}"
                                alt="{{$item->title}}"></a>
                        <div class="news-items-body">
                            <h3 class="title dotted-line-3"><a
                                    href="{!! assetRemote('bai-viet/'.$item->slug) !!}">{{$item->title}}</a></h3>
                            <div class="meta">
                                <time>{{$item->num_view}} views</time>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            <div class="fb-comments" data-href="{!! assetRemote('bai-viet/'.$posts->slug) !!}" data-width="100vh"
                data-numposts="5"></div>
        </div>
        @include('include.col_right_no_youtube')
    </div>
</section>

@endsection