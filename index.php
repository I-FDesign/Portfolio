<?php
    require 'admin/functions.php';
    require 'contact.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I&F Design - Desarrollos Web</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/2d83eb3d68.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto:400,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/form.css">
    <link rel="stylesheet" href="styles/animate.css">
</head>
<body>
    <header>
        <div class="thumb">
            <img src="img/thumb.jpg" alt="">
            <div class="title">
                <div class="title-content" id='h1'>
                    <h1>I&F Design</h1>
                 <p>Desarrollos Web</p>
                </div>
            </div>
        </div>
        <div class="nav">
            <nav>
                <ul>
                    <li><a class='nav_button home' href="#">Inicio</a></li>
                    <li><a class='nav_button abt-me' href="#">Sobre mí</a></li>
                    <li><a class='nav_button jobs' href="#">Trabajos</a></li>
                    <li><a class='nav_button contact' href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="mobile_menu">
            <div class="logo">
                <p>I&F Design</p>
            </div>
            <div class="nav_button" id='nav_button'>
                <p>Menú</p>
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="close" id='menu_close'>
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
        </div>
        <div class="mobile_nav" id='mobile_nav'>
            <nav>
                <ul>
                    <li><a class='nav_button home' href="#">Inicio</a></li>
                    <li><a class='nav_button abt-me' href="#">Sobre mí</a></li>
                    <li><a class='nav_button jobs' href="#">Trabajos</a></li>
                    <li><a class='nav_button contact' href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="main">
        <div class="container">
            <div class="about-me">
                <h2>ACERCA DE MI</h2>
                <h4>EXPERIENCIA & HABILIDADES</h4>
                <div class="row celdas">
                    <div class='celda left animated'>
                        <img src="img/abt-1.png" alt="">
                        <h3>MAS DE 6 AÑOS DE EXPERIENCIA EN DESARROLLO WEB</h3>
                        <p>Desde que soy muy chico siempre me intereso como es que algo tan complejo como una computadora podia funcionar, al descubrir la programación no pude parar de aprender...</p>
                        <div class="btn">
                            <a class='know-more' href="">Saber más</a>
                        </div>
                    </div>
                    <div class='celda right animated'>
                        <img src="img/abt-2.png" alt="">
                        <h3>CONOCIMIENTO EN DIVERSAS TECNOLOGIAS WEB ACTUALES</h3>
                        <p>Cuento con conocimiento en casi todas las tecnologias utilizadas para el desarrollo web, ya sea HTML, CSS, PHP, JS, Angular, Laravel, etc..</p>
                        <div class="btn">
                            <a class='know-more' href="">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="works">
            <div class="container">
                <h2>TRABAJOS RECIENTES</h2>
                <div class="trabajos">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/projects/living.png" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Aplicacion web donde podras escribir tus propias historias con diversos personajes, objetos, imagenes, etc.</p>
                        </div>
                        <div class="button">
                            <a target="_blank" href="https://livingwriter.com/">Ver trabajo</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/projects/army.png" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Sitio E-commerce para la venta de componentes o artefactos relacionados con la tecnologia.</p>
                        </div>
                        <div class="button">
                            <a target="_blank" href="https://www.armytech.com.ar/">Ver trabajo</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/projects/sos.png" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Sitio donde profesores y alumnos pueden interactuar mediante videollamas pagando una tarifa determinada.</p>
                        </div>
                        <div class="button">
                            <a target="_blank" href="https://sosmaestros.com.ar/">Ver trabajo</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/projects/abogados.png" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Pagina realizada a medida para un grupo de abogados, con un diseño minimalista y algunas animaciones.</p>
                        </div>
                        <div class="button">
                            <a target="_blank" href="http://abogadosneuquen.com/">Ver trabajo</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/projects/harmonie.png" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Sitio donde se podran ver los distintos servicios, habitaciones y paisajes que posee tanto el hotel como la ciudad.</p>
                        </div>
                        <div class="button">
                            <a target="_blank" href="http://hotelharmonie.com.ar/">Ver trabajo</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/projects/plastic.png" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Un sitio donde se exponen noticias o información sobre cirujias plasticas de celebridades.</p>
                        </div>
                        <div class="button">
                            <a target="_blank" href="http://plasticsurgerypro.info/">Ver trabajo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacto">
            <div class="container">
                <h2>CONTACTO</h2>
                <div class="contenedor-formulario">
                    <div class="wrap">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" 
                              class="formulario" name="formulario_registro" method="POST">
                            <div>
                                <div class="input-group">
                                    <input type="text" id="nombre" name="name">
                                    <label class="label" for="nombre">Nombre:</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="email" name="email">
                                    <label class="label" for="email">Email:</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="telefono" name="phone">
                                    <label class="label" for="telefono">Telefono:</label>
                                </div>
                                <div class="input-group">
                                    <textarea name="message" id="mensaje"></textarea>
                                    <label class="label" for="mensaje">Mensaje:</label>
                                </div>
                            </div>
                            <?php if( !empty($errors) ): ?>
                                <div class="errors">
                                    <p> <?php echo $errors; ?> </p>
                                </div>
                            <?php endif; ?>
                            <input type="submit" value='Enviar'>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="button-to-top">
        <button>
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </button>
    </div>

    <?php if($submit): ?>
        <div class="message">
            <p>Correo enviado correctamente, sera contestado a la brevedad!</p>
            <i id="close_message" class="fa fa-times" aria-hidden="true"></i>
        </div>
    <?php endif; ?>

    <script type="text/javascript" src='js/jquery-3.1.1.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript" src='js/efects.js'></script>
	<script type="text/javascript" src='js/app.js'></script>

    <?php if(!empty($errors)): ?>
        <script>
            $(document).ready( function(){

                const contact = $('.contacto').offset().top;

                $('html, body').animate({
                    scrollTop: contact
                }, 500);

            });
        </script>
    <?php endif; ?>
</body>
</html>