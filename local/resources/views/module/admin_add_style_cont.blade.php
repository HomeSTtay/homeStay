<div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm style homestay
            </header>
            <div class="panel-body">
                <form action="{{url("/")}}/add-style-homestay" class="form-horizontal bucket-form" method="post">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tên style</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control name_style_homestay" id="name_style_homestay" name="name_style_homestay"  >
                        </div>
                    </div>  
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Mô tả</label>
                        <div class="col-sm-10">
                        <textarea name="desc_style" class="ckeditor desc_style form-control"></textarea>
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