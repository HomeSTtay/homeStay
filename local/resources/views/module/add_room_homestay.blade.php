<div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm phòng
            </header>
            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="post">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mã homestay</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control id-homestay" id="id-homestay" name="id-homestay" value="HS01">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Mã loại phòng</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control id-room" id="id-homestay" name="id-room" disabled="" value="HSR01">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tên loại phòng</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control name-room" id="name-room" name="name-homestay" >
                        </div>
                    </div>
                    <div class="form-group">
                         <label class="col-sm-3 control-label ">Miêu tả</label>
                         <div class="col-sm-6">
                        <textarea name="desc-room" class="desc-room form-control"></textarea>
                        </select>
                         </div> 
                     </div>    
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Số lượng</label>
                        <div class="col-sm-6">
                            <input type="number" name="quantity-room" class="quantity-room form-control"  id="quantity-room" value="" placeholder="">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Trạng thái</label>
                        <div class="col-sm-6">
                           <select name="status-room" class="form-control m-bot15" >
                               <option value="het">Còn</option>
                                <option value="con">Hết</option>
                                <option value="sap het">Sắp hết</option>
                              
                           </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Hình ảnh</label>
                        <div class="col-sm-6">
                            <input type="file" class=" img-room" id="img-room" name="img-room">
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-sm-6">
                        <button type="submit" class="btn btn-info btn-add-room" style="float:right;">Thêm</button>
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