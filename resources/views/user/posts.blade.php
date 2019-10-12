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

<link rel="stylesheet" href="css/posts.css">
<section class="wrapper page-post">
    <form action="{{route('posts')}}" enctype="multipart/form-data" method="post">
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
            <input type="hidden" class="input-src-image-libary" name="src_image_libary">
            <div class="media-body">
                <div class="name-title">
                    <input type="text" name="name_posts" placeholder="Tên tác phẩm(*)">
                </div>
                <div class="content-main">
                    <textarea rows="20" name="main_content" class="form-control content_main_tinymce"
                        placeholder="Nội dung(*)"></textarea>
                </div>
                <div class="list-news form-connotation">
                    <article class="media news-items">
                        <textarea id="content_connotation" rows="6" name="connotation_content" class="form-control"
                            placeholder="Ý nghĩa bài viết"></textarea>
                    </article>
                    <h2>Câu hỏi thảo luận cùng bé</h2>
                    <article class="media news-items">
                        <textarea id="content_question" rows="6" name="question_content" class="form-control question_content_main_tinymce"
                            placeholder="Câu hỏi thảo luận cùng bé"></textarea>
                    </article>
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
                        <article class="media news-items">
                            <textarea id="content_main" rows="6" name="summary" class="form-control"
                                placeholder="Giới thiệu bài viết"></textarea>
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
                            <select name="personality">
                                @foreach($list_personality as $item)
                                <option value="{{$item->id}}">{{$item->name_personality}}</option>
                                @endforeach
                            </select>
                        </article>
                        <article class="media news-items">
                            <input type="number" name="ages" min="0" max="15" placeholder="Lứa tuổi">
                        </article>
                        <article class="media news-items">
                            <input type="text" name="source" placeholder="Nguồn">
                        </article>
                    </div>
                </div>
                <div class="wrapper-image">
                    <div class="heading">
                        <h2>Hình ảnh</h2>
                    </div>
                    <div class="show-image">
                        <img id="image_select" src="img/no_image.png" alt="your image" />
                        <ul class="list-button-image">
                            <span id="open_dialog_image" class="btn">Chọn hình ảnh</span>
                        </ul>
                    </div>
                </div>
                <!-- </form> -->
            </div>
        </div>
        @include('include.dialog_select_image')
    </form>
</section>
<script>

var arr = [];

$(".add-question").click(function(){
var cauhoi = {cauhoi:$("#question").val(), traloi:$("#answer").val()};
arr.push(cauhoi);

$(".content-question").append("<h4>Câu hỏi: "  + $("#question").val() + "</h4><br>");
$(".content-question").append("<p>Trả lời: " + $("#answer").val() + "</p>");
$(".content-question").append("<hr>");
});


function readURL(input) {
    dialog_select_image.close();
    if (input.files && input.files[0]) {
        $(".input-src-image-libary").val('');
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#image_select')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function selectImage(image) {
    $(".input-src-image-libary").val(image.src.replace('http://truyenchumeocon.com/public/', ''));
    $('#image_select').attr('src', image.src.replace('http://truyenchumeocon.com/public/', ''));
    $('#upload_image').val('');
    dialog_select_image.close();
}

(function() {
    var openSelectImage = document.getElementById('open_dialog_image');
    var dialog_select_image = document.getElementById('dialog_select_image');
    openSelectImage.addEventListener('click', function() {
        dialog_select_image.showModal();
    });

    $(".close-dialog").click(function() {
        dialog_select_image.close();
    });

})();
</script>
@endsection