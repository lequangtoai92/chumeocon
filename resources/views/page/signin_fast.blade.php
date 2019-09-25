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
<section class="wrapper page page-login">
    <div class="container media container_page">
        <div class="media-body">
            <form action="{{route('signin_fast')}}" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
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
                <div class="row">
                    <div class="col-left">
                        <div class="form-block">
                            <label for="username">Tên đăng nhập</label>
                            <input type="text" name="username" placeholder="Tên đăng nhập" required>
                        </div>
                        <div class="form-block">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="input-password" name="password" placeholder="Mật khẩu" required autocomplete="off">
                        </div>
                        <div class="form-block">
                            <label for="password">Nhập lại mật khẩu(*)</label>
                            <input type="password" class="input-re_password" name="re_password" placeholder="Nhập lại mật khẩu" required autocomplete="off">
                        </div>
                        <div class="form-block col-button">
                            <button type="submit" class="button-btn btn btn-primary">Đăng ký</button>
                            <span class="span-btn btn btn-primary">Đăng ký</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- @include('include.dialog_forgot_password') -->
@include('include.modal_notification')
<script>
$('.form-block .button-btn').hide();
$( ".input-re_password" ).keypress(function(event) {
    if($( ".input-re_password" ).val()+ event.key == $( ".input-password" ).val()){
        $('.form-block .button-btn').show();
        $('.form-block .span-btn').hide();
    } else {
        $('.form-block .button-btn').hide();
        $('.form-block .span-btn').show();
    }
});
$('.span-btn').on("click", function () {
    $('#modal_notification').modal('show');
})
</script>
@endsection