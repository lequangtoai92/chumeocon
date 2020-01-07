<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/dang-nhap',
        '/dang-nhap/quen-mat-khau',
        '/gop-y',
        '/posts',
        '/messages',
        '/notifice',
        '/tai-khoan',
        '/change-my-posts',
        '/tai-khoan/update-password',
        '//tai-khoan/update-intro',
        '//dang-phim-hoat-hinh',
        '//upload_image',
        '//admin/crawl',
        '//admin/crawlTuoitre',
        '//admin/accessTuoitre',
        //
    ];
}
