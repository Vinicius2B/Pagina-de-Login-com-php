<?php

 include_once("conexao.php");
 
 $Vuser= $_POST['txt_username'];
 $Vemail = $_POST['txt_email'];
 $Vsenha = $_POST['txt_senha'];


 $sql = "INSERT INTO clientes (usuario,email,senha) values('$Vuser', '$Vemail', '$Vsenha')";
 $query = mysqli_query($conn, $sql) or die ("Erro");
 
 if(mysqli_affected_rows($conn)) {
    echo "<script> window.alert('login successfully') </script>";
    echo " <script> location.href='../index.html' </script>";
} else {
    echo "<script> window.alert('error when logging in!') </script>";
    echo " <script> location.href='../index.html' </script>";
}
 
 ?>