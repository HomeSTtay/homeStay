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
	 public function getEditRoom(){
	 	return view('pages.edit_room_homestay');
	 }
}



