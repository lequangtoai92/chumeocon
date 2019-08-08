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

    public function getAdminAccount(){
        $account = User::where('status','=',6)->paginate(3);
        var_dump(Auth::user()->authorities);
        return view('admin.account',compact('account'));
    }

    public function getAdminPosts(){
        $list_posts = Posts::where('status','=',6)->get();
        return view('admin.posts',compact('list_posts'));
    }

    public function getAdminFeeback(){
        $list_feedback_admin = Feedback::where('status','=',1)->paginate(10);;
        return view('admin.feedback',compact('list_feedback_admin'));
    }
}
