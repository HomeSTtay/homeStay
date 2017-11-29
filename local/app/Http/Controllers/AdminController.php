<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Input;
use Illuminate\Http\Request;
/**
* 
*/
class AdminController extends Controller
{
	
	public function getAdminIndex(){
		return view('pages.index_admin');
	}
	
	public function getListHomestay(){
		return view('pages.list_homestay');
	}	
	
	public function getAddHomestay(){
		return view('pages.add_homestay');
	}
	
	public function getEditHomestay(){
		return view('pages.edit_homestay');
	}

	public function getListUser(){
		return view('pages.list_user');
	}

	public function getListRoom(){
		return view('pages.list_room_homestay');

	}
	public function getAddRoom(){
		return view('pages.add_room_homestay');
	}


	public function getListStyleHomestay(){
		$list = DB::table('style_homestay')->select()->paginate(5);

		return view('pages.admin_list_style_homestay')->with('list',$list);
	}

	public function getAddStyleHomestay(){
		$thongbao = "";
		return view('pages.admin_add_style_homestay')->with('thong_bao',$thongbao);
	}
	public function postAddStyleHomestay(Request $request){
		$id_style = $request->input('id_style_homestay');
		$name_style = $request->input('name_style_homestay');
		$descript = $request->input('descript_style_homestay');


		$style_homestay = DB::insert('insert into style_homestay(id,name,description) values(?,?,?)',[$id_style,$name_style,$descript]);
		

		return redirect('/danh-sach-style-homestay');
	}

	public function getDeleteStyleHomestay($id){
		$del = DB::delete('delete from style_homestay where id = ?',[$id]);
		return redirect('/danh-sach-style-homestay');
	}
	public function getEditStyleHomestay(){
		return view('pages.admin_edit_style_homestay');
	}

	 public function getEditRoom(){
	 	return view('pages.edit_room_homestay');
	 }

}



