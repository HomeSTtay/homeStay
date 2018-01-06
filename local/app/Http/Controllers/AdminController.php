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
class AdminController extends Controller
{
	
	public function getAdminIndex(){
		return view('pages.index_admin');
	}
	// duyệt danh sách homestay
	public function getListHomestay(){

		$list_homestay = DB::table('home_stay')->where('home_stay.viewstatus_id',1)->join('style_homestay','style_homestay.id','=','home_stay.style_id')->select('home_stay.id','home_stay.name','home_stay.location','home_stay.area','style_homestay.name_style')->paginate(5);
		return view('pages.admin_list_homestay')->with('list_homestay',$list_homestay);
	}	
	// xóa homestay
	public function getDeleteHomestay($id){
		DB::table('home_stay')->where('id',$id)->update(['viewstatus_id'=>0]);
		return redirect()->back()->withInput();
	}

	// hiển thị trang thêm homestay
	public function getAddHomestay(){
		
		$list_style= DB::table('style_homestay')->where('viewstatus_id',1)->get();
		return view('pages.admin_add_homestay')->with('list_style',$list_style);
	}


	// xử lí thêm homestay
	public function postAddHomestay(Request $request){
		//`id`, `name`, `location`, `style_id`, `viewstatus_id`, `status_id`, `picture`, `area`, `description`SELECT * FROM `home_stay` WHERE 1	
		$count = DB::table('home_stay')->count();
		$name = $request->input('name-homestay');
		$location = $request->input('loc-homestay');
		$style = $request->input('style-homestay');
		$img_thum = $request->input('img-thum');
		$img = $request->input('img-homestay');
		$area = $request->input('area');
		$desc = $request->input('desc-homestay');
		$now = getdate(); 
		$nowdate = date("Y-m-d");
		$currentDate = $now["mday"] . $now["mon"] . $now["year"]; 

		DB::table('statuss')->insertGetId(['id'=>'STHS'.$currentDate.($count+1), 'view'=>0,'like'=>0,'share'=>0,'vote'=>0]);

		DB::table('home_stay')->insertGetId(['id' => 'HS'.$currentDate.($count+1),'name' => $name, 'location' => $location,'style_id' => $style,'viewstatus_id' => 1,'status_id'=> 'STHS'.$currentDate.($count+1),'picture'=>'HS'.$currentDate.($count+1),'area'=> $area,'description' =>$desc,'creater'=>Session::get('user.id_user'),'create_date'=>$nowdate]);
		
		DB::table('picture')-> insertGetId(['id' => 'HS'.$currentDate.($count+1), 'name'=> $img_thum, 'link' => '../images/'.$img_thum,'viewstatus_id'=>3]);

		foreach ($img as $key => $value) {
			if($value!= ""){
				
				DB::table('picture')-> insertGetId(['id' => 'HS'.$currentDate.($count+1), 'name'=> $value, 'link' => '../images/'.$value,'viewstatus_id'=>1]);
			}

		}

		
		
		return redirect('/list-homestay');
	}

	public function getDetailHomestay($id){
		$homestay=DB::table('home_stay')->where('id',$id)->first();

		$style = DB::table('style_homestay')->where('id',$homestay->style_id)->first();

		$picture = DB::table('picture')->where('id',$id)->get();

		$statuss = DB::table('statuss')->where('id','ST'.$id)->first();

		$creater = DB::table('users')->where('id',$homestay->creater)->select()->first();

		$post = DB::table('post')->where('home_id',$id)->count();
		 return view('pages.admin_detail_homestay')->with('homestay',$homestay)->with('picture',$picture)->with('statuss',$statuss)->with('post',$post)->with('style',$style)->with('creater',$creater);

	}


	
	public function getEditHomestay(){

		return view('pages.admin_edit_homestay');
	}

}






