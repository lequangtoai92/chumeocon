<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posts;
use App\Feedback;
use Auth;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function getAdmin(){
        return redirect('admin/account/');
    }

    public function getAdminAccount(){
        $this->checkAdmin();
        $account = User::where('status','=',6)->paginate(15);
        return view('admin.account',compact('account'));
    }

    public function getAdminPosts(){
        $this->checkAdmin();
        $list_posts = Posts::where('status','=',6)->paginate(15);
        return view('admin.posts',compact('list_posts'));
    }

    public function getAdminFeeback(){
        $this->checkAdmin();
        $list_feedback_admin = Feedback::where('status','=',7)->paginate(15);
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

    public function getPostImage(){
        return view('admin.posts_image');
    }

    public function checkAdmin(){
        if (Auth::user()->authorities > 3 ) {
            // return view('page.404');
            return redirect('index');
        }
    }
}
