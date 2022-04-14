<?php
require_once("PDO.php");

$q = $_REQUEST["q"];

$pdo = new usePDO();
$pdo->createDB();
$pdo->createTable();

switch($q){
    case "readUsuarios":
        $result = $pdo->select("SELECT * FROM usuarios");
        print(json_encode($result->fetchAll()));
        break;
    
    case "update":
        $id = $_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        $result = $pdo->update(("UPDATE usuarios SET nome = '$nome', email = '$email', senha = '".sha1($senha) ."' WHERE id = '$id' "));
        echo "Usuário  $id - $nome atualizado com sucesso";
        break;
    case "insert":
        $nome = $_REQUEST["nome"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        $message = $pdo->insert("INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email','".sha1($senha)."') ");
        header("location:cadastro.php?sucesso=s");
        break;
    case "delete":
        $id = $_REQUEST["id"];
        $pdo->delete("DELETE FROM usuarios WHERE id = '$id' ");
        echo "Usuário deletado com sucesso";
        break;
        
}
?>