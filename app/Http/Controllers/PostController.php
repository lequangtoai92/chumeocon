<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Personality;
use App\Categories;
use Auth;

class PostController extends Controller
{
    public function getPosts(){
        // var_dump(Auth::user()->id);
        $list_personality = Personality::where('status','=',1)->get();
        $list_categories = Categories::where('status','=',1)->get();
        return view('user.posts',compact('list_personality', 'list_categories'));
    }

    public function postPosts(Request $req){
        $folder_image = $this->creatFolder();
        if ($req->hasFile('image_upload')) {
            $file = $req->image_upload;
            $src = $folder_image . round(microtime(true) * 1000) . '.' . $file->getClientOriginalExtension();
            $file->move($folder_image, $src);
        }
        $driver = 'windown';
        $browser = 'chorme';
        $version = '72.000';
        $posts = new Posts();
        $posts->id_personality = $req->personality; // duc tinh
        $posts->id_account = Auth::user()->id;//id tac gia
        $posts->title = $req->name_posts;// tieu de
        $posts->content = $req->main_content;// noi dung
        $posts->summary = $req->summary; // tom tat
        $posts->categories = $req->categories; // nhom danh muc
        $posts->image = isset($src) ? $src: 'img/no_image.png'; // hinh anh
        $posts->age = isset($req->ages) ? $req->ages : 5; // tuoi
        $posts->source =isset($req->source) ? $req->source: 'Sưu tầm'; //nguon
        $posts->author =isset($req->author) ? $req->author: 'Ẩn danh'; //Tác giả
        $posts->driver =isset($driver) ? $driver: 'windown'; //Tác giả
        $posts->browser =isset($browser) ? $browser: 'chorme'; //Tác giả
        $posts->version =isset($version) ? $version: '72.000'; //Tác giả
        $posts->num_like = 0; // trang thai
        $posts->num_dislike = 0; // trang thai
        $posts->num_view = 0; // trang thai
        $posts->status = 6; // trang thai
        $posts->save();
        // var_dump($posts);exit;
        return redirect()->back()->with('thanhcong','Tạo bài thành công');
    }

    function creatFolder(){
        $month=date("Y-m");
        $structure = './image_post/'.$month.'/';
        if (!file_exists($structure)) {
            mkdir($structure, 0777, true);
        }
        return $structure;
    }

    public function doUpload(Request $request){
        if ($request->hasFile('filesTest')) {
            $file = $request->filesTest;

            //Lấy Tên files
            echo 'Tên Files: ' . $file->getClientOriginalName();
            echo '<br/>';

            //Lấy Đuôi File
            echo 'Đuôi file: ' . $file->getClientOriginalExtension();
            echo '<br/>';

            //Lấy đường dẫn tạm thời của file
            echo 'Đường dẫn tạm: ' . $file->getRealPath();
            echo '<br/>';

            //Lấy kích cỡ của file đơn vị tính theo bytes
            echo 'Kích cỡ file: ' . $file->getSize();
            echo '<br/>';

            //Lấy kiểu file
            echo 'Kiểu files: ' . $file->getMimeType();

            $file->move('upload', $file->getClientOriginalName());
            return $file->getRealPath();
        }
    }

    public function getChangeMyPost(Request $req){
        $posts = Posts::where('id_post',$req->id)->first();
        $list_personality = Personality::where('status','=',1)->get();
        $list_categories = Categories::where('status','=',1)->get();
        return view('user.change_my_posts',compact('posts', 'list_personality', 'list_categories'));
    }

    public function postChangeMyPosts(Request $req){
        $folder_image = $this->creatFolder();
        if ($req->hasFile('image_upload')) {
            $file = $req->image_upload;
            $src = $folder_image . round(microtime(true) * 1000) . '.' . $file->getClientOriginalExtension();
            $file->move($folder_image, $src);
        }
        $driver = 'windown';
        $browser = 'chorme';
        $version = '72.000';
        $posts = new Posts();
        $posts->id_personality = $req->personality; // duc tinh
        $posts->id_account = Auth::user()->id;//id tac gia
        $posts->title = $req->name_posts;// tieu de
        $posts->content = $req->main_content;// noi dung
        $posts->summary = $req->summary; // tom tat
        $posts->categories = $req->categories; // nhom danh muc
        $posts->image = isset($src) ? $src: 'img/no_image.png'; // hinh anh
        $posts->age = isset($req->ages) ? $req->ages : 5; // tuoi
        $posts->source =isset($req->source) ? $req->source: 'Sưu tầm'; //nguon
        $posts->author =isset($req->author) ? $req->author: 'Ẩn danh'; //Tác giả
        $posts->driver =isset($driver) ? $driver: 'windown'; //Tác giả
        $posts->browser =isset($browser) ? $browser: 'chorme'; //Tác giả
        $posts->version =isset($version) ? $version: '72.000'; //Tác giả
        $posts->num_like = 0; // trang thai
        $posts->num_dislike = 0; // trang thai
        $posts->num_view = 0; // trang thai
        $posts->status = 6; // trang thai
        $posts->save();
        // var_dump($posts);exit;
        return redirect()->back()->with('thanhcong','Tạo bài thành công');
    }
}