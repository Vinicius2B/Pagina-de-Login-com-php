<?php
  $servidor = "localhost";
  $senha = "lemos";
  $banco = "cadastro";
  $usuario = "root";

  
  //criando conexão
  $conn = mysqli_connect($servidor,$usuario, $senha, $banco);
  
  if(!$conn){
    die("Falha na conexão: ".mysqli_connect_error());
}
?>