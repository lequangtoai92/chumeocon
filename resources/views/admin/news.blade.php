@extends('master')
@section('content')
<link rel="stylesheet" href="css/my-posts.css">
<section class="wrapper page-my-posts">
<button class="btn btn-primary"  onclick="updateData()">update</button>
    <div class="container media container_page">
        <div class="media-body">
            <div class="list-news">
                @foreach($list_news as $key=>$item)
                <article class="news-items">
                    <a class="tag-image"><img class="lazy" src="img/bg-img.jpg"
                            data-src='{{$item->image}}' alt="{{$item->title}}">
                        <p class="dotted-line-7 summary  hidden-md hidden-lg">{{$item->content}}</p>
                    </a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a>{{$item->category}}</a>
                        </p>
                        <h3 class="title"><a>{{$item->title}}</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">{{$item->content}}</p>
                        <div class="meta">
                            <ul class="list-button">
                                @if ($item->status == 0)
                                    <a class="btn btn-danger" onclick="function_delete_posts({{$item->id}}, '{{$item->title}}')">Xóa</a>
                                @else
                                    <a class="btn btn-primary" href="../change-my-posts/{{$item->id}}">Chỉnh sửa</a>
                                @endif
                            </ul>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
            <div class="row">{{$list_news->onEachSide(1)->links()}}</div>
        </div>
    </div>
</section>

<script>
function updateData(id) {
    $.ajax({
        type: "POST",
        url: '/admin/crawlTuoitre',
        data: {"_token": "{{ csrf_token() }}"},
        success: function() {
            location.reload();
        }
    });
}

</script>
@endsection