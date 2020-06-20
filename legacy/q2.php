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
      <div class="content-wrapper">
      <div class="container-fluid">
      
      
      <h4 style="text-align: center; padding:50px  "> 2. Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na
      variável média e exiba para o usuário o resultado.
      </h4> 
      

      <div class="card card-primary">
              <div class="card-header" >
                <h3 class="card-title">Calcular Média</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="form_media" method="POST" action="q2resp.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="n1">Primeiro Algoritmo</label>
                    <input type="number" class="form-control" id="n1" required name="n1" placeholder="Digite aqui o primeiro número">
                  </div>
                  <div class="form-group">
                    <label for="Number2">Segundo Número</label>
                    <input type="number" class="form-control" id="n2" name="n2" required placeholder="Digite aqui o segundo número">
                  </div>
                  <div class="form-group">
                    <label for="Number3">Terceiro Número</label>
                    <input type="number" class="form-control" id="n3" name="n3" required placeholder="Digite aqui o terceiro número">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" style="float: right;" class="btn btn-warning">Calcular Média</button>
                </div>
              </form>
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
