<?php

namespace App\Http\Controllers;

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
	public function getListUser(){
		return view('pages.admin_list_user');
	}
	public function getListRoom(){
		return view('pages.admin_list_room_homestay');

	}
	public function getAddRoom(){
		return view('pages.admin_add_room_homestay');
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



