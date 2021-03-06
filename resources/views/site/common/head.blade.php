<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html lang="en" class="no-js" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="robots" content="noodp,index,follow" />
	<meta name="language" content="english" />
	<meta name="title" content="{!! $meta_title !!}">
	<meta name="keywords" content="{!! $meta_keyword !!}">
	<meta name="description" content="{!! $meta_description !!}">
	<meta property="og:url" content="{!! url()->current() !!}" />
	<meta property="og:title" content="{!! $meta_title !!}" />
	<meta property="og:description" content="{!! $meta_description !!}" />
	@if(!empty($meta_image))
	<meta property="og:image" content="{!! url($meta_image) !!}" />
	@endif
	@if(isset($isPlay))
	<meta property="og:type" content="article" />
	@endif
	@if(FACEBOOK_APPID != '')
	<meta property="fb:app_id" content="{!! FACEBOOK_APPID !!}" />
	@endif
	<link rel="shortcut icon" href="{!! url('img/favicon.png') !!}" type="image/x-icon">
	<link rel="alternate" hreflang="vi" href="{!! env('APP_URL', 'http://gameofflinehay.com') !!}" />
	@if(isset($pagePrev))
	<link rel="prev" href="{!! $pagePrev !!}">
	@endif
	@if(isset($pageNext))
	<link rel="next" href="{!! $pageNext !!}">
	@endif
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<title>@yield('title')</title>
	@if($scriptcode)
	{!! $scriptcode !!}
	@endif
</head>