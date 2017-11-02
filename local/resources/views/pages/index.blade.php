@extends('templates.master')
@section('title','Trang chủ')
@section('main')
<!--header-top-->
	<div class="banner">
		@include('module.baner-detail')
	</div>
	@include('module.banner-bottom')
	<!--//xontent-->
	<div class="banner-bottom-slider">
	@include('module.banner-bottom-slider')
	</div>
@stop