@extends('master')
@section('content')
<link rel="stylesheet" href="{!! assetRemote('css/new_index.css') !!}">
<section class="wrapper">
    <div class="container media container_page hidden-xs hidden-sm">
        <div class="media-body">
            <div class="module_title">
                <h2>Truyện mới</h2>
                <a href="{!! assetRemote('truyen-moi') !!}" class="module_title_more" title="Truyện chú mèo con - truyện mới">Xem thêm</a>
            </div>
            <div class="block-slide-one">
                <div class="owl-carousel slider-top slider-top-one">
                    @foreach($list_new_story as $key=>$item)
                    <div class="item">
                        <a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - truyện mới">
                            <p><time><i class="icon icon-view"></i>{{$item->num_view}}</time></p>
                            <p class="caption-owl-news">{{$item->summary}}</p>
                            <img class="lazy" src="img/bg-img.jpg" data-src="{{$item->image}}" alt="{{$item->title}}">
                        </a>
                        <div class="owl-detail">
                            <h3 class="dotted-line-2">{{$item->title}}</h3>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="list-post-one">
                    <ul>
                        @foreach($list_new_story as $key=>$item)
                        <li>
                            <a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - truyện mới">
                                <figure class="col-width-fix">
                                    <img class="lazy" src="img/bg-img.jpg"
                                        data-src="{{$item->image}}" alt="{{$item->title}}"></figure>
                                <div class="col-width-auto info">
                                    <p class="dotted-line-3">{{$item->summary}}</p>
                                    <h3 class="title dotted-line-2">{{$item->title}}</h3>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="module_title">
                <h2>Truyện cổ tích</h2>
                <a href="{!! assetRemote('co-tich') !!}" class="module_title_more" title="Truyện chú mèo con - truyện cổ tích">Xem thêm</a>
            </div>
            <div class="owl-carousel slider-top slider-top-two">
                @foreach($list_fairy_tales as $key=>$item)
                <div class="item">
                    <a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - truyện cổ tích">
                        <p><time><i class="icon icon-view"></i>{{$item->num_view}}</time></p>
                        <p class="caption-owl-news dotted-line-3">{{$item->summary}}</p>
                        <img class="lazy" src="img/bg-img.jpg" data-src="{{$item->image}}" alt="{{$item->title}}">
                    </a>
                    <div class="owl-detail">
                        <h3 class="dotted-line-2">{{$item->title}}</h3>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="module_title">
                <h2>Thơ</h2>
                <a href="{!! assetRemote('tho') !!}" class="module_title_more" title="Truyện chú mèo con - thơ">Xem thêm</a>
            </div>
            <div class="owl-carousel slider-top slider-top-two">
                @foreach($list_verse as $key=>$item)
                <div class="item">
                    <a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - thơ">
                        <p><time><i class="icon icon-view"></i>{{$item->num_view}}</time></p>
                        <p class="caption-owl-news dotted-line-3">{{$item->summary}}</p>
                        <img class="lazy" src="img/bg-img.jpg" data-src="{{$item->image}}" alt="{{$item->title}}">
                    </a>
                    <div class="owl-detail">
                        <h3 class="dotted-line-2">{{$item->title}}</h3>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="module_title">
                <h2>Vè</h2>
                <a href="{!! assetRemote('ve') !!}" class="module_title_more" title="Truyện chú mèo con - vè">Xem thêm</a>
            </div>
            <div class="owl-carousel slider-top slider-top-two">
                @foreach($list_ve as $key=>$item)
                <div class="item">
                    <a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - vè">
                        <p><time><i class="icon icon-view"></i>{{$item->num_view}}</time></p>
                        <p class="caption-owl-news dotted-line-3">{{$item->summary}}</p>
                        <img class="lazy" src="img/bg-img.jpg" data-src="{{$item->image}}" alt="{{$item->title}}">
                    </a>
                    <div class="owl-detail">
                        <h3 class="dotted-line-2">{{$item->title}}</h3>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="module_title">
                <h2>Câu đố</h2>
                <a href="{!! assetRemote('cau-do') !!}" class="module_title_more" title="Truyện chú mèo con - câu đố">Xem thêm</a>
            </div>
            <div class="owl-carousel slider-top slider-top-two">
                @foreach($list_quiz as $key=>$item)
                <div class="item">
                    <a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - câu đố">
                        <p><time><i class="icon icon-view"></i>{{$item->num_view}}</time></p>
                        <p class="caption-owl-news dotted-line-3">{{$item->summary}}</p>
                        <img class="lazy" src="img/bg-img.jpg" data-src="{{$item->image}}" alt="{{$item->title}}">
                    </a>
                    <div class="owl-detail">
                        <h3 class="dotted-line-2">{{$item->title}}</h3>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="module_title">
                <h2>Truyện cười</h2>
                <a href="{!! assetRemote('truyen-cuoi') !!}" class="module_title_more" title="Truyện chú mèo con - truyện cười">Xem thêm</a>
            </div>
            <div class="owl-carousel slider-top slider-top-two">
                @foreach($list_funny_story as $key=>$item)
                <div class="item">
                    <a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - truyện cười">
                        <p><time><i class="icon icon-view"></i>{{$item->num_view}}</time></p>
                        <p class="caption-owl-news dotted-line-3">{{$item->summary}}</p>
                        <img class="lazy" src="img/bg-img.jpg" data-src="{{$item->image}}" alt="{{$item->title}}">
                    </a>
                    <div class="owl-detail">
                        <h3 class="dotted-line-2">{{$item->title}}</h3>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="module_title">
                <h2>Bài hot trong tuần</h2>
            </div>
            <div class="owl-carousel slider-top slider-top-ranking">
                @foreach($list_ranking_week as $key=>$item)
                <div class="item">
                    <a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - {{$item->title}}">
                        <p><time><i class="icon icon-view"></i>{{$item->num_view}}</time></p>
                        <img class="lazy" src="img/bg-img.jpg" data-src="{{$item->image}}" alt="{{$item->title}}">
                    </a>
                    <div class="owl-detail">
                        <h3 class="dotted-line-2">{{$item->title}}</h3>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="wrapper hidden-md hidden-lg">
    <div class="module_title">
        <h2>Truyện mới</h2>
        <a href="{!! assetRemote('truyen-moi') !!}" class="module_title_more">Xem thêm</a>
    </div>
    <div class="wrapper-slider-top">
        <div class="owl-carousel list-news">
            @foreach($list_new_story as $key=>$item)
            <div class="news-items">
                <a class="tag-image" href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - {{$item->title}}">
                    <p><time><i class="icon icon-view"></i>{{$item->num_view}}</time></p>
                    <img class="lazy" src="img/bg-img.jpg" data-src='{{$item->image}}' alt="{{$item->title}}">
                    <p class="dotted-line-7 summary">{{$item->summary}}</p>
                </a>
                <div class="news-items-body">
                    <h3 class="title"><a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - {{$item->title}}">{{$item->title}}</a></h3>
                    <div class="meta">
                        <time>{{$item->num_view}} views</time>
                        <a class="category" href="../tac-gia/{{$item->id_account}}"title="Truyện chú mèo con - {{$item->author}}">{{$item->author}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="module_title">
        <h2>Truyện cổ tích</h2>
        <a href="{!! assetRemote('co-tich') !!}" class="module_title_more" title="Truyện chú mèo con - truyện cổ tích">Xem thêm</a>
    </div>
    <div class="wrapper-slider-top">
        <div class="owl-carousel list-news">
            @foreach($list_fairy_tales as $key=>$item)
            <div class="news-items">
                <a class="tag-image" href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - truyện cổ tích">
                    <p><time><i class="icon icon-view"></i>{{$item->num_view}}</time></p>
                    <img class="lazy" src="img/bg-img.jpg" data-src='{{$item->image}}' alt="{{$item->title}}">
                    <p class="dotted-line-7 summary  hidden-md hidden-lg">{{$item->summary}}</p>
                </a>
                <div class="news-items-body">
                    <h3 class="title"><a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - {{$item->title}}">{{$item->title}}</a></h3>
                    <div class="meta">
                        <time>{{$item->num_view}} views</time>
                        <a class="category" href="../tac-gia/{{$item->id_account}}" title="Truyện chú mèo con - {{$item->author}}">{{$item->author}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="module_title">
        <h2>Thơ</h2>
        <a href="{!! assetRemote('tho') !!}" class="module_title_more" title="Truyện chú mèo con - thơ">Xem thêm</a>
    </div>
    <div class="wrapper-slider-top">
        <div class="owl-carousel list-news">
            @foreach($list_verse as $key=>$item)
            <div class="news-items">
                <a class="tag-image" href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - {{$item->title}}">
                    <p><time><i class="icon icon-view"></i>{{$item->num_view}}</time></p>
                    <img class="lazy" src="img/bg-img.jpg" data-src='{{$item->image}}' alt="{{$item->title}}">
                    <p class="dotted-line-7 summary  hidden-md hidden-lg">{{$item->summary}}</p>
                </a>
                <div class="news-items-body">
                    <h3 class="title"><a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - {{$item->title}}">{{$item->title}}</a></h3>
                    <div class="meta">
                        <time>{{$item->num_view}} views</time>
                        <a class="category" href="../tac-gia/{{$item->id_account}}" title="Truyện chú mèo con - {{$item->author}}">{{$item->author}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <div class="module_title">
        <h2>Vè</h2>
        <a href="{!! assetRemote('ve') !!}" class="module_title_more" title="Truyện chú mèo con - vè">Xem thêm</a>
    </div>
    <div class="wrapper-slider-top">
        <div class="owl-carousel list-news">
            @foreach($list_ve as $key=>$item)
            <div class="news-items">
                <a class="tag-image" href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - {{$item->title}}">
                    <p><time><i class="icon icon-view"></i>{{$item->num_view}}</time></p>
                    <img class="lazy" src="img/bg-img.jpg" data-src='{{$item->image}}' alt="{{$item->title}}">
                    <p class="dotted-line-7 summary  hidden-md hidden-lg">{{$item->summary}}</p>
                </a>
                <div class="news-items-body">
                    <h3 class="title"><a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - {{$item->title}}">{{$item->title}}</a></h3>
                    <div class="meta">
                        <time>{{$item->num_view}} views</time>
                        <a class="category" href="../tac-gia/{{$item->id_account}}" title="Truyện chú mèo con - author">{{$item->author}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <div class="module_title">
        <h2>Câu đố</h2>
        <a href="{!! assetRemote('cau-do') !!}" class="module_title_more" title="Truyện chú mèo con - câu đố">Xem thêm</a>
    </div>
    <div class="wrapper-slider-top">
        <div class="owl-carousel list-news">
            @foreach($list_quiz as $key=>$item)
            <div class="news-items">
                <a class="tag-image" href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - {{$item->title}}">
                    <p><time><i class="icon icon-view"></i>{{$item->num_view}}</time></p>
                    <img class="lazy" src="img/bg-img.jpg" data-src='{{$item->image}}' alt="{{$item->title}}">
                    <p class="dotted-line-7 summary  hidden-md hidden-lg">{{$item->summary}}</p>
                </a>
                <div class="news-items-body">
                    <h3 class="title"><a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - {{$item->title}}">{{$item->title}}</a></h3>
                    <div class="meta">
                        <time>{{$item->num_view}} views</time>
                        <a class="category" href="../tac-gia/{{$item->id_account}}" title="Truyện chú mèo con - {{$item->author}}">{{$item->author}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <div class="module_title">
        <h2>Truyện cười</h2>
        <a href="{!! assetRemote('truyen-cuoi') !!}" class="module_title_more" title="Truyện chú mèo con - truyện cười">Xem thêm</a>
    </div>
    <div class="wrapper-slider-top">
        <div class="owl-carousel list-news">
            @foreach($list_funny_story as $key=>$item)
            <div class="news-items">
                <a class="tag-image" href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - {{$item->title}}">
                    <p><time><i class="icon icon-view"></i>{{$item->num_view}}</time></p>
                    <img class="lazy" src="img/bg-img.jpg" data-src='{{$item->image}}' alt="{{$item->title}}">
                    <p class="dotted-line-7 summary  hidden-md hidden-lg">{{$item->summary}}</p>
                </a>
                <div class="news-items-body">
                    <h3 class="title"><a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - {{$item->title}}">{{$item->title}}</a></h3>
                    <div class="meta">
                        <time>{{$item->num_view}} views</time>
                        <a class="category" href="../tac-gia/{{$item->id_account}}" title="Truyện chú mèo con - {{$item->author}}">{{$item->author}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="module_title">
        <h2>Bài hot trong tuần</h2>
        <a href="{!! assetRemote('truyen-cuoi') !!}" class="module_title_more" title="Truyện chú mèo con">Xem thêm</a>
    </div>
    <div class="wrapper-slider-top">
        <div class="owl-carousel list-news">
            @foreach($list_ranking_week as $key=>$item)
            <div class="news-items">
                <a class="tag-image" href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - {{$item->title}}">
                    <p><time><i class="icon icon-view"></i>{{$item->num_view}}</time></p>
                    <img class="lazy" src="img/bg-img.jpg" data-src='{{$item->image}}' alt="{{$item->title}}">
                    <p class="dotted-line-7 summary  hidden-md hidden-lg">{{$item->summary}}</p>
                </a>
                <div class="news-items-body">
                    <h3 class="title"><a href="../bai-viet/{{$item->slug}}" title="Truyện chú mèo con - {{$item->title}}">{{$item->title}}</a></h3>
                    <div class="meta">
                        <time>{{$item->num_view}} views</time>
                        <a class="category" href="../tac-gia/{{$item->id_account}}" title="Truyện chú mèo con - {{$item->author}}">{{$item->author}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection