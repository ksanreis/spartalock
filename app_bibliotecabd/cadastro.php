<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="icone.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Biblioteca Digital</title>

  <style>
    .card-pegar-livro {
      padding: 30px 0 0 0;
      width: 50%;
      margin: 0 auto;
    }
  </style>

  <style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
      margin: 0 auto;
    }
  </style>
</head>

<body>




  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a href="index.php" class="brand-logo">
        <img src="Biblioteca digital.png" width="40" height="40" class="d-inline-block align-top" alt="">
        Biblioteca Digital
      </a>
    </div>
  </nav>

  </nav>
  <div class="container">
    <div class="row">

      <div class="card-login">
        <div class="card">
          <div class="card-header" style="background-color: #e3f2fd;">
            Cadastro
          </div>
          <div class="card-body">

            <form action="cadastrar.php" method="post">
              <div class="form-group">
                <input name="nome" type="text" class="form-control" placeholder="Nome">
              </div>
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>

              <?php if (isset($_GET['login']) &&  $_GET['login'] == 'igual') { ?>
                <div class="alert alert-warning" role="alert">
                  Email já está cadastrado.
                </div>
              <?php } ?>
              <button class="waves-effect waves-light btn-large blue lighten-3" type="submit">Cadastrar</button>
              <div class="text-center w-full p-t-115">
                <span class="txt1">
                  Já é cadastrado(a)?
                </span>

                <a class="txt1 bo1 hov1" href="index.php">
                  Faça seu login
                </a>
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>