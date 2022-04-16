<?php
    $cadastroProdutoAtiva = " active ";
    $titulo = "Fusa Instrumentos Musicais";
    require_once "utils/header.php";
?>


  <div  class="container" id="listprodutos-container">
  <a href="Produto.php?cadastrar=cadastrar"><button type="button" class="btn btn-dark">Cadastrar Novo Produto</button></a>
    <table class="table bg-light mt-3" id="tabelaProdutos">
 </table>

  </div>



<?php
  require_once "utils/footer.php";
?>