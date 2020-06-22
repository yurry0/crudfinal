
<!DOCTYPE html>
<html>
<head>

<style>
h1{text-shadow: 1px 1px black;
    letter-spacing: 15px;};

</style>
 <!-- DataTables -->
 <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Visualizar</title>
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
<body class="hold-transition sidebar-mini layout-sidebar-fixed">
<!-- Site wrapper -->
<div class="wrapper">
 
  <?php include "includes/sidebar.php";
  include "includes/content_header.php";
  
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-7">
            <h1 style="text-align: center; margin-left:40rem;background-color: lightblue;" >Detalhes do Produto</h1>
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
                  $conn=conexao();
                  try {
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT * FROM livros WHERE id=:id");
                    $stmt->bindParam(':id', $id);
                    $id = $_GET['id'];
                    $stmt->execute();
                    // set the resulting array to associative
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach($stmt->fetchAll() as $k=>$v) {


                      $id = $v['id'];
                      $titulo = $v['titulo'];
                      $autor = $v['autor'];
                      $genero = $v['genero'];
                      $editora = $v['editora'];
                      $ano = $v['ano'];
                                            
                    }
                  } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                  }
                  $conn = null;
                  //echo "</table>";
            ?>
      

      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Visualizar</h3>
              </div>


                 <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-book"></i> <?php echo $titulo?>
                    <small class="float-right"></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <address>
                    <strong><?php echo "Autor: ".$autor?></strong><br>
                    <?php echo "Genero: ".$genero?> <br>
                    <?php echo "Autor: ".$autor?><br>
                    <?php echo "Editora: ".$editora?><br>
                    <?php echo "Ano de Publicação: ".$ano?><br>
                    
                    Ranking de Popularidade: xxxº Posição
                    
                    
                  </address>
                </div>
                <!-- /.col -->
                <!-- /.col -->
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <!-- /.card-header -->
              <!-- form start -->

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

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
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
