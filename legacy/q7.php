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
      <?php 
      include "includes/content_header.php";

      ?>
      
      <h4 style="text-align: center; padding:50px  "> 7. Faça um algoritmo leia 100 números randômicos, calcule e mostre a soma dos 10 primeiros
números pares. 
      </h4> 
      


      <?php 

      
    
    $n1 = 1;
    $n2 = 100;
    $j = 0;
    $soma =0;

    for($i=0;$i<=99;$i++){
      $a[$i] = rand($n1,$n2);

    }

    for($i=0;$i<=99;$i++){


      if(($a[$i]%2) == 0){

        if($j <= 9){
          $b[$j] = $a[$i];

          $soma = $soma + $b[$j];

        }

        $j++;

      }

    }
    //echo "SOMA COM ARRAYSUM = ".array_sum($b);
    ?>

<div class="card-body">
                <div class="callout callout-danger">
                  <h5>Números selecionados para a soma!</h5>

                  <p> <?php
                  for($u = 0;$u<=9;$u++){ 
                      echo $b[$u]." | ";
                    }
                  ?> </p>
                </div>
  

                <div class="card-body">
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-info"></i> Resultado da Soma</h5>
                  <?php echo "Soma dos 10 primeiros números pares da seleção randômica: "."<h1>".array_sum($b); ?>
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
