<?php
require("conexao.php");
$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$query_ = "SELECT * FROM tb_usuario WHERE email ='$email'";
$result = $conn->query($query_);
$registeredEmail = false;

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $registeredEmail = false;
    header('Location:cadastro.php?login=igual');
  }
} else {
  $registeredEmail = true;
}

if ($registeredEmail) {
  $stmt = $conn->prepare("INSERT INTO tb_usuario (nome,email,senha) VALUES (?,?,?)");
  $stmt->bind_param("sss", $nome, $email, $senha);
  $stmt->execute();
  $conn->close();
  echo ("<script>
        window.alert('Cadastro realizado com Sucesso!')
        window.location.href='index.php';
    </script>");
  //header('Location:index.php');
}
