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

<link rel="stylesheet" href="css/signin.css">
<section class="wrapper page page-signin">
    <div class="container media container_page">
        <div class="media-body">
            <form action="{{route('signin')}}" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}
                        @endforeach
                    </div>
                    @endif
                    @if(Session::has('success'))
                        @include('include.modal_sigin_success')
                    @endif
                    <div class="col-left">
                        <div class="form-block">
                            <label for="your_last_name">Họ và tên(*)</label>
                            <input type="text" name="fullname" required autocomplete="off">
                        </div>

                        <div class="form-block">
                            <label for="username">Tên đăng nhập(*)</label>
                            <input type="text" name="username" required>
                        </div>

                        <div class="form-block">
                            <label for="email">Email address(*)</label>
                            <input type="email" name="email" required>
                        </div>

                        <div class="form-block">
                            <label for="password">Mật khẩu(*)</label>
                            <input type="password" class="input-password"
                                placeholder="Mật khẩu phải lớn hơn 6 và nhỏ hơn 20 ký tự" name="password"
                                required autocomplete="off">
                        </div>
                        <div class="form-block">
                            <label for="password">Nhập lại mật khẩu(*)</label>
                            <input type="password" class="input-re_password"
                                placeholder="Mật khẩu phải lớn hơn 6 và nhỏ hơn 20 ký tự" name="re_password"
                                required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="form-block">
                            <label for="birdth">Ngày sinh</label>
                            <input data-toggle="datepicker-birthday" name="birdth" autocomplete="off"
                                placeholder="YYYY-MM-DD" required
                                pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                        </div>

                        <div class="form-block">
                            <label for="gender">Giới tính</label>
                            <select class="form-control select-option" name="gender">
                                <option class="select-option" value="1" selected="selected">Nam</option>
                                <option class="select-option" value="2">Nữ</option>
                                <option class="select-option" value="3">Khác</option>
                            </select>
                        </div>

                        <div class="form-block">
                            <label for="adress">Địa chỉ</label>
                            <input type="text" name="address">
                        </div>


                        <div class="form-block">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" name="phone">
                        </div>

                        <div class="form-block">
                            <label for="phone">Biệt danh</label>
                            <input type="text" name="nickname" autocomplete="off">
                        </div>
                    </div>


                    <div class="form-block col-button">
                        <button type="submit" class="button-btn btn btn-primary">Đăng ký</button>
                        <span class="span-btn btn btn-primary">Đăng ký</span>
                    </div>

                </div>
            </form>
        </div>

    </div>
</section>
@include('include.modal_notification')
<script>
$('.form-block .button-btn').hide();
$(".input-re_password").keypress(function(event) {
    if ($(".input-re_password").val() + event.key == $(".input-password").val() && 6 < $(".input-password")
        .val().length < 20) {
        $('.form-block .button-btn').show();
        $('.form-block .span-btn').hide();
    } else {
        $('.form-block .button-btn').hide();
        $('.form-block .span-btn').show();
    }
});
$('.span-btn').on("click", function() {
    $('#modal_notification').modal('show');
})
// $('#modal_sigin_success').modal('show');
</script>
@endsection