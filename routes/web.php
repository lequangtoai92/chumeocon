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

Route:: get('phim-hoat-hinh', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getCartoon'
]);

Route:: get('do-re-mon', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getDoremon'
]);

Route:: get('tom-and-jerry', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getTomAndJerry'
]);

Route:: get('tho', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getVerse'
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
    'as' => 'feedback',
    'uses' => 'PageController@getFeedback'
]);

Route:: post('gop-y', [
    'as' => 'feedback',
    'uses' => 'PageController@postFeedback'
]);

Route::get('bai-viet/{id}',[
	'as'=>'baiviet',
	'uses'=>'PageController@getViewPosts'
]);

Route::get('tac-gia/{id}',[
	'as'=>'tacgia',
	'uses'=>'PageController@getViewAuthor'
]);

// user

Route:: get('tai-khoan', [
    'as' => 'thong-tin',
    'uses' => 'UserController@getInfo'
]);

Route:: post('tai-khoan', [
    'as' => 'update_pass_word',
    'uses' => 'LoginController@updatePassWord'
]);

Route:: post('tai-khoan', [
    'as' => 'update_info',
    'uses' => 'UserController@updateInfo'
]);

Route:: post('tai-khoan/update-password', [
    'as' => 'update_pass_word',
    'uses' => 'UserController@updatePassWord'
]);

Route:: post('tai-khoan/update-intro', [
    'as' => 'update_intro',
    'uses' => 'UserController@updateIntro'
]);

Route:: get('posts', [
    'as' => 'posts',
    'uses' => 'PostController@getPosts'
]);

Route:: get('dang-phim-hoat-hinh', [
    'as' => 'posts',
    'uses' => 'PostController@getPostsCarton'
]);

Route::post('posts',[
	'as'=>'posts',
	'uses'=>'PostController@postPosts'
]);

Route:: get('my-posts', [
    'as' => 'my_post',
    'uses' => 'UserController@getMyPosts'
]);

Route::get('delete-my-posts/{id}',[
	'as'=>'delete-posts',
	'uses'=>'UserController@getDeleteMyPost'
]);

Route::get('change-my-posts/{id}',[
	'as'=>'change_my_posts',
	'uses'=>'PostController@getChangeMyPost'
]);

Route::post('change-my-posts',[
	'as'=>'change_my_posts',
	'uses'=>'PostController@postChangeMyPosts'
]);

Route:: get('messages', [
    'as' => 'thong-tin',
    'uses' => 'UserController@getMessages'
]);

Route::post('messages', [
    'uses' => 'UserController@addFeedback',
    'as' => 'front.fb']);

Route:: get('notifice', [
    'as' => 'thong-tin',
    'uses' => 'UserController@getNotifice'
]);

Route:: post('notifice', [
    'as' => 'upload',
    'uses' => 'Filecontroller@doUpload'
]);
// end user


// admin
Route:: get('admin/account', [
    'as' => 'thong-tin',
    'uses' => 'AdminController@getAdminAccount'
]);

Route:: get('admin/post', [
    'as' => 'thong-tin',
    'uses' => 'AdminController@getAdminPosts'
]);

Route:: get('admin/feedback', [
    'as' => 'thong-tin',
    'uses' => 'AdminController@getAdminFeeback'
]);

// end admin

Route::get('dang-ky',[
	'as'=>'signin',
	'uses'=>'LoginController@getSignin'
]);

Route::post('dang-ky',[
	'as'=>'signin',
	'uses'=>'LoginController@postSignin'
]);

Route::get('dang-ky-nhanh',[
	'as'=>'signin_fast',
	'uses'=>'LoginController@getSigninFast'
]);

Route::post('dang-ky-nhanh',[
	'as'=>'signin_fast',
	'uses'=>'LoginController@postSigninFast'
]);

Route::get('dang-nhap',[
	'as'=>'login',
	'uses'=>'LoginController@getLogin'
]);
Route::post('dang-nhap',[
	'as'=>'login',
	'uses'=>'LoginController@postLogin'
]);

Route::get('dang-xuat',[
	'as'=>'logout',
	'uses'=>'LoginController@postLogout'
]);

