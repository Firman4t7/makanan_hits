<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url('index.php/Home/admin')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>BACK</b>END</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>BACK</b>END</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->

          <!-- Tasks: style can be found in dropdown.less -->
          <!-- <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>

          </li> -->
          <!-- User Account: style can be found in dropdown.less -->

          <!-- Control Sidebar Toggle Button -->
          <li class="">
            <a href="" class="" data-toggle="modal" data-target="#logoutModal">
              <i class="fa fa-sign-out"></i> <span>LogOut</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>


  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- search form -->
    <!-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form> -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">

        <li class=""><a href="<?= base_url('index.php/Home/admin')?>"><i class="fa fa-tachometer"></i> Dashboard</a></li>

      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Data Makanan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?= base_url('index.php/Home/form_makanan') ?>"><i class="fa fa-circle-o"></i> Input Data Makanan</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i> Input About</a></li>
          <li><a href="" class="" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-circle-o"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>



<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah Kamu ingin Keluar?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Tekan "Logout" Jika Ingin Keluar</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url('index.php/auth/logout')?>">Logout</a>
      </div>
    </div>
  </div>
</div>
