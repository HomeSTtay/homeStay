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
}



