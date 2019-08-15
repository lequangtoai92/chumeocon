@extends('master')
@section('content')
<link rel="stylesheet" href="css/posts.css">
<section class="wrapper page-post">
    <form action="{{route('posts')}}" enctype="multipart/form-data" method="post">
        <div class="container media container_page">
            <div class="media-body">
                <div class="name-title">
                    <input type="text" name="name_posts"  value="{{$posts->title}}" placeholder="Tên tác phẩm(*)">
                </div>
                <div class="content-main">
                    <textarea id="content_main" rows="20" value="{{$posts->title}}" name="main_content" class="form-control"
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
                            <button class="btn" href="javascript:void(0);">Lưu nháp</button>
                            <button type="submit" class="btn btn-primary" href="javascript:void(0);">Đăng bài</button>
                        </ul>
                    </div>
                </div>
                <div class="wrapper-setting">
                    <div class="heading">
                        <h2>CÀI ĐẶT</h2>
                    </div>
                    <div class="list-news">
                        <article class="media news-items">
                            <textarea id="content_main" value="{{$posts->title}}" rows="4" name="summary" class="form-control"
                                placeholder="Giới thiệu bài viết"></textarea>
                        </article>
                        <article class="media news-items">
                            <input type="text" name="author" value="{{$posts->author}}"
                                placeholder="Tác giả">
                        </article>
                        <article class="media news-items">
                            <select name="categories">
                                @foreach($list_categories as $item)
                                <option value="{{$posts->categories}}">{{$item->name_categories}}</option>
                                @endforeach
                            </select>
                        </article>
                        <article class="media news-items">
                            <select name="personality">
                                @foreach($list_personality as $item)
                                <option value="{{$posts->id_personality}}">{{$item->name_personality}}</option>
                                @endforeach
                            </select>
                        </article>
                        <article class="media news-items">
                            <input type="number" value="{{$posts->title}}" name="ages" min="0" max="15" placeholder="Lứa tuổi">
                        </article>
                        <article class="media news-items">
                            <input type="text" value="{{$posts->source}}" name="source" placeholder="Nguồn">
                        </article>
                    </div>
                </div>
                <div class="wrapper-image">
                    <div class="heading">
                        <h2>Hình ảnh</h2>
                    </div>
                    <div class="show-image">
                        <img id="blah" src="{{$posts->image}}" alt="your image" />
                        <ul class="list-button">
                            <input type="file" id="upload_image" name="image_upload" class="inputfile"
                                onchange="readURL(this);">
                            <label for="upload_image">Choose a file</label>
                        </ul>
                    </div>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </form>
</section>
@endsection
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>

