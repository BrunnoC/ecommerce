<?php
class usePDO {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "ecommerce";
    private $instance;

    function getInstance(){
        if (empty($instance)){
            $instance = $this->connection();
        }
        return $instance;
    }

    function connection(){
        try{
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;

        }catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage() . "<br>";
        }
    }

    function createDB(){
        try{
            $cnx = $this->getInstance();
            if ($cnx === NULL){
                $cnx = new PDO("mysql:host=$this->servername", $this->username, $this->password);
                $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
			$sql = "CREATE DATABASE IF NOT EXISTS $this->dbname ";
            $cnx->exec($sql);

        }catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    function createTable(){
        try{
            $cnx = $this->getInstance();
            $sql = "CREATE TABLE IF NOT EXISTS usuarios (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(50) NOT NULL,
                email VARCHAR(50),
                senha VARCHAR(100)
            )";


            $cnx->exec($sql);
        }catch(PDOException $e){
            echo $sql. "<br>" . $e->getMessage();
        }
    }

    function autentica($sql){
        $cnx = $this->getInstance();
        $this->createTable();
        $result = $cnx->query($sql);
        return $result;
    }

	function insert($sql){
		try{
			$cnx = $this->getInstance();
			$this->createTable();
			$cnx->exec($sql);
		}
		catch(PDOException $e)
		{
			return "Falha ao Inserir dados". "<br>".$e->getMessage();
		}
	}

    function select($sql){
        try{
            $cnx = $this->getInstance();
            $this->createTable();
            $result = $cnx->query($sql);

            return $result;
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    function update($sql){

        try{
            $cnx = $this->getInstance();
            $this->createTable();
            $result = $cnx->query($sql);
            return $result;
        }catch (PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    function delete($sql){

        try{
            $cnx = $this->getInstance();
            $this->createTable();
            $result = $cnx->query($sql);
            return $result;
        }catch (PDOException $e){
            echo $sql. "<br>". $e->getMessage();
        }
    }

}
?>