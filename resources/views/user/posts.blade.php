@extends('master')
@section('content')
<link rel="stylesheet" href="css/posts.css">
<section class="wrapper page-post">
    <div class="container media container_page">

        <div class="media-body">
            <form action="{{route('posts')}}" method="post">
                <div class="name-title">
                    <input type="text" name="name_posts" placeholder="Tên tác phẩm(*)">
                </div>
                <div class="content-main">
                    <textarea id="content_main" rows="20" name="main_content" class="form-control"
                        placeholder="Nội dung(*)"></textarea>
                </div>
            </form>
        </div>
        <div class="sidebar">
            <form action="{{route('posts')}}" method="post">
                <div class="wrapper-post">
                    <div class="heading">
                        <h2>ĐĂNG BÀI</h2>
                    </div>
                    <div>
                        <ul class="list-button">
                            <button class="btn" href="javascript:void(0);">Lưu nháp</button>
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
                            <input type="text" name="author" placeholder="Tác giả">
                        </article>
                        <article class="media news-items">
                            <input type="text" name="virtue" placeholder="Đức tính">
                        </article>
                        <article class="media news-items">
                            <input type="text" name="ages" placeholder="Lứa tuổi">
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
                    <div>
                        <ul class="list-button">
                            <button class="btn" href="">Ảnh có sẵn</button>
                            <button class="btn btn-primary" href="">Tải ảnh lên</button>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection