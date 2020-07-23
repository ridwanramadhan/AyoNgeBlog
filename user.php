<?php 
	include 'system/database.php';
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ayo NgeBlog - Users</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/jquery.dataTables.js"></script>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laptop"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ayo NgeBlog</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="tambah-artikel.php">
          <i class="fas fa-folder-plus"></i>
          <span>Tambah Artikel</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="artikel.php">
          <i class="fas fa-folder"></i>
          <span>Artikel</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="kritik-saran.php">
          <i class="fas fa-envelope"></i>
          <span>Kritik dan Saran</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="user.php">
          <i class="fas fa-users"></i>
          <span>Users</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-md-12">
              <table id="myTable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    include 'system/json_user.php';
                    $data = json_decode($json, true);
                    $no=1;
                    foreach ($data as $key => $row) {
                   ?>
                  <tr>
                    <td class="text-center"><?php echo $no++; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['nama_lengkap']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                  </tr>
                  <?php 
                    }
                   ?>
                </tbody>
              </table>
            </div>
            

            <!-- Pending Requests Card Example -->
            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>

          <!-- Content Row -->

          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Ayo NgeBlog 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="system/auth_logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

  <script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    // $(document).ready(function () {
    //   $.getJSON("system/json_user.php", 
    //   function (data) {
    //     var user_data = '';
    //     $.each(data, function(key, value) {
    //       user_data += '<tbody>';
    //       user_data += '<tr>';
    //       user_data += '<td>'+value.username+'</td>';
    //       user_data += '<td>'+value.password+'</td>';
    //       user_data += '<td>'+value.nama_lengkap+'</td>';
    //       user_data += '<td>'+value.email+'</td>';
    //       user_data += '</tr>';
    //       user_data += '</tbody>';
    //     });
    //     $('#myTable').append(user_data)
    //   });
    // });
    $('#tabel-user').ready(function() {
      // body...
    })
  </script>
</body>

</html>

<?php 
  
 ?>
