<!-- #push_sidebar -->
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""/></span>
					<ul class="nav1">
						<li class="active"><a href="{{url("/")}}/">Trang chủ</a></li>
<<<<<<< HEAD
						<li><a href="{{url("/")}}/">Danh sách homstay</a></li>
						<li><a href="{{url("/")}}/">Homestay thịnh hàng</a></li>
						<li><a href="{{url("/")}}/">Đăng kí đăng nhập</a></li>
						<li><a href="{{url("/")}}/">Đăng bài</a></li>
						<li><a href="{{url("/")}}/">Contact</a></li>
=======
						<li><a href="{{url("/")}}/">Danh sách homestay</a></li>
						<li><a href="{{url("/")}}/">Homestay thịnh hành</a></li>
						
						
						@if(Session::has('user'))
						<li><a href="{{url("/")}}/">Đăng bài</a></li>
						<li><a href="{{url("/")}}/">Thông tin cá nhân</a></li>
						<li><a href="{{url("/")}}/logOut">Đăng xuất</a></li>
						@else
						<li><a href="{{url("/signUp")}}/">Đăng kí </a></li>
						<li><a href="{{url("/logIn")}}/">Đăng nhập</a></li>
						<li><a href="{{url("/")}}/">Đăng bài</a></li>
						@endif
>>>>>>> master
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