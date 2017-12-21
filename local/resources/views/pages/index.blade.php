@extends('templates.master')
@section('title','Trang chủ')
@section('main')
<!--header-top-->
	<div class="banner">
		@include('module.banner-detail')
	</div>
	

	@include('module.homestay_mien')
	<!-- @include('module.banner-bottom') -->
	<!--//content-->
	<div class="banner-bottom-slider">
	@include('module.banner-bottom-slider')
	</div>
@stop