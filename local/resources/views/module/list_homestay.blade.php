<div class="container  ">
<div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            @foreach($area as $r)
                            <li><a data-toggle="tab">Danh sách homestay ở miền {{$r}} </a></li>
                             @endforeach
                        </ul>
                </div>
</div>
 @foreach($list as $l)

    <div class="col-md-6">
        <div class="hovereffect1">
        @foreach($pic as $p)
            @if($p->id == $l->picture)
            <img class="img-responsive1" src="{{asset('images')}}/{{$p->name}}" alt="">
            @endif
         @endforeach   
            <h2>{{$l->name}}</h2>
            <div class="overlay1">
                <a class="info1" href="{{asset('/')}}detail-{{$l->name}}">Xem chi tiết</a>
            </div>

        </div>
    </div>
    
@endforeach    

 
</div>


{{$list ->links()}}   



