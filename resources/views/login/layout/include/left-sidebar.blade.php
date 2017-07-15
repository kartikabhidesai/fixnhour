  <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header"><a href="<?php echo route('user_dashboard'); ?>">Dashboard</a></li>
          <li class="treeview">  
              <a href="#">
                <i class="fa fa-graduation-cap"></i> <span>Set Up</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo route('college_info'); ?>"><i class="fa fa-circle-o"></i>College Info </a></li>
              </ul>
          </li>
          <li class=" treeview">
            <a href="#">
              <i class="fa fa-book"></i> <span>Courses</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo route('course_type'); ?>"><i class="fa fa-circle-o"></i>Course Type </a></li>
              <li><a href="<?php echo route('courses'); ?>"><i class="fa fa-circle-o"></i>Courses</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-user"></i>
              <span>Students</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?php echo route('apply_online'); ?>"><i class="fa fa-circle-o"></i>Apply Online</a></li>
              <li><a href="<?php echo route('offer_manage'); ?>"><i class="fa fa-circle-o"></i>Offer Manage</a></li>
              <li><a href="<?php echo route('search_students'); ?>"><i class="fa fa-circle-o"></i>Search Students</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-university"></i>
              <span>Agent</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo route('add_agent'); ?>"><i class="fa fa-circle-o"></i> Add Agent</a></li>
              <li><a href="<?php echo route('view_agent_list'); ?>"><i class="fa fa-circle-o"></i> View Agent List</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>