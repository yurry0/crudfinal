<?php

//Função de Conexão

function conexao(){


  
$servername = "localhost";
$username = "root";
$password = "";
$db = "livraria";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Conectado com sucesso!";
  return $conn;
} catch(PDOException $e) {
  echo "Conexão falhou!" . $e->getMessage();
}


}

?>