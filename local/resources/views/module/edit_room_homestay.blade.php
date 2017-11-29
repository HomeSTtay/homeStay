<div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Sửa phòng
            </header>
            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="post">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mã homestay</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control id-homestay" id="id-homestay" name="id-homestay" disabled="" value="HS01">
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
                            <input type="text" class="form-control name-room" id="name-room" name="name-homestay" value="Phòng hoàn hảo">
                        </div>
                    </div>
                    <div class="form-group">
                         <label class="col-sm-3 control-label ">Miêu tả</label>
                         <div class="col-sm-6">
                        <textarea name="desc-room" class="desc-room form-control" >Ở đây cực ấm cực mát...</textarea>
                        </select>
                         </div> 
                     </div>    
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Số lượng</label>
                        <div class="col-sm-6">
                            <select name="status-room" class="form-control m-bot15" >
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                           </select>
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
                        <button type="submit" class="btn btn-info btn-add-room" style="float:right;">Sửa</button>
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