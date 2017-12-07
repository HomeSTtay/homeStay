<div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm phòng
            </header>
            <div class="panel-body">
                <form  action="{{url('add-type-room')}}" class="form-horizontal bucket-form" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tên loại phòng</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control name-room" id="name-room" name="name-room" >
                            @if($errors->has('name-room'))
                            <p style="color: red;">{{$errors->first('name-room')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tên homestay</label>
                        <div class="col-sm-10">
                             <select  name="homestay-name" class="form-control m-bot15 style">
                                 @foreach ($homestay as $hts)
                                <option value="{{$hts -> name}}">{{$hts -> name}}</option>
                             @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                         <label class="col-sm-2 control-label">Phong cách</label>
                         <div class="col-sm-10">
                        <select  name="styletyr"class="form-control m-bot15 style">
                            @foreach ($style as $ty)
                                <option value="{{$ty->name_style}}">{{$ty->name_style}}</option>
                                @endforeach
                        </select>
                         </div> 
                    </div>  
                    <div class="form-group">
                         <label class="col-sm-2 control-label ">Miêu tả</label>
                         <div class="col-sm-10">
                        <textarea name="desc-room" class="ckeditor desc-room form-control"></textarea>
                        @if($errors->has('desc-room'))
                            <p style="color: red;">{{$errors->first('desc-room')}}</p>
                            @endif
                         </div>     
                     </div>    
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Số lượng</label>
                        <div class="col-sm-10">
                            <input type="number" name="quantity-room" class="quantity-room form-control"  id="quantity-room" value="" placeholder="">
                             @if($errors->has('quantity-room'))
                            <p style="color: red;">{{$errors->first('quantity-room')}}</p>
                            @endif
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Trạng thái</label>
                        <div class="col-sm-10">
                           <select name="status-room" class="form-control m-bot15" >
                               <option value="Còn">Còn</option>
                                <option value="Hết">Hết</option>
                                <option value="Sắp hết">Sắp hết</option>
                              
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
                        <button type="submit" class="btn btn-info btn-add-room" style="float:right;" id='submit'>Thêm</button>
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