@extends('templates.master')
@section('title','Danh sách homestay')
@section('main')
<!--header-top-->
@include('module.header_all')
	
		@include('module.list_homestay')
	
@stop