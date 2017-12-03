<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách  loại phòng homestay
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
           <a  href="{{url("/")}}/add-type-room"><button class="btn btn-info" type="button" ><i class ="fa fa-plus">  Thêm loại phòng</i></button></a> 
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
            <th>Mã loại phòng</th>
            <th>Tên loại phòng</th>
            <th>Tên homestay</th>
            <th>Phong cách</th>
            <th>Miêu tả</th>
            <th>Số lượng phòng</th>
            <th>Trạng thái</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody> 
          @foreach($type_room as $tyr)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name='name[]' id='check_all'><i></i></label></td>
            <td>{{$tyr->id}}</td>
            <td>{{$tyr->name}}</td>
            <td>{{$tyr->homestay_name}}</td>
            <td>{{$tyr->style}}</td>
            <td><span class="text-ellipsis"></span>{{$tyr->description}}</td>
            <td><span class="text-ellipsis"></span>{{$tyr->quantity}}</td>
            <td><span class="text-ellipsis"></span>{{$tyr->status}} </td>
            <td>
              <a href="" class="active" ui-toggle-class="">
              <i class="fa fa-arrow-right text-success text-active" title="Xem chi tiết"></i>
              <a href="{{url("/")}}/delete-type-room/id={{$tyr->id}}"><i class="fa fa-times text-danger text" title="Xóa"></i></a>
             <a href="{{url("/")}}/edit-type-room/id={{$tyr->id}}"><i class="fa fa-edit text-info text" title="Chỉnh sửa"></i></a>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$type_room->links()}}
    </div>
    
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