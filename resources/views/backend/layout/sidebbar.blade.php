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
                  <a href="{{ route('users.index')}}" class="nav-link {{ request()->is('admin/user') || request()->is('admin/user/*')  ? 'active' :'' }}">
                    <i class="nav-icon fa fa-table"></i>
                    <p>Users</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('provinces.index')}}" class="nav-link {{ request()->is('admin/province') || request()->is('admin/province/*') ? 'active' :'' }}">
                    <i class="nav-icon fa fa-table"></i>
                    <p>Provinces</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('cities.index')}}" class="nav-link {{ request()->is('admin/city') || request()->is('admin/city/*') ? 'active' :'' }}">
                    <i class="nav-icon fa fa-table"></i>
                    <p>Cities </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('locations.index')}}" class="nav-link {{ request()->is('admin/location') || request()->is('admin/location/*') ? 'active' :'' }}">
                    <i class="nav-icon fa fa-table"></i>
                    <p>Locations </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('hotels.index')}}" class="nav-link {{ request()->is('admin/hotel') || request()->is('admin/hotel/*') ? 'active' :'' }}">
                    <i class="nav-icon fa fa-table"></i>
                    <p>Hotels </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('trips.index')}}" class="nav-link {{ request()->is('admin/trip') || request()->is('admin/trip/*') ? 'active' :'' }}">
                    <i class="nav-icon fa fa-table"></i>
                    <p>Trips </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('triptypes.index')}}" class="nav-link {{ request()->is('admin/triptype') || request()->is('admin/triptype/*') ? 'active' :'' }}">
                    <i class="nav-icon fa fa-table"></i>
                    <p>Trip Types </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('tripfeatures.index')}}" class="nav-link {{ request()->is('admin/tripfeature') || request()->is('admin/tripfeature/*') ? 'active' :'' }}">
                    <i class="nav-icon fa fa-table"></i>
                    <p>Trip Features </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('transports.index')}}" class="nav-link {{ request()->is('admin/transport') || request()->is('admin/transport/*') ? 'active' :'' }}">
                    <i class="nav-icon fa fa-table"></i>
                    <p>Transport </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('rooms.index')}}" class="nav-link {{ request()->is('admin/room') || request()->is('admin/room/*') ? 'active' :'' }}">
                    <i class="nav-icon fa fa-table"></i>
                    <p>Room </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('roomtypes.index')}}" class="nav-link {{ request()->is('admin/roomtype') || request()->is('admin/roomtype/*') ? 'active' :'' }}">
                    <i class="nav-icon fa fa-table"></i>
                    <p>Room Type </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('bookings.index')}}" class="nav-link {{ request()->is('admin/booking') || request()->is('admin/booking/*') ? 'active' :'' }}">
                    <i class="nav-icon fa fa-table"></i>
                    <p>Booking </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('reviews.index')}}" class="nav-link {{ request()->is('admin/review') || request()->is('admin/review/*') ? 'active' :'' }}">
                    <i class="nav-icon fa fa-table"></i>
                    <p>Reviews </p>
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
