<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/custom.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
<!--  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     Left navbar links 
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="admin.html" class="nav-link">Home</a>
      </li>
  
    </ul>
     Right navbar links 
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" role="button"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>-->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<!--  <aside class="main-sidebar sidebar-dark-primary elevation-4">
     Brand Logo 
    <a href="index3.html" class="brand-link">
      <img src="images/logo_1-01.png" alt="GIR Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">GIR</span>
    </a>

     Sidebar 
    <div class="sidebar">
       Sidebar user panel (optional) 
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

       Sidebar Menu 
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library 
          <li class="nav-item has-treeview menu-open">
            <a href="admin.html" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              
              </p>
            </a>
          
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview cust-ntv">
              <li class="nav-item">
                <a href="all-reports.html" class="nav-link active">
                  <i class="fa fa-list nav-icon"></i>
                  <p>All Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add-report.html" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Report</p>
                </a>
              </li>
            </ul>
          </li>      
           <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview cust-ntv">
              <li class="nav-item">
                <a href="all-blogs.html" class="nav-link active">
                  <i class="fa fa-list nav-icon"></i>
                  <p>All Blogs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add-blog.html" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Blog</p>
                </a>
              </li>
            </ul>
          </li>       
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Press Release
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview cust-ntv">
              <li class="nav-item">
                <a href="all-press.html" class="nav-link active">
                  <i class="fa fa-list nav-icon"></i>
                  <p>All PRs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add-press.html" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add PR</p>
                </a>
              </li>
            </ul>
          </li>       
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview cust-ntv">
              <li class="nav-item">
                <a href="all-users.html" class="nav-link active">
                  <i class="fa fa-list nav-icon"></i>
                  <p>All Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add-user.html" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
       /.sidebar-menu 
    </div>
     /.sidebar 
  </aside>-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="adminDashList" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th> Id:</th>
                    <th>Form type</th>
                    <th>Report Id</th>
                    <th>purchase time</th>
                    <th>Cust. Email</th>
                    <th>Phone no:</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Message</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($forms_data as $form) {  ?>
                          
                    <tr>
                      <td><?php echo $form['id'];?></td>
                      <td><?php if($form['type'] != null){echo $form['type'];}else{echo "-";}?></td>
                      <td><?php if($form['reports_id'] != null){echo $form['reports_id'];}else{echo "-";}?></td>
                      <td><?php if($form['purchasetime'] != null){echo $form['purchasetime'];}else{echo "-";}?></td>
                      <td><?php if($form['email'] != null){echo $form['email'];}else{echo "-";}?></td>
                       <td><?php if($form['phone'] != null){echo $form['phone'];}else{echo "-";}?></td> 
                       <td><?php if($form['name'] != null){echo $form['name'];}else{echo "-";}?></td>
                       <td><?php if($form['created_at'] != null){echo $form['created_at'];}else{echo "-";}?></td>
                       <td><?php if($form['message'] != null){echo $form['message'];}else{echo "-";}?></td>
                    </tr>
                     <?php } ?>
<!--                    <tr>
                      <td>1</td>
                      <td>custom</td>
                      <td>00236</td>
                      <td>2 week</td>
                      <td>john@gmail.com</td>
                       <td>9876543210</td> 
                       <td>John d</td>
                       <td>Hello</td>
                    </tr>-->
               
                </tbody>
                  <tfoot>
                 <tr>
                  <th> Id:</th>
                  <th>Form type</th>
                  <th>Report Id</th>
                  <th>purchase time</th>
                  <th>Cust. Email</th>
                  <th>Phone no:</th>
                  <th>Name</th>
                  <th>Message</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!--  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>-->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#adminDashList").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

