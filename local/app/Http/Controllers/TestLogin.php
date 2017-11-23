<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Input;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\MessageBag;
use App\User;
use Mail;
use DB;

class TestLogin extends Controller
{
    public function postLogin(Request $request)
    {

     $this->validate($request,[
        'email'=>'required|email',
        'password'=>'required|same:password|min:6|max:50',
        ],

        [
        'email.required'=>'Vui lòng nhập email',
        'email.email'=>'Vui lòng nhập đúng kiểu email',
        'password.required'=>'Vui lòng nhập mật khẩu',
        'password.min'=>'Mật khẩu phải có ít nhất 6 kí tự',
        'password.max'=>'Mật khẩu chỉ được tối đa 50 kí tự',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $checkLogin = DB::table('users')->where(['email'=>$email, 'password'=>$password])->first();

        if(count($checkLogin) >0){
       
        Session::put('user.email',$email);
        Session::put('user.password',$password);
     // Tạo session 
       $ss = Session::get('user'); 

       return redirect('/')->with($ss);
        }else{
            return redirect('/logIn')->with('thongbao','Đăng nhập thất bại');
        }

    }

    public function postRegister(Request $request)
    {
       $this->validate($request,[
        'firstname'=>'required',
        'lastname'=>'required',
        'email'=>'required|email',
        'password'=>'required|min:6|max:50',
        ],

        [
        'firstname.required'=>'Vui lòng nhập tên',
        'lastname.required'=>'Vui lòng nhập họ',
        'email.required'=>'Vui lòng nhập email',
        'email.email'=>'Vui lòng nhập đúng kiểu email',
        'password.required'=>'Vui lòng nhập mật khẩu',
        'password.min'=>'Mật khẩu phải có ít nhất 6 kí tự',
        'password.max'=>'Mật khẩu chỉ được tối đa 50 kí tự',
        ]);
       
        $user = new User();
        $email =  $request->input('email');
        $name =  $request->input('lastname');
        $pass = $request->input('password');
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->typeuser_id = 1;
        $user->status = "";
        $user->save();
        Mail::send('pages.mail', array('lastname'=>$request->lastname), function($message) use ($email, $name){
            $message->to($email,'Walk')->subject('Welcome to Walk');
             });
        Session::put('user.name',$name);
        Session::put('user.email',$email);
        Session::put('user.password',$pass);
        // Tạo session 
        $ss = Session::get('user'); 

        return redirect('/')->with($ss);
    }

    //view doi pass
        public function getChangePass(){
        return view('pages.change_pass_cont');
    }
    
    //send mail
    public function postSendMail(Request $request){
        $email =  $request->input('email');
        
        Mail::send('pages.temp_mail_change_pass', array(), function($message) use ($email){   
        $message->to($email,'Walk')->subject('Welcome to Walk');
      
    });
        $thongbao ='Bạn vui lòng kiểm tra mail để thay đổi mật khẩu';   
          return view('pages.mail_change_pass')->with('thongbao',$thongbao);
     }

}
