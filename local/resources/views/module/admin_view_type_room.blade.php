<div class="col-lg-12">
	<section class="panel">
		<header class="panel-heading">
			Chi tiết loại phòng
		</header>
		<div class="panel-body">
			<form action="{{url('edit-type-room')}}" class="form-horizontal bucket-form" method="post">
				<div class="form-group">
					<label class="col-sm-2 control-label">Tên loại phòng</label>
					<div class="col-sm-10">
						<p class="control-p"> {{$viewtyperoom->name}}</p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Tên homestay</label>
					<div class="col-sm-10">
						<p class="control-p">{{$viewtyperoom->homestay_name}} </p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Phong cách</label>
					<div class="col-sm-10">
						<p class="control-p">{{$viewtyperoom->style}} </p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Miêu tả</label>
					<div class="col-sm-10">
						<p class="control-p"> {{$viewtyperoom->description}} </p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Số lượng</label>
					<div class="col-sm-10">
						<p class="control-p"> {{$viewtyperoom->quantity}} </p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Trạng thái</label>
					<div class="col-sm-10">
						<p class="control-p"> {{$viewtyperoom->status}} </p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Hình ảnh</label>
					<div class="col-sm-10">
						@foreach ($picture as $pic)
						<img src="../images/{{$pic->name}}" class="img-typeroom" width="100px" height="100px">
						</td>
						@endforeach
                    </div>
                    <style type="text/css" media="screen">
                        .img-typeroom {
                            margin-right: 30px;
                            -webkit-transition: all .3s ease-out;
                            -moz-transition: all .3s ease-out;
                            -o-transition: all .3s ease-out;
                            transition: all .3s ease-out;
                        }
    
                        .img-typeroom:hover {
                            -moz-transform: scale(4);
                            -webkit-transform: scale(4);
                            -o-transform: scale(4);
                            -ms-transform: scale(4);
                            transform: scale(4);
                        }
                    </style>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<span class="input-group-btn">
							<a href="{{url("/")}}/edit-type-room/id={{$viewtyperoom->id}}">
								<button class="btn btn-info" type="button" style="margin-left: 65%">
									<i class="fa fa-edit"> Sửa</i>
								</button>
							</a>
						</span>
						<span class="input-group-btn">
							<a href="{{url("/")}}/list-type-room">
								<button class="btn btn-danger" type="button" style="margin-left: -15%">
									<i class="fa fa-arrow-left"> Trở về</i>
								</button>
							</a>
						</span>
					</div>
				</div>

			</form>
		</div>
	</section>
</div>