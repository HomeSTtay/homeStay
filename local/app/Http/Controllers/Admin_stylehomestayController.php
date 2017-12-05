<?php

namespace App\Http\Controllers;
use DB;
use Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Input;

/**
* 
*/
class Admin_stylehomestayController extends Controller
{
	
	
// List Style Homestay
public function getListStyleHomestay(){
    $list = DB::table('style_homestay')->select()->paginate(5);
    return view('pages.admin_list_style_homestay')->with('list',$list);
 }
//Add Style Homestay	 
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
    
//Delete Style Homestay
public function getDeleteStyleHomestay($id){
    $del = DB::delete('delete from style_homestay where id = ?',[$id]);
    return redirect('/list-style-homestay');
}



// Edit Style Homestay
public function getEditStyleHomestay($id){
    $style = DB::table('style_homestay')->where(['id'=>$id])->first();
    Session::put('st.id',$id);
    return view('pages.admin_edit_style_homestay')->with('style',$style);
}

public function postEditStyleHomestay(Request $request){
    $id = Session::get('st.id');
    $name_style = $request->input('name-style-homestay');
    $descript = $request->input('desc_style');
    $edit = DB::update('update style_homestay set name = ? , description = ? where id = ? ', [$name_style, $descript,$id]);
    return redirect('/list-style-homestay');

}





	
}
	





