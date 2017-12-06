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
class Admin_userController extends Controller
{
	
	//duyệt danh sach ngườ dùng
	public function getListUser(){
		$list_user = DB::table('users')->where('viewstatus_id',1)->select()->get();
		return view('pages.admin_list_user')->with('list_user',$list_user);

	}
	// xóa người dùng
	public function getDeleteUser($id){
		DB::table('users')->where('id',$id) -> update(['viewstatus_id' => 0]);
		return redirect()->back();
	
	}




	
}
	





