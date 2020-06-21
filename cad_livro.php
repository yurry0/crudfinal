<?php


include "conexao.php";
$conn = conexao();


try {
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO livros (titulo, autor, genero, editora, ano)
  VALUES (:titulo, :autor, :genero, :editora, :ano)");
  $stmt->bindParam(':titulo', $titulo);
  $stmt->bindParam(':autor', $autor);
  $stmt->bindParam(':genero', $genero);
  $stmt->bindParam(':editora', $editora);
  $stmt->bindParam(':ano', $ano);
  

  // insert a row
  //$titulo = "Kingdom Hearts Vol.2";
  //$autor = "Shiro Amano";
  //$genero = "Aventura";
  //$editora = "Square Enix";
  //$ano = "2008";


  $titulo = $_POST['titulo'];
  $autor = $_POST['autor'];
  $genero = $_POST['genero'];
  $editora = $_POST['editora'];
  $ano = $_POST['ano'];
  
  $stmt->execute();

  

  echo "Novo cadastro efetuado com sucesso!";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;


header('Location: index_livro.php');


?>