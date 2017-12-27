@extends('templates.master')
@section('title','Chi tiết homestay')
@section('main')
<!--header-top-->
	<div class="ctn_all">

		@include('module.header_all')
	
	</div>
	
		@include('module.chi_tiet_homestay')
		@include('module.homestay_lan_can')
@stop