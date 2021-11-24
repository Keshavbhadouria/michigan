<!DOCTYPE html>
<html lang="en">
<head>
  <title>@if(Request::segment(1) != "") {{ucfirst(Request::segment(1)).' | ' .config('app.name')}} @else {{ config('app.name') }} @endif </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link href = "{{asset('public/theme/index.css')}}" rel = "stylesheet"/>
	<link rel="stylesheet" type="text/css" href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css"/> 
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> 
	<link rel="stylesheet" href="{{asset('public/theme/css/animations.css')}}" type="text/css">
	<link href = "{{asset('public/theme/responsive.css')}}" rel = "stylesheet"/>
</head>
	
	<body>	
	<div class = "container-fluid">
			@include('master.header')
	</div>
	
