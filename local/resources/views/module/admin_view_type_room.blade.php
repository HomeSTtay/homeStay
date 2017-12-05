<div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Chi tiết loại phòng
            </header>
            <div class="panel-body">
                <form  action="{{url('edit-type-room')}}" class="form-horizontal bucket-form" method="post">
                   <div class="form-group">
                        <label class="col-sm-2 control-label">Tên loại phòng</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control name-room" id="name-room" name="name-room" value="{{$viewtyperoom->name}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tên homestay</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control name-room" id="name-room" name="name-room" value="{{$viewtyperoom->homestay_name}}" >
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Phong cách</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control name-room" id="name-room" name="name-room" value="{{$viewtyperoom->style}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Miêu tả</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control name-room" id="name-room" name="name-room" value="{{$viewtyperoom->description}}" >
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Số lượng</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control name-room" id="name-room" name="name-room" value="{{$viewtyperoom->quantity}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Trạng thái</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control name-room" id="name-room" name="name-room[" value="{{$viewtyperoom->status}}" >
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Hình ảnh</label>
                        <div class="col-sm-10">
                          @foreach ($picture as $pic)
                            <img src="../images/{{$pic->name}}" width="100px" height="100px"></td>
                            @endforeach
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <span class="input-group-btn">
                            <a  href="{{url("/")}}/edit-type-room/id={{$viewtyperoom->id}}"><button class="btn btn-info" type="button" style="margin-left: 65%"><i class ="fa fa-plus">Sửa</i></button></a> 
                            </span>
                            <span class="input-group-btn">
                            <a  href="{{url("/")}}/list-type-room"><button class="btn btn-info" type="button" style="margin-left: -15%"><i class ="fa fa-arrow-left">Trở về</i></button></a> 
                            </span>
                        </div>
                    </div>
                  
                </form>
            </div>
        </section>
        </div>