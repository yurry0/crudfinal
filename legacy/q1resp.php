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
      
    <h1>Resultado! <br></h1>
  <br>
  <br>
 
    <div class="row">
      
          <div class="col-md-6"  style="padding-left: 15px;">
            <div class="card text-white bg-info mb-3" >
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-check-circle"></i>
                  Resultado da Operação
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
              
              <?php

            $n1 = $_POST['numero1'];
            $n2 = $_POST['numero2'];

            function calc_multi($number1,$number2){

            $soma = $number1 + $number2;
            $multi = $soma * $number1;

            return $multi;
             }
            echo "<blockquote> <h1>O resultado da operação é: ".calc_multi($n1,$n2)."<br> O primeiro algoritmo foi: ".$n1."<br> O segundo algoritmo foi: ".$n2."</blockquote>";


            ?>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      
              </div>

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



