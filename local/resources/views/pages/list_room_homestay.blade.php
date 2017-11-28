@extends('templates.admin')
@section('title','Danh sách loại phòng')
@section('main_admin')
	@include('module.sidebar_admin')

	<!--main content start-->
	<section id="main-content">
		<section class="wrapper">
			@include('module.list_room_homestay_cont')
			
		</section>
	</section>
	<!--main content end-->
@stop