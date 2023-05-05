<?php
require_once('./conexion.php');

if ($_POST) {
    $name = mysqli_real_escape_string(conectar(),$_POST['name']);
    $email = mysqli_real_escape_string(conectar(), $_POST['email']);
    $password = mysqli_real_escape_string(conectar(), $_POST['password']);
    $finalPassword = password_hash($password, PASSWORD_BCRYPT);
    
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
                    <button id="btn__registrarse">Iniciar Sesión</button>
                </div>
            </div>


            <div class="contenedor__login-register">
                <form action="#" method="post" class="formulario__login">
                    <h2>Registrarse</h2>
                    <input required name="name" type="text" placeholder="Nombre">
                    <input required name="email" type="email" placeholder="Correo Electronico">
                    <input required name="password" type="password" placeholder="Contraseña">
                    <input required name="confirm_password"type="password" placeholder="Confirmar Contraseña">
                    <button id="btn" type="submit">Registrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="estructura.js"></script>
    <script src="passwordVerify.js"></script>
</body>

</html>