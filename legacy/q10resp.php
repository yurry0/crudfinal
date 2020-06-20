<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="style/css" href="css/cover.css">
<style> 

img {
  opacity: 0.75;
}



</style>



  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Atividade AV2 - Yuri</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-footer-fixed">
<!-- Site wrapper -->
<div class="wrapper">

    <?php
    //include "includes/navpar.php"

    ?>

   
  </nav>
  
  <!-- /.navbar -->

  <!-- sidebar -->

    <?php

    include "includes/sidebar.php"


    ?>





  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <div class="container-fluid">
      
    <?php 
    include "includes/content_header.php";
    ?>
      


      <br>
      <br>
      <br>
      <br>

      <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Resultado!</h5>
                  <?php
                    if (!empty($_POST)){
                    $dist = $_POST['distancia'];
                    $comb = $_POST['combustivel'];
                    function consumo($dist_per,$comb_gasto){
                    
                    $consumo_m = ($dist_per / $comb_gasto);
                    return number_format($consumo_m,1);
                    }
                    
                
                    echo "O Nível de consumo médio do automóvel é: ".consumo($dist,$comb)." kms/lts";   
                    }

                    ?>
                </div>
              </div>

      
      
    

    
  <?php 

  

  
  ?>
      </div>
      </div>
      </div>
 <?php 

    include "includes/footer.php"

 ?>


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
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>



