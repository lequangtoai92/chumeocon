@extends('master')
@section('content')
<link rel="stylesheet" href="../css/author.css">
<section class="wrapper page-info">
    <div class="container media container_page">
        <div class="media-body">
            <div id="info_account" class="tabcontent" style="display: block;">
                <div class="row">
                    <div class="body-info body-left">
                        <div class="show-image">
                            <img id="image_select" src="{{$user->avatar}}" alt="your image" />
                        </div>
                        <div class="group-scores">
                            <div class="form-group">
                                <label>Ngày tham gia: </label>
                                <span> {{$user->time_creat}}</span>
                            </div>
                            <div class="form-group">
                                <label>Đánh giá: </label>
                                <span>5/10</span>
                            </div>
                            <div class="form-group">
                                <label>Điểm thưởng: </label>
                                <span>2000/50000</span>
                            </div>
                        </div>

                    </div>
                    <div class=" body-info body-right">
                        <div class="list-news">
                            <?php echo $intro->content ?>
                        </div>
                    </div>
                    <div class="footer-info">
                        <div class="group-scores">
                            <div class="heading">
                                <h2>Bài viết</h2>
                            </div>
                            <div class="list-news">
                                @foreach($list_posts as $key=>$item)
                                <article class="news-items">
                                    <a href="../bai-viet/{{$item->id}}"><img class="lazy" src="img/bg-img.jpg"
                                            data-src='{{$item->image}}' alt="name image"></a>
                                    <div class="news-items-body">
                                        <p class="hidden-md hidden-lg tag-category industry"><a
                                                href="category.html">Motorcycle &
                                                Industry</a></p>
                                        <h3 class="title"><a href="../bai-viet/{{$item->id}}">{{$item->title}}</a></h3>
                                        <p class="hidden-sm hidden-xs dotted-line-2 summary">{{$item->summary}}</p>
                                        <div class="meta">
                                            <time>{{$item->num_view}} views</time>
                                            <a class="category"
                                                href="../tac-gia/{{$item->id_account}}">{{$item->author}}</a>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('include.col-right')
    </div>
</section>
@endsection