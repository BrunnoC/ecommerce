<?php
    $cadastroProdutoAtiva = " active ";
    $titulo = "Fusa Instrumentos Musicais";
    require_once "utils/header.php";
?>


  <div  class="container" id="produto-container">
  <a href="cadastroProdutos.php"><button type="button" class="btn btn-dark">Voltar</button></a>
  <br><br>
  <?php
    if(isset($_REQUEST["cadastrar"])){
    echo "<h3>Cadastrar</h3>";
    }
    if (isset($_REQUEST["editar"])){
        echo "<h3>Editar</h3>";
    }
  ?>
  <br>
  <?php
    if (isset($_REQUEST["id"]))
    {
        $id = $_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        $descricao = $_REQUEST["descricao"];
        $codigodebarras = $_REQUEST["cbarra"];
        $id_fabricante = $_REQUEST["idFab"];
        echo "<form method=\"POST\" action=\"operationsProdutos.php?q=update&id=$id&nome=$nome&descricao=$descricao&codigodebarras=$codigodebarras&id_fabricante=$id_fabricante\">";
    } 
    else{
    echo "<form method=\"POST\" action=\"operationsProdutos.php?q=insert\">";
    }

    ?>
    <div class="mb-3">
        <label>Nome Do Produto</label>
        <?php
         if (isset($_REQUEST["nome"]))
         {
             $nome = $_REQUEST["nome"];
             echo "<input type=\"text\" name=\"nome\" class=\"form-control\" value=\"$nome\"  required>";
         } 
         else{
            echo "<input type=\"text\" name=\"nome\" class=\"form-control\"   required>";
         }
         
         ?>
        <br>
        <label>Descrição</label>
        <?php
         if (isset($_REQUEST["descricao"]))
         {
             $descricao = $_REQUEST["descricao"];
             echo "<textarea class=\"form-control\" name=\"descricao\" id=\"exampleFormControlTextarea1\" rows=\"3\" required>$descricao</textarea>";
         } 
         else{
            echo "<textarea class=\"form-control\" name=\"descricao\" id=\"exampleFormControlTextarea1\" rows=\"3\" required></textarea>";
         }
         
         ?>
        
        <br>
        <label>Código De Barras</label>
        <?php
         if (isset($_REQUEST["cbarra"]))
         {
             $cbarra = $_REQUEST["cbarra"];
             echo "<input type=\"number\" name=\"codigodebarras\" class=\"form-control\" value=\"$cbarra\"  required>";
         } 
         else{
            echo "<input type=\"number\" name=\"codigodebarras\" class=\"form-control\"   required>";
         }
         
         ?>
         
        <label>Código Do Fabricante</label>
        <?php
         if (isset($_REQUEST["idFab"]))
         {
             $idFab = $_REQUEST["idFab"];
             echo "<input type=\"number\" name=\"id_fabricante\" class=\"form-control\" value=\"$idFab\"  required>";
         } 
         else{
            echo "<input type=\"number\" name=\"id_fabricante\" class=\"form-control\"   required>";
         }
         
         ?>
    </div>
    <?php
    if(isset($_REQUEST["cadastrar"])){
    echo "<button class=\"btn btn-dark\" id=\"cadastro-submit\" type=\"submit\">Cadastrar</button>";
    }
    if (isset($_REQUEST["editar"])){
        echo "<button class=\"btn btn-dark\" id=\"cadastro-submit\" type=\"submit\">Editar</button>";
    }
  ?>
    </form>

  </div>



<?php
  require_once "utils/footer.php";
?>