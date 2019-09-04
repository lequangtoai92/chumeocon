@extends('master')
@section('content')
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
					@if(Session::has('thanhcong'))
						<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
					@endif
                    <div class="col-left">
                        <div class="form-block">
                            <label for="your_last_name">Họ và tên(*)</label>
                            <input type="text" name="fullname" required autocomplete="off">
                        </div>

                        <div class="form-block">
                            <label for="username">Tên đăng nhập(*)</label>
                            <input type="text" name="username" required autocomplete="off"> 
                        </div>

                        <div class="form-block">
                            <label for="email">Email address(*)</label>
                            <input type="email" name="email" required>
                        </div>

                        <div class="form-block">
                            <label for="password">Mật khẩu(*)</label>
                            <input type="password" class="input-password" name="password" required autocomplete="off">
                        </div>
                        <div class="form-block">
                            <label for="password">Nhập lại mật khẩu(*)</label>
                            <input type="password" class="input-re_password" name="re_password" required autocomplete="off">
                            <p >Mật khẩu không giống</p>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="form-block">
                            <label for="birdth">Ngày sinh</label>
                            <input data-toggle="datepicker-birthday" name="birdth" autocomplete="off" placeholder="YYYY-MM-DD" required
                            pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                        </div>

                        <div class="form-block">
                            <label for="gender">Giới tính</label>
                            <input type="text" name="gender" autocomplete="off">
                        </div>

                        <div class="form-block">
                            <label for="adress">Địa chỉ</label>
                            <input type="text" name="address">
                        </div>


                        <div class="form-block">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                        </div>

                        <div class="form-block">
                            <label for="phone">Biệt danh</label>
                            <input type="text" name="nickname" autocomplete="off">
                        </div>
                    </div>


                    <div class="form-block col-button">
                        <button type="submit" class="button-btn btn btn-primary">Đăng ký</button>
                        <span class="span-btn btn btn-primary">Đăng ký1</span>
                    </div>

                </div>
            </form>
        </div>
        
    </div>
</section>
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