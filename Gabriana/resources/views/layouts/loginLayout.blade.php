<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>{{ config('app.name', 'Gabriana DCMS') }}</title>

	<link href="{{ asset('design/login/assets/bootstrap/css/font.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('design/login/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"  />
    <link href="{{ asset('design/login/assets/css/styles.css') }}" rel="stylesheet" type="text/css"  />
    
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('design/register/assets/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('design/register/assets/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('design/register/assets/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('design/register/assets/ico/apple-touch-icon-57-precomposed.png') }}">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="{{ asset('design/login/assets/bootstrap/js/html5shiv.min.js') }}"></script>
      <script src="{{ asset('design/login/assets/bootstrap/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
    
    @yield('content')
    <script src="{{ asset('design/login/assets/bootstrap/js/jquery.min.js') }}"></script>
    <script src="{{ asset('design/login/assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Javascript -->
    <script src="{{ asset('design/register/assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('design/register/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('design/register/assets/js/jquery.backstretch.min.js') }}"></script>
    <script src="{{ asset('design/register/assets/js/scripts.js') }}"></script>
    
    <!--[if lt IE 10]>
        <script src="assets/js/placeholder.js"></script>
    <![endif]-->
</body>
</html>