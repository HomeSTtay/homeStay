@extends('templates.admin')
@section('title','Chi tiết loại phòng')
@section('main_admin')
	@include('module.sidebar_admin')

	<!--main content start-->
	<section id="main-content">
		<section class="wrapper">
			@include('module.admin_view_type_room')
			
		</section>
	</section>
	<!--main content end-->
@stop