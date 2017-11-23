<div class="typing-br" data-vide-bg="videos/typing">
	 <div class="w3-agile-signup-top">
	 <h1 class="title-m">Thay đổi mật khẩu</h1>
		<div class="main">
                <div class="login-top left">
			       
								<form action="{{ url('/logintest') }}" method="post">
									{{ csrf_field() }}
									
									
									<input type="password" name="password" class="password" placeholder="Mật khẩu mới" required="">
									<input type="password" name="password" class="password" placeholder="Nhập lại mật khẩu " required="">
								
										
									<input type="submit" value="Thay đổi">
									
								</form>
								<div class="clear"></div>
						</div>	
							
		
		</div>	
	<div class="clear"></div>
	<div class="clear"></div>
</div>
</div>

		<script src="js/jquery.vide.min.js"></script>
