<?php
//para fazer conexao com o banco de Dados
$conn = mysqli_connect("127.0.0.1", "root", "", "bd_app_biblioteca");

if ($conn->connect_error) {
  die("Erro Conexão: " . $conn->connect_error);
}
