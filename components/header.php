<style>
    .btn-menu {
        background: none;
        border: none;
        font-size: 1em;
        padding: 0.5em 1em;
        border-radius: 10px;
        position: absolute;
        top: 20em;
        right: 10px;
        display: none;
        transition: all 0.3s;
        background-color: white;
    }

    .btn-menu img {
        width: 20px;
    }

    @media (max-width: 1261px) {
        .header {
            position: relative;
        }

        .header_nav {
            position: absolute;
            background-color: #1f1485a6;
            top: 10em;
            right: -100%;
            height: 30em;
            transition: all 0.3s;
        }

        .header_links {
            display: flex;
            flex-direction: column;
        }

        .link {
            background-color: #1f1485a6;
        }

        .btn-menu {
            display: block;
        }

        .header_nav-active {
            right: 10px;
        }

        .btn-menu-active {
            right: 14em;
        }
    }
</style>

<center><header class="header">
    <div class="container">
        <div class="header_items">
            <a class="header_title" href=<?= $index ?? "./" ?>>Educa tu cuerpo</a>
            <button class="btn-menu">
                <img src="https://cdn-icons-png.flaticon.com/512/271/271218.png" alt="arrow image">
            </button>
            <nav class="header_nav">
                <ul class="header_links">
                    <li><a href=<?= $nosotros ?? "./views/sobre_nosotros.php" ?> class="link">Sobre nosotros</a></li>
                    <li><a href=<?= $contenido ?? "./views/contenido.php" ?> class="link">Contenido</a></li>
                    <li><a href=<?= $contacto ?? "./views/contacto.php" ?> class="link">Contacto</a></li>
                    <li><a href=<?= $Ayuda ?? "./views/Ayuda.php" ?> class="link">Ayuda</a></li>
                </ul>
            </nav>
            <?php if ($isLogged) : ?>
                <a class="button" href=<?= "./close.php?id=$_SESSION[id]" ?>>CERRAR SESSIÓN</a>
            <?php else : ?>
                <div>
                    <a class="button" href=<?= $login ?? "./login.php" ?>>Iniciar sesión</a>
                    <a class="button" href=<?= $register ?? "./register.php" ?>>Registrarse</a>
                </div>
            <?php endif ?>
        </div>
    </div>
</header></center>

<script>
    const btnMenu = document.querySelector('.btn-menu')
    const nav = document.querySelector('.header_nav')

    btnMenu.addEventListener('click', () => {
        nav.classList.toggle('header_nav-active')
        btnMenu.classList.toggle('btn-menu-active')
    })
</script>