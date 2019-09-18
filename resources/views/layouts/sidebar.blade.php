  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("bower_components/AdminLTE/dist/img/huz.jpeg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <!--li><a href="{{ url('employee-management') }}"><i class="fa fa-fighter-jet"></i> <span>Officers Management</span></a></li-->
        
         
        <li class="treeview">
          <a href="#"><i class="fa fa-cogs"></i> <span>System Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('system-management/employeer') }}"><i class="fa fa-suitcase"></i>Employeers</a></li>
            <li><a href="{{ url('system-management/graduate') }}"><i class="fa fa-users"></i>Job Seekers</a></li>
            <li><a href="{{ url('system-management/country') }}"><i class="fa fa-flag-o"></i>Countries</a></li>
            <li><a href="{{ url('system-management/category') }}"><i class="fa fa-book"></i>Categories courses</a></li> <!--country--> <!--country-->
            <li><a href="{{ url('system-management/course') }}"><i class="fa fa-book"></i>Courses</a></li> <!--country-->
            <li><a href="{{ url('system-management/schools') }}"><i class="fa fa-graduation-cap"></i>schools</a></li> <!--country-->
            
          </ul>
        </li>
       
        </li>
        <li><a href="{{ route('mail-management.index')}}"><i class="fa fa-envelope"></i> <span>Mails</span></a></li>
        <li><a href="{{ route('user-management.index') }}"><i class="fa fa-user"></i> <span>User management</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>