<?php 

class Connection {

    private $host = "localhost";
    private $dbname = "projeto_integrador";
    private $user = "root";
    private $password = "password#22";

    public function getConnection(){
        $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", 
        $this->user, 
        $this->password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}

$conn = new Connection();
$conn->getConnection();