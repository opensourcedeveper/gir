
 
  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G</b>IR</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Global Infi Research</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
<!--    Set data-toggle to push-menu: <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> 
    Then add data-widget = tree: <ul class="sidebar-menu" data-widget="tree">.-->
      

<div id="countdown" style="
    width: 350px;
    margin-top: 13px !important;
    position: absolute;
    font-size: 16px;
    color: #ffffff;
    display: inline-block;
    margin-left: -175px;
    left: 50%;
"></div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          

          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <span class="hidden-xs"><?php echo $this->session->userdata('firstname'); ?>  <?php echo $this->session->userdata('lastname'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

                <p>
                  <?php echo $this->session->userdata('firstname'); ?>  <?php echo $this->session->userdata('lastname'); ?>
                  <small><?php echo $this->session->userdata('username'); ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <!--<a href="{{ URL::to('admin/logout')}}" class="btn btn-default btn-flat">sign_out</a>-->
                  <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>
      

    </nav>
  </header>