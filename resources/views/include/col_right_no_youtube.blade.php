<div class="hidden-sm hidden-xs sidebar">
    <div class="wrapper-ranking">
        <div class="heading">
            <h2>Xem nhiều trong tuần</h2>
        </div>
        <div class="list-news">
            @foreach($list_ranking_week as $key=>$item)
            <article class="media news-items">
                <a href="{!! assetRemote('bai-viet/'.$item->slug) !!}"><img class="lazy" src="{!! assetRemote('img/bg-img.jpg') !!}" data-src="{!! assetRemote($item->image) !!}"
                        alt="Name images">
                    <p class="ranking-num">{{$key + 1}}</p>
                </a>
                <div class="media-body news-items-body">
                    <h3 class="title dotted-line-3"><a href="{!! assetRemote('bai-viet/'.$item->slug) !!}">{{$item->title}}</a></h3>
                    <div class="meta">
                        <time>{{$item->num_view}} views</time>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
    <div class="wrapper-ranking">
        <div class="heading">
            <h2>Xem nhiều trong tháng</h2>
        </div>
        <div class="list-news">
            @foreach($list_ranking_month as $key=>$item)
            <article class="media news-items">
                <a href="{!! assetRemote('bai-viet/'.$item->slug) !!}"><img class="lazy" src="{!! assetRemote('img/bg-img.jpg') !!}" data-src="{!! assetRemote($item->image) !!}"
                        alt="Name images">
                    <p class="ranking-num">{{$key + 1}}</p>
                </a>
                <div class="media-body news-items-body">
                    <h3 class="title dotted-line-3"><a href="{!! assetRemote('bai-viet/'.$item->slug) !!}">{{$item->title}}</a></h3>
                    <div class="meta">
                        <time>{{$item->num_view}} views</time>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</div>