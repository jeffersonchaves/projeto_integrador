<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require "../connection/Connection.php";

    $conn = new Connection();

    $pdo = $conn->getConnection();

    $tabela = $pdo->query("SELECT * FROM users");

    $usuarios = $tabela->fetchAll(PDO::FETCH_ASSOC);

    print_r($usuarios);