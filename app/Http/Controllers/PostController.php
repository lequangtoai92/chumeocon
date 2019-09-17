<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Personality;
use App\Categories;
use App\Status;
use Auth;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function getPosts(){
        $list_status = Status::where('status','=',1)->get();
        $list_personality = Personality::where('status','=',1)->get();
        $list_categories = Categories::where('status','=',1)->get();
        return view('user.posts',compact('list_personality', 'list_categories', 'list_status'));
    }

    public function getPostsCarton(){
        $list_status = Status::where('status','=',1)->get();
        $list_categories = Categories::where([['status','=',1],['id', '>=', 10]])->get();
        return view('user.posts_cartoon',compact('list_categories', 'list_status'));
    }

    public function postPosts(Request $req){
        $this->validate($req,
            [
                'name_posts'=>'required',
                'main_content'=>'required'
            ],
            [
                'name_posts.required'=>'Chưa nhập tên bài viết',
                'main_content.required'=>'Chưa nhập nội dung'
            ]
        );
        $folder_image = $this->creatFolder();
        if ($req->hasFile('image_upload')) {
            $file = $req->image_upload;
            $src = $folder_image . round(microtime(true) * 1000) . '.' . $file->getClientOriginalExtension();
            $file->move($folder_image, $src);
        }else if (isset($req->src_image_libary)) {
            $src = $req->src_image_libary;
        }
        $link = isset($src) ? '../'.$src: '';
        $ua = $this->getBrowser();
        $driver = $ua['platform'];
        $browser = $ua['name'];
        $version = $ua['version'];
        $posts = new Posts();
        $posts->id_personality = $req->personality; // duc tinh
        $posts->id_account = Auth::user()->id;//id tac gia
        $posts->title = $req->name_posts;// tieu de
        $posts->content = $req->main_content;// noi dung
        $posts->summary = $req->summary; // tom tat
        $posts->categories = $req->categories; // nhom danh muc
        $posts->image = isset($src) ? $link: '../img/no_image.png'; // hinh anh
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
        return redirect()->back()->with('thanhcong','Tạo bài thành công');
    }

    

    function creatFolder(){
        $month=date("Y-m");
        $structure = 'public/image_post/'.$month.'/';
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
        $posts = Posts::where('id',$req->id)->first();
        if ( $this->checkAuthor($posts->id_account) && $posts->status == 6){
            $list_status = Status::where('status','=',1)->get();
            $list_personality = Personality::where('status','=',1)->get();
            $list_categories = Categories::where('status','=',1)->get();
            return view('user.change_my_posts',compact('posts', 'list_personality', 'list_categories', 'list_status'));
        } else {
            return redirect()->back();
        }
    }

    public function postChangeMyPosts(Request $req){
        $this->validate($req,
            [
                'name_posts'=>'required',
                'main_content'=>'required'
            ],
            [
                'name_posts.required'=>'Chưa nhập tên bài viết',
                'main_content.required'=>'Chưa nhập nội dung'
            ]
        );
        $folder_image = $this->creatFolder();
        if ($req->hasFile('image_upload')) {
            $file = $req->image_upload;
            $src = $folder_image . round(microtime(true) * 1000) . '.' . $file->getClientOriginalExtension();
            $file->move($folder_image, $src);
        }
        $ua = $this->getBrowser();
        $driver = $ua['platform'];
        $browser = $ua['name'];
        $version = $ua['version'];
        // var_dump($req->personality);exit;
        // $posts = Posts::where('id',$req->id_post)
        // ->update([['id_personality' => $req->personality],
        //         ['title' => $req->name_posts], 
        //         ['content' => $req->main_content], 
        //         ['summary' => $req->summary], 
        //         ['categories' => $req->categories], 
        //         ['image' => isset($src) ? $src: ], 
        //         ['age' => isset($req->ages) ? $req->ages : 5],
        //         ['source' => isset($req->source) ? $req->source: 'Sưu tầm'],
        //         ['author' => isset($req->author) ? $req->author: 'Ẩn danh'],
        //         ['driver' => isset($driver) ? $driver: 'windown'],
        //         ['browser' => isset($browser) ? $browser: 'chorme'],
        //         ['version' => isset($version) ? $version: '72.000'],
        //         ['status' => isset($req->status) ? $req->status: 6]]); 

        $posts = new Posts();
        $posts->exists = true;
        $posts->id = $req->id_post;
        $posts->id_personality = $req->personality; // duc tinh
        $posts->title = $req->name_posts;// tieu de
        $posts->content = $req->main_content;// noi dung
        $posts->summary = $req->summary; // tom tat
        $posts->categories = $req->categories; // nhom danh muc
        if (isset($src)) {
            $posts->image = '../'.$src;// hinh anh
        }
        $posts->age = isset($req->ages) ? $req->ages : 5; // tuoi
        $posts->source =isset($req->source) ? $req->source: 'Sưu tầm'; //nguon
        $posts->author =isset($req->author) ? $req->author: 'Ẩn danh'; //Tác giả
        $posts->driver =isset($driver) ? $driver: 'windown'; //Tác giả
        $posts->browser =isset($browser) ? $browser: 'chorme'; //Tác giả
        $posts->version =isset($version) ? $version: '72.000'; //Tác giả
        $posts->status = $req->status; // trang thai
        $posts->save();
        return redirect()->back()->with('thanhcong','Tạo bài thành công');
    }

    public function getPostsCartoon(){
        // var_dump(Auth::user()->id);
        $list_status = Status::where('status','=',1)->get();
        $list_personality = Personality::where('status','=',1)->get();
        $list_categories = Categories::where('status','=',1)->get();
        return view('user.posts',compact('list_personality', 'list_categories', 'list_status'));
    }

    public function postPostsCartoon(Request $req){
        $this->validate($req,
            [
                'name_posts'=>'required',
                'summary'=>'required'
            ],
            [
                'name_posts.required'=>'Chưa nhập tên bài viết',
                'summary.required'=>'Chưa nhập id youtube'
            ]
        );
        $folder_image = $this->creatFolder();
        if ($req->hasFile('image_upload')) {
            $file = $req->image_upload;
            $src = $folder_image . round(microtime(true) * 1000) . '.' . $file->getClientOriginalExtension();
            $file->move($folder_image, $src);
        }
        $link = isset($src) ? '../'.$src: '';
        $ua = $this->getBrowser();
        $driver = $ua['platform'];
        $browser = $ua['name'];
        $version = $ua['version'];
        $posts = new Posts();
        $posts->id_personality = $req->personality; // duc tinh
        $posts->id_account = Auth::user()->id;//id tac gia
        $posts->title = $req->name_posts;// tieu de
        $posts->content = $req->main_content;// noi dung
        $posts->summary = $req->summary; // tom tat
        $posts->categories = $req->categories; // nhom danh muc
        $posts->image = isset($src) ? $link: '../img/no_image.png'; // hinh anh
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
        return redirect()->back()->with('thanhcong','Tạo bài thành công');
    }

    public function checkAuthor($id){
        if ( Auth::user()->id == $id ) {
            return true;
        } else {
            return false;
        }
    }

    function getBrowser(){
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }

    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Trident/i',$u_agent))
    { // this condition is for IE11
        $bname = 'Internet Explorer';
        $ub = "rv";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }
   
    // finally get the correct version number
    // Added "|:"
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
     ')[/|: ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }

    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }

    // check if we have a number
    if ($version==null || $version=="") {$version="?";}

    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}
    
}