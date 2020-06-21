<?php


include "conexao.php";
$conn = conexao();


try {
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("DELETE FROM livros WHERE id=:id");
  $stmt->bindParam(':id', $id);

  $id =$_GET['id'];

  $stmt->execute();

  

  //echo "Deletado com sucesso";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;


header('Location: index_livro.php');


?>