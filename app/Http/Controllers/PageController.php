<?php

namespace App\Http\Controllers;
use App\User;
use App\Feedback;
use App\Posts;
use Session;
use Hash;
use Auth;
use Mail;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function __construct() {
    //     var_dump(Auth::user());
    // }

    public function getIndex(){
        return view('page.index');
    }

    public function getNewStory(){
        $list_posts = Posts::where('status','=',6)->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getVietnameseFairyTales (){
        $list_posts = Posts::where('status','=',6)->get();
        return view('page.category',compact('list_posts'));
    }

    public function getJapanFairyTales(){
        $list_posts = Posts::where('status','=',6)->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getGrimmsFairyTales(){
        $list_posts = Posts::where('status','=',6)->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getGreekMythology(){
        $list_posts = Posts::where('status','=',6)->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getVietnameseProverbs(){
        $list_posts = Posts::where('status','=',6)->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getGoodWord(){
        $list_posts = Posts::where('status','=',6)->paginate(10);
        return view('page.category',compact('list_posts'));
    }

    public function getFunnyStory(){
        $list_posts = Posts::where('status','=',6)->paginate(10);
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
        $feedback->id_account = isset($req->browser) ? $req->browser : null;
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
        return view('user.my_posts');
    }

    public function getNotifice(){
        return view('user.notifice');
    }

    

    

    
}