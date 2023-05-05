<?php 
session_start();

require_once('conexion.php');
$isLogged = false;
$name = '';

// echo $_SESSION['id'];

if ($_SESSION['id']) {
    $name =  mysqli_fetch_array(mysqli_query(conectar(), "
        SELECT name FROM user WHERE user_id = $_SESSION[id];
    "))['name'];
    $isLogged = true;
}

mysqli_close(conectar());
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="diseño.css">
    <title>Educa tu cuerpo</title>
</head>

<body>
    <?php require_once('./components/header.php') ?>
    <div class="container">
        <section class="section">
            <?php if($isLogged): ?>
                <h1>BIENVENIDO ¡<?= $name ?>!</h1>
            <?php else: ?>
                <h1>Educa tu cuerpo</h1>
                <h2>Introduccion</h2>
            <?php endif ?>
        </section>
    </div>
</body>

</html>