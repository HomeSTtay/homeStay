<div class="col-md-8 single-left">
	<div class="comments animated wow slideInRight" data-wow-delay=".5s">
		<ul>
			<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>{{$hs->create_date}} </li>

			<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="#">{{$creater->firstname." " .$creater->lastname}}</a></li>
			<li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span><a href="#">5 Comments</a></li>
			<li><span class="glyphicon glyphicon-share" aria-hidden="true"></span><a href="#">5 Tags</a></li>
		</ul>
	</div>

	<div class="single-left1">
		<div class="container detail_hs col-md-12">
			<h1 class="animated wow slideInUp" data-wow-delay=".5s"> {{$hs->name}}  </h1>
			 <?php  $str=   explode('-',  $hs->description);$i=1;?>
                    

                    @foreach($pic as $p)

                        @if($hs->picture == $p->id )
                         <br>
                            <img src="{{asset('images')}}/{{$p->name}}" width="700px;" height="300px" alt="">
                             <br>
                        @endif
                            @foreach($str as $key=>$value)
                            @if($i == $key)
                           <br>
                          <p  class='control-p'>{{$value}}</p>  
                         <br>
                         <?php $i++;?>
                         @break
                           @endif
                          
                             @endforeach
                 
                    @endforeach	
    

		</div>
	</div>
  <div class="fb-comments" data-href="https://localhost/homeStay" 
  data-width="700" data-numposts="10"></div>



</div>