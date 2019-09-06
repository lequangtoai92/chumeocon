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
                <article class="mototube-items">
                <iframe class="thumb-mototube" src="https://www.youtube.com/embed/RPnIq_59dJc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            </div>
        </div>
        @include('include.col_right_no_youtube')
    </div>
</section>
<script>

</script>
@endsection