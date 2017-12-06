<?php

namespace App\Http\Controllers;
use DB;
use Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Input;
use Illuminate\Database\Query\Builder;

/**
* 
*/
class AdminController extends Controller
{
	
	public function getAdminIndex(){
		return view('pages.index_admin');
	}
	// duyệt danh sách homestay
	public function getListHomestay(){

		$list_homestay = DB::table('home_stay')->where('home_stay.viewstatus_id',1)->join('style_homestay','style_homestay.id','=','home_stay.style_id')->select('home_stay.id','home_stay.name','home_stay.location','home_stay.rank','style_homestay.name_style')->paginate(5);
		return view('pages.admin_list_homestay')->with('list_homestay',$list_homestay);
	}	
	// xóa homestay
	public function getDeleteHomestay($id){
		DB::table('home_stay')->where('id',$id)->update(['viewstatus_id'=>0]);
		return redirect()->back()->withInput();
	}

	public function getAddHomestay(){
		$list_style= DB::table('style_homestay')->get();
		return view('pages.admin_add_homestay')->with('list_style',$list_style);
	}

	public function postAddHomestay(){

		return view('pages.admin_add_homestay');
	}



	
	public function getEditHomestay(){

		return view('pages.admin_edit_homestay');
	}

	



	public function getAddPost(){
		return view('pages.admin_add_post');
	}
	public function getListPost(){
		return view('pages.admin_list_post');
	}
	public function getEditPost(){
		return view('pages.admin_edit_post');
	}
	
}
	





