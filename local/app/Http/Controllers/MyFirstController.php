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
		$pic = DB::table('picture')->select()->get();
		$top10 = DB::table('home_stay')->select()->get(10);
		return view('pages.index')->with('top10',$top10)->with('pic',$pic);

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
	public function getListHomestayNorthern(){
		$rank = DB::table('home_stay')->where('rank','=','Bắc')->select('home_stay.rank')->first();
		$pic = DB::table('picture')->select()->get();
		$list = DB::table('home_stay')->where('rank','=','Bắc')->select()->paginate(10);
		return view('pages.danh_sach_homestay')->with('list',$list)->with('pic',$pic)->with('rank',$rank);
	}
	public function getListHomestayCentral(){
		$rank = DB::table('home_stay')->where('rank','=','Trung')->select('home_stay.rank')->first();
		$pic = DB::table('picture')->select()->get();
		$list = DB::table('home_stay')->where('rank','=','Trung')->select()->paginate(10);
		return view('pages.danh_sach_homestay')->with('list',$list)->with('pic',$pic)->with('rank',$rank);
	}
	public function getListHomestaySouth(){
		$rank = DB::table('home_stay')->where('rank','=','Nam')->select('home_stay.rank')->first();
		$pic = DB::table('picture')->select()->get();
		$list = DB::table('home_stay')->where('rank','=','Nam')->select()->paginate(10);
		return view('pages.danh_sach_homestay')->with('list',$list)->with('pic',$pic)->with('rank',$rank);
	}

	public function getDetailHomestay($name){	
		$hs = DB::table('home_stay')->where('name','=',$name)->select()->first();
		return view('pages.chi_tiet_homestay')->with('hs',$hs);
	}
}



