<div class="container">
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="active"><a data-toggle="tab">HOMESTAY CÙNG KHU VỰC</a></li>
    </ul>
    <div class="col-md-6">
        <div class="hovereffect1">
           @foreach($pic as $p)
                        
                        @if($t->picture == $p->id and $p->viewstatus_id==3)
                            <img src="{{asset('images')}}/{{$p->name}}" alt=" " class="img-responsive" />
                        @endif  
                        
                        @endforeach 
            <h2>{{$hs->name}}</h2>
            <div class="overlay1">
                <a class="info1" href="{{asset('/')}}detail-{{$hs->name}}">Xem chi tiết</a>
            </div>

        </div>
    </div>
   
  
    
</div>