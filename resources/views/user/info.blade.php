@extends('master')
@section('content')
<link rel="stylesheet" href="css/info.css">
<section class="wrapper page-info">
    <div class="container media container_page">
        <div class="media-body">
            <div id="info_account" class="tabcontent" style="display: block;">
                <div class="row">
                    <form action="{{route('update_info')}}" enctype="multipart/form-data" method="post">
                        <div class="body-info body-left">
                            <div class="show-image">
                                <img id="image_select" src="{{$user->avatar}}" alt="your image" />
                                <ul class="list-button-image">
                                    <input type="file" id="upload_image" name="image_upload" class="inputfile"
                                        onchange="readURL(this);">
                                    <label for="upload_image">Choose a file</label>
                                </ul>
                            </div>
                            <div class="group-scores">
                                <div class="form-group">
                                    <label>Ngày tham gia: </label>
                                    <span> {{$user->time_creat}}</span>
                                </div>
                                <div class="form-group">
                                    <label>Đánh giá: </label>
                                    <span>5/10</span>
                                </div>
                                <div class="form-group">
                                    <label>Điểm thưởng: </label>
                                    <span>2000/50000</span>
                                </div>
                            </div>
                            <ul class="list-button">
                                <button class="btn btn-success" id="updateDetails">Cập nhật</button>
                                <label class="btn btn-primary" id="openChangePW" href="">Đổi mật khẩu</label>
                            </ul>

                        </div>
                        <div class=" body-info body-right">
                            <div class="form-group">
                                <label for="user_name">Họ và tên</label><label class="user-name-import">(*)</label>
                                <input type="text" class="form-control" value="{{$user->full_name}}"
                                    placeholder="Họ và tên" name="full_name" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="user_id">Tên đăng nhập:</label>
                                <input type="text" class="form-control" value="{{$user->user_name}}"
                                    placeholder="Tên đăng nhập" name="user_name" readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label><label class="email-import">(*)</label>
                                <input type="email" class="form-control" value="{{$user->email}}" placeholder="Email"
                                    name="email">
                            </div>
                            <div class="form-group">
                                <label for="birthday">Ngày sinh</label><label class="birthday-import">(*)</label>
                                <input type="select" class="form-control" value="{{substr($user->birthday, 0, 10)}}"
                                    placeholder="Ngày sinh" name="birthday" data-toggle="datepicker-birthday"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="sex">Giới tính</label><label class="sex-import">(*)</label>
                                <select class="form-control select-option" name="gender">
                                    <!-- <option class="select-option" disabled></option> -->
                                    @if ($user->sex == 1)
                                    <option class="select-option" value="1" selected="selected">Nam</option>
                                    <option class="select-option" value="2">Nữ</option>
                                    <option class="select-option" value="3">Khác</option>
                                    @elseif ($user->sex == 2)
                                    <option class="select-option" value="1">Nam</option>
                                    <option class="select-option" value="2" selected="selected">Nữ</option>
                                    <option class="select-option" value="3">Khác</option>
                                    @else
                                    <option class="select-option" value="1">Nam</option>
                                    <option class="select-option" value="2">Nữ</option>
                                    <option class="select-option" value="3" selected="selected">Khác</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ:</label>
                                <input type="text" class="form-control" value="{{$user->address}}" placeholder="Địa chỉ"
                                    name="address">
                            </div>

                            <div class="form-group">
                                <label for="telephone">Số điện thoại:</label>
                                <input type="text" class="form-control" value="{{$user->phone}}"
                                    placeholder="Số điện thoại" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="nickname">Biệt danh</label><label class="nickname-import"></label>
                                <input type="text" class="form-control" value="{{$user->nick_name}}"
                                    placeholder="nick name" name="nickname">
                            </div>
                        </div>
                    </form>
                    <div class="footer-info">
                        <div class="group-scores">
                            <div class="heading">
                                <h2>Giới thiệu</h2>
                            </div>
                            <div class="list-news">
                                <?php echo $intro->content ?>
                            </div>
                            <ul class="list-button">
                                <button class="btn btn-primary" id="openInfo" href="">Chỉnh sửa</button>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden-sm hidden-xs sidebar">
            <div class="wrapper-youtube">
                <div class="heading">
                    <h2>MotoTube</h2>
                </div>
                <iframe width="300" height="250" src="https://www.youtube.com/embed/LopMoV5ahqg" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="wrapper-ranking">
                <div class="heading">
                    <h2>Viewed Ranking</h2>
                </div>
                <div class="list-news">
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news11.jpg" alt="name image">
                            <p class="ranking-num">1</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news11.jpg" alt="name image">
                            <p class="ranking-num">2</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news10.jpg" alt="name image">
                            <p class="ranking-num">3</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news09.jpg" alt="name image">
                            <p class="ranking-num">4</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news08.jpg" alt="name image">
                            <p class="ranking-num">5</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
function changeBirthday($string){
    return substr($string,0,10);
}

?>

@include('include.dialog_intro')
@include('include.dialog_change_pass_word')

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
(function() {
    var openInfoBtn = document.getElementById('openInfo');
    var dialog_intro = document.getElementById('dialog_intro');
    openInfoBtn.addEventListener('click', function() {
        dialog_intro.showModal();
    });
    var openChangePWBtn = document.getElementById('openChangePW');
    var dialog_change_pw = document.getElementById('dialog_change_pw');
    openChangePWBtn.addEventListener('click', function() {
        dialog_change_pw.showModal();
    });

    var openClosePWBtn = document.getElementById('close_dialog');
    //   openClosePWBtn.addEventListener('click', function() {
    $(".close-dialog").click(function() {
        dialog_change_pw.close();
        dialog_intro.close();
    });

    $(".ui-widget-overlay").on("click", function() { 
        dialog_change_pw.close();
        dialog_intro.close();
    });
    
})();
</script>
@endsection