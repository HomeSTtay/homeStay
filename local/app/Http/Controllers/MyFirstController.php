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
	public function getDetail($name){
		
		$hs = DB::table('home_stay')->where('name','=',$name)->select()->first();
		$statuss = DB::table('statuss')->where('id','ST'.$hs->id)->select()->first();
		$pic = DB::table('picture')->where('viewstatus_id','<>',0)->select()->get();
		$post = DB::table('post')->where('home_id',$hs->id)->select()->get();
		$near = DB::table('home_stay')->where('area',$hs->area)->select()->get(5);
		$creater = DB::table('users')->where('id',$hs->creater)->select()->first();
		return view('pages.detail')->with('near',$near)->with('pic',$pic)->with('statuss',$statuss)->with('hs',$hs)->with('post',$post)->with('creater',$creater);


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
	public function getListHomestayNorthern(){
		$area = DB::table('home_stay')->where('area','=','Bắc')->select('home_stay.area')->first();
		$pic = DB::table('picture')->select()->get();
		$list = DB::table('home_stay')->where('area','=','Bắc')->select()->paginate(10);
		return view('pages.danh_sach_homestay')->with('list',$list)->with('pic',$pic)->with('area',$area);
	}
	public function getListHomestayCentral(){
		$area = DB::table('home_stay')->where('area','=','Trung')->select('home_stay.area')->first();
		$pic = DB::table('picture')->select()->get();
		$list = DB::table('home_stay')->where('area','=','Trung')->select()->paginate(10);
		return view('pages.danh_sach_homestay')->with('list',$list)->with('pic',$pic)->with('area',$area);
	}
	public function getListHomestaySouth(){
		$area = DB::table('home_stay')->where('area','=','Nam')->select('home_stay.area')->first();
		$pic = DB::table('picture')->select()->get();
		$list = DB::table('home_stay')->where('area','=','Nam')->select()->paginate(10);
		return view('pages.danh_sach_homestay')->with('list',$list)->with('pic',$pic)->with('area',$area);
	}

	
}



