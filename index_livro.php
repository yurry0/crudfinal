<!DOCTYPE html>
<html>
<head>

<style>
h1{text-shadow: -1px 3px black;
    letter-spacing: 15px;
    background-color:deepskyblue};

</style>



 <!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Indice - Livros</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-sidebar-fixed">
<!-- Site wrapper -->
<div class="wrapper">
 
  <?php   session_start();
  include "includes/sidebar.php";
  include "includes/content_header.php";
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-7">
            <h1 style="text-align: center; margin-left:41rem; color:white;">-Livraria-</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

            <?php
              include "conexao.php";
            ?>

              <?php 
              if(isset($_SESSION['del'])){
              
                $mensagem = $_SESSION['del'];
                echo "
                <script>
                
                   window.onload = function(){
                      toastr.info('$mensagem');
                    };
                
                </script>
                ";
      
            }
            
            else if(isset($_SESSION['add'])){
              
              $mensagem2 = $_SESSION['add'];
              echo "
              <script>
                 window.onload = function(){
                    toastr.success('$mensagem2');
                  };
              
              </script>
              ";
          
          }

          else if(isset($_SESSION['edit'])){
              
            $mensagem3 = $_SESSION['edit'];
            echo "
            <script>
               window.onload = function(){
                  toastr.success('$mensagem3');
                };
            
            </script>
            ";
          }
              session_unset();

              ?>


<?php 
              
              
         session_unset();

              ?>




      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Livros Cadastrados</h3>
                <small class="float-right"> <a href="add_livro.php"> <button type="button" class="btn btn-block btn-primary">Adicionar Livro</button> </a></small>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>CÓDIGO</th>
                    <th>Titulo</th>
                    <th>Autor(as)</th>
                    <th>Genero</th>
                    <th>Editora</th>
                    <th>Ano</th>
                    <th>OPÇÕES</th>
                    
                    
                  </tr>
                  </thead>
                  <tbody>
                  

                  <?php

                  $conn=conexao();

                  try {
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT * FROM livros");
                    $stmt->execute();

                    // set the resulting array to associative
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach($stmt->fetchAll() as $k=>$v){
                      echo '<tr>';
                      echo '<td>'.$v['id'].'</td>';
                      echo '<td>'.$v['titulo'].'</td>';
                      echo '<td>'.$v['autor'].'</td>';
                      echo '<td>'.$v['genero'].'</td>';
                      echo '<td>'.$v['editora'].'</td>';
                      echo '<td>'.$v['ano'].'</td>';
                      echo '<td style="text-align:center"> 
                      
                      <a class="btn btn-primary btn-sm" href="visu_livro.php?id='.$v['id'].'">
                              <i class="fas fa-folder">
                              </i>
                      </a>
                      
                      <a class="btn btn-info btn-sm" href="edit_livro.php?id='.$v['id'].'">
                          <i class="fas fa-pencil-alt">
                          </i>
                      </a>
                       
                      <a class="btn btn-danger btn-sm" href="delete_livro.php?id='.$v['id'].'" data-href="delete_livro.php?id='.$v['id'].'" data-toggle="modal" data-target="#confirm-delete">
                      <i class="fas fa-trash-alt">
                      </i>
                      </a>';
                      echo '</tr>';
                    }
                  } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                  }
                  $conn = null;
                  //echo "</table>";
            ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
       

            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      Confimar Exclusão
                  </div>
                  <div class="modal-body">
                      Essa ação vai excluir o conteúdo <?php echo $v['titulo'];?>. Deseja mesmo excluir?
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      <a class="btn btn-danger btn-ok">Sim, exclua este conteúdo.</a>
                  </div>
              </div>
          </div>
      </div>

          </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->

</div>
    <?php include "includes/footer.php";
    ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


<script> 
$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});

</script>

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/toastr/toastr.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>

</body>
</html>
