@extends('templates.master')
@section('title','Thông tin homestay')
@section('main')
<!--header-top-->
<div class="banner">
	@include('module.banner')
	</div>
	<div class="single">
		<div class="container">
			@include('module.detail-left')
			@include('module.detail-right')
		</div>
	</div>
	<div class="banner-bottom-slider">
	@include('module.banner-bottom-slider')
	</div>	
@stop