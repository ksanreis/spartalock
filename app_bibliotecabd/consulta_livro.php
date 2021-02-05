<?php
require "menu.php";
require "validar_acesso.php";
require "historico_livros.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>


</head>
<style>
  .container {
    width: 100vw;
    height: 60vh;
    /*background: #6C7A89;*/
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center
  }

  .box {
    width: 500px;
    height: 500px;
    background: #fff;
  }
</style>

<body>

  <br /><br /><br />
  <div class="container">
    <div class="box">
      <div class="card">
        <div class="card-header">
          Histórico de livros
        </div>
        <table class="table table-primary">
          <tr>
            <th>Título do Livro</th>
            <th>Tema do Livro</th>

            <?php foreach ($dados_livros as $livro) {
              $historico_livros = explode('#', $livro);
              /*echo "<pre>";
              print_r($historico_livros);
              echo "</pre>";*/
            ?>
          <tr>
            <?php
              echo "<td class='table-info'>";
              echo $historico_livros[1];
              echo "</td>";
              echo "<td class='table-info'>";
              echo $historico_livros[0];
              echo "</td>";

            ?>
          </tr>
      </div>

    </div>
    </tr>
  <?php } ?>
  </table>
  <div class=" col-6">
    <a class="btn  btn-primary" href="home.php">Voltar</a>
  </div>
  </div>
  </div>
  <div class="row mt-5">

  </div>

</body>

</html>