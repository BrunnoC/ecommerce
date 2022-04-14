<?php
    require_once("PDO.php");
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $pdo = new usePDO();
    $pdo->createDB();
    $pdo->createTable();

    $result = $pdo->select("SELECT * FROM usuarios WHERE email = '$email' AND senha = '".sha1($senha)."'");
    foreach($result as $row){
        $nome = $row['nome'];
    }

    if (($result) and ($result->rowCount() != 0)){
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = sha1($senha);
        $_SESSION['nome'] = $nome;
        header('location:index.php');
    }
    else{
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location:login.php');
    }

?>