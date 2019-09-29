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

<link rel="stylesheet" href="../css/posts.css">
<section class="wrapper page-post">
    <form action="{{route('change_my_posts', $posts->id)}}" enctype="multipart/form-data" method="post">
        <input type="hidden" name="id_post"  value="{{$posts->id}}">
        <div class="container media container_page">
            <div class="media-body">
                <div class="name-title">
                    <input type="text" name="name_posts"  value="{{$posts->title}}" placeholder="Tên tác phẩm(*)" autocomplete="off">
                </div>
                <div class="content-main">
                    <textarea id="content_main_tinymce" rows="20" name="main_content" class="form-control"
                        placeholder="Nội dung(*)">{{$posts->content}}</textarea>
                </div>
                <div class="list-news form-connotation">
                    <article class="media news-items">
                        <textarea id="content_connotation" rows="6" name="connotation_content" class="form-control"
                            placeholder="Ý nghĩa bài viết">{{$connotation->connotation}}</textarea>
                    </article>
                    <!-- <article style="hidden" class="media news-items form-question">
                        <div class="input-question">
                            <input type="text" name="question" placeholder="Câu hỏi" autocomplete="off">
                            <input type="text" name="answer" placeholder="Câu trả lời" autocomplete="off">
                        </div>
                        <div>
                            <span id="" class="btn btn-primary">Thêm</span>
                        </div>
                    </article>
                    <article style="hidden" class="media news-items">
                        <h3>Câu hỏi thảo luận</h3>
                    </article> -->
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
                                <select name="status" value="{{$posts->status}}">
                                    @foreach($list_status as $item)
                                    @if ($item->id == $posts->status)
                                        <option selected="selected" value="{{$item->id}}">{{$item->name_status}}</option>
                                    @else
                                    <option name="status" value="{{$item->id}}">{{$item->name_status}}</option>
                                    @endif
                                    
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
                        <article class="media news-items">
                            <textarea rows="4" name="summary" class="form-control"
                                placeholder="Giới thiệu bài viết">{!! (($posts->summary)) !!}</textarea>
                        </article>
                        <article class="media news-items">
                            <input type="text" name="author" value="{{$posts->author}}"
                                placeholder="Tác giả" autocomplete="off">
                        </article>
                        <article class="media news-items">
                            <select name="categories" value="{{$posts->categories}}">
                                @foreach($list_categories as $item)
                                    @if ($item->id == $posts->categories)
                                        <option selected="selected" value="{{$item->id}}">{{$item->name_categories}}</option>
                                    @else
                                        <option value="{{$item->id}}">{{$item->name_categories}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </article>
                        <article class="media news-items">
                            <select name="personality" value="{{$posts->id_personality}}">
                                @foreach($list_personality as $item)
                                    @if ($item->id == $posts->id_personality)
                                        <option selected="selected" value="{{$item->id}}">{{$item->name_personality}}</option>
                                    @else
                                         <option value="{{$item->id}}">{{$item->name_personality}}</option>
                                    @endif
                                
                                @endforeach
                            </select>
                        </article>
                        <article class="media news-items">
                            <input type="number" value="{{$posts->age}}" name="ages" min="0" max="15" placeholder="Lứa tuổi" autocomplete="off">
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
                        <img id="image_select" src="{{assetRemote($posts->image)}}" alt="your image" />
                        <ul class="list-button-image">
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
            $('#image_select')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>

