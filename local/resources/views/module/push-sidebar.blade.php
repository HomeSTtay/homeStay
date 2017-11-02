<!-- #push_sidebar -->
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""/></span>
					<ul class="nav1">
						<li class="active"><a href="{{url("/")}}/">Trang chủ</a></li>
						<li><a href="{{url("/")}}/">Danh sách homstay</a></li>
						<li><a href="{{url("/")}}/">Homestay thịnh hàng</a></li>
						<li><a href="{{url("/")}}/">Đăng kí đăng nhập</a></li>
						<li><a href="{{url("/")}}/">Đăng bài</a></li>
						<li><a href="{{url("/")}}/">Contact</a></li>
					</ul>
					<div class="clearfix"> </div>
					<!-- script-for-menu -->
					 <script>
					   $( "span.menu" ).click(function() {
						 $( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						  });
						 });
					</script>
					<!-- /script-for-menu -->
				</div>
				<!-- /#push_sidebar -->