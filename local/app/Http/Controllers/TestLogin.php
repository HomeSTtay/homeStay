<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Mail;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Session;


class TestLogin extends Controller
{

    public function postLogin(Request $request)
    {
    	
        $rules=[
        'email'=>'required',
        'pass'=>'required',
        ];

        $messages=[
        'email.required'=>'Vui lòng nhập email',
        'pass.required'=>'Vui lòng nhập mật khẩu'
        ];

        
        $email = $request->input('email');
        $password = $request->input('password');

        $checkLogin = DB::table('users')->where(['email'=>$email, 'password'=>$password])->first();

        if(count($checkLogin) >0){
        $name = $checkLogin->lastname;
        Session::put('user.name',$name);
        Session::put('user.email',$email);
        Session::put('user.pass',$password);
     // Tạo session 
        $ss = Session::get('user'); 

        return redirect('/')->with($ss);
        }else{
            return redirect('/logIn');
        }
        
    	
    }

    public function postRegister(Request $request){
    	

        $user = new User();
        $email =  $request->input('email');
        $name =  $request->input('lastname');
        $pass = $request->input('password');
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->typeuser_id = 1;
        $user->status = "";
        $user->save();
       
    
     Mail::send('pages.mail', array('lastname'=>$request->lastname), function($message) use ($email, $name){

        $message->to($email,'Walk')->subject('Welcome to Walk');
    });
     Session::put('user.name',$name);
     Session::put('user.email',$email);
     Session::put('user.pass',$pass);
     // Tạo session 
        $ss = Session::get('user'); 

        return redirect('/')->with($ss);
       
    	

    }
    public function getChangePass(){
        return view('pages.change_pass_cont');
    }
    public function postSendMail(Request $request){
        $email =  $request->input('email');
        $getmail = DB::('users')->where('')
        Mail::send('pages.temp_mail_change_pass', array(), function($message) use ($email){   
        $message->to($email,'Walk')->subject('Welcome to Walk');
      
    });
        $thongbao ='Bạn vui lòng kiểm tra mail để thay đổi mật khẩu';   
          return view('pages.mail_change_pass')->with('thongbao',$thongbao);
    }
    public function getLogout(){
         Session::forget('user');
        return redirect('/logIn');

    }
}
