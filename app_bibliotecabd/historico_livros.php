<?php
require("conexao.php");
$id_usuario = $_SESSION['idusuario'];
$query_ = "SELECT * FROM tb_livros WHERE fk_id_usuario = '$id_usuario'ORDER BY tema_livro ASC";
$result = $conn->query($query_);
$dados_livros = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    //echo $row['nome_aluno'] . "|" . $row['senha'] . "|";
    $dados_livros[] = $row['tema_livro'] . '#' . $row['titulo_livro'];
  }
} else {

  //header('Location:home.php?nota=erro1'); //usada para enviar cabeçalho bruto
  /* echo ("<script>
        window.alert('Você não possui livros pedidos.')
        window.location.href='home.php';
    </script>");*/
}
$conn->close();
