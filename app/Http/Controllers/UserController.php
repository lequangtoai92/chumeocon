<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Personality;
use App\Categories;
use App\User;
use App\Intro;
use Auth;
use DB;
use Hash;


class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function getInfo(){
        $user = User::where('id', Auth::user()->id)->first();
        $intro = Intro::where([['id_author', Auth::user()->id],['group', 1]])->first();
        if (!isset($intro)) {
            $intro = (object) array('content' => 'Bạn chưa có bài giới thiệu về bản thân!');
        }
        return view('user.info',compact('user', 'intro'));
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
        $list_ranking_week = $this->getRankingWeek();
        $list_ranking_month = $this->getRankingMonth();
        $list_posts = DB::table('posts')
            ->select('posts.*', 'categories.name_categories')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('id_account','=',Auth::user()->id)
            ->where('posts.status', '6')
            ->get();
        return view('user.my_posts',compact('list_posts', 'list_ranking_week', 'list_ranking_month'));
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

    public function updateInfo(Request $req){
        $folder_image = $this->creatFolder();
        if ($req->hasFile('image_upload')) {
            $file = $req->image_upload;
            $src = $folder_image . round(microtime(true) * 1000) . '.' . $file->getClientOriginalExtension();
            $file->move($folder_image, $src);
        }
        $account = new User();
        $account->exists = true;
        $account->id = Auth::user()->id;
        $account->full_name = $req->full_name;
        $account->email = $req->email;
        $account->birthday = isset($req->birthday)&&$this->checkDate($req->birthday) ? $req->birthday : '2000-01-01';
        $account->sex = isset($req->gender) ? $req->gender : 0;
        $account->address = isset($req->address) ? $req->address : '';
        $account->phone = isset($req->phone) ? $req->phone : null;
        $account->nick_name =isset($req->nickname) ? $req->nickname: '';
        if (isset($src)) {
            $account->avatar = '../'.$src;// hinh anh
        }
        $account->save();
        return redirect()->back();
    }

    function creatFolder(){
        $month=date("Y-m");
        $structure = 'public/image_avatar/'.$month.'/';
        if (!file_exists($structure)) {
            mkdir($structure, 0777, true);
        }
        return $structure;
    }

    public function updatePassWord(Request $req){
        // $this->validate($req,
        //     [
        //         'old_pass'=>'required|min:6|max:20',
        //         'new_pass'=>'required|unique:users,password',
        //         're_new_pass'=>'required|same:new_pass'
        //     ],
        //     [
        //         'username.required'=>'Vui lòng nhập tên đăng nhập',
        //         'username.unique'=>'username đã có người sử dụng',
        //         'password.required'=>'Vui lòng nhập mật khẩu',
        //         're_password.same'=>'Mật khẩu không giống nhau',
        //         'password.min'=>'Mật khẩu ít nhất 6 kí tự'
        //     ]);
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['password' => Hash::make($req->new_pass)]);
        return redirect()->back();
    }

    public function updateIntro(Request $req){
        DB::table('intro')
            ->where('id_author', Auth::user()->id)
            ->update(['content' => $req->content_intro]);
        return redirect()->back();
    }

    public function getRankingWeek(){
        $ranking = DB::select('select id_post, id_categories, COUNT(id_post) AS view_post from ranking where time BETWEEN NOW() - INTERVAL 7 DAY AND NOW() GROUP BY id_post ORDER BY view_post DESC, ranking.time LIMIT 5');
        $array=array();
        for ($i = 0; $i < count($ranking); $i++){
            array_push($array,$ranking[$i]->id_post);
        }
        $list_posts = Posts::whereIn('id', $array)->get();
        return ($list_posts);
    }

    public function getRankingMonth(){
        $ranking = DB::select('select id_post, id_categories, COUNT(id_post) AS view_post from ranking where time BETWEEN NOW() - INTERVAL 30 DAY AND NOW() GROUP BY id_post ORDER BY view_post DESC, ranking.time LIMIT 5');
        $array=array();
        for ($i = 0; $i < count($ranking); $i++){
            array_push($array,$ranking[$i]->id_post);
        }
        $list_posts = Posts::whereIn('id', $array)->get();
        return ($list_posts);
    }

    public function checkDate($date){
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
            return true;
        } else {
            return false;
        }
    }
}
