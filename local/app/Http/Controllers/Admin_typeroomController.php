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
class Admin_typeroomController extends Controller
{
	


	public function getListRoom(){
		$type_room = DB::table('type_room')->where('viewstatus_id','=',1)->select()->paginate(5);
		return view('pages.admin_list_room_homestay')->with('type_room',$type_room);

	}
	public function getAddRoom(){
		$style = DB::table('style_homestay')->where('viewstatus_id',1)->get();
		$homestay = DB::table('home_stay')->where('viewstatus_id','=',1)->select()->get();
		return view('pages.admin_add_room_homestay')->with('homestay',$homestay)->with('style',$style);
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
		$validation = Validator::make($request->all(),$rules_tyr,$messages_tyr);
		if($validation->fails()){
			return redirect()->back()->withErrors($validation)->withInput();
		}
		else{
			$tyr = DB::table('type_room')->where("name",$request->get('name-room'))->count();
			if($tyr==1){
				DB::table('type_room')->where("name",$request->get('name-room'))-> update(['viewstatus_id' => 1]);
				return redirect('/list-type-room');
			}
			else{
				$count = DB::table('type_room')->count();
				$mahomestay = $request->input ('homestay-name');
				$style = $request -> input('styletyr');
				$name =  $request->input('name-room');
				$descript = $request -> input('desc-room');
				$quantity  = $request -> input ('quantity-room');
				$status = $request -> input('status-room');
				$img= $request -> input('img-room');
				
				$now = getdate(); 
				$currentDate = $now["mday"] . $now["mon"] . $now["year"]; 
				DB::table('type_room')->insertGetId(['id' => 'HR'.$currentDate.($count+1),'name' => $name, 'homestay_name' => $mahomestay,'style' => $style,'viewstatus_id' => 1,'description' =>$descript,'quantity' => $quantity, 'status' => $status, 'picture'=>'HR'.$currentDate.($count+1)]);

				
					foreach ($img as $key => $value) {
						# code...
					
					DB::table('picture')-> insertGetId(['id' => 'HR'.$currentDate.($count+1), 'name'=> $value, 'link' => '../images/'.$value,'viewstatus_id'=>1]);
				}
				// Duyệt forr mảng Pictura ra. Add picture phía trên thành mã typerooom, add hình ảnh vào bảng Picture vs mã hình ảnh là mã typrroool. 
				$errorAdd = new MessageBag(['errorBS'=>'Thêm thành công!']);
				return redirect('/list-type-room');
			}
		}
	}

	public function getCheckDeleteRoom($id){
		$type_room = DB::table('type_room')->select()->get();
		DB::table('type_room')->where('id','=',$id) -> update(['viewstatus_id' => 0]);
		return redirect()->back()-> withInput();
	}

	public function getEditRoom($id){
		$style = DB::table('style_homestay')->where('viewstatus_id',1)->get();
		$homestay = DB::table('home_stay')->select()->get();
		$edittyperoom = DB::table('type_room')->where('id','=',$id) -> first();
		 return view('pages.admin_edit_room_homestay')-> with('edittyperoom',$edittyperoom)-> with('homestay',
		  $homestay)->with('style', $style);
	}

	public function postCheckEditRoom(Request $request){
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
			'quantity-room.required'=> 'Vui lòng nhập sốádasdadsa lượng phòng!'
		];
		$validation = Validator::make($request->all(),$rules_tyr,$messages_tyr);
		if($validation->fails()){
			return redirect()->back()->withErrors($validation)->withInput();
		}
			else{
				$count = DB::table('type_room')->count();
				$id = $request -> input ('id-room');
				$mahomestay = $request->input ('homestay-name');
				$style = $request -> input('styletyr');
				$name =  $request->input('name-room');
				$descript = $request -> input('desc-room');
				$quantity  = $request -> input ('quantity-room');
				$status = $request -> input('status-room');
				$img = $request -> input('img-room');
				$now = getdate(); 
				$currentDate = $now["mday"] . $now["mon"] . $now["year"]; 
				DB::table('type_room')->where ('id','=',$id) ->update(['name' => $name, 'homestay_name' => $mahomestay,'style' => $style,'viewstatus_id' => 1,'description' =>$descript,'quantity' => $quantity, 'status' => $status, 'picture'=>$img]);
				$errorAdd = new MessageBag(['errorBS'=>'Sửa thành công!']);
				return redirect('/list-type-room');
			}
		}

	public function getViewTypeRoom($id){
		$homestay = DB::table('home_stay')->select()->get();
		$picture = DB::table ('picture') -> where('id',$id)  -> select() -> get();
		$viewtyperoom = DB::table('type_room')->where('id','=',$id) -> first();
	 	return view('pages.admin_view_type_room')-> with('viewtyperoom',$viewtyperoom)-> with('homestay', $homestay)-> with('picture',$picture);
	}
	



}
	





