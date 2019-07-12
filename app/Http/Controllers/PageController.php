<?php

namespace App\Http\Controllers;
use App\Account;
use App\Login;
use Hash;
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
        return view('page.feedback');
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
                'email'=>'required|email|unique:account,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        $account = new Account();
        $account->full_name = $req->fullname;
        $account->email = $req->email;
        $account->phone = $req->phone;
        $account->address = $req->address;

        $login = new Login();
        $login->user_name = $req->fullname;
        $login->pass_word = Hash::make($req->password);
        $login->id_account = 2;
        $account->save();
        $login->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function getLogin(){
        return view('page.login');
    }

    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
        );
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        $user = User::where([
                ['email','=',$req->email],
                ['status','=','1']
            ])->first();

        if($user){
            if(Auth::attempt($credentials)){

            return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
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