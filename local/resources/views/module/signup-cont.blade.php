
	 <div data-vide-bg="videos/typing">
	 <div class="w3-agile-signup-top">
	 <h1>Đăng ký tài khoản</h1>
		<div class="main">
                <div class="login-top left">
			        			
								<form action="{{ url('/registertest') }}" method="post">
									{{ csrf_field() }}
									@if($errors->has('firstname'))
									<p style="color:white;">{{$errors->first('firstname')}}</p>
									@endif	
									<input type="text" name="firstname" value="{{ old('firstname')}}" class="name" placeholder="Họ *" >
									@if($errors->has('lastname'))
									<p style="color:white;">{{$errors->first('lastname')}}</p>
									@endif
									<input type="text" name="lastname" value="{{ old('lastname')}}" class="name" placeholder="Tên *" >
									@if($errors->has('email'))
									<p style="color:white;">{{$errors->first('email')}}</p>
									@endif
									<input type="text" name="email" value="{{ old('email')}}" class="email" placeholder="Email *" >	
									@if($errors->has('password'))
									<p style="color:white;">{{$errors->first('password')}}</p>
									@endif
									<input type="password" name="password" value="{{ old('password')}}" class="password" placeholder="Mật khẩu *" >
									@if($errors->has('password'))
									<p style="color:white;">{{$errors->first('password')}}</p>
									@endif
									<input type="password" name="confirmpassword" value="{{ old('confirmpassword')}}" class="password" placeholder="Nhập lại mật khẩu *" >
									@if($errors->has('errorsignup'))
									<p style="color: white">{{$errors->first('errorsignup')}}</p>
									@endif
									
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
