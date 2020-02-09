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

Route:: get('co-tich', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getFairyTales'
]);

Route:: get('co-tich-viet-nam', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getVietnameseFairyTales'
]);

Route:: get('co-tich-the-gioi', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getWordFairyTales'
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

Route:: get('ve', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getVe'
]);

Route:: get('cau-do', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getQuiz'
]);

Route:: get('tin-tuc', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getNews'
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

Route::get('bai-viet/{slug}',[
	'as'=>'baiviet',
	'uses'=>'PageController@getViewPosts'
]);

Route::get('tac-gia/{id}',[
	'as'=>'tacgia',
	'uses'=>'PageController@getViewAuthor'
]);

Route::get('danh-muc/{id}',[
	'as'=>'danhmuc',
	'uses'=>'PageController@getCategory'
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

Route::post('posts',[
	'as'=>'posts',
	'uses'=>'PostController@postPosts'
]);

Route:: get('dang-phim-hoat-hinh', [
    'as' => 'posts-cartoon',
    'uses' => 'PostController@getPostsCarton'
]);

Route:: post('dang-phim-hoat-hinh', [
    'as' => 'posts-cartoon',
    'uses' => 'PostController@postPostsCartoon'
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
Route:: get('404', [
    'as' => 'thong-tin',
    'uses' => 'PageController@getAdminAccount'
]);


// admin
Route:: get('admin', [
    'as' => 'thong-tin',
    'uses' => 'AdminController@getAdmin'
]);

Route:: get('admin/account/{id}', [
    'as' => 'thong-tin',
    'uses' => 'AdminController@getAdminAccount'
]);

Route:: get('admin/post/{id}', [
    'as' => 'thong-tin',
    'uses' => 'AdminController@getAdminPosts'
]);

Route:: get('admin/feedback/{id}', [
    'as' => 'admin-feed-back',
    'uses' => 'AdminController@getAdminFeeback'
]);

Route:: get('admin/post-image', [
    'as' => 'admin-feed-back',
    'uses' => 'AdminController@getPostImage'
]);


Route::get('admin/getFeedback/{id}',[
	'as'=>'get-feedback',
	'uses'=>'AdminController@getAdminFeebackById'
]);

Route::post('admin/accessFeedback',[
	'as'=>'access-feedback',
	'uses'=>'AdminController@accessAdminFeebackById'
]);

Route::get('admin/getPostsStatus/{id}',[
	'as'=>'get-posts',
	'uses'=>'AdminController@getAdminPostsById'
]);

Route::post('admin/accessPostsStatus',[
	'as'=>'access-posts',
	'uses'=>'AdminController@accessAdminPostsById'
]);

Route::get('admin/getAccountStatus/{id}',[
	'as'=>'get-account',
	'uses'=>'AdminController@getAdmiAccountById'
]);

Route::post('admin/accessAccountStatus',[
	'as'=>'access-account',
	'uses'=>'AdminController@accessAdminAccountById'
]);

Route::get('admin/crawl',[
	'as'=>'crawl-truyen-co-tich',
	'uses'=>'AdminController@getCrawl'
]);

Route::post('admin/crawl',[
	'as'=>'crawl-truyen-co-tich',
	'uses'=>'AdminController@crawlTruyenCoTich'
]);

Route::get('admin/getTuoiTre',[
	'as'=>'theme-new',
	'uses'=>'AdminController@getTuoiTre'
]);

Route::post('admin/crawlTuoitre',[
	'as'=>'theme-new',
	'uses'=>'AdminController@crawlTuoitre'
]);

Route::post('admin/accessTuoitre',[
	'as'=>'theme-new',
	'uses'=>'AdminController@accessTuoitre'
]);

Route::get('admin/creat-sitemap',[
	'as'=>'creat-sitemap',
	'uses'=>'AdminController@creatSitemMap'
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

Route:: post('dang-nhap/quen-mat-khau', [
    'as' => 'forgot_pass_word',
    'uses' => 'PageController@forgotPassword'
]);

Route::get('/search',['uses' => 'SearchController@getSearch','as' => 'search']);


Route::post('upload_image',[
	'as'=>'upload_image',
	'uses'=>'PostController@upload_image'
]);


Route:: get('crazy-english', [
    'as' => 'crazy-english',
    'uses' => 'LearnEnglish@getIndex'
]);

Route::get('note-english', [
    'as' => 'note-english',
    'uses' => 'LearnEnglish@note'
]);
// Route::post('note-english', [
//     'as' => 'note-english',
//     'uses' => 'LearnEnglish@note'
// ]);

