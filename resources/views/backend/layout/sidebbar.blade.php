<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Asad</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ asset('/') }}backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>
      <!-- Sidebar user panel (optional) -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>

              </li>
            <li class="nav-item">
                  <a href="{{ route('users.index')}}" class="nav-link">
                    <i class="nav-icon fa fa-table"></i>
                    <p>Users</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('provinces.index')}}" class="nav-link {{ request()->is('admin/province') ? 'active' :'' }}">
                    <span class=" nav-icon fa fa-home"></span>
                    <p>Provinces</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('cities.index')}}" class="nav-link">
                    <p>Cities Table</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('locations.index')}}" class="nav-link">
                    <p>Locations Table</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('hotels.index')}}" class="nav-link">
                    <p>Hotels Table</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('trips.index')}}" class="nav-link">
                    <p>Trips Table</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('triptypes.index')}}" class="nav-link">
                    <p>Trip Types Table</p>
                  </a>
                </li>
        </ul>
      </nav>
      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
