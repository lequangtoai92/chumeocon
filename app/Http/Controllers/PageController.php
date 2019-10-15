<?php

namespace App\Http\Controllers;
use App\User;
use App\Feedback;
use App\Posts;
use App\Intro;
use App\Ranking;
use App\Rate;
use App\Connotation;
use Session;
use Hash;
use Auth;
use Mail;
use DB;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function __construct() {
    //     var_dump(Auth::user());
    // }

    public function getIndex(){
        $page_view = 0;
        $list_ranking_week = $this->getRankingWeek(0);
        $list_yotube_top = $this->getYoutubeTop(0);
        $list_top = DB::table('posts')
            ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '5')
            ->where('categories.group', '=' , 1)
            ->orderBy('id', 'DESC')
            ->skip(0)->take(3)->get();
        $list_posts = DB::table('posts')
            ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '5')
            ->where('categories.group', '=' , 1)
            ->orderBy('id', 'DESC')
            ->skip(3)->paginate(15);
        return view('page.index', compact('page_view', 'list_top', 'list_posts', 'list_ranking_week', 'list_yotube_top'));
    }

    public function getNewStory(){
        $page_view = 1;
        $list_ranking_week = $this->getRankingWeek(1);
        $list_posts = DB::table('posts')
            ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('categories.id', '1')
            ->where('posts.status', '5')
            ->orderBy('id', 'DESC')
            ->paginate(15);
        return view('page.category',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getFairyTales (){
        $page_view = 0;
        $list_ranking_week = $this->getRankingWeek(2);
        $list_posts =DB::table('posts')
                        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
                        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
                        ->whereIn('categories.id', ['2', '3', '4', '5'])
                        ->where('posts.status', 5)
                        ->orderBy('id', 'DESC')->paginate(15);
        return view('page.category',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getVietnameseFairyTales (){
        $page_view = 2;
        $list_ranking_week = $this->getRankingWeek(2);
        $list_posts = DB::table('posts')
                        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
                        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
                        ->where([['categories.id','=',2], ['posts.status','=',5]])
                        ->orderBy('id', 'DESC')->paginate(15);
        return view('page.category',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getJapanFairyTales(){
        $page_view = 3;
        $list_ranking_week = $this->getRankingWeek(3);
        $list_posts = DB::table('posts')
                        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
                        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
                        ->where([['categories.id','=',3], ['posts.status','=',5]])
                        ->orderBy('id', 'DESC')->paginate(15);
        return view('page.category',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getGrimmsFairyTales(){
        $page_view = 4;
        $list_ranking_week = $this->getRankingWeek(4);
        $list_posts = DB::table('posts')
                        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
                        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
                        ->where([['categories.id','=',4], ['posts.status','=',5]])
                        ->orderBy('id', 'DESC')->paginate(15);
        return view('page.category',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getGreekMythology(){
        $page_view = 5;
        $list_ranking_week = $this->getRankingWeek(5);
        $list_posts = DB::table('posts')
                        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
                        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
                        ->where([['categories.id','=',5], ['posts.status','=',5]])
                        ->orderBy('id', 'DESC')->paginate(15);
        return view('page.category',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getCartoon(){
        $page_view = 0;
        $list_ranking_week = $this->getRankingWeek(10);
        $list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->whereIn('categories.id', ['10', '11', '12'])->where('posts.status','=',5)->orderBy('id', 'DESC')->paginate(20);
        return view('page.cartoon',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getDoremon(){
        $page_view = 11;
        $list_ranking_week = $this->getRankingWeek(11);
        $list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',11], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(20);
        return view('page.cartoon',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getTomAndJerry(){
        $page_view = 12;
        $list_ranking_week = $this->getRankingWeek(12);
        $list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',12], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(20);
        return view('page.cartoon',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getVerse(){
        $page_view = 9;
        $list_ranking_week = $this->getRankingWeek(9);
        $list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',9], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(15);
        return view('page.category',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getVe(){
        $page_view = 13;
        $list_ranking_week = $this->getRankingWeek(9);
        $list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',13], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(15);
        return view('page.category',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getQuiz(){
        $page_view = 14;
        $list_ranking_week = $this->getRankingWeek(9);
        $list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',14], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(15);
        return view('page.category',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getNews(){
        $page_view = 16;
        $list_ranking_week = $this->getRankingWeek(9);
        $list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',16], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(15);
        return view('page.category',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getVietnameseProverbs(){
        $page_view = 6;
        $list_ranking_week = $this->getRankingWeek(6);
        $list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',6], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(15);
        return view('page.category',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getGoodWord(){
        $page_view = 7;
        $list_ranking_week = $this->getRankingWeek(7);
        $list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',7], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(15);
        return view('page.category',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getFunnyStory(){
        $page_view = 8;
        $list_ranking_week = $this->getRankingWeek(8);
        $list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where([['categories.id','=',8], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(15);
        return view('page.category',compact('page_view', 'list_posts', 'list_ranking_week'));
    }

    public function getFeedback(){
        $list_ranking_week = $this->getRankingWeek(0);
        $list_ranking_month = $this->getRankingMonth(0);
        $list_feedback = Feedback::where('status','=',6)->orderBy('id', 'DESC')->paginate(30);
        return view('page.feedback',compact('list_feedback', 'list_ranking_week'));
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
        $list_ranking_week = $this->getRankingWeek($posts->categories);
        $list_ranking_month = $this->getRankingMonth($posts->categories);
        $ranking = new Ranking();
        $ranking->id_post = isset($posts->id) ? $posts->id : 0;
        $ranking->id_author = isset($posts->id_account) ? $posts->id_account : 0;
        $ranking->id_categories = isset($posts->categories) ? $posts->categories : 0;
        $ranking->save();
        DB::table('posts')
        ->where('id', $posts->id)
        ->update(['num_view' => $posts->num_view + 1]);
        $connotation = Connotation::where('id_post',$posts->id)->first();
        $related_post = $this->getRelatedPost($posts->categories, $posts->id);
        return view('page.detail',compact('posts', 'related_post', 'list_ranking_week', 'list_ranking_month', 'connotation'));
    }

    public function getViewAuthor(Request $req){
        $list_ranking_week = $this->getRankingWeek(0);
        $list_ranking_month = $this->getRankingMonth(0);
        $user = User::where('id', $req->id)->first();
        $intro = Intro::where([['id_author', $req->id],['group', 1]])->first();
        $list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where('id_account','=',$req->id)
        ->where('posts.status', '5')
        ->paginate(15);
        if (!isset($intro)) {
            $intro = (object) array('content' => 'Tác giả vẫn chưa giới thiệu về bản thân!');
        }
        return view('page.author',compact('user', 'intro', 'list_posts', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getCategory(Request $req){
        $list_ranking_week = $this->getRankingWeek(0);
        if ($req->id == 0) {
            $list_posts = DB::table('posts')
            ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '5')
            ->where('categories.group', '1')
            ->orderBy('id', 'DESC')->orderBy('id', 'DESC')->paginate(500);
        } else {
            $list_posts = Posts::wherein('categories', [$req->id])->orderBy('id', 'DESC')->orderBy('id', 'DESC')->paginate(500);
            // $list_posts = Posts::where([['categories','=',$req->id], ['posts.status','=',5]])->orderBy('id', 'DESC')->paginate(50);
        }
        return view('page.list-posts', compact('list_posts', 'list_ranking_week'));
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
            $ranking = DB::select('select id_post, id_categories, COUNT(id_post) AS view_post from ranking where time BETWEEN NOW() - INTERVAL 7 DAY AND NOW() GROUP BY id_post ORDER BY view_post DESC, ranking.time LIMIT 10');
        } else {
            $ranking = DB::select('select id_post, id_categories, COUNT(id_post) AS view_post from ranking where time BETWEEN NOW() - INTERVAL 7 DAY AND NOW() GROUP BY id_post ORDER BY view_post DESC, ranking.time LIMIT 10');
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
        // DELETE FROM wp_ranking_log WHERE date_log < NOW() - INTERVAL 30 DAY
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