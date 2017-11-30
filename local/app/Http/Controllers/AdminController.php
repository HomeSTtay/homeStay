<?php

namespace App\Http\Controllers;
use DB;
<<<<<<< HEAD
use Validator;
use Illuminate\Support\MessageBag;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
=======
use App\Http\Controllers\Input;
use Illuminate\Http\Request;
>>>>>>> origin/tung1
/**
* 
*/
class AdminController extends Controller
{
	
	public function getAdminIndex(){
		return view('pages.index_admin');
	}
	
	public function getListHomestay(){
		return view('pages.admin_list_homestay');
	}	
	
	public function getAddHomestay(){
		return view('pages.admin_add_homestay');
	}
	
	public function getEditHomestay(){
		return view('pages.admin_edit_homestay');
	}

	public function getListUser(){
		return view('pages.admin_list_user');
	}

	public function getListRoom(){
<<<<<<< HEAD
		$type_room = DB::table('type_room')->select()->paginate(5);
		return view('pages.admin_list_room_homestay')->with('type_room',$type_room);
=======
		return view('pages.admin_list_room_homestay');
>>>>>>> origin/tung1

	}
	public function getAddRoom(){
		return view('pages.admin_add_room_homestay');
	}

<<<<<<< HEAD
	public function postCheckAddRoom(Request $request){
		$rules_tyr=
		[
			'name-room'=>'required',
			'desc-room' => 'required',
			'quantity-room' => 'required',
		];
		$messages_tyr=
		[
			'name-room.required'=>'Vui lòng nhập tên loại phòng!',
			'desc-room.required' => 'Vui lòng mô tả loại phòng!',
			'quantity-room.required'=> 'Vui lòng nhập số lượng phòng!'
		];
		$validation = Validator::make($request->all(),$rules_tyr,$messages_tyr);
		if($validation->fails()){
			return redirect()->back()->withErrors($validation)->withInput();
		}
		else{
			$tyr = DB::table('type_room')->where("name",$request->get('name-room'))->count();
			if($tyr==1){
				$errorAdd = new MessageBag(['errorBS'=>'Loại phòng đã tồn tại']);
				return redirect()->back()->withErrors($errorAdd)->withInput();		
			}
			else{
				$count = DB::table('type_room')->count();
				$mahomestay = $request->input ('id-homestay');
				$style = $request -> input('styletyr');
				$name =  $request->input('name-room');
				$descript = $request -> input('desc-room');
				$quantity  = $request -> input ('quantity-room');
				$status = $request -> input('status-room');
				$img = $request -> input('img-room');
				DB::table('type_room')->insertGetId(['homestay_id' => (int)substr($mahomestay,3),'id' => ($count+1),'style' => $style,'name' => $name,'description' =>$descript,'quantity' => $quantity, 'status' => $status, 'picture'=>$img]);
				$errorAdd = new MessageBag(['errorBS'=>'Thêm thành công!']);
				return redirect('/list-type-room');
			
			}
		}
	}

	public function getCheckDeleteRoom($id){
		$type_room = DB::table('type_room')->select()->get();
		DB::table('type_room')->where('id','=',$id) -> delete();
		return redirect()->back()-> withInput();
	}

	public function getEditRoom(){
	 	return view('pages.admin_edit_room_homestay');
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
		$count = DB::table('style_homestay')->count();
		$name_style = $request->input('name_style_homestay');
		$descript = $request->input('desc_style');
		$style_homestay = DB::insert('insert into style_homestay(id,name,description) values(?,?,?)',[$count+1,$name_style,$descript]);
		return redirect('/list-style-homestay');
			}
		
	public function getDeleteStyleHomestay($id){
		$del = DB::delete('delete from style_homestay where id = ?',[$id]);
		return redirect('/list-style-homestay');
	}
	public function getEditStyleHomestay(){
		return view('pages.admin_edit_style_homestay');
	}
		public function getAddPost(){
		return view('pages.admin_add_post');
	}
=======
	public function getListStyleHomestay(){
		$list = DB::table('style_homestay')->select()->paginate(5);
		return view('pages.admin_list_style_homestay')->with('list', $list);
	}

	public function getAddStyleHomestay(){
		$thongbao = "";
		return view('pages.admin_add_style_homestay')->with('thong_bao', $thongbao);
	}
	
	public function postAddStyleHomestay(Request $request){
		$id_style = $request->input('id_style_homestay');
		$name_style = $request->input('name_style_homestay');
		$descript = $request->input('descript_style_homestay');

		$style_homestay = DB::insert('insert into style_homestay(id,name,description values(?,?,?)',[$id_style, $name_style, $descript]); 
		return redirect('/list-style-homestay');
	}

	public function getDeleteStyleHomestay($id){
		$del = DB::delete('delete from style_homestay where id = ? ', [$id]);
		return redirect('/list-style-homestay');	
	}

	public function getEditStyleHomestay(){
		return view('pages.admin_edit_style_homestay');
	}

	public function postEditStyleHomestay(Request $request){
		$name_style = $request->input('name-style-homestay');
		$descript_style = $request->input('descrip_style');
		$edit = DB::update('update style_homestay set name = ? , description = ? where id = ?', [$name_style, $descript_style]);
		return redirect('/list-style-homestay');

	}

	public function getAddPost(){
		return view('pages.admin_add_post');
	}
>>>>>>> origin/tung1
	
	public function getListPost(){
		return view('pages.admin_list_post');
	}
<<<<<<< HEAD
	public function getEditPost(){
		return view('pages.admin_edit_post');
	}
	
}
=======
	
	public function getEditPost(){
		return view('pages.admin_edit_post');
	}

} 
>>>>>>> origin/tung1



