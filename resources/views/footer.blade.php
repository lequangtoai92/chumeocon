<style>
footer .container .block-3 {
    text-align: center;
}

footer .container .block-footer img{
    border-radius: 30px;
}
footer .container .block-footer {
    width: 33%;
}

footer .container {
    display: inline-flex;
}

footer {
    text-align: center;
    border-top: 1px solid black;
    background-color: #bbbb8f;

}

footer p {
    padding-bottom: 10px;
}

@media (max-width: 767px) {
    footer .container .block-footer {
        width: 100%;
    }

    footer .container {
        display: block;
    }
}
</style>
<footer>
    <div class="container">
        <div class="block-footer block-1">
            <a href="#" class="logo-footer">
                <img width="187" height="39" class="lazy" src="{!! assetRemote('img/bg-img.jpg') !!}"
                    data-src="{!! assetRemote('img/img-logo-footer.png') !!}" alt="Logo truyện chú mèo con">
            </a>
            <p>Hãy đọc truyện cho con bạn nghe mỗi ngày</p>

        </div>
        <div class="block-footer block-2">
            <ul class="social-footer">
                <li><a href="https://www.facebook.com/Truy%E1%BB%87n-ch%C3%BA-m%C3%A8o-con-104213484322000/"><i
                            class="icon icon-footer-facebook"></i></a></li>
                <li><a href="#"><i class="icon icon-footer-youtube"></i></a></li>
                <li><a href="#"><i class="icon icon-footer-twitter"></i></a></li>
            </ul>
        </div>
        <div class="block-footer block-3">
            <ul class="">
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Giải đáp</a></li>
            </ul>
        </div>

    </div>
    <p class="copyright">Copyright (c) Truyenchumeocon 2019.</p>
</footer>
</div>
</div>
</div>
<div id="gotop"><span class="chevron top"></span></div>
<div id="fb-root"></div>