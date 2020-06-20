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
      
      
      <h4 style="text-align: center; padding:50px  "> 8. Crie um algoritmo em que o usuário escolha uma operação (soma, subtração, multiplicação ou
divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em
cada um dos números
      </h4> 
      

      <!-- Horizontal Form -->
      <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <i class="fas fa-sun"></i> Cálculo!</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="numero1" class="col-sm-2 col-form-label">Primeiro Numero</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="numero1" name="numero1" placeholder="Digite aqui o primeiro valor">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="segundonumero" class="col-sm-2 col-form-label">Segundo Número</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="numero2" name="numero2" placeholder="Digite aqui o segundo valor">
                    </div>
                  </div>
                  <div class="form-group">
                        <div class="form-check">
                          <input type="radio" name="button" id = 'add'>
                          <label class="form-check-label"> <i class="fas fa-plus"></i> Adição</label>
                          <input type="radio" name="button" id = 'minus'>
                          <label class="form-check-label"> <i class="fas fa-minus"></i> Subtração</label>
                          <input type="radio" name="button" id = 'multi'>
                          <label class="form-check-label"> <i class="fas fa-times"> </i> Multiplicação</label>
                          <input type="radio" name="button" id = 'divi'>
                          <label class="form-check-label"> <i class="fas fa-divide"></i> Divisão </label>
                        </div>
                        

  

                      </div>
                    </div>
                    <div class="card-footer">
                  <button type="button" nome="calcular" value="calcular" class="btn btn-info" onclick="calcular()" style="float:right">Calcular</button>
                </div>
                  </div>
                </div>

                <h2 style="text-align: center;" id="resultado"> </h2>
               
                <!-- /.card-body -->
                
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>

          <script>
              function calcular(){

                var n1 = parseInt(document.getElementById('numero1').value);
                var n2 = parseInt(document.getElementById('numero2').value);

                var caixaresultado = document.getElementById('resultado');
                caixaresultado.innerHTML = "";

                var fazerAdd = document.getElementById('add');
                var fazerSub = document.getElementById('minus');
                var fazerMulti = document.getElementById('multi');
                var fazerDivi = document.getElementById('divi');


                if(fazerAdd.checked == true){

                  caixaresultado.innerHTML = n1 + n2;

                }
                else{
                  if(fazerSub.checked == true){

                    caixaresultado.innerHTML = n1-n2;
                  }
                  else{

                    if(fazerMulti.checked == true){

                      caixaresultado.innerHTML = n1*n2;
                    }

                    else{
                      if(fazerDivi.checked == true){

                        caixaresultado.innerHTML = n1/n2;
                      }
                    }
                  }

                }


              }



          </script>



      
    </div>
    <!-- /.card -->

  <?php 
  
  ?>
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
