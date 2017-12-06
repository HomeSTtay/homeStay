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
class Admin_stylehomestayController extends Controller
{
	
	
// List Style Homestay
    public function getListStyleHomestay(){
        $list = DB::table('style_homestay')->where('viewstatus_id',1)->select()->paginate(5);
        return view('pages.admin_list_style_homestay')->with('list',$list);
    }


//Add Style Homestay	 
    public function getAddStyleHomestay(){
        $thongbao = "";
        return view('pages.admin_add_style_homestay')->with('thong_bao',$thongbao);
    }


    // thêm phong cách homestay. nếu có tên và mô tả giông thì cho hiển thị, k thì thêm mơi
    public function postAddStyleHomestay(Request $request){
        $count = DB::table('style_homestay')->count();
        $name_style = $request->input('name_style_homestay');
        $descript = $request->input('desc_style');
        $now = getdate(); 
        $currentDate = $now["mday"] . $now["mon"] . $now["year"]; 

        $style = DB::table('style_homestay')->where('name',$name_style)->where('description',$descript)->first();

        if(count($style) == 0 ){
        DB::insert('insert into style_homestay values(?,?,1,?)',['SH'.$currentDate.($count+1),$name_style,$descript]);
        }
        else{
        DB::table('style_homestay')->where('id',$style->id) -> update(['viewstatus_id' => 1]);
        }

         return redirect('/list-style-homestay');

        }
    
    
//Delete Style Homestay
        public function getDeleteStyleHomestay($id){
           DB::table('style_homestay')->where('id',$id) -> update(['viewstatus_id' => 0]);
           return redirect()->back();
       }



// Edit Style Homestay
       public function getEditStyleHomestay($id){
           
           $style = DB::table('style_homestay')->where(['id'=>$id])->first();
           return view('pages.admin_edit_style_homestay')->with('style',$style);
       }

       public function postEditStyleHomestay(Request $request){
        $id = $request->input('id-style-homestay');
        $name_style = $request->input('name-style-homestay');
        $descript = $request->input('desc_style');

        

        $edit = DB::update('update style_homestay set name = ? , description = ? where id = ? ', [$name_style, $descript,$id]);

        return redirect('/list-style-homestay');

    }






}






