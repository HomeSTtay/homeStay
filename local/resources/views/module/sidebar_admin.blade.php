<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{url("/")}}/admin">
                        <i class="fa fa-dashboard"></i>
                        <span>Trang chủ Admin</span>
                    </a>
                </li>

                 <li>
                    <a  href="{{url("/")}}/" target="_blank">
                        <i class="fa fa-bookmark"></i>
                        <span>Trang chính</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-home"></i>
                        <span>Homestays</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url("/")}}/add-homestay"><i class="fa fa-plus"></i>Thêm Homestay</a></li>
                        <li><a href="{{url("/")}}/list-homestay"><i class="fa fa-list-ul"></i>Danh sách homestays</a></li>
                        <li><a href="{{url("/")}}/list-type-room"><i class="fa fa-cog"></i>Quản lí loại phòng</a></li>
                        <li><a href="{{url("/")}}/list-style-homestay"><i class="fa fa-cog"></i>Quản lí phong cách homestay</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Bài viết</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url("/")}}/add-post"><i class="fa fa-plus"></i>Thêm bài viết</a></li>
                        <li><a href="{{url("/")}}/list-post"><i class="fa fa-list-ul"></i>Danh sách bài viết</a></li>
                    </ul>
                </li>

              
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-user"></i>
                        <span>Người dùng</span>
                    </a>
                    <ul class="sub">
                 
                    <li><a href="{{url("/")}}/logOut"><i class="fa fa-sign-out"></i>Đăng xuất</a></li>
                    <li><a href="{{url("/")}}/list-user"><i class="fa fa-list-ul"></i>Danh sách người dùng</a></li>
                    <li><a href="{{url("/")}}/signUp"><i class="fa fa-plus"></i>Thêm tài khoản</a></li>
                    <li><a href="form_component.html"><i class="fa fa-cog"></i>Quản lí người dùng</a></li>
                    </ul>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<script src="js/jquery.dcjqaccordion.2.7.js"></script>