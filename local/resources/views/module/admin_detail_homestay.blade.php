<div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thông tin homestay
            </header>
            <div class="panel-body">
                <form  action="{{url('edit-type-room')}}" class="form-horizontal bucket-form" method="post">
                   <div class="form-group">
                        <label class="col-sm-2 control-label">Tên homestay</label>
                        <div class="col-sm-10">
                        <p  class="control-p" > {{$homestay->name}}</p>   
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Phong cách</label>
                        <div class="col-sm-10">
                       
                        <p  class="control-p" >{{$style->name_style}} </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Miêu tả</label>
                        <div class="col-sm-10">
                       <?php  $str=   explode('-',  $homestay->description);?>
                           @foreach($str as $key=>$value)
                          <p  class='control-p'>{{$value}}</p>  
                             @endforeach
                      
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Địa điểm</label>
                        <div class="col-sm-10">
                        <p  class="control-p" > {{$homestay->location}} </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Khu vực</label>
                        <div class="col-sm-10">
                        <p  class="control-p" >Miền {{$homestay->area}} </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Thời gian tạo</label>
                        <div class="col-sm-10">
                        <p  class="control-p" > {{$homestay->create_date}} </p>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Người tạo</label>
                        <div class="col-sm-10">
                        <p  class="control-p" > {{$creater->firstname." ". $creater->lastname}} </p>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-2 control-label">Trạng thái</label>
                           <div class="col-sm-10">
                        <p  class="control-p" >
                            <i class="fa fa-eye " style="margin-right: 20px;" >   {{$statuss->view}} </i> 
                            <i class="fa fa-thumbs-o-up " style="margin-right: 20px; color: blue;" >  {{$statuss->like}} </i>
                            <i class="fa fa-share-alt " style="margin-right: 20px;" >  {{$statuss->share}} </i>
                           
                            @for($i=0;$i<$statuss->vote;$i++)
                            <i class="fa fa-star" style="color: yellow;" ></i>
                            @endfor </p>   

                       </div>
                      
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tổng số bài viết </label>
                        <div class="col-sm-10">
                        <p  class="control-p" > {{$post}} </p>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Hình ảnh</label>
                        <div class="col-sm-10">
                          @foreach ($picture as $pic)
                            <img src="{{$pic->link}}" class="img-homestay" width="100px" height="100px"></td>
                            @endforeach
                        </div>
                            <style type="text/css" media="screen">
                                .img-homestay{
                                    margin-right: 30px;
                                -webkit-transition: all .3s ease-out;
                                -moz-transition: all .3s ease-out;
                                -o-transition: all .3s ease-out;
                                transition: all .3s ease-out;
                            }
                            .img-homestay:hover {
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
                            <a  href="{{url("/")}}/edit-homestay/"><button class="btn btn-info" type="button" style="margin-left: 65%"><i class ="fa fa-edit"> Sửa</i></button></a> 
                            </span>
                            <span class="input-group-btn">
                            <a  href="{{url("/")}}/list-homestay"><button class="btn btn-danger" type="button" style="margin-left: -15%"><i class ="fa fa-arrow-left">  Trở về</i></button></a> 
                            </span>
                        </div>
                    </div>
                  
                </form>
            </div>
        </section>
        </div>