@extends('templates.master')
@section('title','Thông tin homestay')
@section('main')
<!--header-top-->

@include('module.header_all')
@include('module.push-sidebar')
	<div class="single">
		<div class="container">
			@include('module.detail-left')
			@include('module.detail-right')
		</div>
	</div>

@stop