<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách homestay
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
<<<<<<< HEAD
            <button class="btn btn-sm btn-default" type="button"><i class ="fa fa-search"></i></button>
          </span>
        </div>
=======
            <button class="btn btn-sm btn-default"  type="button"><i class ="fa fa-search"></i></button>
          </span>

         
        </div>
        <span class="input-group-btn">
           <a  href="{{url("/")}}/them-homestay"><button class="btn btn-info" type="button" ><i class ="fa fa-plus">  Thêm homestay</i></button></a> 
          </span>
>>>>>>> master
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox" id="checkall">
              </label>
            </th>
<<<<<<< HEAD
            <th>Tên homestay</th>
            <th>Hình ảnh</th>
            <th>Ngày đăng</th>
=======
            <th>Mã homestay</th>
            <th>Tên homestay</th>
            <th>Phong cách</th>
            <th>Địa điểm</th>
            <th>Ngày đăng</th>
            <th>Số bài đăng</th>
>>>>>>> master
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody> 
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name='name[]' id='check_all'><i></i></label></td>
<<<<<<< HEAD
<<<<<<< HEAD
            <td>Idrawfast prototype design prototype design prototype design prototype design prototype design</td>
            <td><span class="text-ellipsis">{item.PrHelpText1}</span></td>
            <td><span class="text-ellipsis">{item.PrHelpText1}</span></td>
            <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="name[]" id="check_all"><i></i></label></td>
            <td>Formasa</td>
            <td>8c</td>
            <td>Jul 22, 2013</td>
            <td>
              <a href="" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name='name[]' id='check_all'><i></i></label></td>
            <td>Avatar system</td>
            <td>15c</td>
            <td>Jul 15, 2013</td>
            <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name='name[]' id='check_all'><i></i></label></td>
            <td>Throwdown</td>
            <td>4c</td>
            <td>Jul 11, 2013</td>
            <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
=======
            <td>HS01</td>
=======
            <td>HS0ss1</td>
>>>>>>> origin/LuanNguyen
            <td>Home stay ABCD</td>
             <td><span class="text-ellipsis">Vintage</span></td>
            <td><span class="text-ellipsis">Đà Lạt</span></td>
            <td><span class="text-ellipsis">2017-02-03</span></td>
            <td><span class="text-ellipsis">20</span></td>
            <td>
              <a href="" class="active" ui-toggle-class="">
              <i class="fa fa-arrow-right text-success text-active" title="Xem chi tiết"></i>
              <i class="fa fa-times text-danger text" title="Xóa"></i>
              <i href="{{url("/")}}/edit-homestay" class="fa fa-edit text-info text" title="Chỉnh sửa"></i>
              </a>
            </td>
          </tr>
          
         
          
>>>>>>> master
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

<!-- Chọn tất cả các check box -->
  <script language="javascript">
   
              // Chức năng chọn hết
              document.getElementById("checkall").onclick = function () 
              {
                  // Lấy danh sách checkbox
                  var checkboxes = document.getElementsByName('name[]');
   
                  // Lặp và thiết lập checked
                  for (var i = 0; i < checkboxes.length; i++){
                      checkboxes[i].checked = true;
                    }             
              };

  </script>

  <!-- Hủy chọn tất cả các checkbox -->