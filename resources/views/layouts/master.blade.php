<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- 공통파일 포함 -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="온라인 뮤직 콜라보레이션 플랫폼" />
	<meta name="keywords" content="뮤직, 밴드, 음악, 콜라보레이션"  />
	<!-- 모바일용 화면크기 비율고정 -->
	<meta id="mobileMeta" name="viewport" content="width=device-width" />
	<!-- 서비스 아이콘 -->
	<link rel="shortcut icon" href="/storage/images/main/icon/icon_mh.png" />
	<link rel="apple-touch-icon" href="/storage/images/main/icon/icon_mh.png" />

	<title>{{ config('app.name', 'MH Lara') }}</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/common.css">
	<!-- <link rel="stylesheet" type="text/css" href="/css/test.css"> -->
	<!-- JS -->
	<script type="text/javascript" src="/js/app.js"></script>
	<script type="text/javascript" src="/js/common.js"></script>
	<!-- <script type="text/javascript" src="/js/test.js"></script> -->

	@include('partials.head')
</head>
<body>
		<!-- nav -->
		@guest
		@else
		    @include('partials.nav')
		@endguest

		<!-- content -->
		@yield('content')

		<!-- footer -->
		@yield('footer')
</body>
</html>