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
                        <img class="lazy" src="img/bg-img.jpg" data-src="{{$item->image}}" alt="name image">
                    </a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a class="dotted-line-1"
                                href="{{$item->categories}}">{{$item->name_categories}}</a></p>
                        <h3 class="title"><a href="../bai-viet/{{$item->id}}">{{$item->title}}</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">{{$item->summary}}</p>
                        <div class="meta">
                            <time>{{$item->num_view}} views</time>
                            <ul class="list-button">
                                <a class="btn btn-danger" onclick="function_delete_posts({{$item->id}}, '{{$item->title}}')">Xóa</a>
                                <a class="btn btn-primary" href="../change-my-posts/{{$item->id}}">Chỉnh sửa</a>
                            </ul>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
            <div class="row">{{$list_posts->links()}}</div>
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
    @include('include.modal_delete_posts')
</section>
<script src="../js/user.js"></script>
<!--Footer-->
@endsection