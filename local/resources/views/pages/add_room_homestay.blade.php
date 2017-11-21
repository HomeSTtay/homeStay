@extends('templates.admin')
@section('title','Thêm homestay')
@section('main_admin')
	@include('module.sidebar_admin')

	<!--main content start-->
	<section id="main-content">
		<section class="wrapper">
			@include('module.add_room_homestay')
			
		</section>
	</section>
	<!--main content end-->
@stop