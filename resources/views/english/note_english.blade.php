@extends('master')
@section('content')

<section class="wrapper page-post">
    <form action="{{route('note-english')}}" enctype="multipart/form-data" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="container media container_page">
            <div class="media-body">
                <div class="content-main">
                    <textarea rows="20" name="main_content" class="form-control content_main_tinymce"
                        placeholder="Nội dung(*)"></textarea>
                </div>
                
            </div>
            <div class="sidebar">
                <div class="wrapper-post">
                    <div>
                        <ul class="list-button">
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
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection