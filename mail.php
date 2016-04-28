<!DOCTYPE html>
<html lang="es">
<head>
    <title>Pagina Contacta de sitio turistico Gandia</title>
    <meta charset="utf-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!--jQuery-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <!--MDL-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/gandia.css">

    <!--Progress Bar-->
    <script src='js/nprogress.js'></script>
    <link rel='stylesheet' href='css/nprogress.css' />
</head>
<script type="text/javascript">
    NProgress.start();
</script>
    

<body>
   
    <div class="navbar-fixed"role="navigation">
        <nav>
            <div class="nav-wrapper grey darken-4 ">
                <a href="index.html" class="brand-logo"role="banner"><img class="logo" src="logo.png"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down ">
                    <li class="waves-effect waves-green tooltipped"><a href="visitar.html" id="menu"class="btn tooltipped grey darken-4"data-position="bottom" data-delay="50" data-tooltip="Clic para ver que sitios visitar">¿Qué visitar?</a>
                    </li>
                    <li class="waves-effect waves-green"><a href="comer.html" id="menu"class="btn tooltipped grey darken-4"data-position="bottom" data-delay="50" data-tooltip="Clic para ver donde comer">¿Donde comer?</a>
                    </li>
                    <li class="waves-effect waves-green"><a href="contacta.html" id="menu"class="btn tooltipped grey darken-4"data-position="bottom" data-delay="50" data-tooltip="Clic para ver la galeria">Galería</a>
                    </li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="visitar.html">¿Que visitar?</a>
                    </li>
                    <li><a href="comer.html">¿Donde comer?</a>
                    </li>
                    <li><a href="contacta.html">Contacta</a>
                   
                </ul>
            </div>
        </nav>
    </div>
     

    </div>
<?php
            $name = $_POST['name'];
            $dest = $_POST['mail'];
            $asunto = "Te han enviado una postal";
            $img = $_POST['img'];

            $comentario= '	<html>
            				<head>
            					<title>Te han enviado una postal</title>
            				</head>
            				<body>
            				<p>¡¡Hola!! '.$name.' te ha enviado una postal de Gandia.</p>
            				<img src="http://gandiaurjc.esy.es/'.$img.'" style="height:50%; width: 50%;">
            				</body>
            				</html>';

            
            $headers ='MIME-Version: 1.0' . "\r\n";
            $headers .='Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: No Reply <postal@gandiaurjc.esy.es>'."\r\n";

            $enviado = mail($dest, $asunto, $comentario, $headers);

            if ($enviado){
            	echo "	<div class='row container'>
            			<h3>Enhorabuena, su email se envio correctamente con la siguiente postal:</h3>
            			<div class='col s8 offset-s2'>
            			<img class= 'responsive-img z-depth-3' src='http://gandiaurjc.esy.es/".$img."'>
            			</div>
            			</div>";
            }else{
            	echo "	<div class='row container'>
            			<h3>Lo sentimos, hubo un problema al enviar la siguiente postal:</h3>
            			<div class='col s8 offset-s2'>
            			<img class= 'responsive-img z-depth-3' src='http://gandiaurjc.esy.es/".$img."'>
            			</div>
            			</div>";
            }

?>


    <footer class="page-footer grey darken-4"role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Páginas relacionadas</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3 tooltipped " href="www.falkata.com/"data-position="bottom" data-delay="50" data-tooltip="Clic para visitar esta página web">www.falkata.com</a>
                            </li>
                            <li><a class="grey-text text-lighten-3 tooltipped " href="www.telero.es/"data-position="bottom" data-delay="50" data-tooltip="Clic para visitar esta página web">www.telero.es</a>
                            </li>
                            <li><a class="grey-text text-lighten-3 tooltipped " href="http://www.palauducal.com/?i=es&sec=vis"data-position="bottom" data-delay="50" data-tooltip="Clic para visitar esta página web">www.palauducal.com</a>
                            </li>
                            <li><a class="grey-text text-lighten-3 tooltipped " href="www.gandia.org/"data-position="bottom" data-delay="50" data-tooltip="Clic para visitar esta página web">www.gandia.org</a>
                            </li>
                        </ul>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Tabla de contenidos</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3 tooltipped " href="index.html"data-position="bottom" data-delay="50" data-tooltip="Clic para ir a la página principal">Pagina principal</a>
                            </li>
                            <li><a class="grey-text text-lighten-3 tooltipped " href="visitar.html"data-position="bottom" data-delay="50" data-tooltip="Clic para ver que sitios visitar">¿Que visitar?</a>
                            </li>
                            <li><a class="grey-text text-lighten-3 tooltipped " href="comer.html"data-position="bottom" data-delay="50" data-tooltip="Clic para ver donde comer">¿Que comer?</a>
                            </li>
                            <li><a class="grey-text text-lighten-3 tooltipped " href="contacta.html"data-position="bottom" data-delay="50" data-tooltip="Clic para ver la galeria">Galería</a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
</body>

</html>