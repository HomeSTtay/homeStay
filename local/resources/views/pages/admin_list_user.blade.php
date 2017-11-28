@extends('templates.admin')
@section('title','Danh sách người dùng')
@section('main_admin')
	@include('module.sidebar_admin')

	<!--main content start-->
	<section id="main-content">
		<section class="wrapper">
			@include('module.admin_list_user_cont')
			
		</section>
	</section>
	<!--main content end-->
@stop