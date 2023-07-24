<?php

error_reporting(0);
ini_set('display_errors', 0);

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
    <title>Educa tu cuerpo</title>
    <link rel="stylesheet" href="diseño.css">
    <link rel="stylesheet" href="./css/autoconcepto.css">
</head>

<body>
    <?php require_once('./components/header.php') ?>
    <div class="container">
        <section class="section">
            <?php if ($isLogged) : ?>
                <h1>BIENVENIDO ¡<?= $name ?>!</h1>
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
                        <div>
                            <p>AUTOCONCEPTO</p>
                            <br>
                            <p> El autoconcepto es la opinión que una persona tiene sobre sí misma, que lleva asociado un juicio de valor. Autoconcepto no es lo mismo que autoestima, sin embargo su relación es muy estrecha y no podría entenderse uno sin la presencia del otro.
                                La manera en que nos vemos a nosotros mismos y a nuestras habilidades es lo que podríamos llamar el «autoconcepto». Ejemplos del auto-concepto podrían ser: «Soy una persona sociable», «Puedo resolver cualquier problema», «Estoy gorda», «Soy poco atractivo», «Soy torpe», «Soy incontrolable», etc.
                                Existen tres tipos de autoconceptos, los cuales se caracteriza por el concepto que tiene una persona de sí misma en diferentes entornos o situaciones. Dentro de los tipos de autoconcepto encontramos el yo individual, el yo colectivo y el yo interpersonal.
                                El autoconcepto es la opinión, el concepto o la impresión que la gente tiene de sí misma, opinión que se desarrolla a lo largo de los años. Por tanto se trata del conjunto de percepciones cognoscitivas y actitudes que la gente tiene acerca de sí misma.</p>
                        </div>
                        <br>
                        <br>
                        <div>
                            <p> AUTOESTIMA</p>
                            <br>
                            <p>La autoestima es el conjunto de percepciones, pensamientos, evaluaciones, sentimientos y tendencias de comportamientos dirigidos hacia uno mismo, hacia nuestra manera de ser, y hacia los rasgos de nuestro cuerpo y nuestro carácter.
                                Se puede definir la autoestima como «la valoración positiva o negativa que el sujeto hace de su autoconcepto, valoración que se acompaña de sentimientos de valía personal y auto aceptación»
                                Tipos de autoestima
                                Autoestima alta y estable.
                                Autoestima baja y estable.
                                Autoestima alta e inestable.
                                Autoestima baja e inestable.
                                Tener buena autoestima nos ayuda a sentirnos mucho mejor con nosotros mismos y actuar como más motivación. Por lo tanto, una buena autoestima puede ayudarnos a: Conocernos, aceptarnos y aceptarnos tal y como somos.
                                ¿Por qué es importante la autoestima en las personas? Es importante para que la persona sea capaz de cumplir sus objetivos, se reconozca a sí misma y tenga un buen autoconcepto, una buena identidad de quién es, de qué quiere y hasta dónde quiere llegar.
                                ¿Cuáles son los factores que afectan la autoestima?
                                Autoestima baja? Cómo dejar de ser nuestro peor enemigo
                                “Entre las causas más frecuentes de baja autoestima podemos destacar las siguientes: mensajes negativos, abusos, ridiculización del aspecto físico, mal ambiente familiar, dificultades académicas, experiencias negativas tempranas o falta de demostración de cariño y afecto por el entorno”.
                                ¿Cómo se forma la autoestima de una persona?
                                La autoestima se desarrolla desde que somos pequeños y nunca para de cambiar, evolucionar, mejorar o deteriorarse. Está en continuo movimiento y no es espontánea ni voluntaria, sino que proviene de lo que cada uno experimentamos en distintas situaciones.</p>
                        </div>
                        <br>
                        <br>
                        <div>
                            <p> RELACIONES INTERPERSONALES</p>
                            <br>
                            <p>Las relaciones interpersonales son asociaciones entre dos o más personas. Estas asociaciones pueden basarse en emociones y sentimientos, como el amor y el gusto artístico, el interés por los negocios y por las actividades sociales, las interacciones y formas colaborativas en el hogar, entre otros.
                                Tipos de relaciones interpersonales
                                Relaciones íntimas o afectivas. ...
                                Relaciones familiares. ...
                                Relaciones superficiales. ...
                                Relaciones circunstanciales. ...
                                Relaciones de rivalidad. ...
                                Evita el conflicto siempre que puedas. ...
                                Aprende a aceptar las diferencias. ...
                                Muéstrate abierto/abierta a las relaciones y a la interacción.
                                Las relaciones interpersonales son parte crucial de la interacción y convivencia diaria entre las personas. Desarrollar habilidades sociales facilita la comunicación y el entendimiento con los demás, en cualquier ámbito o contexto.
                                ¿Qué elementos influyen en las relaciones interpersonales?
                                Los factores determinantes para cultivar unas buenas Relaciones Humanas son los siguientes: respeto, comprensión, comunicación y cortesía.
                                ¿Qué es la falta de relaciones interpersonales?
                                Los problemas en las relaciones interpersonales aparecen cuando carecemos de habilidades sociales, tenemos problemas de autocontrol (ira, agresividad) o nos sentimos inseguros y poco valorados.</p>
                        </div>
                        <br>
                        <br>
                        <div>
                            <p> GENERO</p>
                            <br>
                            <p>De acuerdo a la Organización Mundial de la Salud (OMS), El género se refiere a los conceptos sociales de las funciones, comportamientos, actividades y atributos que cada sociedad considera apropiados para los hombres y las mujeres.
                                El género se refiere a la manera en que la sociedad cree que tenemos que vernos, pensar y actuar como niñas y mujeres, y niños y hombres. Cada cultura tiene sus creencias y reglas informales sobre cómo deben actuar las personas según su género.
                                Identidad de género o identidad sexual: es la percepción y manifestación personal del propio género. Es decir, cómo se identifica alguien independientemente de su sexo biológico. La identidad de género puede fluir entre lo masculino y femenino, no existe una norma absoluta que lo defina.
                                Se pueden encontrar cinco tipos de sexos:
                                Hembra.
                                Macho.
                                Intersexual.
                                Intersexual con características dominantes masculinas.
                                Intersexual con características dominantes femeninas.</p>
                        </div>
                        <br>
                        <br>
                        <div>
                            <p> ORIENTACION SEXUAL</p>
                            <br>
                            <p> Las orientaciones sexuales pueden ser: heterosexual (atracción a personas de distinto sexo), homosexual (atracción hacia personas del mismo sexo) y bisexual (atracción a personas de ambos sexos). Gays: Término político para identificar a hombres que asumen de manera abierta su orientación sexual por otros hombres.
                                La orientación sexual es diferente al género y a la identidad de género. La orientación sexual se refiere a quién te atrae y hacia quién sientes atracción romántica, emocional y sexual. Mientras que la identidad de género no se trata de hacia quién sientes atracción, sino de quién ERES: hombre, mujer, genderqueer, etc.
                                La orientación sexual es la capacidad de sentir atracción sexual, erótica, emocional, afectiva o romántica hacia personas del sexo o género opuesto, del mismo sexo o género, o de ambos sexos o más de un género, ​ así como los patrones de atracción que la caracterizan</p>
                        </div>
                        <br>
                        <br>
                        <div>
                            <p>PREFERENCIA SEXUAL</p>
                            <br>
                            <p>Por lo tanto la orientación sexual es innata, la preferencia genérica es adquirida, es una consecuencia de la orientación sexual, y ambos términos caben en la misma persona pero en momentos diferentes. El término preferencia sexual se puede emplear para las actividades sexuales que más nos gusten o que prefiramos
                                La identidad de género es cómo te sientes dentro y cómo lo expresas. Tu manera de vestir, tu apariencia y tus comportamientos pueden ser formas de expresar tu identidad de género. La mayoría de las personas se sienten hombre o mujer.</p>
                        </div>
                        <br>
                        <br>
                        <div>
                            <p>TIPOS DE SEXO (FÁLICO, ANAL, VAGINAL)</p>
                            <br>
                            <p>Etapa fálica: esta fase va desde los 3 hasta los 6 años aproximadamente. En esta fase el niño desarrolla una curiosidad por sus partes íntimas, niños y niñas empiezan a darse cuenta de las diferencias entre ambos sexos. En esta etapa la zona erógena son los genitales
                                Fase fálica Es la "fase de organización infantil de la libido que sigue a las fases oral y anal y se caracteriza por una unificación de las pulsiones parciales bajo la primacía de los órganos genitales, pero a diferencia de la organización genital puberal, el niño o la niña no reconocen en esta fase más que un solo ...
                                Los diferentes tipos de sexo incluyen: sexo vaginal (pene-en-vagina) sexo oral (contacto de la boca con los genitales) sexo anal (introducción del pene en el trasero -ano-)
                                Hay diferentes tipos de sexo. Sin embargo, más allá del tipo de sexo que decidas tener, antes que nada necesitas tener una buena comunicación y el consentimiento de todas las personas involucradas. Aunque tener sexo puede causar tanto embarazos como enfermedades de transmisión sexual (ETS), hay maneras de protegerte.
                                ¿Qué es el sexo?
                                Las personas definen el “sexo” de diferentes maneras. Algunas de ellas creen que el sexo ocurre solo cuando un pene se introduce en una vagina, sin embargo esto no es así para todo el mundo. Los diferentes tipos de sexo incluyen:
                                <br>
                                <br>
                            <ul>
                                <ol>sexo vaginal (pene-en-vagina)</ol>
                                <ol>sexo oral (contacto de la boca con los genitales)</ol>
                                <ol>sexo anal (introducción del pene en el trasero -ano-)</ol>
                                <ol>uso de los dedos o manos (contacto de la(s) mano(s) con los genitales)</ol>
                                <ol>frotar tu cuerpo contra la otra persona usualmente con ropa o frotación de los genitales</ol>
                                <ol>masturbación (tocarse a sí mismo)</ol>
                            </ul>
                            </p>
                            </p>
                        </div>

                    </main>
                </div>

                <img src="" />


            <?php endif ?>
        </section>
    </div>
    <CEnter>
        <h1 class="h1">EDUCA TÚ CUERPO</h1>
    </CEnter>

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