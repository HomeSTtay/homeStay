<!-- #push_sidebar -->
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""/></span>
					<ul class="nav1">
						<li class="active"><a href="{{url("/")}}/">Trang chủ</a></li>
						<li><a href="{{url("/")}}/">Danh sách homestay</a></li>
						<li><a href="{{url("/")}}/">Homestay thịnh hành</a></li>
						<li><a href="{{url("/signUp")}}/">Đăng kí </a></li>
						<li><a href="{{url("/logIn")}}/">Đăng nhập</a></li>
						<li><a href="{{url("/")}}/">Đăng bài</a></li>
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