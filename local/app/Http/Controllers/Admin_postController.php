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
class Admin_postController extends Controller
{
	
	//thêm bài viết
	public function getAddPost(){
		$list = DB::table('post')->get();
		return view('pages.admin_add_post')->with('list', $list);
	}

	public function postAddPost(Request $request){
		$count = DB::table('post')->count();
		// $id_post = $request->input('id-post');
		$id_homestay = $request->input('id-homestay');
		$select_hometay = $request->input('select-homestay');
		$desc = $request->input('desc-post');
		$img_post = $request->input('img-post');
		$video_post = $request->input('video-post');
		$now = getdate();
		$currentDate = $now["mday"] . $now["mon"] . $now["year"]; 

		DB::table('statuss')->insertGetId(['id'=>'STHS'.$currentDate.($count+1), 'view'=>0,'like'=>0,'share'=>0,'vote'=>0]);

		DB::table('post')->insertGetId(['id' => 'PS'.$currentDate.($count+1), 'home_id'=>$id_homestay, 'typeroom'=>$select_hometay, 'viewstatus_id'=>1, 'content'=>$desc,
		 'picture'=> 'HS'.$currentDate.($count+1), 'video'=>'HS'.$currentDate.($count+1) ,'status_id'=> 'STHS'.$currentDate.($count+1) ]);
		
		//  foreach ($img_post as $key => $value) {
		// 	if($value!= ""){	
		// 		DB::table('picture')-> insertGetId(['id' => 'HS'.$currentDate.($count+1), 'name'=> $value, 'link' => '../images/'.$value,'viewstatus_id'=>1]);
		// 	}

		// }
		// foreach ($img_video as $key => $value) {
		// 	if($value!= ""){	
		// 		DB::table('video')-> insertGetId(['id' => 'HS'.$currentDate.($count+1), 'name'=> $value, 'link' => '../images/'.$value,'viewstatus_id'=>1]);
		// 	}

		// }

		
		return redirect('/list-post');
	}

	//list post
	public function getListPost(){
		$list_post = DB::table('post')->where('post.viewstatus_id',1)->join('home_stay', 'home_stay.id', '=', 'post.home_id')->join('statuss','statuss.id', '=', 'post.status_id')->select('post.id', 'post.home_id', 'post.typeroom',
		 'post.viewstatus_id', 'post.content', 'post.picture', 'statuss.like', 'statuss.view')->paginate(5);
		return view('pages.admin_list_post')->with('list_post', $list_post);
	}

	public function getDeletePost($id){
		$del = DB::table('post')->where('id', $id)->update(['viewstatus_id'=>0]);
		return redirect()->back()->withInput();
	}

	public function getEditPost($id){
		$edit = DB::table('post')->where(['id'=>$id])->first();
		return view('pages.admin_edit_post')->with('edit', $edit);
	}
	
	public function postEditPost(Request $request){
		$id = $request->input('id-post');
		$id_homestay = $request->input('id-homestay');
		$select_hometay = $request->input('select-homestay');
		$desc = $request->input('desc-post');
		$img_post = $request->input('img-post');
		$video_post = $request->input('video-post');
		
		$edit = DB::update('update post set home_id=?, typeroom=?, content=?, picture=?, video=? where id=?',
		 [$id_homestay, $select_hometay, $desc, $img_post, $video_post, $id]);
		return redirect('/list-post');
	}
}






