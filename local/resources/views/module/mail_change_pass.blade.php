<div style="margin-top:7em;" data-vide-bg="videos/typing">
	 <div class="w3-agile-signup-top">
	 <h1>Nhập email </h1>
		<div class="main">
                <div class="login-top left">
			       
								<form action="{{ url('/send-mail') }}" method="post">
									{{ csrf_field() }}
									
									
									<input type="text" name="email" class="email" placeholder=" Email" >	
									<h3 style="color: white; font-size: 1.2em;"> {{$thongbao}}</h3>
										
									<input type="submit" value="Gửi">
									
								</form>
								<div class="clear"></div>
						</div>	
							
		
		</div>	
	<div class="clear"></div>
	<div class="clear"></div>
</div>
</div>

		<script src="js/jquery.vide.min.js"></script>
