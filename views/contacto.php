<?php
require_once('./links.php');
error_reporting(0);
ini_set('display_errors', 0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../diseño.css">
    <link rel="stylesheet" href="../css/autoconcepto.css">


</head>

<body>

    <?php require_once('../components/header.php') ?>
    <div class="container">
        <div class="container_content">
        <div class="content">
            <div class="aside_content">
                <aside class="aside">
                    <ul class="lista">
                        <li><a href="">Autoconcepto</a></li>
                        <li><a href="">Autoestima</a></li>
                        <li><a href="">Relaciones interpersonales</a></li>
                        <li><a href="">Preferencia Sexual</a></li>
                        <li><a href="">Orientación Sexual (tipos)</a></li>
                        <li><a href="">Género</a></li>
                        <li><a href="">Tipos de sexo (fálico, anal, vaginal)</a></li>
                    </ul>
                </aside>
            </div>
            <main class="main_Content">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam sequi dolores eos blanditiis autem aliquam necessitatibus asperiores aut obcaecati eum consectetur ipsa delectus pariatur exercitationem dicta, dolore optio fugit veniam.
                    Magni architecto possimus consequuntur non modi illo, nihil reiciendis ullam voluptas, quidem iusto expedita ea enim labore placeat dolorem saepe sed eum autem. Aperiam beatae aliquam ipsam, necessitatibus officia ipsa?
                </p>
            </main>
        </div>

        <footer id="footer">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="brand">EDUCA TU CUERPO</h2>
                <p>el mayor interes para cuidar nuestro planeta </p>
            </div>
            <div class="social-media">
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-instagram'></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
    </footer>

</body>

</html>