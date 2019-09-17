@extends('master')
@section('content')
<link rel="stylesheet" href="css/posts.css">
<section class="wrapper page-post">
    <form action="{{route('posts')}}" enctype="multipart/form-data" method="post">
        <div class="container media container_page">
            <input type="hidden" class="input-src-image-libary" name="src_image_libary">
            <div class="media-body">
                <div class="name-title">
                    <input type="text" name="name_posts" placeholder="Tên tác phẩm(*)">
                </div>
                <div class="content-main">
                    <textarea id="content_main_tinymce" rows="20" name="main_content" class="form-control"
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
                        <article class="media news-items">
                            <textarea id="content_main" rows="4" name="summary" class="form-control"
                                placeholder="Giới thiệu bài viết"></textarea>
                        </article>
                        <article class="media news-items">
                            <input type="text" name="author" value="{{Auth::user()->full_name}}"
                                placeholder="Tác giả">
                        </article>
                        <article class="media news-items">
                            <select name="categories">
                                @foreach($list_categories as $item)
                                @if ($item->id < 10)
                                <option value="{{$item->id}}">{{$item->name_categories}}</option>
                                @endif
                                @endforeach
                            </select>
                        </article>
                        <article class="media news-items">
                            <select name="personality">
                                @foreach($list_personality as $item)
                                <option value="{{$item->id_personality}}">{{$item->name_personality}}</option>
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
                            <!-- <input type="file" id="upload_image" name="image_upload" class="inputfile"
                                onchange="readURL(this);">
                            <label for="upload_image">Choose a file</label> -->
                            <span id="open_dialog_image" class="btn">Choose a file</span>
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

function selectImage(image){
    $(".input-src-image-libary").val(image.src.replace('http://chumeocon.com',''));
    $('#image_select').attr('src', image.src.replace('http://chumeocon.com',''));
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
