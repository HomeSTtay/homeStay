<?php

namespace App\Http\Controllers;
use DB;
use Validator;
use Illuminate\Support\MessageBag;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
		$type_room = DB::table('type_room')->select()->get();
		return view('pages.admin_list_room_homestay')->with('type_room',$type_room);

	}
	public function getAddRoom(){
		return view('pages.admin_add_room_homestay');
	}

	public function postCheckAddRoom(Request $request){
		$rules_tyr=
		[
			'name-homestay'=>'required',
			'desc-room' => 'required',
			'quantity-room' => 'required',
		];
		$messages_tyr=
		[
			'name-homestay.required'=>'Vui lòng nhập tên loại phòng!',
			'desc-room.required' => 'Vui lòng mô tả loại phòng!',
			'quantity-room.required'=> 'Vui lòng nhập số lượng phòng!'
		];
		$validation = Validator::make($request->all(),$rules_tyr,$messages_tyr);
		if($validation->fails()){
			return redirect()->back()->withErrors($validation)->withInput();
		}
		else{
			$users = DB::table('type_room')->where("name",$request->get('name-homestay'))->count();
			if($users==1){
				$errorAdd = new MessageBag(['errorBS'=>'Loại phòng đã tồn tại']);
				return redirect()->back()->withErrors($errorAdd)->withInput();		
			}
			else{
				$count = DB::table('type_room')->count();
				$mahomestay = $request->input ('id-homestay');
				$style = $request -> input('styletyr');
				$name =  $request->input('name-homestay');
				$descript = $request -> input('desc-room');
				$quantity  = $request -> input ('quantity-room');
				$status = $request -> input('status-room');
			
				DB::table('type_room')->insertGetId(['homestay_id' => (int)substr($mahomestay,3),'id' => ($count+1),'style' => $style,'name' => $name,'description' =>$descript,'quantity' => $quantity, 'status' => $status, 'picture'=> 'sadasdasd']);
				$errorAdd = new MessageBag(['errorBS'=>'Thêm thành công!']);
				return redirect()->back()->withErrors($errorAdd)-> withInput();
			
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
		return view('pages.admin_list_style_homestay');
	}

	public function getAddStyleHomestay(){
		return view('pages.admin_add_style_homestay');
	}
	public function getEditStyleHomestay(){
		return view('pages.admin_edit_style_homestay');
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



