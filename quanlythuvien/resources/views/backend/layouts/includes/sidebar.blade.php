<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PĐ Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Màn Hình Quản Trị</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Chức Năng Hệ Thống
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- category -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="true" aria-controls="collapseCategories">
            <i class="fas fa-fw fa-cog"></i>
            <span>Thể Loại Sách</span>
        </a>
        <div id="collapseCategories" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Chức năng thể loại sách:</h6>
                <a class="collapse-item" href="{{ route('backend.theloai.index') }}">Danh sách Thể loại sách</a>
                <a class="collapse-item" href="{{ route('backend.theloai.print') }}">In danh sách Thể loại sách</a>
                <a class="collapse-item" href="{{ route('backend.theloai.create') }}">Thêm mới</a>
            </div>
        </div>
      </li>
      <!-- end category -->
      <!-- start supplier -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSuppliers" aria-expanded="true" aria-controls="collapseSuppliers">
            <i class="fas fa-fw fa-cog"></i>
            <span>Nhà Xuất Bản</span>
        </a>
        <div id="collapseSuppliers" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Chức năng nhà xuất bản:</h6>
                <a class="collapse-item" href="{{ route('backend.nxb.index') }}">Danh sách Nhà xuất bản</a>
                <a class="collapse-item" href="{{ route('backend.nxb.print') }}">In danh sách Nhà xuất bản</a>
                <a class="collapse-item" href="{{ route('backend.nxb.create') }}">Thêm mới</a>
            </div>
        </div>
      </li>
      <!-- end supplier -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Sách</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Chức Năng Sách:</h6>
            <a class="collapse-item" href="{{ route('backend.sach.index') }}">Danh Sách Sách</a>
            <a class="collapse-item" href="{{ route('backend.sach.print') }}">In danh sách</a>
            <a class="collapse-item" href="{{ route('backend.sach.create') }}">Thêm mới</a>
          </div>
        </div>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>