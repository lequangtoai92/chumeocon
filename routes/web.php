<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getIndex'
]);

Route:: get('index', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getIndex'
]);

Route:: get('truyen-moi', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getNewStory'
]);


Route:: get('co-tich-viet-nam', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getVietnameseFairyTales'
]);

Route:: get('co-tich-nhat-ban', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getJapanFairyTales'
]);

Route:: get('truyen-co-grimms', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getGrimmsFairyTales'
]);

Route:: get('than-thoai-hi-lap', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getGreekMythology'
]);

Route:: get('ca-dao-tuc-ngu', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getVietnameseProverbs'
]);

Route:: get('loi-hay-y-dep', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getGoodWord'
]);

Route:: get('truyen-cuoi', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getFunnyStory'
]);

Route:: get('gop-y', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getFeedback'
]);

// user

Route:: get('info', [
    'as' => 'thong-tin',
    'uses' => 'PageController@getInfo'
]);

Route:: get('posts', [
    'as' => 'thong-tin',
    'uses' => 'PageController@getPosts'
]);

Route:: get('my-posts', [
    'as' => 'thong-tin',
    'uses' => 'PageController@getMyPosts'
]);

Route:: get('messages', [
    'as' => 'thong-tin',
    'uses' => 'PageController@getMessages'
]);

Route:: get('notifice', [
    'as' => 'thong-tin',
    'uses' => 'PageController@getNotifice'
]);

// end user


// admin
Route:: get('admin/account', [
    'as' => 'thong-tin',
    'uses' => 'PageController@getAdminAccount'
]);

Route:: get('admin/post', [
    'as' => 'thong-tin',
    'uses' => 'PageController@getAdminPosts'
]);

Route:: get('admin/feedback', [
    'as' => 'thong-tin',
    'uses' => 'PageController@getAdminFeeback'
]);

// end admin







