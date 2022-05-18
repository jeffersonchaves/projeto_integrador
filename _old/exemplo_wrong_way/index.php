<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $banco = "projeto_integrador";
    $usuario = "root";
    $senha = "password#22";

    $connection = new PDO("mysql:host=localhost; dbname=$banco", $usuario, $senha);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['username'])){

        $username = filter_input(INPUT_GET, 'username', FILTER_UNSAFE_RAW);
        $email = $_GET['email'];
        $password = $_GET['password'];

        $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";

        $connection->exec($sql);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="GET" action="http://localhost/projeto_integrador/exemplo_wrong_way/">

        <input type="text" name="username" placeholder="username"><br />
        <input type="text" name="email" placeholder="email"><br />
        <input type="text" name="password" placeholder="password"><br />
        <input type="text" name="email" placeholder="email"><br />

        <input type="submit">

    </form>
    
</body>
</html>
