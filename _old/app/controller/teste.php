<?php

    include_once __DIR__ . '/../../config.php';
    include_once __DIR__ . '/../connection/Connection.php';


    print base_url;

    print "<br/>";


    $connection = new Connection();

    $connection = $connection->getConnection();

    $statement = $connection->query("SELECT * FROM users");

    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($users as $user){
        echo $user['username'] . '<br />';
    }

