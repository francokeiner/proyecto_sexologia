<header class="header">
    <div class="container">
        <div class="header_items">
            <a class="header_title" href="./">Educa tu cuerpo</a>
            <nav>
                <ul class="header_links">
                    <li><a href=<?= $inicio??"./views/inicio.php" ?> class="link">Inicio</a></li>
                    <li><a href=<?= $nosotros??"./views/sobre_nosotros.php" ?> class="link">Sobre nosotros</a></li>
                    <li><a href=<?= $contenido??"./views/contenido.php" ?> class="link">Contenido</a></li>
                    <li><a href=<?= $contacto??"./views/contacto.php" ?> class="link">Contacto</a></li>
                </ul>
            </nav>
            <?php if($isLogged): ?>
                <a class="button" href=<?= "./close.php?id=$_SESSION[id]"?>>CERRAR SESSIÓN</a>
            <?php else: ?>
                <div>
                    <a class="button" href=<?= $login??"./login.php" ?>>Iniciar sesión</a>
                    <a class="button" href=<?= $register??"./register.php" ?>>Registrarse</a>
                </div>
            <?php endif ?>
        </div>
    </div>
</header>