<html lang="en">
<head>
	<title>{{ $title ?? 'Tidak ada title' }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('template/vendor/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('template/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('template/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('template/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('template/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('template/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('template/img/favicon.png')}}">

	@yield('style')
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		@include('layouts.includes._navbar')
		<!-- LEFT SIDEBAR -->
		@include('layouts.includes._sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Created by <i class="fa fa-love"></i><a href="#">Muhyi, Saddam & Pahrijal</a></p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('template/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('template/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('template/scripts/klorofil-common.js')}}"></script>
	
	@yield('script')
</body>

</html>
