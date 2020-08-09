<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            {{-- <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="admin/sach/danhsach"><i class="fa fa-bar-chart-o fa-fw"></i> Sách<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/sach/danhsach">Danh sách</a>
                    </li>
                    <li>
                        <a href="admin/sach/them">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li> --}}
            <li>
                <a href="nhanvien/muonsach"><i class="fa fa-pencil fa-fw"></i> Mượn sách<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                    <a href="{{route('danhsachmuon')}}">Danh sách</a>
                    </li>
                    <li>
                    <a href="{{route('taomoimuon')}}">Tạo mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="nhanvien/trasach/danhsach"><i class="fa fa-cube fa-fw"></i> Danh sách trả sách</a>
                
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bars fa-fw"></i> Khách hàng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="nhanvien/user/danhsach">Danh sách</a>
                    </li>
                    <li>
                        <a href="nhanvien/user/them">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
           {{--  <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Nhân sự<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/nhanhsu/danhsach">Danh sách</a>
                    </li>
                    <li>
                        <a href="admin/nhansu/them">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li> --}}
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>