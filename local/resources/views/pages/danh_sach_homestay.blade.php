@extends('templates.master')
@section('title','Danh sách homestay')
@section('main')
<!--header-top-->
	<div class="ctn_all">

		@include('module.header_all')
	
	</div>
	
		@include('module.list_homestay')
	
@stop