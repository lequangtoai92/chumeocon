<div class="hidden-sm hidden-xs sidebar">
            <div class="wrapper-youtube">
                <div class="heading">
                    <h2>Phim hoạt hình</h2>
                </div>
                @foreach($list_yotube_top as $key=>$item)
                <iframe width="300" height="250" src="https://www.youtube.com/embed/{{$item->summary}}?&autoplay=1&mute=1" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                @endforeach
            </div>
            <div class="wrapper-ranking">
                <div class="heading">
                    <h2>Xem nhiều trong tuần</h2>
                </div>
                <div class="list-news">
                    @foreach($list_ranking_week as $key=>$item)
                    <article class="media news-items">
                    <a href="../bai-viet/{{$item->slug}}"><img class="lazy" src="img/bg-img.jpg"
                        data-src="{{$item->image}}" alt="Name images">
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
            <div class="wrapper-ranking">
                <div class="heading">
                    <h2>Xem nhiều trong tháng</h2>
                </div>
                <div class="list-news">
                    @foreach($list_ranking_month as $key=>$item)
                    <article class="media news-items">
                    <a href="../bai-viet/{{$item->slug}}"><img class="lazy" src="img/bg-img.jpg"
                        data-src="{{$item->image}}" alt="Name images">
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
        </div>