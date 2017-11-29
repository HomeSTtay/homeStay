<div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Chỉnh sửa bài viết
            </header>
            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="post">
                <div class="form-group">
                        <label class="col-sm-2 control-label">Mã bài viết</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control id-homestay" id="id-homestay" name="id-homestay" disabled="" value="P01">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Mã homestay</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control id-homestay" id="name-homestay" name="name-homestay" value="Home stay ABCD">
                        </div>
                    </div>
                    
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Loại phòng</label>
                         <div class="col-sm-10">
                        <select multiple   class="form-control m-bot15 type-room">
                                <option selected value="Vintage">Vintage</option>
                                <option selected value="Vintage">Hiện đại</option>
                                <option value="Vintage">Vintage</option>
                                <option value="Vintage">Vintage</option>
                                <option value="Vintage">Vintage</option>
                                <option value="Vintage">Vintage</option>
                                
                        </select>
                         </div> 
                     </div>  
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Mô tả</label>
                        <div class="col-sm-10">
                            <textarea name="desc-post" class="ckeditor desc-post form-control">Đẹp, chất chơi người dơi</textarea>
                        </div>
                    </div>      
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Hình ảnh</label>
                        <div class="col-sm-10">
                            <input type="file" class=" img-post" id="img-post" name="img-post">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Video</label>
                        <div class="col-sm-10">
                            <input type="file" class=" video-post" id="video-post" name="video-post">
                        </div>
                      
                    </div>

                          <i>* Ghi chú: Đôi với loại phòng, hình ảnh, video, nhấn giữ Ctrl để chọn nhiều mục</i>
                     <div class="form-group">
                        <div class="col-sm-6">
                        <button type="submit" class="btn btn-info btn-add-p" style="float:right;">Thêm</button>
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