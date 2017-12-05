@extends('templates.admin')
@section('title','Thêm bài viết')
@section('main_admin')
	@include('module.sidebar_admin')

	<!--main content start-->
	<section id="main-content">
		<section class="wrapper">
			@include('module.admin_add_post')
			
		</section>
	</section>
	<!--main content end-->
@stop