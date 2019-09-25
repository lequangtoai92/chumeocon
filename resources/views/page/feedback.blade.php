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

<link rel="stylesheet" href="css/feedback.css">
<section class="wrapper">
    <div class="container media container_page">
        <div class="content-body container" id="id_feedback">
            <form action="{{route('feedback')}}" method="post" class="beta-form-checkout">
                <div class="row">
                    <div class="content-left ">
                        <textarea class="form-control" rows="2" placeholder="Nội dung góp ý"
                            name="contentfeedback"></textarea>
                    </div>
                    <div class="content-right footer-save form-group row">
                        <div class="text-thank">
                            <span>Cám ơn những đóng góp của các bạn, chúng tôi sẽ cố gắng giải quyết để đem đến trãi
                                nghiệm
                                tốt nhất</span>
                        </div>
                        <div class="button-right">
                            <button type="submit" class="btn btn-primary save-content">Gửi</button>
                        </div>
                    </div>
                </div>
            </form>
            <hr>
            <div class="item-in-here">
                @foreach($list_feedback as $item)
                <div class="content-feedback-result">
                    <p>{{$item->content}}</p>
                    <div class="daytime">
                        <span>{{$item->time_creat}}</span>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">{{$list_feedback->links()}}</div>
        </div>
        @include('include.col_right_no_youtube')
    </div>
</section>
@endsection