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
use Session;
use Mail;
use Hash;


class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function getInfo(){
        $list_ranking_week = $this->getRankingWeek();
        $list_ranking_month = $this->getRankingMonth();
        $user = User::where('id', Auth::user()->id)->first();
        $intro = Intro::where([['id_author', Auth::user()->id],['group', 1]])->first();
        if (!isset($intro)) {
            $intro = (object) array('content' => 'Bạn chưa có bài giới thiệu về bản thân!');
        }
        return view('user.info',compact('user', 'intro', 'list_ranking_week', 'list_ranking_month'));
    }

    public function getMessages(){
        return view('user.messages');
    }

    public function getMyPosts(){
        $list_ranking_week = $this->getRankingWeek();
        $list_ranking_month = $this->getRankingMonth();
        $list_posts = DB::table('posts')
            ->select('posts.*', 'categories.name_categories', 'categories.categories AS categories_slug')
            ->leftJoin('categories', 'posts.categories', '=', 'categories.id')
            ->where('id_account','=',Auth::user()->id)
            ->where('posts.status', '<', '8')
            ->orderBy('id', 'DESC')
            ->paginate(15);
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
            $src = $folder_image . 'avatar_' . Auth::user()->id . '_' . round(microtime(true) * 1000) . '.' . $file->getClientOriginalExtension();
            $file->move($folder_image, $src);
        }
        $account = new User();
        $account->exists = true;
        $account->id = Auth::user()->id;
        $account->full_name = isset($req->full_name) ? $req->full_name : '';
        $account->email = isset($req->email) ? $req->email : '';
        $account->birthday = isset($req->birthday)&&$this->checkDate($req->birthday) ? $req->birthday : '2000-01-01';
        $account->sex = isset($req->gender) ? $req->gender : 0;
        $account->address = isset($req->address) ? $req->address : '';
        $account->phone = isset($req->phone) ? $req->phone : null;
        $account->nick_name =isset($req->nickname) ? $req->nickname: '';
        if (isset($src)) {
            $account->avatar = $src;// hinh anh
        }
        if (Auth::user()->authorities == 5) {
            $account->authorities = 6; // trang thai
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
        $this->validate($req,
            [
                'old_pass'=>'required|min:6|max:20',
                'new_pass'=>'required|min:6|max:20',
                're_new_pass'=>'required|same:new_pass'
            ],
            [
                'old_pass.required'=>'Vui lòng nhập tên đăng nhập',
                'new_pass.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'new_pass.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['password' => Hash::make($req->new_pass)]);
        return redirect()->back();
    }

    public function updateIntro(Request $req){
        $account_intro = Intro::where([['id_author', Auth::user()->id],['group', 1]])->first();
        if (!isset($account_intro)) {
            $intro = new Intro();
            $intro->id_author = Auth::user()->id;
            $intro->content = isset($req->content_intro) ? $req->content_intro : '';
            $intro->group = 1;
            $intro->status = 1;
            $intro->save();
        } else {
            DB::table('intro')
            ->where('id_author', Auth::user()->id)
            ->update(['content' => $req->content_intro]);
        }
        return redirect()->back();
    }

    public function getRankingWeek(){
        $ranking = DB::select('select id_post, id_categories, COUNT(id_post) AS view_post from ranking where time BETWEEN NOW() - INTERVAL 7 DAY AND NOW() GROUP BY id_post ORDER BY view_post DESC, ranking.time LIMIT 10');
        $array=array();
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
