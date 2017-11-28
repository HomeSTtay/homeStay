@extends('templates.admin')
@section('title','Danh sách style homestay')
@section('main_admin')
	@include('module.sidebar_admin')

	<!--main content start-->
	<section id="main-content">
		<section class="wrapper">
			@include('module.admin_list_style_homestay_cont')
			
		</section>
	</section>
	<!--main content end-->
@stop