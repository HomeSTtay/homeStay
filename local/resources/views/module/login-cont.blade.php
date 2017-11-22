<div data-vide-bg="videos/typing">
	 <div class="w3-agile-signup-top">
	 <h1>Đăng nhập</h1>
		<div class="main">
                <div class="login-top left">
			         <div class="social_icons">
						<div class="w3-signup-head-top">
							<h3>Đăng nhập với</h3>
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
							<h3>Hoặc</h3>
						</div>
						
					</div>
								<form action="{{ url('/logintest') }}" method="post">
									{{ csrf_field() }}
									
									<input type="text" name="email" class="email" placeholder=" Email" required="">	
									<input type="password" name="password" class="password" placeholder="Mật khẩu" required="">
								
										
									<input type="submit" value="Đăng nhập">
								</form>
								<div class="w3-bottom-text" >
								<h3><a href="{{url("/")}}/thay-doi-mat-khau" style="color: white;">Quên mật khẩu<span>?</span></a></h3>
								</div>
								<div class="clear"></div>
						</div>	
							
		
		</div>	
	<div class="clear"></div>
	<div class="clear"></div>
</div>
</div>

		<script src="js/jquery.vide.min.js"></script>
