<?php

namespace App\Http\Controllers;
use App\User;
use App\Feedback;
use App\Posts;
use App\Intro;
use App\Ranking;
use App\Rate;
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
        $list_ranking_week = $this->getRankingWeek(0);
        $list_ranking_month = $this->getRankingMonth(0);
        $list_yotube_top = $this->getYoutubeTop(0);
        $list_top = DB::table('posts')
            ->select('posts.*', 'categories.name_categories')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '6')
            ->skip(0)->take(3)->get();
        $list_posts = DB::table('posts')
            ->select('posts.*', 'categories.name_categories')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '6')
            ->skip(3)->take(10)->get();
        return view('page.index', compact('list_top', 'list_posts', 'list_ranking_week', 'list_ranking_month', 'list_yotube_top'));
    }

    public function getNewStory(){
        $list_ranking_week = $this->getRankingWeek(1);
        $list_ranking_month = $this->getRankingMonth(1);
        $list_posts = DB::table('posts')
            ->select('posts.*', 'categories.name_categories')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('categories.id', '1')
            ->where('posts.status', '6')
            ->get();
        return view('page.category',compact('list_posts', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getVietnameseFairyTales (){
        $list_ranking_week = $this->getRankingWeek(2);
        $list_ranking_month = $this->getRankingMonth(2);
        $list_posts = Posts::where([['categories','=',2], ['status','=',6]])->get();
        return view('page.category',compact('list_posts', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getJapanFairyTales(){
        $list_ranking_week = $this->getRankingWeek(3);
        $list_ranking_month = $this->getRankingMonth(3);
        $list_posts = Posts::where([['categories','=',3], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getGrimmsFairyTales(){
        $list_ranking_week = $this->getRankingWeek(4);
        $list_ranking_month = $this->getRankingMonth(4);
        $list_posts = Posts::where([['categories','=',4], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getGreekMythology(){
        $list_ranking_week = $this->getRankingWeek(5);
        $list_ranking_month = $this->getRankingMonth(5);
        $list_posts = Posts::where([['categories','=',5], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getCartoon(){
        $list_ranking_week = $this->getRankingWeek(10);
        $list_ranking_month = $this->getRankingMonth(10);
        $list_posts = Posts::where([['categories','=',10], ['status','=',6]])->paginate(10);
        return view('page.cartoon',compact('list_posts', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getDoremon(){
        $list_ranking_week = $this->getRankingWeek(11);
        $list_ranking_month = $this->getRankingMonth(11);
        $list_posts = Posts::where([['categories','=',11], ['status','=',6]])->paginate(10);
        return view('page.cartoon',compact('list_posts', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getTomAndJerry(){
        $list_ranking_week = $this->getRankingWeek(12);
        $list_ranking_month = $this->getRankingMonth(12);
        $list_posts = Posts::where([['categories','=',12], ['status','=',6]])->paginate(10);
        return view('page.cartoon',compact('list_posts', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getVerse(){
        $list_ranking_week = $this->getRankingWeek(9);
        $list_ranking_month = $this->getRankingMonth(9);
        $list_posts = Posts::where([['categories','=',9], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getVietnameseProverbs(){
        $list_ranking_week = $this->getRankingWeek(6);
        $list_ranking_month = $this->getRankingMonth(6);
        $list_posts = Posts::where([['categories','=',6], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getGoodWord(){
        $list_ranking_week = $this->getRankingWeek(7);
        $list_ranking_month = $this->getRankingMonth(7);
        $list_posts = Posts::where([['categories','=',7], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getFunnyStory(){
        $list_ranking_week = $this->getRankingWeek(8);
        $list_ranking_month = $this->getRankingMonth(8);
        $list_posts = Posts::where([['categories','=',8], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getFeedback(){
        $list_ranking_week = $this->getRankingWeek(0);
        $list_ranking_month = $this->getRankingMonth(0);
        $list_feedback = Feedback::where('status','=',1)->orderBy('id', 'DESC')->get();
        return view('page.feedback',compact('list_feedback', 'list_ranking_week', 'list_ranking_month'));
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
        $feedback->id = isset($req->browser) ? $req->browser : null;
        $feedback->content = isset($req->contentfeedback) ? $req->contentfeedback : '';
        $feedback->name_author = isset($req->browser) ? $req->browser : '';
        $feedback->driver =isset($driver) ? $driver: 'windown';
        $feedback->browser =isset($browser) ? $browser: 'chorme';
        $feedback->version =isset($version) ? $version: '72.000';
        $feedback->status = 1;

        $feedback->save();
        return redirect()->back()->with('thanhcong','Cảm ơn bạn đã góp ý cho chúng tôi');
    }

    public function getViewPosts(Request $req){
        $posts = Posts::where('id',$req->id)->first();
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
        $related_post = $this->getRelatedPost($posts->categories, $posts->id);
        // if (!isset($get_rate)) {
        //     $rate = new Rate();
        //     $rate->id_post = isset($posts->id) ? $posts->id : 0;
        //     $rate->id_author = isset($posts->id_account) ? $posts->id_account : 0;
        //     $rate->group = 1;
        //     $rate->rate = 0;
        //     $rate->total_rate = 0;
        //     $rate->view = 1;
        //     $rate->like = 0;
        //     $rate->dis_like = 0;
        //     $rate->report = 0;
        //     $rate->save();
        // } else {
        //     DB::table('rate')
        //     ->where('id_post', $posts->id)
        //     ->update(['view' => $get_rate->view + 1]);
        // }
        return view('page.detail',compact('posts', 'related_post', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getViewAuthor(Request $req){
        $list_ranking_week = $this->getRankingWeek(0);
        $list_ranking_month = $this->getRankingMonth(0);
        $user = User::where('id', $req->id)->first();
        $intro = Intro::where([['id_author', $req->id],['group', 1]])->first();
        $list_posts = DB::table('posts')
        ->select('posts.*', 'categories.name_categories')
        ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
        ->where('id_account','=',$req->id)
        ->where('posts.status', '6')
        ->get();
        if (!isset($intro)) {
            $intro = (object) array('content' => 'Tác giả vẫn chưa giới thiệu về bản thân!');
        }
        return view('page.author',compact('user', 'intro', 'list_posts', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getYoutubeTop(){
        $list_posts = DB::table('posts')
            ->select('posts.*', 'categories.name_categories')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '6')
            ->where('categories.group', '9')
            ->skip(0)->take(1)->get();
        return ($list_posts);
    }

    public function getRankingWeek($category){
        if ($category == 0) {
            $ranking = DB::select('select id_post, id_categories, COUNT(id_post) AS view_post from ranking where time BETWEEN NOW() - INTERVAL 7 DAY AND NOW() GROUP BY id_post ORDER BY view_post DESC, ranking.time LIMIT 5');
        } else {
            $ranking = DB::select('select id_post, id_categories, COUNT(id_post) AS view_post from ranking where time BETWEEN NOW() - INTERVAL 7 DAY AND NOW() GROUP BY id_post ORDER BY view_post DESC, ranking.time LIMIT 5');
        }
        $array=array();
        for ($i = 0; $i < count($ranking); $i++){
            array_push($array,$ranking[$i]->id_post);
        }
        $list_posts = Posts::whereIn('id', $array)->get();

        for ($i = 0; $i < count($list_posts); $i++){
            $list_posts[$i]->ranking_view = $ranking[$i]->view_post;
        }
        return ($list_posts);
    }

    public function getRankingMonth($category){
        if ($category == 0) {
            $ranking = DB::select('select id_post, id_categories, COUNT(id_post) AS view_post from ranking where time BETWEEN NOW() - INTERVAL 7 DAY AND NOW() GROUP BY id_post ORDER BY view_post DESC, ranking.time LIMIT 5');
        } else {
            $ranking = DB::select('select id_post, id_categories, COUNT(id_post) AS view_post from ranking where time BETWEEN NOW() - INTERVAL 7 DAY AND NOW() GROUP BY id_post ORDER BY view_post DESC, ranking.time LIMIT 5');
        }
        $array=array();
        for ($i = 0; $i < count($ranking); $i++){
            array_push($array,$ranking[$i]->id_post);
        }
        $list_posts = Posts::whereIn('id', $array)->get();
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
            ->paginate(4);
            return $list_top;
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