
	 <div data-vide-bg="videos/typing">
	 <div class="w3-agile-signup-top">
	 <h1>Đăng ký tài khoản</h1>
		<div class="main">
                <div class="login-top left">
			         <div class="social_icons">
						<div class="w3-signup-head-top">
							<h3>Signup with</h3>
						</div>
						<!-- Facebook -->
						<div class="slide-social w3l">
						<a href="#">
							
							<div class="facebook icon"> <i class="facebook"></i> </div>
							<div class="facebook slide">
								<p>Facebook</p>
							</div>
							<div class="clear"></div>
							</a>
						</div>
						<!-- Twitter -->
						<div class="slide-social w3l">
						<a href="#">
							<div class="twitter icon"> <i class="twitter"></i></div>
							<div class="twitter slide">
								<p>Twitter</p>
							</div>
							<div class="clear"></div>
							</a> 
						</div>
						<div class="w3-signup-head2-top">
							<h3>OR</h3>
						</div>
						
					</div>
						@if(count($errors)>0)
								<div class="alert alert-danger">
								@foreach($errors->all() as $err)
									<p style="color:red">{{$err}}</p><br>
								@endforeach
								</div>
							@endif

							@if(session('thongbao'))
								<div class="alert alert-danger">
									<p style="color:red">{{session('thongbao')}}</p>
								</div>
								@endif
								<form action="{{ url('/registertest') }}" method="post">
									{{ csrf_field() }}
									<input type="text" name="firstname" class="name" placeholder="First Name">
									<input type="text" name="lastname" class="name" placeholder="Last Name">
									<input type="text" name="email" class="email" placeholder="Your Email" >	
									<input type="password" name="password" class="password" placeholder="Password">
									<input type="password" name="password" class="password" placeholder="Confirm Password">	
										
									<input type="submit" value="SIGN UP">
								</form>
								<div class="w3-bottom-text">
								<h3>Đã có tài khoản<span>?</span></h3>
								<h4><a href="{{url("/")}}/logIn">Đăng nhập</a></h4>
								</div>
								<div class="clear"></div>
						</div>	
							
		
		</div>	
	<div class="clear"></div>
	<div class="clear"></div>
</div>
</div>

		<script src="js/jquery.vide.min.js"></script>
