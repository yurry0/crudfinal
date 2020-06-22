<?php

session_start();
include "conexao.php";
$conn = conexao();


try {
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("UPDATE livros SET id=:id, titulo=:titulo, autor=:autor, genero=:genero, editora=:editora, ano=:ano WHERE id=:id");
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':titulo', $titulo);
  $stmt->bindParam(':autor', $autor);
  $stmt->bindParam(':genero', $genero);
  $stmt->bindParam(':editora', $editora);
  $stmt->bindParam(':ano', $ano);

  $id = $_GET ['id'];
  $titulo = $_POST['titulo'];
  $autor = $_POST['autor'];
  $genero = $_POST['genero'];
  $editora = $_POST['editora'];
  $ano = $_POST['ano'];
  
  $stmt->execute();



$_SESSION['edit'] = "Dados editados com sucesso!";
} catch(PDOException $e) {
$_SESSION['edit'] = "Error: " . $e->getMessage();
}
$conn = null;


header('Location: index_livro.php');


?>