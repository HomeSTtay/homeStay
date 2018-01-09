<!-- #push_sidebar -->
				<div class="top-nav">
					<span class="menu header-left animated wow bounceInRight" data-wow-delay="800ms"><img src="images/menu.png" alt=""/></span>
					<ul class="nav1">
						<li class="active"><a href="{{url("/")}}/">Trang chủ</a></li>
						<li><a href="{{url("/")}}/">Danh sách homestay</a></li>
						<li><a href="{{url("/")}}/">Homestay thịnh hành</a></li>
						
						
						@if(Session::has('user'))
						<li><a href="{{url("/")}}/admin">Đăng bài</a></li>
						<li><a href="{{url("/")}}">Thông tin cá nhân</a></li>
						<li><a href="{{url("/")}}/logOut">Đăng xuất</a></li>
						@else
						<li><a href="{{url("/signUp")}}/">Đăng kí </a></li>
						<li><a href="{{url("/logIn")}}/">Đăng nhập</a></li>
						<li><a href="{{url("/admin")}}/">Đăng bài</a></li>
						@endif
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