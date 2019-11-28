<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('backend.page.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">QUẢN LÝ THƯ VIỆN<sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('backend.page.dashboard') }}">
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
            <i class="fas fa-bookmark"></i>
            <span>Quản lý Thể Loại Sách</span>
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
            <i class="fas fa-building"></i>
            <span>Quản lý Nhà Xuất Bản</span>
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
      <!-- start khoa -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKhoa" aria-expanded="true" aria-controls="collapseKhoa">
            <i class="fas fa-university"></i>
            <span>Quản lý Khoa</span>
        </a>
        <div id="collapseKhoa" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Chức năng khoa:</h6>
                <a class="collapse-item" href="{{ route('backend.khoa.index') }}">Danh sách Khoa</a>
                <a class="collapse-item" href="{{ route('backend.khoa.print') }}">In danh sách Khoa</a>
                <a class="collapse-item" href="{{ route('backend.khoa.create') }}">Thêm mới</a>
            </div>
        </div>
      </li>
      <!-- end khoa -->
      <!-- start nganh -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNganh" aria-expanded="true" aria-controls="collapseNganh">
            <i class="fas fa-code-branch"></i>
            <span>Quản lý Ngành</span>
        </a>
        <div id="collapseNganh" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Chức năng ngành:</h6>
                <a class="collapse-item" href="{{ route('backend.nganh.index') }}">Danh sách Ngành</a>
                <a class="collapse-item" href="{{ route('backend.nganh.print') }}">In danh sách Ngành</a>
                <a class="collapse-item" href="{{ route('backend.nganh.create') }}">Thêm mới</a>
            </div>
        </div>
      </li>
      <!-- end nganh -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-book"></i>
          <span>Quản lý Sách</span>
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
      <!-- start docgia -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDocgia" aria-expanded="true" aria-controls="collapseDocgia">
            <i class="fas fa-users"></i>
            <span>Quản lý Đọc Giả</span>
        </a>
        <div id="collapseDocgia" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Chức năng đọc giả:</h6>
                <a class="collapse-item" href="{{ route('backend.docgia.index') }}">Danh sách Đọc giả</a>
                <a class="collapse-item" href="{{ route('backend.docgia.print') }}">In danh sách Đọc giả</a>
                <a class="collapse-item" href="{{ route('backend.docgia.create') }}">Thêm mới</a>
            </div>
        </div>
      </li>
      <!-- end docgia -->
      <!-- start thuthu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThuthu" aria-expanded="true" aria-controls="collapseThuthu">
            <i class="fas fa-user"></i>
            <span>Quản lý Thủ Thư</span>
        </a>
        <div id="collapseThuthu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Chức năng thủ thư:</h6>
                <a class="collapse-item" href="{{ route('backend.thuthu.index') }}">Danh sách Thủ thư</a>
                <a class="collapse-item" href="{{ route('backend.thuthu.print') }}">In danh sách Thủ thư</a>
                <a class="collapse-item" href="{{ route('backend.thuthu.create') }}">Thêm mới</a>
            </div>
        </div>
      </li>
      <!-- end thuthu -->
      <!-- start muonsach -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMuonsach" aria-expanded="true" aria-controls="collapseMuonsach">
            <i class="fas fa-book-reader"></i>
            <span>Quản lý Mượn Sách</span>
        </a>
        <div id="collapseMuonsach" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Chức năng mượn sách:</h6>
                <a class="collapse-item" href="{{ route('backend.muonsach.index') }}">Danh sách Mượn sách</a>
                <a class="collapse-item" href="{{ route('backend.muonsach.show') }}">Đọc giả mượn sách</a>
                <a class="collapse-item" href="{{ route('backend.muonsach.print') }}">In danh sách Mượn sách</a>
                <a class="collapse-item" href="{{ route('backend.muonsach.create') }}">Thêm mới</a>
            </div>
        </div>
      </li>
      <!-- end muonsach -->
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>