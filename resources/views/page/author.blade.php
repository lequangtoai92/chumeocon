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

<link rel="stylesheet" href="{!! assetRemote('css/author.css') !!}">
<section class="wrapper page-info">
    <div class="container media container_page">
        <div class="media-body">
            <div id="info_account" class="tabcontent" style="display: block;">
                <div class="row">
                    <div class="body-info body-left">
                        <div class="show-image">
                            <img id="image_select" src="{{isset($user->avatar) ? assetRemote($user->avatar) : ''}}" alt="your image" />
                        </div>
                        <!-- <div class="group-scores">
                            <div class="form-group">
                                <label>Ngày tham gia: </label>
                                <span> {{isset($user->time_creat) ? $user->time_creat : ''}}</span>
                            </div>
                            <div class="form-group">
                                <label>Đánh giá: </label>
                                <span>5/10</span>
                            </div>
                            <div class="form-group">
                                <label>Điểm thưởng: </label>
                                <span>2000/50000</span>
                            </div>
                        </div> -->

                    </div>
                    <div class=" body-info body-right">
                        <div class="list-news">
                            <?php echo $intro->content ?>
                        </div>
                    </div>
                    <div class="footer-info">
                        <div class="group-scores">
                            <div class="heading">
                                <h2>Bài viết</h2>
                            </div>
                            <div class="list-news">
                                @foreach($list_posts as $key=>$item)
                                <article class="news-items">
                                    <a href="{!! assetRemote('bai-viet/'.$item->slug) !!}"><img class="lazy" src="{!! assetRemote('img/bg-img.jpg') !!}"
                                            data-src='{!! assetRemote($item->image) !!}' alt="{{$item->title}}"></a>
                                    <div class="news-items-body">
                                        <p class="tag-category industry"><a
                                            href="{{$item->categories_slug}}">{{$item->name_categories}}</a></p>
                                        <h3 class="title"><a href="{!! assetRemote('bai-viet/'.$item->slug) !!}">{{$item->title}}</a></h3>
                                        <p class="hidden-sm hidden-xs dotted-line-2 summary">{{$item->summary}}</p>
                                        <div class="meta">
                                            <time>{{$item->num_view}} views</time>
                                            <a class="category"
                                                href="{!! assetRemote('tac-gia/'.$item->id_account) !!}">{{$item->author}}</a>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                            <div class="row">{{$list_posts->onEachSide(1)->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('include.col_right_no_youtube')
    </div>
</section>
@endsection