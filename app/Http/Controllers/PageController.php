<?php

namespace App\Http\Controllers;
use App\User;
use App\Posts;
use App\Feedback;
use Session;
use Hash;
use Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('page.index');
    }

    public function getNewStory(){
        return view('page.category');
    }

    public function getVietnameseFairyTales (){
        return view('page.category');
    }

    public function getJapanFairyTales(){
        return view('page.category');
    }

    public function getGrimmsFairyTales(){
        return view('page.category');
    }

    public function getGreekMythology(){
        return view('page.category');
    }

    public function getVietnameseProverbs(){
        return view('page.category');
    }

    public function getGoodWord(){
        return view('page.category');
    }

    public function getFunnyStory(){
        return view('page.category');
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

    public function getMyPosts(){
        return view('user.my_posts');
    }

    public function getNotifice(){
        return view('user.notifice');
    }

    public function getPosts(){
        return view('user.posts');
    }

    public function postPosts(Request $req){
        $posts = new Posts();
        $posts->id_personality = 1;
        $posts->id_account = 1;
        $posts->title = $req->name_posts;
        $posts->content = $req->main_content;
        $posts->summary = $req->summary;
        $posts->categories = 1;
        $posts->age = isset($req->ages) ? $req->ages : null;
        $posts->source =isset($req->source) ? $req->source: '';
        $posts->status_post = 6;
        $posts->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    // end user


    // admin
    public function getAdminAccount(){
        return view('admin.account');
    }

    public function getAdminPosts(){
        return view('admin.posts');
    }

    public function getAdminFeeback(){
        return view('admin.feedback');
    }
    // end admin

    public function getSignin(){
        return view('page.sigin');
    }

    public function postSignin(Request $req){
        $this->validate($req,
            [
                'email'=>'email',
                'password'=>'required|min:6|max:20',
                'username'=>'required|unique:users,user_name',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.email'=>'Không đúng định dạng email',
                'username.unique'=>'username đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        $account = new User();
        $account->full_name = $req->fullname;
        $account->user_name = $req->username;
        $account->email = $req->email;
        $account->password = Hash::make($req->password);
        // $account->birthday = isset($req->birdth) ? $req->birdth : '';
        $account->sex = isset($req->gender) ? $req->gender : 0;
        $account->address = isset($req->address) ? $req->address : '';
        $account->phone = isset($req->phone) ? $req->phone : null;
        $account->address =isset($req->nickname) ? $req->nickname: '';
        $account->authorities = 5;
        $account->status = 6;

        $account->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function getSigninFast(){
        return view('page.signin_fast');
    }

    public function postSigninFast(Request $req){
        $this->validate($req,
            [
                'password'=>'required|min:6|max:20',
                'username'=>'required|unique:users,user_name',
                're_password'=>'required|same:password'
            ],
            [
                'username.required'=>'Vui lòng nhập tên đăng nhập',
                'username.unique'=>'username đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        $account = new User();
        $account->full_name = isset($req->full_name) ? $req->full_name : '';
        $account->user_name = $req->username;
        $account->email = isset($req->email) ? $req->email : '';
        $account->password = Hash::make($req->password);
        $account->sex = isset($req->gender) ? $req->gender : 0;
        $account->address = isset($req->address) ? $req->address : '';
        $account->phone = isset($req->phone) ? $req->phone : null;
        $account->address =isset($req->nickname) ? $req->nickname: '';
        $account->authorities = 5;
        $account->status = 6;

        $account->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function getLogin(){
        return view('page.login');
    }

    public function postLogin(Request $req){
        $this->validate($req,
            [
                'username'=>'required',
                'password'=>'required|min:6|max:20'
            ],
            [
                'username.required'=>'Vui lòng nhập email',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
        );
        $credentials = array('user_name'=>$req->username,'password'=>$req->password);
        $account = User::where([
                ['user_name','=',$req->username],
                ['status','=','6']
            ])->first();
        if($account){
            if(Auth::attempt($credentials)){
            return redirect()->back()->with(['flag'=>'success','message'=> Auth::check() , Auth::user()]);
            }
            else{
                return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
            }
        }
        else{
           return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']); 
        }
        
    }
    public function postLogout(){
        Auth::logout();
        return redirect()->route('index');
    }
}