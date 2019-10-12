<div class="hidden-sm hidden-xs sidebar">
    <div class="wrapper-ranking">
        <div class="heading">
            <h2>Bảng xếp hạng</h2>
        </div>
        <div class="list-news">
            @foreach($list_ranking_week as $key=>$item)
            <article class="media news-items">
                <a href="../bai-viet/{{$item->slug}}"><img class="lazy" src="img/bg-img.jpg" data-src="{{$item->image}}"
                        alt="{{$item->title}}">
                    <p class="ranking-num">{{$key + 1}}</p>
                </a>
                <div class="media-body news-items-body">
                    <h3 class="title dotted-line-3"><a href="../bai-viet/{{$item->slug}}">{{$item->title}}</a></h3>
                    <div class="meta">
                        <time>{{$item->num_view}} views</time>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- quangcao_col_right -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4664812161671730" data-ad-slot="7877555057"
        data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>