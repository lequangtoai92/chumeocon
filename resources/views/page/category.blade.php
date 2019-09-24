@extends('master')
@section('content')
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
                            data-src='{{$item->image}}' alt="name image">
                    <p class="dotted-line-7 summary  hidden-md hidden-lg">{{$item->summary}}</p></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="{{$item->categories}}">{{$item->name_categories}}</a>
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