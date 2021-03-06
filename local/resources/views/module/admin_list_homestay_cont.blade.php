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
            <button class="btn btn-sm btn-default"  type="button"><i class ="fa fa-search"></i></button>
          </span>

         
        </div>
        <span class="input-group-btn">
           <a  href="{{url("/")}}/add-homestay"><button class="btn btn-info" type="button" ><i class ="fa fa-plus">  Thêm homestay</i></button></a> 
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
            <th>Mã </th>
            <th>Tên homestay</th>
            <th>Phong cách</th>
            <th>Địa điểm</th>
            <th>Khu vực</th>

            <th style="width:80px;"></th>
          </tr>
        </thead>
        <tbody> 
          @foreach($list_homestay as $h)
            <tr>        
            <td><label class="i-checks m-b-none">
                <input type="checkbox" id="checkid">
              </label></td>
            <td>{{$h->id}}</td>
            <td>{{$h->name}}</td>
             <td><span class="text-ellipsis">{{$h->name_style}}</span></td>
            <td><span class="text-ellipsis">{{$h->location}}</span></td>
            <td><span class="text-ellipsis">{{$h->area}}</span></td>
            <td>
              <a href="" class="active" ui-toggle-class="">
               <a href="{{url("/")}}/detail-homestay/{{$h->id}}"> <i class="fa fa-arrow-right text-success text-active" title="Xem chi tiết"></i></a>
               <a href="{{url("/")}}/delete-homestay/{{$h->id}}"> <i class="fa fa-times text-danger text" title="Xóa"></i>
               </a>
               <a href="{{url("/")}}/edit-homestay"><i class="fa fa-edit text-info text" title="Chỉnh sửa"></i></a>
              </a>
            </td>
          </tr>
          @endforeach
          
         

        </tbody>
      </table>
      {{$list_homestay->links()}}
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