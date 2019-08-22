<?php

namespace App\Http\Controllers;
use App\User;
use App\Feedback;
use App\Posts;
use App\Intro;
use App\Ranking;
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
        return view('page.index', compact('list_top', 'list_posts'));
    }

    public function getNewStory(){
        $list_posts = DB::table('posts')
            ->select('posts.*', 'categories.name_categories')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('categories.id', '1')
            ->where('posts.status', '6')
            ->get();
        return view('page.category',compact('list_posts'));
    }

    public function getVietnameseFairyTales (){
        $list_posts = Posts::where([['categories','=',2], ['status','=',6]])->get();
        return view('page.category',compact('list_posts'));
    }

    public function getJapanFairyTales(){
        $list_posts = Posts::where([['categories','=',3], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getGrimmsFairyTales(){
        $list_posts = Posts::where([['categories','=',4], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getGreekMythology(){
        $list_posts = Posts::where([['categories','=',5], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getCartoon(){
        $list_posts = Posts::where([['categories','=',10], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getDoremon(){
        $list_posts = Posts::where([['categories','=',11], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getTomAndJerry(){
        $list_posts = Posts::where([['categories','=',12], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getVerse(){
        $list_posts = Posts::where([['categories','=',9], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getVietnameseProverbs(){
        $list_posts = Posts::where([['categories','=',6], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getGoodWord(){
        $list_posts = Posts::where([['categories','=',7], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getFunnyStory(){
        $list_posts = Posts::where([['categories','=',8], ['status','=',6]])->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getFeedback(){
        $list_feedback = Feedback::where('status','=',1)->get();
        return view('page.feedback',compact('list_feedback'));
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
        $browser = null;
        $feedback->id = isset($req->browser) ? $req->browser : null;
        $feedback->content = isset($req->contentfeedback) ? $req->contentfeedback : '';
        $feedback->name_author = isset($req->browser) ? $req->browser : '';
        $feedback->driver = isset($req->browser) ? $req->browser : '';
        $feedback->browser = isset($req->browser) ? $req->browser : '';
        $feedback->version = isset($req->browser) ? $req->browser : '';
        $feedback->status = 1;

        $feedback->save();
        return redirect()->back()->with('thanhcong','Cảm ơn bạn đã góp ý cho chúng tôi');
    }

    public function getViewPosts(Request $req){
        $posts = Posts::where('id',$req->id)->first();
        $ranking = new Ranking();
        $ranking->id_post = isset($posts->id) ? $posts->id : 0;
        $ranking->id_author = isset($posts->id_account) ? $posts->id_account : 0;
        $ranking->id_categories = isset($posts->categories) ? $posts->categories : 0;
        $ranking->save();
        return view('page.detail',compact('posts'));
    }

    public function getViewAuthor(Request $req){
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
        return view('page.author',compact('user', 'intro', 'list_posts'));
    }
}