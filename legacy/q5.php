<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="style/css" href="css/cover.css">

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

<?php




?>


      <div class="content-wrapper">
      <div class="container-fluid">
      
      
      <h4 style="text-align: center; padding:50px "> 5. Salário atual desse funcionário.
      </h4> 
      

      <div class="col-lg-3 col-5" style="margin-left: 40rem;">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Funcionário!</h3>

                <p>João Joaquim Joãonácio da Silva II</p>
                <br> <?php    
                
                $salario_original = 1000;
                $ano_inicial = 2015;
                $taxa_aumento = 1.5;
                $aumento_next = 2;

                function calc_salario($salario_original, $taxa_aumento,$aumento_next){

                  $salario_2016 = $salario_original + ($salario_original * $taxa_aumento)/100;
                  $salario_2017 = $salario_2016 + ($salario_2016 * $aumento_next/100);
                  $salario_2018 = $salario_2017 + ($salario_2017 * ($aumento_next*2)/100);
                  $salario_2019 = $salario_2018 + ($salario_2018 * ($aumento_next*2*2)/100);
                  $salario_2020 = $salario_2019 + ($salario_2019 * ($aumento_next*2*2*2)/100);
                  
                  return number_format($salario_2020,2) ;

                }

                  echo "<p> Salário Atual: </p>"."<h4> R$".calc_salario($salario_original,$taxa_aumento,$aumento_next)."</h4>";



                
                
                ?> 
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
            </div>
          </div>




     
            <!-- /.card -->  

    </div>
    <!-- /.card -->

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
