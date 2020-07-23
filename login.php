<?php 

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/sweetalert.min.js"></script>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form id="login-form" class="user" action="system/auth_login.php" method="post" onsubmit="return login();">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Enter Username...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-sm-6">
                            <img src="captcha_image.php" alt="captcha"/>
                        </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="captcha" name="captcha" placeholder="captcha">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button id="login" class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                    <!-- <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="#">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
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


  <script>
    $('#login').click(function() {
      swal ({
        title: "Login",
        text: "Login Berhasil",
        icon: "success",
        timer: 5000,
      });
    });
  </script>
  <!-- Script Login -->
  <script type="text/javascript">
    function login()
    {
    var username = $("#username").val();
    var pass=$("#password").val();
    // var captcha=$("#captcha").val();
    if(username!="" && pass!="")
    {
      $.ajax
      ({
      type:'post',
      url:'system/auth_login.php',
      data:{
      // login:"login",
      username:username,
      password:password,
      // captcha:captcha
      },
      success:function(response) {
      if(response=="success")
      {
        swal ({
          title: "Login",
          text: "Login Berhasil",
          icon: "success",
          timer: 5000,
        });
        window.location.href="dashboard.php";
      }
      // if(response=="wrong")
      // {
      //   alert("Captcha Salah!");
      // }
      if(response=="fail")
      {
        swal ({
          title: "Login",
          text: "Username atau Password salah!",
          icon: "warning",
          timer: 5000,
        });
        // alert("Username atau Password salah!");
      }
      }
      });
    }

    else
    {
      swal ({
        title: "Login",
        text: "Mohon isi form login terlebih dahulu!",
        icon: "warning",
        timer: 5000,
      });
      // alert("Mohon isi form login terlebih dahulu!");
    }

    return false;
    }
  </script>
</body>

</html>
