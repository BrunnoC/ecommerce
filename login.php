<?php 
    $validaLogin = false;
    $LoginAtiva = " active ";
    $titulo = "Fusa | Cadastre-se";
    include_once "utils/header.php";
?>

  <div class="container" id="login-container">
    <h4>Faça login</h4>
    <p class="secondary-color">Seja Bem Vindo... <i class="bi bi-balloon-heart"></i></p>
    <form method="POST" action="autentica.php">
    <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail" required>
        <br>
        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
    </div>
    <button class="btn btn-dark" id="cadastro-submit" type="submit">Entrar</button>
    </form>
    <br>
    <?php 
      if (isset($_GET["sucesso"])){
        echo "<p>Não consegui verificar seu email ou sua senha :(   Tente novamente ou cadastre-se <p>";
      }
    ?>


  </div>



<?php
  require_once "utils/footer.php";
?>