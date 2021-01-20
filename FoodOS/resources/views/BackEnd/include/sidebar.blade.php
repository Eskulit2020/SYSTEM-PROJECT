<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('/dashboard') }}" class="brand-link">
      <img src="{{asset('/Backend Resource File')}}/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Happy-nest</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 ">
        <div class="image">
          <img src="{{asset('/Backend Resource File')}}/dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-box"></i>
                    <p>
                        Dish
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('show_dish_table')}}" class="nav-link active">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>Generate Dish</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('manage_dish_table')}}" class="nav-link">
                            <i class="fa fa-edit nav-icon"></i>
                            <p>Manage Dish</p>
                        </a>
                    </li>
                </ul>
            </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-motorcycle"></i>
              <p>
                Delivery Boy
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('show_deliveryBoy_add_table')}}" class="nav-link active">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Delivery Boy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('delivery_boy_manage')}}" class="nav-link">
                  <i class="fa fa-edit nav-icon"></i>
                  <p>Manage Delivery Boy</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-user"></i>
                    <p>
                        Users
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('show_user_add_table')}}" class="nav-link active">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>Add Delivery Boy</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('manage_user_table')}}" class="nav-link">
                            <i class="fa fa-edit nav-icon"></i>
                            <p>Manage Delivery Boy</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
