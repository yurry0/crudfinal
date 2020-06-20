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

<?php
include "includes/q6func.php";
$cliente = "Yuri";
$produto_nome = "Game Final Fantasy VII Remake - PS4";
$produto_descricao = "Uma reimaginação espetacular de um dos jogos mais visionários . FINAL FANTASY VII REMAKE reconstrói e expande o lendário RPG para hoje.";
$produto_valor = 213.42;
$desc = 7;

?>

<?php include "includes/content_header.php" ?>

<div class="container-lg">
<h1 style="text-align: center;">Lista de Produtos<br></h1>
<div class="row">

<div class="col-sm">

<div class="card" style="width: 15rem;">
<img src="image/product_example.png" class="card-img-top" alt="Final Fantasy VII Remake">
<div class="card-body">
<h5 class="card-title" style="text-align: center;"><?php echo "<h4>".$produto_nome?></h5>
<p class="card-text"><?php echo $produto_descricao?></p>
<p class="card-text" style="text-align: right;"><?php echo "R$".number_format($produto_valor,2)  ?></p>
<p class="card-text" style="text-align: right;"><?php echo $desc."% de Desconto"?></p>
<p class="card-text" style="text-align: right;"><?php echo "<h2 style="."float:right".">R$".calcular_desconto(number_format($produto_valor,2),$desc); ?></p>

<a href="" class="btn btn-info" style="float: right;">Comprar</a>
</div>


</div>   
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
