<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Input;
use Illuminate\Http\Request;
use App\Http\Requests;

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
    	
       $this->validate($request,[
        'email'=>'required|email',
        'password'=>'required',
        ],

        [
        'email.required'=>'Vui lòng nhập email',
        'email.email'=>'Vui lòng nhập đúng định dạng email',
        'password.required'=>'Vui lòng nhập mật khẩu',
        
        ]);

        
        $email = $request->input('email');
        $password = $request->input('password');

        $checkLogin = DB::table('users')->where('email',$email)->first();

        if(count($checkLogin) >0){
             $pass = $checkLogin->password;
             if($password == $pass){
              $name = $checkLogin->lastname;
             Session::put('user.name',$name);
             Session::put('user.email',$email);
                Session::put('user.pass',$password);
             // Tạo session 
              $ss = Session::get('user'); 

              return redirect('/')->with($ss);
            }else{
                   return redirect('/logIn')->with('thongbao','Mật khẩu không đúng');

             }

        }
        else{
             return redirect('/logIn')->with('thongbao','Email không đúng');
        }
        
    	
    }

    public function postRegister(Request $request){
    	
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
        $user->password = $request->password;
        $user->typeuser_id = 1;
        $user->status = "";
        $user->save();
       
    
     Mail::send('pages.mail', array('lastname'=>$request->lastname), function($message) use ($email, $name){

        $message->to($email,$name)->subject('Chúc mừng đăng kí thành công');
    });
     Session::put('user.name',$name);
     Session::put('user.email',$email);
     Session::put('user.pass',$pass);
     // Tạo session năm
        $ss = Session::get('user'); 

        return redirect('/')->with($ss);
       
    	

    }
    public function getChangePass(){
        return view('pages.change_pass_cont');

    }
    public function postChangePass(Request $request,$email){
        $pass = $request->input('pass');
        $re_pass = $request->input('re-pass');
        

        $ss = (Session::get('user.email'));


        if($pass == $re_pass){
            $update = DB::update('update users set password = ? where email = ? ',[$pass,$ss]);
            print_r($ss);   
            return redirect('/logIn');

        }
        else{
            $thongbao = 'Mật khẩu không trùng khớp, vui lòng nhập lại';
            return view('pages.change_pass')->with('thongbao',$thongbao);
        }

       
    }
  public function postSendMail(Request $request){
         $email =  $request->input('email');

         $m = DB::table('users')->where(['email'=> $email])->first();
         $name = $m->lastname;


             if($email == $m->email){
                        Mail::send('pages.temp_mail_change_pass', array('email'=>$request->email), function($message) use ($email,$name){   
        $message->to($email,$name)->subject('Thay đổi mật khẩu');
    
    });

        Session::put('user.email',$email);
         
        $ses = Session::get('user');

                $thongbao ='Bạn vui lòng kiểm tra mail để thay đổi mật khẩu';   
             }else{
                 $thongbao ="Mail không đúng, bạn vui lòng kiểm tra và nhập lại";
             }
         
     
        return view('pages.mail_change_pass')->with('thongbao',$thongbao)->with('email',$email)->with($ses);
    }


    public function getLogout(){
         Session::forget('user');
        return redirect('/logIn');

    }
}
