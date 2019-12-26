<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{!! assetRemote('css/datepicker.min.css') !!}">
    <link rel="stylesheet" href="{!! assetRemote('css/style.css') !!}">
    <link rel="stylesheet" href="{!! assetRemote('css/template.css') !!}">
    <link rel="stylesheet" href="{!! assetRemote('css/top.css') !!}">

    <script src="{!! assetRemote('js/jquery.js') !!}"></script>
    @include('meta')
</head>

<body class="">
   
    <div id="fb-root"></div>
    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=2238283566497298&autoLogAppEvents=1"></script> -->
    @include('header')


    @yield('content')


    @include('footer')

    <script src="{!! assetRemote('js/datepicker.js') !!}"></script>
    <script src="{!! assetRemote('dist/tinymce/js/tinymce/tinymce.min.js') !!}"></script>
    <script src="{!! assetRemote('vendor/unveil-master/jquery.unveil.min.js') !!}"></script>
    <script src="{!! assetRemote('vendor/bootstrap-4.3.1/js/bootstrap.min.js') !!}"></script>
    <script src="{!! assetRemote('vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') !!}"></script>
    <script src="{!! assetRemote('js/main.js') !!}"></script>
    <script src="{!! assetRemote('js/play_api.js') !!}"></script>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=2238283566497298&autoLogAppEvents=1">
    </script>
</body>

</html>