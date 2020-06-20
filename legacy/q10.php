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
      
      
      <h4 style="text-align: center; padding:50px  "> 10. Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um
automóvel e a quantidade de combustível (em litros) consumida para percorrê-la, calcule e
imprima o consumo médio de combustível. Fórmula: Consumo médio = Km / litros.</h4> 
      





      
      
      <!-- Horizontal Form -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Consumo Médio de Combustível</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form class="form-horizontal" name="form_consumo" id="form_consumo" action="q10resp.php" method="POST">
        <div class="card-body">
          <div class="form-group row">
            <label for="distancia"  class="col-sm-2 col-form-label">Distância</label>
            <div class="col-sm-10">
              <input type="number" min="1" required class="form-control" name="distancia" id="distancia" required placeholder="Ex. 500km">
            </div>
          </div>
          <div class="form-group row">
          <label for="combustivel"  class="col-sm-2 col-form-label">Combustivel</label>
            <div class="col-sm-10">
              <input type="number" min="1" required required class="form-control" name="combustivel" id="combustivel" placeholder="Ex. 90lts">
            </div>
          </div>
        </div>

          
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-danger" style="float: right;">Calcular</button>
        </div>
        <!-- /.card-footer -->
      </form>
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
