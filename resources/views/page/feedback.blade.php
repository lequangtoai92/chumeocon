@extends('master')
@section('content')
<link rel="stylesheet" href="css/feedback.css">
<section class="wrapper">
    <div class="container media container_page">
        <div class="content-body container" id="id_feedback">
            <form action="{{route('feedback')}}" method="post" class="beta-form-checkout">
                <div class="row">
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}
                        @endforeach
                    </div>
                    @endif
                    @if(Session::has('thanhcong'))
                    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                    @endif
                    <div class="content-left ">
                        <textarea class="form-control" rows="2" placeholder="Nội dung góp ý"
                            name="contentfeedback"></textarea>
                    </div>
                    <div class="content-right footer-save form-group row">
                        <div class="text-thank">
                            <span>Cám ơn những đóng góp của các bạn, chúng tôi sẽ cố gắng giải quyết để đem đến trãi
                                nghiệm
                                tốt nhất</span>
                        </div>
                        <div class="button-right">
                            <button type="submit" class="btn btn-primary save-content">Gửi</button>
                        </div>
                    </div>
                </div>
            </form>
            <hr>
            <div class="item-in-here">
                @foreach($list_feedback as $item)
                <div class="content-feedback-result">
                    <p>{{$item->content}}</p>
                    <div class="daytime">
                        <span>{{$item->time_creat}}</span>
                    </div>
                </div>
                @endforeach
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