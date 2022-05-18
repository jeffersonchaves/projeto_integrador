<?php

include_once __DIR__ . '/../../config.php';

class Connection {

    private $user = USERNAME;

    public function getConnection(): PDO {

        try {
            $connection = new PDO("mysql:host=localhost; dbname=projeto_integrador", $this->user, "password#22");

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\Throwable $th) {
            print("Erro ao conectar com o banco de dados");
        }


        return $connection;
    }


}