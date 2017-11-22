@extends('templates.admin')
@section('title','Trang chủ Admin')
@section('main_admin')
	@include('module.sidebar_admin')

	<!--main content start-->
	<section id="main-content">
		<section class="wrapper">
			@include('module.solieuthongke')
			@include('module.chart_admin')
			@include('module.taskHomestay')
		</section>
	</section>
	<!--main content end-->
@stop