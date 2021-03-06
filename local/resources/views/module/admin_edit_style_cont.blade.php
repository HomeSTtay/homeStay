<div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Chỉnh sửa style homestay
            </header>
            <div class="panel-body">
                <form action="{{url("/")}}/edit-style-homestay" class="form-horizontal bucket-form" method="post">
                <div class="form-group">
                        <label class="col-sm-2 control-label" style="display: none">Mã style</label>
                        <div class="col-sm-10" style="display: none">
                            <input type="text" class="form-control id-style-homestay" id="id-style-homestay" name="id-style-homestay"  value = "{{$style->id}}"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tên style</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control name-style-homestay" id="name-style-homestay" name="name-style-homestay" value="{{$style->name_style}}"  >
                        </div>
                    </div>  
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Mô tả</label>
                        <div class="col-sm-10">
                        <textarea name="desc_style" class="ckeditor desc_style form-control">{{$style->description}}</textarea>
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-sm-6">
                        <button type="submit" class="btn btn-info btn-add-homestay" style="float:right;">Sửa</button>
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