<!DOCTYPE html>
<html>
<head>
	@include('widgets.head-admin')
</head>
<body>
	<section id="container">
	@include('widgets.header_admin')
	@yield('main_admin')
	</section>
</body>
</html>