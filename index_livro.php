
<!DOCTYPE html>
<html>
<head>

<style>
h1{text-shadow: -1px 3px white;
    letter-spacing: 15px;
    background-color:deepskyblue};

</style>
 <!-- DataTables -->
 <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AV2</title>
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
            <h1 style="text-align: center; margin-left:41rem">Livraria</h1>
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
                    //echo "<table style='border: solid 1px black;'>";
                    //echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

                  /*class TableRows extends RecursiveIteratorIterator {
                    function __construct($it) {
                      parent::__construct($it, self::LEAVES_ONLY);
                    }

                    function current() {
                      return "<td>" . parent::current(). "</td>";
                    }

                    function beginChildren() {
                      echo "<tr>";
                    }

                    function endChildren() {
                      echo "</tr>" . "\n";
                    }
                  }
                  */
                  //include "conexao.php";

                  $conn=conexao();

                  try {
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT * FROM livros");
                    $stmt->execute();

                    // set the resulting array to associative
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach($stmt->fetchAll() as $k=>$v) {
                      //echo $v;
                      //var_dump($v); 
                      echo '<tr>';
                      echo '<td>'.$v['id'].'</td>';
                      echo '<td>'.$v['titulo'].'</td>';
                      echo '<td>'.$v['autor'].'</td>';
                      echo '<td>'.$v['genero'].'</td>';
                      echo '<td>'.$v['editora'].'</td>';
                      echo '<td>'.$v['ano'].'</td>';
                      echo '<td style="text-align:center"> 
                      <a class="btn btn-primary btn-sm" href="#">
                      <i class="fas fa-folder">
                      </i>
                      </a>
                      <a class="btn btn-info btn-sm" href="#">
                          <i class="fas fa-pencil-alt">
                          </i>
                      </a>
                      <a class="btn btn-danger btn-sm" href="#">
                          <i class="fas fa-trash">
                          </i>
                      </a> </td>';
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
