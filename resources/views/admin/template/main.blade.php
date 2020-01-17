<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') panel de admin</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

</head>
<body>

	@include('admin.template.partials.nav')

	<section>
		@yield ('content')
	</section>
	<script src="{{asset('plugins/jquery/js/jquery.js')}}"></script>
	<script src="{{asset('plugins/js/bootstrap.js')}}"></script>

</body>
</html>