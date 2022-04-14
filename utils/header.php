<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php
    if (!isset($validaLogin) == true){

      session_start();
      if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha'])) == true ){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location:login.php');
      }
  
      $logado = $_SESSION['login'];
    }

  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $titulo ?></title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <!--Google fonts - Lato-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Icons bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!--CSS do projeto-->
  <link rel="stylesheet" href="css/styles.css">
  <!-- JavaScript Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg fixed-top bg-primary-color" id="navbar">
    <div class="container py-3">
      <a href="#" class="navbar-brand primary-color">
        <img id="logoPrincipal" src="img/logo.png" alt="Fusa">
        <span>Fusa</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items" aria-controls="navbar-items" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbar-items">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="index.php" class="nav-link <?php echo $HomeAtiva?> primary-color" aria-current="true">Home</a>
          </li>
          <?php
            if(isset($_SESSION['nome'])){
              echo "<li class=\"nav-item\"><a href=\"cadastroProdutos.php\" class=\"nav-link $cadastroProdutoAtiva primary-color\">Produtos</a></li>";
            }
          ?>
          <li class="nav-item">
            <a href="login.php" class="nav-link <?php echo $LoginAtiva?> primary-color">Login</a>
          </li>
          <li class="nav-item">
            <a href="cadastro.php" class="nav-link <?php echo $CadastroAtiva?> primary-color">Cadastre-se</a>
          </li>
          <?php
            if(isset($_SESSION['nome'])){
              $nomeUsuarioLogado = $_SESSION['nome'];
              echo "<li class=\"nav-item\"><a href=\"logout.php\" class=\"nav-link primary-color\">$nomeUsuarioLogado , deseja sair?</a></li>";
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>