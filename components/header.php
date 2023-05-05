<header class="header">
    <div class="container">
        <div class="header_items">
            <a class="header_title" href="./">Educa tu cuerpo</a>
            <nav>
                <ul class="header_links">
                    <li><a href="#" class="link">Inicio</a></li>
                    <li><a href="#" class="link">Sobre nosotros</a></li>
                    <li><a href="#" class="link">Contenido</a></li>
                    <li><a href="#" class="link">Contacto</a></li>
                </ul>
            </nav>
            <?php if($isLogged): ?>
                <a class="button" href=<?= "./close.php?id=$_SESSION[id]"?>>CERRAR SESSIÓN</a>
            <?php else: ?>
                <div>
                    <a class="button" href="./login.php">Iniciar sesión</a>
                    <a class="button" href="./register.php">Registrarse</a>
                </div>
            <?php endif ?>
        </div>
    </div>
</header>