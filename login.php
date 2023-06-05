<?php

error_reporting(0);
ini_set('display_errors', 0);

require_once('./conexion.php');
$incorrectData = false;

if ($_POST) {
    $name = mysqli_real_escape_string(conectar(), $_POST['name']);
    $password = mysqli_real_escape_string(conectar(), $_POST['password']);

    $result = mysqli_fetch_array(mysqli_query(conectar(), "
    SELECT user_id, password FROM user WHERE name = '$name';
    "));

    mysqli_close(conectar());

    if (password_verify($password, $result['password'])) {
        session_start();
        $_SESSION['id'] = $result['user_id'];
        header('location:./');
    }
    else {
        $incorrectData = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="diseño.css">


    <link rel="stylesheet" href="registro_y_login.css">
</head>

<body>
    <?php require_once('./components/header.php') ?>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse"><a href="./register.php">Regístrarse</a></button>
                </div>
            </div>


            <div class="contenedor__login-register">
                <form action="#" method="post" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <?= $incorrectData ? '<span style="color:red;">Datos incorrectos</span>' : null ?>
                    <input name="name" type="text" placeholder="Nombre De Usuario">
                    <input name="password" type="password" placeholder="Contraseña">
                    <button type="submit">Entrar</button>
                </form>
            </div>
        </div>

    </main>

    <script src="estructura.js"></script>
</body>

</html>