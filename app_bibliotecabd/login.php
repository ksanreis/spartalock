<?php
session_start();
require("conexao.php"); //incorporar o arquivo 
$email = $_POST['email'];
$senha = $_POST['senha'];
$query_ = "SELECT * FROM tb_usuario WHERE email ='$email' AND senha = '$senha'";
$result = $conn->query($query_);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    //echo $row['id_usuario'] . "|" . $row['senha'] . "|" . $row['nome'];
    $_SESSION['idusuario'] = $row['id_usuario'];
    $_SESSION['autenticado'] = 'SIM';
    header('Location:home.php');
  }
} else {
  $_SESSION['autenticado'] = 'NAO';
  header('Location:index.php?login=erro');
}
$conn->close();
