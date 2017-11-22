@extends('templates.admin')
@section('title','Trang chủ Admin')
@section('main_admin')
	@include('module.sidebar_admin')

	<!--main content start-->
	<section id="main-content">
		<section class="wrapper">
			@include('module.list_homestay_cont')
			
		</section>
	</section>
	<!--main content end-->
@stop