      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        @if(Auth::check())
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/admin-asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{{ Auth::user()->name ?? 'Admin' }}}</a>
          </div>
        </div>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <form method="post" action="{{route('logout')}}">
              @csrf
            <button class="btn btn-danger btn-sm" class="d-block">Log Out</button>
            </form>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Companies 
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('company.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('company.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Employees
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('employee.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('employee.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        @else
        <div class="user-panel col-md-12">
          <div class="col-md-12" style="font-size: 15px;color: #ffffff;">
            Welcome, please login.
          </div>
          <div class="info col-md-12">
            <a class="btn btn-info btn-sm" href="{{route('login')}}" class="d-block">Login</a>
          </div>
        </div>
        @endif
        <!-- /.sidebar-menu -->
      </div>