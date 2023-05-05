<?php

function conectar(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name ="bd_productos";

    $con=mysqli_connect($_ENV['HOST']??$host, $_ENV['USER']??$user, 
    $_ENV['PASSWORD']??$pass, $_ENV['DB_NAME']??$db_name, $_ENV['PORT']??null);

    if (!$con) {
        die('Conexión fallida'. mysqli_connect_error());
    }

    return $con;
}

// CREAR TABLAS
mysqli_query(conectar(), "
    CREATE TABLE IF NOT EXISTS user(
        user_id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255),
        email VARCHAR(255),
        password VARCHAR(400)
    );
");