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

<section class="wrapper category-page">
    <div class="container media container_page">
        <div class="media-body">
            <div class="list-news">
                @foreach($list_posts as $key=>$item)
                @if ($key == 4)
                <div class="ads">
                    <a href="#">
                        <!-- <img src="img/img_test/ad/img-ad01.png" alt="name image"> -->
                    </a>
                </div>
                @endif
                <article class="news-items">
                    <a class="tag-image" href="../bai-viet/{{$item->slug}}"><img class="lazy" src="img/bg-img.jpg"
                            data-src='{{$item->image}}' alt="{{$item->title}}">
                    <p class="dotted-line-7 summary  hidden-md hidden-lg">{{$item->summary}}</p></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="{{$item->categories_slug}}">{{$item->name_categories}}</a>
                        </p>
                        <h3 class="title"><a href="../bai-viet/{{$item->slug}}">{{$item->title}}</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">{{$item->summary}}</p>
                        <div class="meta">
                            <time>{{$item->num_view}} views</time>
                            <a class="category" href="../tac-gia/{{$item->id_account}}">{{$item->author}}</a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
            <div class="row">{{$list_posts->links()}}</div>
        </div>
        @include('include.col_right_no_youtube')
    </div>
</section>
@endsection