<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
    	$user->firstname = $request->firstname;
    	$user->lastname = $request->lastname;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->save();
    	return redirect('/signUp')->with('thongbao','Đăng ký thành công');

    }
}
