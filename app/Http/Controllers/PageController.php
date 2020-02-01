<?php

namespace App\Http\Controllers;
use App\User;
use App\Feedback;
use App\Posts;
use App\Intro;
use App\Ranking;
use App\Rate;
use App\Connotation;
use App\Categories;
use Session;
use Hash;
use Auth;
use Mail;
use DB;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $this->view_component->page_view = 0;
        $this->view_component->list_ranking_week = $this->getRankingWeek(0);
        $this->view_component->list_yotube_top = $this->getYoutubeTop(0);
        $this->view_component->list_new_story = DB::table('posts')
            ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '5')
            ->where('categories.id', '1')
            ->orderBy('id', 'DESC')
            ->paginate(10);
        $this->view_component->list_fairy_tales = DB::table('posts')
            ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '5')
            ->whereIn('categories.id', ['2', '3', '4', '5'])
            ->orderBy('id', 'DESC')
            ->paginate(10);
        $this->view_component->list_verse = DB::table('posts')
            ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '5')
            ->where('categories.id', '9')
            ->orderBy('id', 'DESC')
            ->paginate(10);
        $this->view_component->list_ve = DB::table('posts')
            ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '5')
            ->where('categories.id', '13')
            ->orderBy('id', 'DESC')
            ->paginate(10);
        $this->view_component->list_quiz = DB::table('posts')
            ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '5')
            ->where('categories.id', '14')
            ->orderBy('id', 'DESC')
            ->paginate(10);
        $this->view_component->list_funny_story = DB::table('posts')
            ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '5')
            ->where('categories.id', '8')
            ->orderBy('id', 'DESC')
            ->paginate(10);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Truyện cổ tích';    
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Truyện cổ tích';    
        $this->view_meta->seo_title = 'Truyện chú mèo con - Truyện cổ tích';    
        return view('page.index', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getNewStory(){
        $this->view_component->page_view = 1;
        $this->view_component->list_ranking_week = $this->getRankingWeek(1);
        $this->view_component->list_posts = DB::table('posts')
            ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('categories.id', '1')
            ->where('posts.status', '5')
            ->orderBy('id', 'DESC')
            ->paginate(15);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Truyện kể cho bé';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Truyện kể cho bé';
        $this->view_meta->seo_title = 'Truyện chú mèo con - Truyện kể cho bé';
        return view('page.category', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getFairyTales (){
        $this->view_component->page_view = 0;
        $this->view_component->list_ranking_week = $this->getRankingWeek(2);
        $this->view_component->list_posts =DB::table('posts')
                        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
                        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
                        ->whereIn('categories.id', ['2', '3', '4', '5'])
                        ->where('posts.status', 5)
                        ->orderBy('id', 'DESC')->paginate(15);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Truyện cổ tích';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Truyện cổ tích';
        $this->view_meta->seo_title = 'Truyện chú mèo con - Truyện cổ tích';
        return view('page.category', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getVietnameseFairyTales (){
        $this->view_component->page_view = 2;
        $this->view_component->list_ranking_week = $this->getRankingWeek(2);
        $this->view_component->list_posts = DB::table('posts')
                        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
                        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
                        ->where([['categories.id','=',2], ['posts.status','=',5]])
                        ->orderBy('id', 'DESC')->paginate(15);
                        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Truyện cổ tích';
                        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Truyện cổ tích';
                        $this->view_meta->seo_title = 'Truyện chú mèo con - Truyện cổ tích';
        return view('page.category', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getWordFairyTales(){
        $this->view_component->page_view = 3;
        $this->view_component->list_ranking_week = $this->getRankingWeek(3);
        $this->view_component->list_posts = DB::table('posts')
                        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
                        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
                        ->where([['categories.id','=',3], ['posts.status','=',5]])
                        ->orderBy('id', 'DESC')->paginate(15);
                        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Truyện cổ tích thế giới';
                        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Truyện cổ tích thế giới';
                        $this->view_meta->seo_title = 'Truyện chú mèo con - Truyện cổ tích thế giới';
        return view('page.category', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getGrimmsFairyTales(){
        $this->view_component->page_view = 4;
        $this->view_component->list_ranking_week = $this->getRankingWeek(4);
        $this->view_component->list_posts = DB::table('posts')
                        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
                        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
                        ->where([['categories.id','=',4], ['posts.status','=',5]])
                        ->orderBy('id', 'DESC')->paginate(15);
                        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Truyện cổ Grimms';
                        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Truyện cổ Grimms';
                        $this->view_meta->seo_title = 'Truyện chú mèo con - Truyện cổ Grimms';
        return view('page.category', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getGreekMythology(){
        return redirect('index');
        $this->view_component->page_view = 5;
        $this->view_component->list_ranking_week = $this->getRankingWeek(5);
        $this->view_component->list_posts = DB::table('posts')
                        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
                        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
                        ->where([['categories.id','=',5], ['posts.status','=',5]])
                        ->orderBy('id', 'DESC')->paginate(15);
                        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Truyện thần thoại Hi Lạp';
                        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Truyện thần thoại Hi Lạp';
                        $this->view_meta->seo_title = 'Truyện chú mèo con - Truyện thần thoại Hi Lạp';
        return view('page.category', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getCartoon(){
        return redirect('index');
        $this->view_component->page_view = 0;
        $this->view_component->list_ranking_week = $this->getRankingWeek(10);
        $this->view_component->list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->whereIn('categories.id', ['10', '11', '12'])->where('posts.status','=',5)->orderBy('id', 'DESC')->paginate(20);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Truyện cổ tích';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Truyện cổ tích';
        $this->view_meta->seo_title = 'Truyện chú mèo con - Truyện cổ tích';
        return view('page.cartoon', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getDoremon(){
        return redirect('index');
        $this->view_component->page_view = 11;
        $this->view_component->list_ranking_week = $this->getRankingWeek(11);
        $this->view_component->list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',11], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(20);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Truyện cổ tích';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Truyện cổ tích';
        $this->view_meta->seo_title = 'Truyện chú mèo con - Truyện cổ tích';
        return view('page.cartoon', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getTomAndJerry(){
        return redirect('index');
        $this->view_component->page_view = 12;
        $this->view_component->list_ranking_week = $this->getRankingWeek(12);
        $this->view_component->list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',12], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(20);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Truyện cổ tích';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Truyện cổ tích';
        $this->view_meta->seo_title = 'Truyện chú mèo con - Truyện cổ tích';
        return view('page.cartoon', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getVerse(){
        $this->view_component->page_view = 9;
        $this->view_component->list_ranking_week = $this->getRankingWeek(9);
        $this->view_component->list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',9], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(15);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Thơ thiếu nhi';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Thơ thiếu nhi';
        $this->view_meta->seo_title = 'Truyện chú mèo con - Thơ thiếu nhi';
        return view('page.category', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getVe(){
        $this->view_component->page_view = 13;
        $this->view_component->list_ranking_week = $this->getRankingWeek(9);
        $this->view_component->list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',13], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(15);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Vè dan gian';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Vè dan gian';
        $this->view_meta->seo_title = 'Truyện chú mèo con - Vè dan gian';
        return view('page.category', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getQuiz(){
        $this->view_component->page_view = 14;
        $this->view_component->list_ranking_week = $this->getRankingWeek(9);
        $this->view_component->list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',14], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(15);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Câu đố';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Câu đố';
        $this->view_meta->seo_title = 'Truyện chú mèo con - Câu đố';
        return view('page.category', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getNews(){
        $this->view_component->page_view = 16;
        $this->view_component->list_ranking_week = $this->getRankingWeek(9);
        $this->view_component->list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',16], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(15);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Tin tức';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Tin tức';
        $this->view_meta->seo_title = 'Truyện chú mèo con - Tin tức';
        return view('page.category', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getVietnameseProverbs(){
        return redirect('index');
        $this->view_component->page_view = 6;
        $this->view_component->list_ranking_week = $this->getRankingWeek(6);
        $this->view_component->list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',6], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(15);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Ca dao tục ngữ';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Ca dao tục ngữ';
        $this->view_meta->seo_title = 'Truyện chú mèo con - Ca dao tục ngữ';
        return view('page.category', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getGoodWord(){
        return redirect('index');
        $this->view_component->page_view = 7;
        $this->view_component->list_ranking_week = $this->getRankingWeek(7);
        $this->view_component->list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',7], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(15);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Lời hay ý đẹp';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Lời hay ý đẹp';
        $this->view_meta->seo_title = 'Truyện chú mèo con - Lời hay ý đẹp';
        return view('page.category', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getFunnyStory(){
        $this->view_component->page_view = 8;
        $this->view_component->list_ranking_week = $this->getRankingWeek(8);
        $this->view_component->list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',8], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(15);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Truyện cười';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Truyện cười';
        $this->view_meta->seo_title = 'Truyện chú mèo con - Truyện cười';
        return view('page.category', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getFeedback(){
        $this->view_component->list_ranking_week = $this->getRankingWeek(0);
        $this->view_component->list_ranking_month = $this->getRankingMonth(0);
        $this->view_component->list_feedback = Feedback::where('status','=',6)->orderBy('id', 'DESC')->paginate(30);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - truyện cổ tích';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - truyện cổ tích';
        $this->view_meta->seo_title = 'Truyện chú mèo con - truyện cổ tích';
        return view('page.feedback', (array)$this->view_component, (array)$this->view_meta);
    }

    public function postFeedback(Request $req){
        $this->validate($req,
            [
                'contentfeedback'=>'required'
            ],
            [
                'contentfeedback.unique'=>'Vui lòng nhập nội dung',
            ]);
        $feedback = new Feedback();
        $ua = $this->getBrowser();
        $driver = $ua['platform'];
        $browser = $ua['name'];
        $version = $ua['version'];
        $browser = null;
        $feedback->id_account = isset(Auth::user()->id) ? Auth::user()->id : 0;
        $feedback->content = isset($req->contentfeedback) ? $req->contentfeedback : '';
        $feedback->name_author = isset(Auth::user()->full_name) ? Auth::user()->full_name : 'Khách';
        $feedback->driver =isset($driver) ? $driver: 'windown';
        $feedback->browser =isset($browser) ? $browser: 'chorme';
        $feedback->version =isset($version) ? $version: '72.000';
        $feedback->status = 7;

        $feedback->save();
        return redirect()->back()->with('thanhcong','Cảm ơn bạn đã góp ý cho chúng tôi');
    }

    public function getViewPosts(Request $req){
        if (is_numeric($req->slug)) {
            $posts = Posts::where('id',$req->slug)->first();
            return redirect('bai-viet/'.$posts->slug);
        }

        $posts = Posts::where('slug',$req->slug)->first();
        $this->view_component->posts = $posts;

        if(!isset($posts)){
            return redirect('index');
        }
        $this->view_component->list_ranking_week = $this->getRankingWeek($posts->categories);
        $ranking = new Ranking();
        $ranking->id_post = isset($posts->id) ? $posts->id : 0;
        $ranking->id_author = isset($posts->id_account) ? $posts->id_account : 0;
        $ranking->id_categories = isset($posts->categories) ? $posts->categories : 0;
        $ranking->save();
        DB::table('posts')
        ->where('id', $posts->id)
        ->update(['num_view' => $posts->num_view + 1]);
        $this->view_component->connotation = Connotation::where('id_post',$posts->id)->first();
        $this->view_component->related_post = $this->getRelatedPost($posts->categories, $posts->id);
        $this->view_meta->seo_og_title = $posts->title;
        $this->view_meta->seo_og_site_name = $posts->title;
        $this->view_meta->seo_title = $posts->title;
        $this->view_meta->seo_description = $posts->summary;
        $this->view_meta->seo_og_description = $posts->summary;
        $this->view_meta->seo_og_url = assetRemote('bai-viet/'.$posts->slug);
        $this->view_meta->seo_og_image = assetRemote($posts->image);
        return view('page.detail', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getViewAuthor(Request $req){
        $this->view_component->list_ranking_week = $this->getRankingWeek(0);
        $this->view_component->user = User::where('id', $req->id)->first();
        $this->view_component->intro = Intro::where([['id_author', $req->id],['group', 1]])->first();
        $this->view_component->list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where('id_account','=',$req->id)
        ->where('posts.status', '5')
        ->paginate(15);
        if (!isset($this->view_component->intro)) {
            $this->view_component->intro = (object) array('content' => 'Tác giả vẫn chưa giới thiệu về bản thân!');
        }
        dd($this->view_component->intro);
        $this->view_meta->seo_og_title = 'Truyện chú mèo con - Truyện cổ tích';
        $this->view_meta->seo_og_site_name = 'Truyện chú mèo con - Truyện cổ tích';
        $this->view_meta->seo_title = 'Truyện chú mèo con - Truyện cổ tích';
        return view('page.author', (array)$this->view_component, (array)$this->view_meta);
    }

    public function getCategory(Request $req){
        $this->view_component->list_categories = Categories::where('status','=',1)->where('group','=',1)->get();
        $this->view_component->list_ranking_week = $this->getRankingWeek(0);
        if ($req->id == 0) {
            $this->view_component->list_posts = DB::table('posts')
            ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '5')
            ->where('categories.group', '1')
            ->orderBy('id', 'DESC')->orderBy('id', 'DESC')->paginate(500);
        } else {
            $this->view_component->list_posts = Posts::wherein('categories', [$req->id])->where('posts.status', '5')->orderBy('id', 'DESC')->orderBy('id', 'DESC')->paginate(100);
            // $list_posts = Posts::where([['categories','=',$req->id], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(50);
        }
        return view('page.list-posts', (array)$this->view_component);
    }

    public function getYoutubeTop(){
        $list_posts = DB::table('posts')
            ->select('posts.*', 'categories.name_categories')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '5')
            ->where('categories.group', '9')
            ->skip(0)->take(1)->get();
        return ($list_posts);
    }

    public function getRankingWeek($category){
        if ($category == 0) {
            $ranking = DB::select('select id_post, id_categories, COUNT(id_post) AS view_post from ranking where time BETWEEN NOW() - INTERVAL 7 DAY AND NOW() GROUP BY id_post ORDER BY view_post DESC, ranking.time LIMIT 15');
        } else {
            $ranking = DB::select('select id_post, id_categories, COUNT(id_post) AS view_post from ranking where time BETWEEN NOW() - INTERVAL 7 DAY AND NOW() GROUP BY id_post ORDER BY view_post DESC, ranking.time LIMIT 15');
        }
        $array=array();
        for ($i = 0; $i < count($ranking); $i++){
            array_push($array,$ranking[$i]->id_post);
        }
        $list_posts = Posts::whereIn('id', $array)->orderBy('num_view', 'DESC')->get();

        for ($i = 0; $i < count($list_posts); $i++){
            $list_posts[$i]->ranking_view = $ranking[$i]->view_post;
        }
        return ($list_posts);
    }

    public function getRankingMonth($category){
        if ($category == 0) {
            $ranking = DB::select('select id_post, id_categories, COUNT(id_post) AS view_post from ranking where time BETWEEN NOW() - INTERVAL 30 DAY AND NOW() GROUP BY id_post ORDER BY view_post DESC, ranking.time LIMIT 5');
        } else {
            $ranking = DB::select('select id_post, id_categories, COUNT(id_post) AS view_post from ranking where time BETWEEN NOW() - INTERVAL 30 DAY AND NOW() GROUP BY id_post ORDER BY view_post DESC, ranking.time LIMIT 5');
        }
        $array=array();
        for ($i = 0; $i < count($ranking); $i++){
            array_push($array,$ranking[$i]->id_post);
        }
        $list_posts = Posts::whereIn('id', $array)->orderBy('num_view', 'DESC')->get();
        for ($i = 0; $i < count($list_posts); $i++){
            $list_posts[$i]->ranking_view = $ranking[$i]->view_post;
        }
        return ($list_posts);
    }

    public function deleteRanking(){
        // DELETE FROM ranking WHERE time < NOW() - INTERVAL 30 DAY
    }

    public function getRelatedPost($category, $id_post){
        $list_top = DB::table('posts')
            ->select('posts.*')
            ->where('posts.id','!=' ,$id_post)
            ->where('posts.categories', $category)
            ->where('posts.status','=',5)
            ->inRandomOrder()
            ->paginate(4);
            return $list_top;
    }

    public function forgotPassword(Request $request){
        $this->validate($request,
            [
                'username'=>'required|unique:users,user_name',
            ],
            [
                'username.unique'=>'username đã có người sử dụng',
            ]);
        $input = $request->all();
        var_dump($input);exit;
        Mail::send('mailfb', array('name'=>$input["name"],'email'=>$input["email"], 'content'=>$input['comment']), function ($message) use ($request){
	        $message->to($request->email, '??????')->subject('Mật khẩu mới cho TRUYENCHUMEOCON');
        });
        return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']);
        // Session::flash('flash_message', 'Send message successfully!');

        // return view('user.messages');
    }

    function get404(){
        return view('page.404');
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