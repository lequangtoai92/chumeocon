@extends('master')
@section('content')
@section('title', 'Truyện chú mèo con')
@section('meta_description', 'Nơi lưu trữ những mẫu truyện hay, mang tính giáo dục để bố mẹ kể cho bé nghe nhằm giúp cho
bé phát triển tư duy tốt hơn và gắn kết tình cảm giữa bố mẹ và con cái')
@section('meta_author', 'Truyện chú mèo con')
@section('meta_og_title', 'Truyện chú mèo con')
@section('meta_og_type', 'website')
@section('meta_og_url', 'http://truyenchumeocon.com')
@section('meta_og_image', 'http://truyenchumeocon.com/img/img-logo.png')
@section('meta_og_description', 'Nơi lưu trữ những mẫu truyện hay, mang tính giáo dục để bố mẹ kể cho bé nghe nhằm giúp
cho bé phát triển tư duy tốt hơn và gắn kết tình cảm giữa bố mẹ và con cái')

<link rel="stylesheet" href="{!! assetRemote('css/posts.css') !!}">
<section class="wrapper page-post">
    <form action="{{route('posts')}}" enctype="multipart/form-data" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="container media container_page">
            <input type="hidden" class="input-src-image-libary" name="src_image_libary">
            <div class="media-body">
                <div class="name-title">
                    <input type="text" id="target" name="target" placeholder="Link bài viết">
                    <span class="btn btn-crawler">Lấy dữ liệu</span>
                </div>
                <div class="list-news">
                    <article class="media news-items">
                        <select name="categories" id="categories">
                            @foreach($list_categories as $item)
                            <option value="{{$item->id}}">{{$item->name_categories}}</option>
                            @endforeach
                        </select>
                    </article>
                    <article class="media news-items">
                        <select name="personality" id="personality">
                            @foreach($list_personality as $item)
                            <option value="{{$item->id}}">{{$item->name_personality}}</option>
                            @endforeach
                        </select>
                    </article>
                </div>
            </div>
        </div>
    </form>
</section>
<script>
$(".btn-crawler").click(function(){
    $.ajax({
        type: "POST",
        url: '{{route('crawl-truyen-co-tich')}}',
        data: {
            "_token": "{{ csrf_token() }}",
            target: $("#target").val(),
        },
        success: function(data) {
            $(".content_main_tinymce").val(data);
            tinyMCE.get('content_main_tinymce').setContent(data);
           console.log(data);
        }
    });
});

</script>

@endsection