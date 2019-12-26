<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Truyện chú mèo con</title>
    <meta name="description" itemprop="description"
        content="Nơi lưu trữ những mẫu truyện hay, mang tính giáo dục để bố mẹ kể cho bé nghe nhằm giúp cho bé phát triển tư duy tốt hơn và gắn kết tình cảm giữa bố mẹ và con cái">
    <link rel="stylesheet" href="{!! assetRemote('css/style.css') !!}">
    <link rel="stylesheet" href="{!! assetRemote('css/template.css') !!}">
    <link rel="stylesheet" href="{!! assetRemote('css/top.css') !!}">
    <link rel="stylesheet" href="{!! assetRemote('css/admin/admin.css') !!}">
    
    <!-- Main styles for this application-->
    <!-- <link rel="stylesheet" href="{!! assetRemote('admin/css/coreui-icons.min.css') !!}">
    <link rel="stylesheet" href="{!! assetRemote('admin/css/flag-icon.min.css') !!}">
    <link rel="stylesheet" href="{!! assetRemote('admin/css/font-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! assetRemote('admin/css/simple-line-icons.css') !!}">
    <link rel="stylesheet" href="{!! assetRemote('admin/css/style.min.css') !!}"> -->


    <script src="{!! assetRemote('js/jquery.js') !!}"></script>
</head>
<body class="">
@include('admin.header')
@yield('content')
</body>

</html>