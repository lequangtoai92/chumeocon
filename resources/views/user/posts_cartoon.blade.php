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

<link rel="stylesheet" href="css/posts.css">
<section class="wrapper page-post">
    <form action="{{route('posts-cartoon')}}" enctype="multipart/form-data" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            {{$err}}
            @endforeach
        </div>
        @endif
        @if(Session::has('success'))
        @include('include.modal_posts_success')
        @endif
        <div class="container media container_page">
            <div class="media-body">
                <div class="name-title">
                    <input type="text" name="name_posts" placeholder="Tên tác phẩm(*)">
                </div>
                <div class="content-main">
                    <textarea rows="20" name="main_content" class="form-control content_main_tinymce"
                        placeholder="Nội dung(*)"></textarea>
                </div>
            </div>
            <div class="sidebar">
                <div class="wrapper-post">
                    <div class="heading">
                        <h2>ĐĂNG BÀI</h2>
                    </div>
                    <div>
                        <ul class="list-button">
                            <article class="media list-select">
                                <select name="status">
                                    @foreach($list_status as $item)
                                    <option name="status" value="{{$item->id}}">{{$item->name_status}}</option>
                                    @endforeach
                                </select>
                            </article>
                            <button type="submit" class="btn btn-primary" href="javascript:void(0);">Đăng bài</button>
                        </ul>
                    </div>
                </div>
                <div class="wrapper-setting">
                    <div class="heading">
                        <h2>CÀI ĐẶT</h2>
                    </div>
                    <div class="list-news">
                        <a onclick="function_getid_yotube()">Cách lấy ID video youtube</a>
                        <article class="media news-items">
                            <textarea id="content_main" rows="4" name="summary" class="form-control"
                                placeholder="ID video: RPnIq_59dJc"></textarea>
                        </article>
                        <article class="media news-items">
                            <input type="text" name="author" value="{{Auth::user()->full_name}}"
                                placeholder="Tác giả">
                        </article>
                        <article class="media news-items">
                            <select name="categories">
                                @foreach($list_categories as $item)
                                <option value="{{$item->id}}">{{$item->name_categories}}</option>
                                @endforeach
                            </select>
                        </article>
                        <article class="media news-items">
                            <input type="text" name="source" placeholder="Nguồn">
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@include('include.modal_getid_youtube')
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#image_select')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection
