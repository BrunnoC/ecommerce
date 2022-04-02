<?php 
        $CadastroAtiva = " active ";
    $titulo = "Fusa | Cadastre-se";
    include_once "utils/header.php";
?>

  <!--DESTAQUES-->
  <div class="container" id="cadastro-container">
    <h4>Cadastre-se em nosso site</h4>
    <p class="secondary-color">Aqui é onde começa o paraíso... <i class="bi bi-music-note"></i></p>
    <form>
    <div class="mb-3">
        <input type="email" class="form-control" placeholder="Digite seu e-mail">
        <br>
        <input type="password" class="form-control" placeholder="Digite sua senha">
    </div>
    <button class="btn btn-dark" id="cadastro-submit" type="submit">Cadastrar</button>
    </form>
  </div>



  <?php
  require_once "utils/footer.php";
?>