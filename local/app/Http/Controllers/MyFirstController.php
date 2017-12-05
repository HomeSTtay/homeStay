<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

/**
* 
*/
class MyFirstController extends Controller
{
	
	public function getIndex(){

		return view('pages.index');

	}
	public function getSignup(){

		return view('pages.signup');

	}
	public function getLogin(){

		return view('pages.login');

	}
	public function getDetail(){

		return view('pages.detail');

	}
	public function getChangePass(){
		
		return view('pages.change_pass');
	}
	public function getMail(){
		if(Session::has('click')){
			Session::forget('click');	
		}
				
		$thongbao="";
		return view('pages.mail_change_pass')->with('thongbao',$thongbao);
		

	}
}



