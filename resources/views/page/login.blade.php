@extends('master')
@section('content')
<link rel="stylesheet" href="css/signin.css">
<section class="wrapper page page-login">
    <div class="container media container_page">
        <div class="media-body">
        <form action="{{route('login')}}" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}}
							@endforeach
						</div>
					@endif
                @if(Session::has('flag'))
						<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
					@endif
                <div class="row">
                    <div class="col-left">
                        <div class="form-block">
                            <label for="username">Tên đăng nhập</label>
                            <input type="text" name="username" placeholder="Tên đăng nhập" required>
                        </div>
                        <div class="form-block">
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" placeholder="Mật khẩu" required>
                        </div>
                        <div class="form-block col-button">
                            <a id="open_forgot_password">Quên mật khẩu?</a>
                        </div>
                        <div class="form-block col-button">
                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @include('include.col_right_no_youtube')
    </div>
</section>
@include('include.dialog_forgot_password')
<script>
(function() {
    var open_dialog = document.getElementById('open_forgot_password');
    var dialog_forgot_password = document.getElementById('dialog_forgot_password');
    open_dialog.addEventListener('click', function() {
        dialog_forgot_password.showModal();
    });
    $(".close-dialog").click(function() {
        dialog_forgot_password.close();
    });
    
})();
</script>
@endsection