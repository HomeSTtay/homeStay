@extends('templates.admin')
@section('title','Thêm style homestay')
@section('main_admin')
	@include('module.sidebar_admin')

	<!--main content start-->
	<section id="main-content">
		<section class="wrapper">
			@include('module.admin_add_style_cont')
			
		</section>
	</section>
	<!--main content end-->
@stop