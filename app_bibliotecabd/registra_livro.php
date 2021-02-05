<?php
session_start();
require("conexao.php");
$titulo = $_POST['titulo'];
$tema = $_POST['tema'];
$id_usuario = $_SESSION['idusuario'];

//query para inserir dados de pedido de livro
$stmt = $conn->prepare("INSERT INTO tb_livros (fk_id_usuario,tema_livro,titulo_livro) VALUES (?,?,?)");
$stmt->bind_param("iss", $id_usuario, $tema, $titulo);
$stmt->execute();
$conn->close();
echo ("<script>
        window.alert('Pedido de livro realizado com Sucesso!')
        window.location.href='home.php';
    </script>");
