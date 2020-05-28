<?php
session_start();//session starts here

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>e-WasteSys</title>

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



        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
         
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome to e-WasteSys</h1>
                  </div>
                  <form method="POST" action="processLogin.php" class="user">
                    <div class="form-group">
                      <input type="text" name="costumer_contact" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter contact number">
                    </div>
                    <div class="form-group">
                      <input type="password" name="costumer_ic" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter identity number">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        
                      </div>
                    </div>
                    <button name="login"  class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  
                  </form>
                 
                  <div class="text-center">
                    <a class="small" href="../collector/">LOGIN AS COLLECTOR</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="../admin/">LOGIN AS ADMIN</a>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
