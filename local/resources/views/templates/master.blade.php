<!DOCTYPE HTML>
<html>
<head>
	@include('widgets.head')
</head>
<body>
	
	@include('widgets.head')
	@yield('main')
	<!--/start-footer-section-->
		<div class="footer">
		@include('widgets.footer')
		</div>

		<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	
</body>
</html>	