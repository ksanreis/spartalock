<?php
require "menu.php";
require "validar_acesso.php";
?>
<?php
//arrays de pedir livros
$livros = array();

$arquivo = fopen('livros-pedidos.txt', 'r');
//feof - testa pelo fim do arquivo, ou seja, ela percorre
//o arquivo até encontrar o fim dele

//fgets: Lê uma linha inteira de um ponteiro(cursor) de arquivo
while (!feof($arquivo)) {
  $registro = fgets($arquivo);
  //echo $registro;
  $livros[] = $registro;
}

/*echo "<pre>";
print_r($livros);
echo "</pre>";
*/
fclose($arquivo);

//só para visualziar o array de chamados

/*echo '<pre>';
print_r($livros);
echo '</pre>';*/
?>

<!DOCTYPE html>
<html lang="pt">

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


  <div class="container">
    <div class="box">
      <div class="card">
        <div class=" card-content black-text">
          <span class=" card-title">Consulta Livro</span>
        </div>
        <!--foreach uma iteração de uma lista-->

        <?php foreach ($livros as $livro) { ?>
          <div class="card-action">

            <div>
              <?php $dados_livros = explode('#', $livro);
              if (count($dados_livros) < 2) {
                continue;
              }
              /*echo '<pre>';
              print_r($chamado_dados);
              echo '</pre>';*/
              ?>
              <!--<p>Titulo Livro</p>-->
              <p> Titulo: <?php echo $dados_livros[0] ?> </p>
            </div>
            <div style="display:flex;">
              <p> Tema: <?php echo $dados_livros[1] ?></p>
            </div>
          </div>
        <?php } ?>

      </div>
      <div class="col-6">
        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
      </div>
    </div>
  </div>



</body>

</html>