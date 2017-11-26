
	 <div data-vide-bg="videos/typing">
	 <div class="w3-agile-signup-top">
	 <h1>Đăng ký tài khoản</h1>
		<div class="main">
                <div class="login-top left">
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
									<input type="text" name="firstname" class="name" placeholder="Họ *" >
										
									<input type="text" name="lastname" class="name" placeholder="Tên *" >
									
									<input type="text" name="email" class="email" placeholder="Email *" >	
									
									<input type="password" name="password" class="password" placeholder="Mật khẩu *" >
									
									<input type="password" name="password" class="password" placeholder="Nhập lại mật khẩu *" >	
									<p class="note-signup" style="color: white; "> Ghi chú :* các trường bắt buộc nhập</p>
									<input type="submit" value="Đăng ký">

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
