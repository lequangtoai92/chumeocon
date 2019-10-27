<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Personality;
use App\Categories;
use App\Status;
use App\Connotation;
use Auth;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function getPosts(){
        $list_status = Status::where('status','=',1)->get();
        $list_personality = Personality::where('status','=',1)->get();
        $list_categories = Categories::where('status','=',1)->where('group','=',1)->get();
        return view('user.posts',compact('list_personality', 'list_categories', 'list_status'));
    }

    public function upload_image(){
        $this->middleware('auth');
        reset($_FILES);
        $file = current($_FILES);
        if(is_uploaded_file($file['tmp_name']))
        {
            if(preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $file['name'])){
                header("HTTP/1.1 400 Invalid file name,Bad request");
                return;
            }
            // Validating Image file type by extensions
            if(!in_array(strtolower(pathinfo($file['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))){
                header("HTTP/1.1 400 Invalid extension,Bad request");
                return;
            }
            $folder_image = $this->creatFolderUploadImage();
            $file_name ='truyenchumeocon_posts_' . Auth::user()->id . '_' . round(microtime(true) * 1000) . '.' . substr($file['name'],-3);
            $fileName = $folder_image . $file_name;
            move_uploaded_file($file['tmp_name'], $fileName);
            echo json_encode(array('file_path' => $fileName));
        }
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
            $src = $folder_image . 'posts_' . Auth::user()->id . '_' . round(microtime(true) * 1000) . '.' . $file->getClientOriginalExtension();
            $file->move($folder_image, $src);
        }else if (isset($req->src_image_libary)) {
            $src = $req->src_image_libary;
        }
        $link = isset($src) ? $src: '';
        $ua = $this->getBrowser();
        $driver = $ua['platform'];
        $browser = $ua['name'];
        $version = $ua['version'];
        $posts = new Posts();
        $posts->id_personality = $req->personality; // duc tinh
        $posts->id_account = Auth::user()->id;//id tac gia
        $posts->title = $req->name_posts;// tieu de
        $posts->slug = isset($req->name_posts) ? str_slug($req->name_posts).'-' .round(microtime(true) * 1000): '';// slug
        $posts->content = $req->main_content;// noi dung
        $posts->summary = $this->creatSummary($req->summary, $req->main_content); // tom tatz
        $posts->description = $this->creatDescription($req->summary, $req->main_content); // tom tat
        $posts->categories = $req->categories; // nhom danh muc
        $posts->image = isset($src) ? $link: 'img/no_image.png'; // hinh anh
        $posts->age = isset($req->ages) ? $req->ages : 5; // tuoi
        $posts->source =isset($req->source) ? $req->source: 'Sưu tầm'; //nguon
        $posts->author =isset($req->author) ? $req->author: 'Ẩn danh'; //Tác giả
        $posts->driver =isset($driver) ? $driver: 'windown'; //Tác giả
        $posts->browser =isset($browser) ? $browser: 'chorme'; //Tác giả
        $posts->version =isset($version) ? $version: '72.000'; //Tác giả
        $posts->num_like = 0; // trang thai
        $posts->num_dislike = 0; // trang thai
        $posts->num_view = 0; // trang thai
        if (Auth::user()->authorities < 4) {
            $posts->status = 5; // trang thai
        } else {
            $posts->status = 6; // trang thai
        }
        $posts->save();

        $connotation = new Connotation();
        $connotation->id_post = $posts->id;
        $connotation->id_author = Auth::user()->id;//id tac gia
        $connotation->connotation = isset($req->connotation_content) ? $req->connotation_content : '';//ý nghĩa
        $connotation->question = isset($req->question_content) ? $req->question_content : '';//ý nghĩa
        $connotation->save();
        return redirect()->back()->with('success','');
    }

    function creatFolder(){
        $month=date("Y-m");
        $structure = 'public/image_post/'.$month.'/';
        if (!file_exists($structure)) {
            mkdir($structure, 0777, true);
        }
        return $structure;
    }

    function creatFolderUploadImage(){
        $month=date("Y-m");
        $structure = 'public/uploads/'.$month.'/';
        if (!file_exists($structure)) {
            mkdir($structure, 0777, true);
        }
        return $structure;
    }

    public function getChangeMyPost(Request $req){
        $posts = Posts::where('id',$req->id)->first();
        if ( $this->checkAuthor($posts->id_account)){
            $list_status = Status::where('status','=',1)->get();
            $list_personality = Personality::where('status','=',1)->get();
            $list_categories = Categories::where('status','=',1)->where('group','=',1)->get();
            $connotation = Connotation::where('id_post',$req->id)->first();
            if (!isset($connotation)) {
                $connotation = new Connotation();
                $connotation->id_post = $posts->id;
                $connotation->id_author = Auth::user()->id;//id tac gia
                $connotation->connotation = isset($req->connotation_content) ? $req->connotation_content : '';//ý nghĩa
                $connotation->question = isset($req->connotation_question) ? $req->connotation_question : '';//ý nghĩa
                $connotation->save();
            }
            return view('user.change_my_posts',compact('posts', 'list_personality', 'list_categories', 'list_status', 'connotation'));
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
            $src = $folder_image . 'postsupadte_' . $req->id_post . '_' . round(microtime(true) * 1000) . '.' . $file->getClientOriginalExtension();
            $file->move($folder_image, $src);
        }
        $ua = $this->getBrowser();
        $driver = $ua['platform'];
        $browser = $ua['name'];
        $version = $ua['version'];
        $posts = new Posts();
        $posts->exists = true;
        $posts->id = $req->id_post;
        $posts->id_personality = $req->personality; // duc tinh
        $posts->title = $req->name_posts;// tieu de
        $posts->content = $req->main_content;// noi dung
        $posts->summary = $this->creatSummary($req->summary, $req->main_content); // tom tat
        $posts->description = $this->creatDescription($req->summary, $req->main_content); // tom tat
        $posts->categories = $req->categories; // nhom danh muc
        if (isset($src)) {
            $posts->image = $src;// hinh anh
        }
        $posts->age = isset($req->ages) ? $req->ages : 5; // tuoi
        $posts->source =isset($req->source) ? $req->source: 'Sưu tầm'; //nguon
        $posts->author =isset($req->author) ? $req->author: 'Ẩn danh'; //Tác giả
        $posts->driver =isset($driver) ? $driver: 'windown'; //Tác giả
        $posts->browser =isset($browser) ? $browser: 'chorme'; //Tác giả
        $posts->version =isset($version) ? $version: '72.000'; //Tác giả
        if (Auth::user()->authorities < 4) {
            $posts->status = 5; // trang thai
        } else {
            $posts->status = 6; // trang thai
        }
        $posts->save();

        $connotation_get = Connotation::where('id_post',$req->id_post)->first();
        $connotation = new Connotation();
        $connotation->exists = true;
        $connotation->id = $connotation_get->id;
        $connotation->id_post = $req->id_post;
        $connotation->id_author = Auth::user()->id;//id tac gia
        $connotation->connotation = isset($req->connotation_content) ? $req->connotation_content : '';//ý nghĩa
        $connotation->question = isset($req->question_content) ? $req->question_content : '';//ý nghĩa
        $connotation->save();

        return redirect()->back();
    }

    public function getPostsCartoon(){
        $list_status = Status::where('status','=',1)->get();
        $list_personality = Personality::where('status','=',1)->get();
        $list_categories = Categories::where('status','=',1)->where('group','=',9)->get();
        return view('user.posts',compact('list_personality', 'list_categories', 'list_status'));
    }

    public function getPostsCarton(){
        $list_status = Status::where('status','=',1)->get();
        $list_categories = Categories::where([['status','=',1],['group', '=', 9]])->get();
        return view('user.posts_cartoon',compact('list_categories', 'list_status'));
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
        $link = isset($src) ? $src: '';
        $ua = $this->getBrowser();
        $driver = $ua['platform'];
        $browser = $ua['name'];
        $version = $ua['version'];
        $posts = new Posts();
        $posts->id_personality = 1; // duc tinh
        $posts->id_account = Auth::user()->id;//id tac gia
        $posts->title = $req->name_posts;// tieu de
        $posts->slug = isset($req->name_posts) ? str_slug($req->name_posts).'-' .round(microtime(true) * 1000): '';// slug
        $posts->content = $req->main_content;// noi dung
        $posts->summary = $this->creatSummary($req->summary, $req->main_content); // tom tat
        $posts->description = $this->creatDescription($req->summary, $req->main_content); // tom tat
        $posts->categories = $req->categories; // nhom danh muc
        $posts->image = isset($src) ? $link: 'img/no_image.png'; // hinh anh
        $posts->age = isset($req->ages) ? $req->ages : 5; // tuoi
        $posts->source =isset($req->source) ? $req->source: 'Sưu tầm'; //nguon
        $posts->author =isset($req->author) ? $req->author: 'Ẩn danh'; //Tác giả
        $posts->driver =isset($driver) ? $driver: 'windown'; //Tác giả
        $posts->browser =isset($browser) ? $browser: 'chorme'; //Tác giả
        $posts->version =isset($version) ? $version: '72.000'; //Tác giả
        $posts->num_like = 0; // trang thai
        $posts->num_dislike = 0; // trang thai
        $posts->num_view = 0; // trang thai
        if (Auth::user()->authorities < 4) {
            $posts->status = 5; // trang thai
        } else {
            $posts->status = 6; // trang thai
        }
        $posts->save();
        return redirect()->back()->with('success','');
    }

    public function checkAuthor($id){
        if ( Auth::user()->id == $id ) {
            return true;
        } else {
            return false;
        }
    }

    public function creatSummary($summary, $content){
        if (!isset($summary) || isset($summary) && strlen($summary) == 0){
            return 'Nơi lưu trữ những mẫu truyện hay, mang tính giáo dục để bố mẹ kể cho bé nghe nhằm giúp cho bé phát triển tư duy tốt hơn và gắn kết tình cảm giữa bố mẹ và con cái';
        } else {
            return $summary;
        }
    }

    public function creatDescription($summary, $content){
        if (!isset($summary) || isset($summary) && strlen($summary) == 0){
            return 'Nơi lưu trữ những mẫu truyện hay, mang tính giáo dục để bố mẹ kể cho bé nghe nhằm giúp cho bé phát triển tư duy tốt hơn và gắn kết tình cảm giữa bố mẹ và con cái';
        } else {
            return $summary;
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