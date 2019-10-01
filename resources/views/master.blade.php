<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" itemprop="description" content="@yield('meta_description')">
    <link rel="stylesheet" href="{!! assetRemote('css/datepicker.min.css') !!}">
    <link rel="stylesheet" href="{!! assetRemote('css/style.css') !!}">
    <link rel="stylesheet" href="{!! assetRemote('css/template.css') !!}">
    <link rel="stylesheet" href="{!! assetRemote('css/top.css') !!}">

    <script src="{!! assetRemote('js/jquery.js') !!}"></script>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NCTRQXF-FA');
    </script>
    <!-- End Google Tag Manager -->
    <meta name="author" content="@yield('meta_author')">
    <meta property="og:title" content="@yield('meta_og_title')" />
    <meta property="og:url" content="@yield('meta_og_url')" />
    <meta property="og:image" content="@yield('meta_og_image')" />
    <meta property="og:type" content="@yield('meta_og_type')" />

    <meta property="og:site_name" content="Truyện chú mèo con" />
    <meta property="og:description" content="@yield('meta_og_description')" />

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-4664812161671730",
        enable_page_level_ads: true
    });
    </script>
</head>

<body class="">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCTRQXF" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="fb-root"></div>
    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=2238283566497298&autoLogAppEvents=1"></script> -->
    @include('header')


    @yield('content')


    @include('footer')

    <script src="{!! assetRemote('js/datepicker.js') !!}"></script>
    <script src="{!! assetRemote('dist/tinymce_1/js/tinymce/tinymce.min.js') !!}"></script>
    <script src="{!! assetRemote('vendor/unveil-master/jquery.unveil.min.js') !!}"></script>
    <script src="{!! assetRemote('vendor/bootstrap-4.3.1/js/bootstrap.min.js') !!}"></script>
    <script src="{!! assetRemote('vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') !!}"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3">
    </script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="{!! assetRemote('js/main.js') !!}"></script>
    <script src="{!! assetRemote('js/play_api.js') !!}"></script>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=2238283566497298&autoLogAppEvents=1">
    </script>
</body>

</html>