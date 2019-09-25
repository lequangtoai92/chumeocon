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
        if ($this->checkAdmin()){
            return redirect('index');
        }
        return redirect('admin/account/');
    }

    public function getAdminAccount(){
        if ($this->checkAdmin()){
            return redirect('index');
        }
        $account = User::whereIn('status', [1, 2, 5, 6])->paginate(15);
        return view('admin.account',compact('account'));
    }

    public function getAdminPosts(){
        if ($this->checkAdmin()){
            return redirect('index');
        }
        $list_posts = Posts::where('status','=',9)->paginate(15);
        return view('admin.posts',compact('list_posts'));
    }

    public function getAdminFeeback(){
        if ($this->checkAdmin()){
            return redirect('index');
        }
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
        return view('admin.posts_image');
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
}
