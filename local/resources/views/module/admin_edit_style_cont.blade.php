<div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Chỉnh sửa style homestay
            </header>
            <div class="panel-body">
<<<<<<< HEAD
<<<<<<< HEAD
                <form class="form-horizontal bucket-form" action="{{ url('/edit-style-homestay')" method="post">
                <div class="form-group">
                        <label class="col-sm-2 control-label">Mã style</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control id-style-homestay" id="id-style-homestay" name="id-style-homestay" disabled="" value = "S01"  >
=======
=======
>>>>>>> master
                <form action="{{url('/edit-style-homestay')}}" class="form-horizontal bucket-form" method="post">
                    {{ csrf_field()}}
                <div class="form-group">
                        <label class="col-sm-2 control-label">Mã style</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control id-style-homestay" id="id-style-homestay" name="id-style-homestay" disabled="" value="{{old('id-style-homestay')}}" >
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tên style</label>
                        <div class="col-sm-10">
<<<<<<< HEAD
<<<<<<< HEAD
                        <input type="text" class="form-control name-style-homestay" id="name-style-homestay" name="name-style-homestay"  >
=======
                        <input type="text" class="form-control name-style-homestay" id="name-style-homestay" name="name_style_homestay" value=""  >
>>>>>>> master
=======
                        <input type="text" class="form-control name-style-homestay" id="name-style-homestay" name="name_style_homestay" value=""  >
>>>>>>> master
                        </div>
                    </div>  
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Mô tả</label>
                        <div class="col-sm-10">
                        <textarea class="ckeditor" name="descrip_style" form="form-control" ></textarea>
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-sm-6">
<<<<<<< HEAD
<<<<<<< HEAD
                        <button type="submit" class="btn btn-info btn-add-homestay" style="float:right;">Thêm</button>
=======
                        <button type="submit" class="btn btn-info btn-add-homestay" style="float:right;">Cập nhật</button>
>>>>>>> master
=======
                        <button type="submit" class="btn btn-info btn-add-homestay" style="float:right;">Cập nhật</button>
>>>>>>> master
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