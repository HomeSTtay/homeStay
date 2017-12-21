<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use DB;

/**
* 
*/
class MyFirstController extends Controller
{
	
	public function getIndex(){
		$statuss = DB::table('statuss')->select()->get();
		$pic = DB::table('picture')->where('viewstatus_id','<>',0)->select()->get();
		$top10 = DB::table('home_stay')->where('viewstatus_id',1)->select()->get(10);
		return view('pages.index')->with('top10',$top10)->with('pic',$pic)->with('statuss',$statuss);

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



