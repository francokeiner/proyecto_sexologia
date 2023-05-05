<?php
require_once('./conexion.php');
$inequalPasswords = false;

if ($_POST) {
    $name = mysqli_real_escape_string(conectar(),$_POST['name']);
    $email = mysqli_real_escape_string(conectar(), $_POST['email']);
    $password = mysqli_real_escape_string(conectar(), $_POST['password']);
    $confirmPassword = mysqli_real_escape_string(conectar(), $_POST['confirm_password']);
    $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
    
    if ($password !== $confirmPassword) {
        $inequalPasswords = true;
    }
    else {
        mysqli_query(conectar(), "
            INSERT INTO user(name, email, password) VALUES ('$name', '$email', '$passwordHashed');
        ");
        header('location:./login.php');
    }

    mysqli_close(conectar());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Ingresa sesión desde aqui.</p>
                    <button id="btn__registrarse"><a href="./login.php">Iniciar Sesión</a></button>
                </div>
            </div>


            <div class="contenedor__login-register">
                <form action="#" method="post" class="formulario__login">
                    <h2>Registrarse</h2>
                    <input required name="name" type="text" placeholder="Nombre">
                    <input required name="email" type="email" placeholder="Correo Electronico">
                    <input required name="password" type="password" placeholder="Contraseña">
                    <input required name="confirm_password"type="password" placeholder="Confirmar Contraseña">
                    <?= $inequalPasswords ? '<span style="color:red;">Las contraseñas no coincideden</span>' : null ?>
                    <button id="btn" type="submit">Registrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="estructura.js"></script>
</body>

</html>