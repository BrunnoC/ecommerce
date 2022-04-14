<?php 
    $validaLogin = false;
    $CadastroAtiva = " active ";
    $titulo = "Fusa | Cadastre-se";
    include_once "utils/header.php";
?>

  <div class="container" id="cadastro-container">
    <h4>Cadastre-se em nosso site</h4>
    <p class="secondary-color">Aqui é onde começa o paraíso... <i class="bi bi-music-note"></i></p>
    <form method="POST" action="operationsUsuarios.php?q=insert">
    <div class="mb-3">
        <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required>
        <br>
        <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail" required>
        <br>
        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
    </div>
    <button class="btn btn-dark" id="cadastro-submit" type="submit">Cadastrar</button>
    </form>
    <br>
    <?php 
      if (isset($_GET["sucesso"])){
        echo "<p>Cadastro Realizado com Sucesso  :)<p>";
      }
    ?>


  </div>



<?php
  require_once "utils/footer.php";
?>