</!DOCTYPE html>
<html>
<head>
	@include('widgets.head')
</head>
<body>
		
	@yield('main')
	<!--/start-footer-section-->
		<div class="footer">
		@include('widgets.footer')
		</div>

		
	@include('widgets.script-footer')

</body>
</html>