	<div class="container bn_bt">
			<div class="col-md-4 banner-bottom-slider-left animated wow slideInLeft" data-wow-delay=".5s">
				<h5> Cùng nhau trải nghiệm</h5>
 				<h2><span class = "btn btn-danger">Top 10</span> homestay hot nhất năm </h2>
				
			</div>
			<div class="col-md-8 banner-bottom-slider-right animated wow slideInRight" data-wow-delay=".5s">
				<ul id="flexiselDemo1">	
					@foreach($top10 as $t)
					<li>
						<div class="banner-bottom-slider-right1">
					
						
						@foreach($pic as $p)
						
						@if($t->picture == $p->id and $p->viewstatus_id==3)
							<img src="{{asset('images')}}/{{$p->name}}" alt=" " class="img-responsive" />
						@endif	
						
						@endforeach	
						
							<ul class= "name_hs" >
							<li><a href="{{url('/')}}/detail-{{$t->name}}">{{$t->name}}</a></li>
							</ul>
							@foreach($statuss as $s)
							@if('ST'.$t->id == $s->id)
							<ul>
							
							<li><span class="glyphicon glyphicon-thumbs-up like-hs" aria-hidden="true" ></span> {{$s->like}}</li>
								<li><span class="glyphicon glyphicon-user" aria-hidden="true" ></span> {{$s->vote}}</li>
								<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> {{$s->view}}</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> {{$s->share}}</a></li>
							</ul>
							@endif
							@endforeach
						</div>
					</li>	
					@endforeach
				</ul>
				<style>
.like {
  
    color: red;
}
.dislike {
  
    color: white !important;
}
</style>
				<script>
			$(document).ready(function(){
					$(".like-hs").click(function(){						
					$(".like-hs").addClass("like");
					}); 
				});
				</script>
		
					<script type="text/javascript">
						$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					 });
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
			<div class="clearfix"> </div>
		</div>