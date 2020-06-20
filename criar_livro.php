<?php

include "conexao.php";

$conn = conexao();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "livraria";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO Livros (titulo, autor, genero, editora, ano)
  VALUES ('Pequeno manual antirracista', 'Djamila Ribeiro', 'didático', 'Companhia das Letras',2019)";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Livro Adicionado com Sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>