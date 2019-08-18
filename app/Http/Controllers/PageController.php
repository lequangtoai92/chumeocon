<?php

namespace App\Http\Controllers;
use App\User;
use App\Feedback;
use App\Posts;
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
        // $list_top = Posts::where('status','=',6)->skip(0)->take(3)->get();
        $list_top = DB::table('posts')
            ->select('posts.*', 'categories.name_categories')
            ->join('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '6')
            ->skip(0)->take(3)->get();
        // $list_posts = Posts::where('status','=',6)->skip(3)->take(10)->get();
        $list_posts = DB::table('posts')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('posts.status', '6')
            ->skip(3)->take(10)->get();
        return view('page.index', compact('list_top', 'list_posts'));
    }

    public function getNewStory(){
        // $list_posts = Posts::where([['category.id','=',1], ['posts.status','=',6]])->paginate(10);
        $list_posts = DB::table('posts')
            ->join('categories', 'posts.categories', '=', 'categories.id')
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
        $list_feedback = Feedback::where('status','=',1)->paginate(3);
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

    // user
    public function getInfo(){
        return view('user.info');
    }

    public function getMessages(){
        return view('user.messages');
    }

    public function addFeedback(Request $request)
    {
        $input = $request->all();
        Mail::send('mailfb', array('name'=>$input["name"],'email'=>$input["email"], 'content'=>$input['comment']), function($message){
	        $message->to('toailq92@gmail.com', 'Visitor')->subject('Visitor Feedback!');
	    });
        Session::flash('flash_message', 'Send message successfully!');

        return view('user.messages');
    }

    public function getMyPosts(){
        // $list_posts = Posts::where([['id','=',Auth::user()->id], ['status','=',6]])->get();
        $list_posts = DB::table('posts')
            ->select('posts.*', 'categories.name_categories')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('id_account','=',Auth::user()->id)
            ->where('posts.status', '6')
            ->get();
        return view('user.my_posts',compact('list_posts'));
    }

    public function getDeleteMyPost(Request $req){
        $posts = Posts::where('id',$req->id)->first();
        if ( Auth::user()->id == $posts->id_account ){
            $res = Posts::where('id' ,$req->id)->update(['status' => 9]);
        }
        return redirect()->back();
    }

    public function getNotifice(){
        return view('user.notifice');
    }

    public function getViewPosts(Request $req){
        $posts = Posts::where('id',$req->id)->first();
        return view('page.detail',compact('posts'));
    }

    

    

    
}