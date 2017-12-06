<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách người dùng
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default"  type="button"><i class ="fa fa-search"></i></button>
          </span>

         
        </div>
        <span class="input-group-btn">
           <a  href="{{url("/")}}/signUp"><button class="btn btn-info" type="button" ><i class ="fa fa-plus">  Thêm người dùng</i></button></a> 
          </span>
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
            <th>Họ</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Phân quyền</th>
            <th>Ngày tạo</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody> 
          @foreach($list_user as $u)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name='name[]' id='check_all'><i></i></label></td>
            <td><span class="text-ellipsis">{{$u->firstname}}</span></td>
            <td><span class="text-ellipsis">{{$u->lastname}}</span></td>
             <td><span class="text-ellipsis">{{$u->email}}</span></td>
            <td><span class="text-ellipsis">{{$u->typeuser_id}}</span></td>
             <td><span class="text-ellipsis">{{$u->created_at}}</span></td>
      
            <td style="width: 80px;">
              
              <a href="{{url("/")}}/delete-user/id={{$u->id}}"><i class="fa fa-times text-danger text" title="Xóa"></i></a>
              <i class="fa fa-edit text-info text" title="Chỉnh sửa"></i>
              </a>
            </td>
          </tr>
          @endforeach
          
         
          
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