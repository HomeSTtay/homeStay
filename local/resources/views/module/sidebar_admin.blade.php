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
                    <a  href="{{url("/")}}/">
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
                        <li><a href="basic_table.html"><i class="fa fa-plus"></i>Thêm Homestay</a></li>
                        <li><a href="{{url("/")}}/danh-sach-homestay"><i class="fa fa-list-ul"></i>Danh sách homestay</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Bài viết</span>
                    </a>
                    <ul class="sub">
                        <li><a href="form_component.html"><i class="fa fa-plus"></i>Thêm bài viết</a></li>
                        <li><a href="form_validation.html"><i class="fa fa-list-ul"></i>Danh sách bài viết</a></li>
                    </ul>
                </li>

              
                
                <li>
                    <a href="{{url("/")}}/logIn">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<script src="js/jquery.dcjqaccordion.2.7.js"></script>