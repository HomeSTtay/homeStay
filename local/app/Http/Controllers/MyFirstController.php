<?php

namespace App\Http\Controllers;

/**
* 
*/
class MyFirstController extends Controller
{
	
	public function getIndex(){

		return view('pages.index');

	}
	public function getSignup(){

		return view('pages.signup');

	}
	public function getLogin(){

		return view('pages.login');

	}
}



