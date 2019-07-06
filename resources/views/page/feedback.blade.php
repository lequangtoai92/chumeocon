@extends('master')
@section('content')
<div class="content-body container" id="id_feedback">
	<div class="row">
		<div class="content-left ">
			<textarea class="form-control" rows="2" placeholder="Nội dung góp ý"></textarea>
		</div>
		<div class="content-right footer-save form-group row">
			<div class="text-thank col-md-9">
				<span>Cám ơn những đóng góp của các bạn, chúng tôi sẽ cố gắng giải quyết để đem đến trãi nghiệm tốt nhất</span>
			</div>
			<div class="button-right col-md-3">
				<button type="button" class="btn btn-primary save-content" >Gửi</button>
			</div>
		</div>
	</div>
	<hr>
	<div class="item-in-here">
		<div class="content-feedback-result">
			<p>Trang web quá xấu xí</p>
			<div class="daytime">
				<span>20/10/2019</span>
			</div>
		</div>
	</div>
</div>
@endsection