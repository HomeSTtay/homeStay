<div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm homestay
            </header>
            <div class="panel-body">
                <form action="" class="form-horizontal bucket-form" method="post">
                
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tên homestay</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control name-homestay" id="name-homestay" name="name-homestay">
                        </div>
                    </div>
                    <div class="form-group">
                         <label class="col-sm-2 control-label">Phong cách</label>
                         <div class="col-sm-10">
                        <select class="form-control m-bot15 style-homestay">
                            @foreach($list_style as $s)
                                <option value="{{$s->id}}">{{$s->name_style}}</option>
                             @endforeach   
                        </select>
                         </div> 
                     </div>    
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Địa điểm</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control loc-homestay" id="loc-homestay" name="loc-homestay">
                        </div>
                    </div>
                    <div class="form-group">
                         <label class="col-sm-2 control-label">Khu vực</label>
                         <div class="col-sm-10">
                        <select class="form-control m-bot15 rank">
                         
                                <option value="Bắc">Bắc</option>
                                <option value="Trung">Trung</option>
                                <option value="Nam">Nam</option>
                           
                        </select>
                         </div> 
                     </div>   
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Hình ảnh</label>
                        <div class="col-sm-10">
                            <input type="file" class="img-room" id="img-room" name="img-room[]" multiple></input>
                            <i> <h6>* Ghi chú: Nhấn giữ Ctrl để chọn nhiều mục</h6> </i>
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-sm-6">
                        <button type="submit" class="btn btn-info btn-add-homestay" style="float:right;">Thêm</button>
                         </div>
                         <div class="col-sm-4">
                        <button type="reset" class="btn btn-danger ">Hủy</button>
                         </div>
                         </div> 
                     </div> 
                </form>
            </div>
        </section>
        </div>