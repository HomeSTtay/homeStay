@extends('templates.admin')
@section('title','Sửa homestay')
@section('main_admin')
	@include('module.sidebar_admin')
	<!--main content start-->
	<section id="main-content">
		<section class="wrapper">
			@include('module.admin_edit_homestay')
		</section>
	</section>
	<!--main content end-->
@stop