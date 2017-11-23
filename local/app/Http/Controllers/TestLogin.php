<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Mail;

class TestLogin extends Controller
{
    public function postLogin(Request $request)
    {
    	$data=[
    		'email'=>$request->email,
    		'password'=>$request->password,
    	];
    	if(Auth::attempt($data)){
    		return redirect('/');
    	}else{
    		print_r($data);
    		return redirect('/logIn');
    	}
    }

    public function postRegister(Request $request){
    	
    	$user = new User();
        $email =  $request->input('email');
        $name =  $request->input('lastname');
        $user->firstname = $request->firstname;
    	$user->lastname = $request->lastname;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->save();
       
    
    Mail::send('pages.mail', array('lastname'=>$request->lastname), function($message) use ($email, $name){

        $message->to($email,$name)->subject('Welcome to Walk');
    });
    	return redirect('/logIn');

    }
}
