@extends('master')
@section('content')
<link rel="stylesheet" href="../css/cartoon.css">
<section class="wrapper">
    <div class="container media container_page">
        <div class="media-body">
            <div class="list-mototube">
                @foreach($list_posts as $key=>$item)
                <article class="mototube-items">
                <iframe class="thumb-mototube" src="https://www.youtube.com/embed/{{$item->summary}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!-- <iframe class="thumb-mototube" src="https://www.youtube.com/embed/{{$item->summary}}?&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
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