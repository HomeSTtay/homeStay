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

		$list_homestay = DB::table('home_stay')->where('home_stay.viewstatus_id',1)->join('style_homestay','style_homestay.id','=','home_stay.style_id')->select('home_stay.id','home_stay.name','home_stay.location','home_stay.rank','style_homestay.name_style')->paginate(5);
		return view('pages.admin_list_homestay')->with('list_homestay',$list_homestay);
	}	
	// xóa homestay
	public function getDeleteHomestay($id){
		DB::table('home_stay')->where('id',$id)->update(['viewstatus_id'=>0]);
		return redirect()->back()->withInput();
	}

	// hiển thị trang thêm homestay
	public function getAddHomestay(){
		$list_style= DB::table('style_homestay')->get();
		return view('pages.admin_add_homestay')->with('list_style',$list_style);
	}


	// xử lí thêm homestay
	public function postAddHomestay(Request $request){
		//`id`, `name`, `location`, `style_id`, `viewstatus_id`, `status_id`, `picture`, `rank`, `description`SELECT * FROM `home_stay` WHERE 1	
		$count = DB::table('home_stay')->count();
		$name = $request->input('name-homestay');
		$location = $request->input('loc-homestay');
		$style = $request->input('style-homestay');
		$img = $request->input('img-homestay');
		$rank = $request->input('rank');
		$desc = $request->input('desc-homestay');
		$now = getdate(); 

		$currentDate = $now["mday"] . $now["mon"] . $now["year"]; 

		DB::table('statuss')->insertGetId(['id'=>'STHS'.$currentDate.($count+1), 'view'=>0,'like'=>0,'share'=>0,'vote'=>0]);

		DB::table('home_stay')->insertGetId(['id' => 'HS'.$currentDate.($count+1),'name' => $name, 'location' => $location,'style_id' => $style,'viewstatus_id' => 1,'status_id'=> 'STHS'.$currentDate.($count+1),'picture'=>'HS'.$currentDate.($count+1),'rank'=>$rank,'description' =>$desc]);


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

		$post = DB::table('post')->where('home_id',$id)->count();
		 return view('pages.admin_detail_homestay')->with('homestay',$homestay)->with('picture',$picture)->with('statuss',$statuss)->with('post',$post)->with('style',$style);

	}


	
	public function getEditHomestay(){

		return view('pages.admin_edit_homestay');
	}

	public function getListUser(){
		return view('pages.admin_list_user');
	}

	public function getListRoom(){

		$type_room = DB::table('type_room')->select()->paginate(5);
		return view('pages.admin_list_room_homestay')->with('type_room',$type_room);
	}
	public function getAddRoom(){
		return view('pages.admin_add_room_homestay');
	}

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
		$count = DB::table('type_room')->count();
				$mahomestay = $request->input ('homestay-name');
				$style = $request -> input('styletyr');
				$name =  $request->input('name-room');
				$descript = $request -> input('desc-room');
				$quantity  = $request -> input ('quantity-room');
				$status = $request -> input('status-room');
				$img= $request -> input('img-room');
				$now = getdate(); 
				$hour = date("h");
				$minute = date("i");
				$giay = date("s");
				$currentDate = ($hour+7) . $minute . $giay.$now["mday"] . $now["mon"]; 
				$id = $currentDate;

		$validation = Validator::make($request->all(),$rules_tyr,$messages_tyr);
		if($validation->fails()){
			return redirect()->back()->withErrors($validation)->withInput();
		}
		else{
			$tyr = DB::table('type_room')->where("name",$request->get('name-room'))-> where ('homestay_name',$request->get('homestay-name'))-> where('viewstatus_id', 0)->count();
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
		$now = getDate();
		$currentDate = $now["mday"].$now["mon"].$now["year"];
		$name_style = $request->input('name_style_homestay');
		$descript = $request->input('desc_style');
		$style_homestay = DB::insert('insert into style_homestay(id,name,description) values(?,?,?,?)',['ST'.$currentDate.($count+1),$name_style,1,$descript]);
		return redirect('/list-style-homestay');
			}
		
	//Delete Style Homestay
	public function getDeleteStyleHomestay($id){
		$del = DB::delete('delete from style_homestay where id = ?',[$id]);
		return redirect('/list-style-homestay');
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






