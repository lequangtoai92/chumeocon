<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;
use Hash;
use Redirect;
use App\User;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
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
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 ký tự'
            ]);
        $account = new User();
        $account->full_name = $req->fullname;
        $account->user_name = $req->username;
        $account->email = $req->email;
        $account->password = Hash::make($req->password);
        $account->birthday = isset($req->birdth)&&$this->checkDate($req->birdth) ? $req->birdth : '2000-01-01';
        $account->avatar = '../img/no_image.png'; // hinh anh
        $account->sex = isset($req->gender) ? $req->gender : 0;
        $account->address = isset($req->address) ? $req->address : '';
        $account->phone = isset($req->phone) ? $req->phone : null;
        $account->nick_name =isset($req->nickname) ? $req->nickname: '';
        $account->authorities = 5;
        $account->status = 6;

        $account->save();
        return redirect()->back()->with('success','Tạo tài khoản thành công');
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
        $account->birthday = isset($req->birdth)&&$this->checkDate($req->birdth) ? $req->birdth : '2000-01-01';
        $account->avatar = '../img/no_image.png'; // hinh anh

        $account->save();
        return redirect()->back()->with('success','Tạo tài khoản thành công');
    }

    public function getLogin(){
        if (Auth::check()) {
            return redirect()->back();
        }
        return view('page.login');
    }

    public function postLogin(Request $req){
        $this->validate($req,
            [
                'username'=>'required',
                'password'=>'required|min:6'
            ],
            [
                'username.required'=>'Vui lòng nhập email',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]
        );
        $credentials = array('user_name'=>$req->username,'password'=>$req->password);
        $account = User::where([
                ['user_name','=',$req->username],
                ['status','=','6']
            ])->first();
        if($account){
            if(Auth::attempt($credentials, true)){
                return redirect()->back();
                // return Redirect::back()::back();
            }
            else{
                // return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
            }
        }
        else{
        //    return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']); 
        }
        
    }
    public function postLogout(){
        Auth::logout();
        return redirect()->back();
    }

    public function checkDate($date){
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
            return true;
        } else {
            return false;
        }
    }

    
}
