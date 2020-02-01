<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posts;
use App\Feedback;
use App\Simple_html_dom;
use App\Personality;
use App\Categories;
use App\Status;
use App\Connotation;
use App\FunctionDefault;
use App\TuoiTre;
use DB;
use Auth;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function getAdmin(){
        if ($this->checkAdmin()){
            return redirect('index');
        }
        return redirect('admin/account/1');
    }

    public function getAdminAccount(Request $req){
        if ($this->checkAdmin()){
            return redirect('index');
        }
        if ($req->id == 1) {
            $account = User::where('authorities', '>' , 1)->paginate(15);
        } else {
            $account = User::where('status', $req->id)->paginate(15);
        }
        return view('admin.account',compact('account'));
    }

    public function getAdminPosts(Request $req){
        if ($this->checkAdmin()){
            return redirect('index');
        }
        if ($req->id == 1) {
            $list_posts = Posts::paginate(15);
        } else {
            $list_posts = Posts::where('status', $req->id)->paginate(15);
        }
        return view('admin.posts',compact('list_posts'));
    }

    public function getAdminFeeback(Request $req){
        if ($this->checkAdmin()){
            return redirect('index');
        }
        if ($req->id == 1) {
            $list_feedback_admin = Feedback::paginate(15);
        } else {
            $list_feedback_admin = Feedback::where('status','=', $req->id)->paginate(15);
        }
        return view('admin.feedback',compact('list_feedback_admin'));
    }

    public function getAdminFeebackById(Request $req){
        $this->checkAdmin();
        $list_feedback_admin = Feedback::where('status','=',$req->id)->paginate(15);
        return view('admin.feedback',compact('list_feedback_admin'));
    }

    public function accessAdminFeebackById(Request $req){
        $this->checkAdmin();
        $res = Feedback::where('id' ,$req->id)->update(['status' => $req->status]);
        return redirect()->back();
    }

    public function getAdminPostsById(Request $req){
        $this->checkAdmin();
        $list_posts_admin = Posts::where('status','=',$req->id)->paginate(15);
        return view('admin.posts',compact('list_posts_admin'));
    }

    public function accessAdminPostsById(Request $req){
        $this->checkAdmin();
        $res = Posts::where('id' ,$req->id)->update(['status' => $req->status]);
        return redirect()->back();
    }

    public function getAdmiAccountById(Request $req){
        $this->checkAdmin();
        $list_user_admin = User::where('status','=',$req->id)->paginate(15);
        return view('admin.account',compact('list_user_admin'));
    }

    public function accessAdminAccountById(Request $req){
        $this->checkAdmin();
        $res = User::where('id' ,$req->id)->update(['status' => $req->status]);
        return redirect()->back();
    }

    public function getPostImage(){
        $list_status = Status::where('status','=',1)->get();
        $list_personality = Personality::where('status','=',1)->get();
        $list_categories = Categories::where('status','=',1)->where('group','=',1)->get();
        return view('admin.posts_image',compact('list_personality', 'list_categories', 'list_status'));
    }

    public function getCrawl(){
        $list_status = Status::where('status','=',1)->get();
        $list_personality = Personality::where('status','=',1)->get();
        $list_categories = Categories::where('status','=',1)->where('group','=',1)->get();
        return view('admin.crawl',compact('list_personality', 'list_categories', 'list_status'));
    }

    public function checkAdmin(){
        if (Auth::user()->authorities > 3 ) {
            // return view('page.404');
            // return redirect('index');
            return true;
        } else {
            return false;
        }
    }

    public function updateInfo(Request $req){
        if ($req->hasFile('image_upload')) {
            $file = $req->image_upload;
            $src = 'http://chumeocon.com/public/image/' . round(microtime(true) * 1000) . '.' . $file->getClientOriginalExtension();
            $file->move($folder_image, $src);
        }
    }

    // public function crawlTruyenCoTich(Request $req){
    //     $html = new Simple_html_dom();
    //     if(isset($req->target)){
    //         $crawl = $req->target;
    //         $find = "https://";
    //         if(strpos($crawl,$find)!==false){
    //             $html->load_file($crawl);
    //             foreach($html->find('div.col-md-10 .article-post') as $link) {
    //                 return str_replace("https://truyencotich.top","http://truyenchumeocon.com", $link);
    //             }
    //         } else {
    //             return "Invalid URL";
    //         }
    //     }
    // }

    public function crawlTruyenCoTich(Request $req){
        return;
        $html = new Simple_html_dom();
        $function_default = new FunctionDefault();
        $html_content = new Simple_html_dom();
        $story_info = (object)array();
        $html->load_file($req->target);
        foreach($html->find('div.story_2 a') as $link) {
            $html_content->load_file($link->href);
            // return isset($html_content->find('div.col-md-10 .article-post')[0]->find('img')[0]) ? 'https://truyencotich.top' . $html_content->find('div.col-md-10 .article-post')[0]->find('img')[0]->src : '';
            $story_info->name = $link->find('div.feature_title')[0];
            $story_info->summary = $link->find('div.short_desc')[0];
            $story_info->image = isset($html_content->find('div.col-md-10 .article-post')[0]->find('img')[0]) ? 'https://truyencotich.top' . $html_content->find('div.col-md-10 .article-post')[0]->find('img')[0]->src : '';
            isset($html_content->find('div.col-md-10 .article-post')[0]->find('img')[0]) ? $html_content->find('div.col-md-10 .article-post')[0]->find('img')[0]->outertext = '' : '';
            $story_info->content = str_replace('https://truyencotich.top', 'http://truyenchumeocon.com', $html_content->find('div.col-md-10 .article-post')[0]);
            
            $ua = $function_default->getBrowser();
            $driver = $ua['platform'];
            $browser = $ua['name'];
            $version = $ua['version'];
            $posts = new Posts();
            $posts->id_personality = 1; // duc tinh
            $posts->id_account = Auth::user()->id;//id tac gia
            $posts->title = strip_tags($story_info->name);// tieu de
            $posts->slug = isset($story_info->name) ? str_slug(strip_tags($story_info->name)).'-' .round(microtime(true) * 1000): '';// slug
            $posts->content = $story_info->content;// noi dung
            $posts->summary = strip_tags($story_info->summary); // tom tatz
            $posts->description = strip_tags($story_info->summary); // tom tat
            $posts->categories = 2; // nhom danh muc
            $posts->image = isset($story_info->image) ? $story_info->image: 'img/no_image.png'; // hinh anh
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
        }
            
    }

    public function getTuoiTre(){
        $list_news = TuoiTre::orderBy('id', 'desc')->paginate(50);
        return view('admin.news',compact('list_news'));
    }

    public function crawlTuoitre(){
        $html = new simple_html_dom();
        $page = 2;
        $today = date("d/m");
        $array_news = [];
        
        $link_first_post = TuoiTre::select('link')->orderBy('id', 'desc')->first();
        if(!isset($link_first_post)){
            $link_first_post = (object)array();
            $link_first_post->link = "";
        }

        $crawl = 'https://tuoitre.vn/tin-moi-nhat.htm';
        $html->load_file($crawl);
        foreach($html->find('li.news-item') as $block){
            if ($today != strip_tags($block->find('.published-date .second-label')[0]) || strip_tags($block->find('a')[0]->href) == $link_first_post->link){
                $this->saveDataCrawlTuoitre($array_news);
                return;
            } else {
                $item_new = (object)array();
                $item_new->title = strip_tags($block->find('.name-news a')[0]);
                $item_new->content = strip_tags($block->find('.name-news p.need-trimline')[0]);
                $item_new->category = strip_tags($block->find('.category-name')[0]);
                $item_new->time = strip_tags($block->find('.published-date .second-label')[0]);
                $item_new->link = strip_tags($block->find('a')[0]->href);
                $item_new->image = strip_tags($block->find('img')[0]->src);
                array_push($array_news, $item_new);
            }
        }
        
        for ($page; $page < $page+1; $page++){
            $crawl = 'https://tuoitre.vn/timeline/0/trang-'.$page.'.htm';
            $html->load_file($crawl);
            foreach($html->find('li.news-item') as $block)
            {
                if ($today != strip_tags($block->find('.published-date .second-label')[0]) || strip_tags($block->find('a')[0]->href) == $link_first_post){
                    $this->saveDataCrawlTuoitre($array_news);
                    return;
                } else {
                    $item_new = (object)array();
                    $item_new->title = strip_tags($block->find('.name-news a')[0]);
                    $item_new->content = strip_tags($block->find('.name-news p.need-trimline')[0]);
                    $item_new->category = strip_tags($block->find('.category-name')[0]);
                    $item_new->time = strip_tags($block->find('.published-date .second-label')[0]);
                    $item_new->link = strip_tags($block->find('a')[0]->href);
                    $item_new->image = strip_tags($block->find('img')[0]->src);
                    array_push($array_news, $item_new);
                    
                }
            }
        }
        return;

        // $crawl = 'https://tuoitre.vn/tin-moi-nhat.htm';
        // $html->load_file($crawl);
        // foreach($html->find('li.news-item') as $block){
        //     if ($today != strip_tags($block->find('.published-date .second-label')[0]) || strip_tags($block->find('a')[0]->href) == $link_first_post->link){
        //         break;
        //     } else {
        //         $tuoitre = new TuoiTre();
        //         $tuoitre->title = strip_tags($block->find('.name-news a')[0]);
        //         $tuoitre->content = strip_tags($block->find('.name-news p.need-trimline')[0]);
        //         $tuoitre->category = strip_tags($block->find('.category-name')[0]);
        //         $tuoitre->time = strip_tags($block->find('.published-date .second-label')[0]);
        //         $tuoitre->link = strip_tags($block->find('a')[0]->href);
        //         $tuoitre->image = strip_tags($block->find('img')[0]->src);
        //         $tuoitre->status = 0;
        //         $tuoitre->save();
                
        //     }
        // }
        

        // for ($page; $page < $page+1; $page++){
        //     $crawl = 'https://tuoitre.vn/timeline/0/trang-'.$page.'.htm';
        //     $html->load_file($crawl);
        //     foreach($html->find('li.news-item') as $block)
        //     {
        //         if ($today != strip_tags($block->find('.published-date .second-label')[0]) || strip_tags($block->find('a')[0]->href) == $link_first_post){
        //             break;
        //         } else {
        //             $tuoitre = new TuoiTre();
        //             $tuoitre->title = strip_tags($block->find('.name-news a')[0]);
        //             $tuoitre->content = strip_tags($block->find('.name-news p.need-trimline')[0]);
        //             $tuoitre->category = strip_tags($block->find('.category-name')[0]);
        //             $tuoitre->time = strip_tags($block->find('.published-date .second-label')[0]);
        //             $tuoitre->link = strip_tags($block->find('a')[0]->href);
        //             $tuoitre->image = strip_tags($block->find('img')[0]->src);
        //             $tuoitre->status = 0;
        //             $tuoitre->save();
                    
        //         }
        //     }
        // }
    }

    public function saveDataCrawlTuoitre($arr){
        if (count($arr)){
            foreach(array_reverse($arr) as $item){
                $tuoitre = new TuoiTre();
                $tuoitre->title = $item->title ;
                $tuoitre->content = $item->content ;
                $tuoitre->category = $item->category ;
                $tuoitre->time = $item->time ;
                $tuoitre->link = $item->link ;
                $tuoitre->image = $item->image ;
                $tuoitre->status = 0;
                $tuoitre->save();
            }
        }
        return;
    }

    public function accessTuoitre(Request $req){
        DB::table('tuoi_tre')
        ->where('id', $req->id)
        ->update(['status' => 1]);
        $content = new Simple_html_dom();
        $function_default = new FunctionDefault();
        $crawl = 'https://tuoitre.vn' .  $req->link;
        $content->load_file($crawl);
            
        $ua = $function_default->getBrowser();
        $driver = $ua['platform'];
        $browser = $ua['name'];
        $version = $ua['version'];
        $posts = new Posts();
        $posts->id_personality = 1; // duc tinh
        $posts->id_account = Auth::user()->id;//id tac gia
        $posts->title = strip_tags($content->find('#content h1.article-title')[0]);// tieu de
        $posts->slug = isset($content->find('#content h1.article-title')[0]) ? str_slug(strip_tags($content->find('#content h1.article-title')[0])).'-' .round(microtime(true) * 1000): '';// slug
        $posts->content = $content->find('#content #main-detail-body')[0];// noi dung
        $posts->summary = strip_tags($content->find('#mainContentDetail .main-content-body h2.sapo')[0]); // tom tatz
        $posts->description = strip_tags($content->find('#mainContentDetail .main-content-body h2.sapo')[0]); // tom tat
        $posts->categories = 16; // nhom danh muc
        $posts->image = isset($req->image) ? $req->image: 'img/no_image.png'; // hinh anh
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
    }

    // public function creatSitemMap(){
    //     $sitemap = \App::make('sitemap');
    //     // add home pages mặc định
    //     $sitemap->add(\URL::to('/'), \Carbon::now(), 1, 'daily');
    //     $sitemap->add(URL::to('page'), \Carbon::now(), '0.9', 'monthly');
    
    //     // add bài viết
    //     $posts = \DB::table('posts')->orderBy('time_creat', 'desc')->get();
        
    //     foreach ($posts as $post) {
    //         //$sitemap->add(url, thời gian, độ ưu tiên, thời gian quay lại)
    //         $sitemap->add('http://truyenchumeocon.com/' . $post->slug, $post->time_creat, 1, 'daily');
    //     }
    
    //     // lưu file và phân quyền
    //     $sitemap->store('xml', 'sitemap');
    //     if (\File::exists(public_path('sitemap.xml'))) {
    //         chmod(public_path('sitemap.xml'), 0777);
    //     }
    // }

    public function creatSitemMap(){
        $list_posts = DB::table('posts')->orderBy('id', 'DESC')->get();
        return view('admin.sitemap', compact('list_posts'));
    }


    
}