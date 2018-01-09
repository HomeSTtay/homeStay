<div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm homestay 
            </header>
            <div class="panel-body">
                <form action="{{url('add-homestay')}}" class="form-horizontal bucket-form" method="post">
                
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tên homestay *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control name-homestay" id="name-homestay" name="name-homestay" required="">
                        </div>
                    </div>
                    <div class="form-group">
                         <label class="col-sm-2 control-label">Phong cách</label>
                         <div class="col-sm-10">
                        <select class="form-control m-bot15 style-homestay" name="style-homestay">
                            @foreach($list_style as $s)
                                <option value="{{$s->id}}">{{$s->name_style}}</option>
                             @endforeach   
                        </select>
                         </div> 
                     </div>    
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Địa điểm *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control loc-homestay" id="loc-homestay" name="loc-homestay" required="">
                        </div>
                    </div>
                    <div class="form-group">
                         <label class="col-sm-2 control-label">Khu vực</label>
                         <div class="col-sm-10">
                        <select class="form-control m-bot15 area" name="area">
                         
                                <option value="Bắc">Bắc</option>
                                <option value="Trung">Trung</option>
                                <option value="Nam">Nam</option>
                           
                        </select>
                         </div> 
                     </div>   
                     <div class="form-group">
                         <label class="col-sm-2 control-label ">Miêu tả</label>
                         <div class="col-sm-10">
                        <textarea name="desc-homestay" class="ckeditor desc-homestay form-control"></textarea>
                         </div>     
                     </div>    
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Hình đại diện* </label>
                        <div class="col-sm-10">
                            <input type="file" class="img-thum" id="img-thum" name="img-thum" ></input>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Hình ảnh khác</label>
                        <div class="col-sm-10">
                            <input type="file" class="img-homestay" id="img-homestay" name="img-homestay[]" multiple></input>
                            <i> <h6> Ghi chú: Nhấn giữ Ctrl để chọn nhiều mục</h6> </i>
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-sm-6">
                        <button type="submit" class="btn btn-info btn-add-homestay" style="float:right;">Thêm</button>
                         </div>
                         <div class="col-sm-4">
                       <a  href="{{url("/")}}/list-homestay"><button class="btn btn-danger" type="button">Hủy</i></button></a> 
                         </div>
                         </div> 
                     </div> 
                </form>
            </div>
        </section>
        </div>