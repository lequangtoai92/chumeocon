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

<link rel="stylesheet" href="../css/cartoon.css">
<section class="wrapper">
    <div class="container media container_page">
        <div class="media-body">
            <div class="list-mototube">
                @foreach($list_posts as $key=>$item)
                <article class="mototube-items">
                <iframe class="thumb-mototube" src="https://www.youtube.com/embed/{{$item->summary}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            </div>
            <div class="row">{{$list_posts->links()}}</div>
        </div>
        @include('include.col_right_no_youtube')
    </div>
</section>
<script>

</script>
@endsection