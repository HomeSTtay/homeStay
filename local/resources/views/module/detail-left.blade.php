<div class="col-md-4 single-right">
	<div class="blog-right1">


		<div class="related-posts animated wow slideInLeft" data-wow-delay=".5s">
			<h3>Bài đăng về homestay</h3>
			@forelse($post as $p)
			<div class="related-post">
				<div class="related-post-left">
						
						@foreach($pic as $p)
							@if($hs->picture == $p->id and $p->viewstatus_id==3)
					<a href="#">
						<img src="{{asset('images')}}/{{$p->name}}" alt="{{$p->name}}" class="img-responsive" />
					</a>
					@endif
					
					@endforeach
					
				</div>
				<div class="related-post-right">
					<h4><a href="single.html">Donec sollicitudin</a></h4>
					<p>Aliquam dapibus tincidunt metus. 
						<span>Praesent justo dolor, lobortis.</span>
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			@empty

					<i class='control-p'> chưa có bài đăng nào</i>
					<br>
			@endforelse
			<h3>Homestay cùng khu vực</h3>
			
			
				@foreach($near as $hn)
				<div class="col-md-12">
				<div class="hovereffect1">
					@foreach($pic as $p)
							@if($hn->picture == $p->id and $p->viewstatus_id==3)
					<img class="img-responsive1" src="{{asset('images')}}/{{$p->name}}" alt="{{$p->name}}">
					@endif
					@endforeach 
					<h2>{{$hn->name}}</h2>
					<div class="overlay1">
						<a class="info1" href="{{asset('/')}}detail-{{$hn->name}}">Xem chi tiết</a>
					</div>
					</div>
				</div>
				@endforeach
			
		</div>
	</div>

</div>