<?php
require_once("PDO.php");

$q = $_REQUEST["q"];

$pdo = new usePDO();
$pdo->createDB();
$pdo->createTableProdutos();

switch($q){
    case "readProdutos":
        $result = $pdo->select("SELECT * FROM produtos");
        print(json_encode($result->fetchAll()));
        break;
    
    case "update":
        $id = $_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        $descricao = $_REQUEST["descricao"];
        $codigodebarras = $_REQUEST["codigodebarras"];
        $id_fabricante = $_REQUEST["id_fabricante"];
        $result = $pdo->update(("UPDATE produtos SET nome = '$nome', descricao = '$descricao', codigodebarras = '$codigodebarras', id_fabricante = $id_fabricante WHERE id = '$id' "));
        header("location:cadastroProdutos.php");
        break;
    case "insert":
        $nome = $_REQUEST["nome"];
        $descricao = $_REQUEST["descricao"];
        $codigodebarras = $_REQUEST["codigodebarras"];
        $id_fabricante = $_REQUEST["id_fabricante"];
        $message = $pdo->insert("INSERT INTO produtos (nome, descricao, codigodebarras,id_fabricante) VALUES ('$nome', '$descricao','$codigodebarras', $id_fabricante) ");
        header("location:cadastroProdutos.php");
        break;
    case "delete":
        $id = $_REQUEST["id"];
        $pdo->delete("DELETE FROM produtos WHERE id = '$id' ");
        header("location:cadastroProdutos.php");
        break;
        
}
?>