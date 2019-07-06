@extends('master')
@section('content')
<section class="wrapper">
    <div class="wrapper-slider-top">
        <div class="hidden-md hidden-lg icon-new">
            <p><span><s></s>NEW<s></s></span></p>
        </div>
        <div class="slider-top owl-carousel">
            <div class="item">
                <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                        data-src="img/img_test/slide/img-slide01.jpg" alt="Name images"></a>
                <span>
                    <p class="tag-category industry"><a href="category.html">Hiền lành</a></p>
                    <h3><a href="detail.html">Cây tre trăm đốt</a></h3>
                </span>
            </div>
            <div class="item">
                <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                        data-src="img/img_test/slide/img-slide02.jpg" alt="Name images"></a>
                <span>
                    <p class="tag-category parts"><a href="category.html">Tốt bụng</a></p>
                    <h3><a href="detail.html">Nàng bạch tuyết và bảy chú lùn</a></h3>
                </span>
            </div>
            <div class="item">
                <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                        data-src="img/img_test/slide/img-slide03.jpg" alt="Name images"></a>
                <span>
                    <p class="tag-category columns"><a href="category.html">Thông minh</a></p>
                    <h3><a href="detail.html">Cô bé lọ lem</a></h3>
                </span>
            </div>

        </div>
    </div>
    <div class="container media container_page">
        <div class="media-body">
            <div class="list-news">
                <article class="news-items">
                    <a href="detail.html">
                        <img class="lazy" src="img/bg-img.jpg" data-src="img/img_test/news/img-news11.jpg"
                            alt="name image">
                    </a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a class="dotted-line-1" href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">Ba lưỡi rìu.</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ.</p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html">Admin</a>
                        </div>
                    </div>
                </article>
                <article class="news-items">
                    <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news12.jpg" alt="name image"></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">Cây tre trăm đốt.</a>
                        </h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ</p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html">Nhẫn Tâm Bin</a>
                        </div>
                    </div>
                </article>
                <article class="news-items">
                    <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news09.jpg" alt="name image"></a>
                    <div class="media-body news-items-body">
                        <p class="tag-category industry"><a href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">Tấm cám.</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ</p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html">Nanh Trắng</a>
                        </div>
                    </div>
                </article>
                <article class="news-items">
                    <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news01.jpg" alt="name image"></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">Sơn Tinh Thủy Tinh.</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ</p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html">Mắt Bão</a>
                        </div>
                    </div>
                </article>
                <div class="ads">
                    <a href="#">
                        <img src="img/img_test/ad/img-ad01.png" alt="name image">
                    </a>
                </div>
                <article class="news-items">
                    <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news02.jpg" alt="name image"></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">Anh học trò và ba con quỷ.</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ/p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html">Ẩn Danh</a>
                        </div>
                    </div>
                </article>
                <article class="news-items">
                    <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news03.jpg" alt="name image"></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">Chàng Cóc lấy vợ tiên.</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ</p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html">Kakashi</a>
                        </div>
                    </div>
                </article>
                <article class="news-items">
                    <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news04.jpg" alt="name image"></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">Bà chúa bèo.</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ</p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html">Naruto</a>
                        </div>
                    </div>
                </article>
                <article class="news-items">
                    <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news05.jpg" alt="name image"></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">The initial production of Engine Cover and Oil Pump
                                Cover for Kawasaki Z1/Z2 are completed.</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ</p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html"> Young Machine</a>
                        </div>
                    </div>
                </article>
                <article class="news-items">
                    <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news06.jpg" alt="name image"></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">The initial production of Engine Cover and Oil Pump
                                Cover for Kawasaki Z1/Z2 are completed.</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ</p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html">YOSHIMURA JAPAN FACEBOOK</a>
                        </div>
                    </div>
                </article>
                <article class="news-items">
                    <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news07.jpg" alt="name image"></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">The initial production of Engine Cover and Oil Pump
                                Cover for Kawasaki Z1/Z2 are completed.</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ</p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html">K-FACTORY</a>
                        </div>
                    </div>
                </article>
                <article class="news-items">
                    <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news08.jpg" alt="name image"></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">The initial production of Engine Cover and Oil Pump
                                Cover for Kawasaki Z1/Z2 are completed.</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ</p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html">SP TAKEGAWA</a>
                        </div>
                    </div>
                </article>
                <article class="news-items">
                    <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news09.jpg" alt="name image"></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">The initial production of Engine Cover and Oil Pump
                                Cover for Kawasaki Z1/Z2 are completed.</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ</p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html"> Young Machine</a>
                        </div>
                    </div>
                </article>
                <article class="news-items">
                    <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news10.jpg" alt="name image"></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">The initial production of Engine Cover and Oil Pump
                                Cover for Kawasaki Z1/Z2 are completed.</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ</p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html">YOSHIMURA JAPAN FACEBOOK</a>
                        </div>
                    </div>
                </article>
                <article class="news-items">
                    <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news11.jpg" alt="name image"></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">The initial production of Engine Cover and Oil Pump
                                Cover for Kawasaki Z1/Z2 are completed.</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ</p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html">K-FACTORY</a>
                        </div>
                    </div>
                </article>
                <article class="news-items">
                    <a href="detail.html"><img class="lazy" src="img/bg-img.jpg"
                            data-src="img/img_test/news/img-news12.jpg" alt="name image"></a>
                    <div class="news-items-body">
                        <p class="tag-category industry"><a href="category.html">News</a></p>
                        <h3 class="title"><a href="detail.html">The initial production of Engine Cover and Oil Pump
                                Cover for Kawasaki Z1/Z2 are completed.</a></h3>
                        <p class="hidden-sm hidden-xs dotted-line-2 summary">Xưa có một anh chàng tiều phu nghèo, 
												cha mẹ anh bệnh nặng nên qua đời sớm, anh phải sống mồ côi cha mẹ từ nhỏ và tài sản của anh 
												chỉ có một chiếc rìu. Hàng ngày anh phải xách rìu vào rừng để đốn củi bán để lấy tiền kiếm sống 
												qua ngày. Cạnh bìa rừng có một con sông nước chảy rất xiết, ai đó lỡ trượt chân rơi xuống sông 
												thì rất khó bơi vào bờ</p>
                        <div class="meta">
                            <time>81,083 views</time>
                            <a class="category" href="category.html">SP TAKEGAWA</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="hidden-sm hidden-xs sidebar">
            <div class="wrapper-youtube">
                <div class="heading">
                    <h2>MotoTube</h2>
                </div>
                <iframe width="300" height="250" src="https://www.youtube.com/embed/LopMoV5ahqg" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="wrapper-ranking">
                <div class="heading">
                    <h2>Viewed Ranking</h2>
                </div>
                <div class="list-news">
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news11.jpg" alt="name image">
                            <p class="ranking-num">1</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom? 2019-2020 KATANA Revives on Neoclassic Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news11.jpg" alt="name image">
                            <p class="ranking-num">2</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news10.jpg" alt="name image">
                            <p class="ranking-num">3</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news09.jpg" alt="name image">
                            <p class="ranking-num">4</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                    <article class="media news-items">
                        <a href="detail.html"><img width="105" height="80" class="lazy" src="img/bg-img.jpg"
                                data-src="img/img_test/news/img-news08.jpg" alt="name image">
                            <p class="ranking-num">5</p>
                        </a>
                        <div class="media-body news-items-body">
                            <h3 class="title dotted-line-3"><a href="detail.html">2019-2020 KATANA Revives on Neoclassic
                                    Boom?</a></h3>
                            <div class="meta">
                                <time>81,083 views</time>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="follow-us">
                <div class="heading">
                    <h2>Follow Us</h2>
                </div>
                <ul class="follow-us-ct">
                    <li>
                        <div class="fb-page"
                            data-href="https://www.facebook.com/WebikeJapan/?__tn__=%2Cd%2CP-R&eid=ARCWwrr5S8PpLip_zYBVEWzrsxtEbqkOKbGy4BWAfo64LytNa2ZzSRQ7jAmB7pGlOEAhMBWlUKf18ESx"
                            data-width="340" data-hide-cover="false" data-show-facepile="true"></div>
                    </li>
                    <li>
                        <a class="twitter-timeline" data-width="272" data-height="700" data-dnt="true"
                            data-link-color="#2B7BB9" href="https://twitter.com/WebikeJapan?ref_src=twsrc%5Etfw">Tweets
                            by WebikeJapan</a>
                        <!--<a class="btn-twitter" href="#"><span><i class="icon icon-social-twitter-side"></i></span> twitter</a>-->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection