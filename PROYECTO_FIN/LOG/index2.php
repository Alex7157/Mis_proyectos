<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
  <title>empresa constructora alex</title>
	<link rel="stylesheet" type="text/css" href="Style1.css">
    <link rel="stylesheet" href="css/icon.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">

    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
  <style>
        h1{
            font-family: 'helveticah', Arial;
            font-size: 40px;
        }
       
</style>
    
</head>
<body>


  <!-- Navbar
    ================================================== -->

<!-- ======================================================================================================================== -->

<header>
        <div class="logos">
        <h2>Menu</h2> 
            <div class="Logo">
                <img src="logo2.jpg" alt="">
            </div> 
            <p>Empresa constructora Alex</p>   
        </div>

        <input type="checkbox" id="btn-menu">
        <label for="btn-menu"><img src="lista.png" title="Menu"></label>
        
         <nav class="menu-fixed">
           
            <ul>
                <li><a href="menu_responsive.html"><img src="PNG/home3.png"><p>Inicio</p></a></li>
                <li><a href="nuestras especialidades.html"><img src="PNG/briefcase.png"><p>Nuestras especialidades</p></a></li>
                <li><a href="Quienes somos.html"><img src="PNG/rocket.png"><p>Quienes somos</p></a></li>
                <li><a href="servicios.html"><img src="PNG/earth.png"><p>Servicios</p></a></li>
                <li><a href="contactos.php"><img src="PNG/user.png"><p>Contactos</p></a></li> 
                <li><a href="/PROYECTO_FIN/index.html"><p>Salir</p></a></li> 
            </ul>
               
        </nav>

	</header>
        <div class="slider">
            <ul>
                <li><img src="Imagenes/mine.jpg"></li>
                <li><img src="Imagenes/contru.jpg"></li>
                <li><img src="Imagenes/capa.jpg"></li>
                <li><img src="Imagenes/popu.jpg"></li>
            </ul>
        </div>
    
<div class="cuerpo">    
<body bgcolor="orange">
<body background="fondo/facebook.gif">
    <bgcolor="orange"></bgcolor>
<div class="Texto"> 
        <font color="white">
<CENTER><h1>NUESTRA EMPRESA</CENTER></h1>     
<p>

    Las actividades en el sector de la construcción tienen un
    carácter marcadamente específico. Cada obra es normalmente
    distinta de todas las demás. Cada obra puede considerarse como una
    unidad de negocio independiente. 

    la empresa es una unidad de la estructura social,con voluntad de continuidad,formada por un conjunto
     de personas que trabajan coordinadas para crear bienes y/o servicios que satisfagan las nesecidades
      de la sociedad,utilizando ciertos recursos y consiguiendo un valor añadido. 
      <br>
      <br> 

<CENTER><h1>APLICAMOS LO ÚLTIMO EN TECNOLOGÍA</CENTER></h1>
<br>Diseño Profesional</br>
 <br>Full responsive</br>
 <br>Lenguaje moderno</br>
 <br>Animaciones Avanzadas</br>
</p>
</div>
<section>
</font>
    <div class="imagenes">
        <div class="img1"><div id="descrip">Monitoreo<p>En esta imagen se muestra el trabajo que realizamos al inspeccionar la obra y que se realize en buen estado.</p></div><img src="Imagenes/civi.jpg"></div>
        <div class="img2"><div id="descrip">Diseño web<p> Esta imagen representa el trabajo de diseño web que desarrollamos.</p></div><img src="Imagenes/progra.jpg"></div>
         <div class="img2"><div id="descrip">Dibujo de Planos<p>Esta imagen representa a la construccion y la realizacion de planos.</p></div><img src="Imagenes/refo.jpg"></div>
    </div>
    
 </section> 
    
    <div class="info">
    </div>
</div>
            
</body>     
  

<footer> 
        <div class="pie_pagina">
                <ul>
                    <li><img src="PNG/facebook2.png"><a href="https://www.facebook.com/">Facebook</a></li>
                    <li><img src="PNG/whatsapp.png"><a href="https://web.whatsapp.com/">Whatsapp</a></li>
                    <li><img src="PNG/twitter.png"><a href="https://twitter.com/login?lang=es">Twitter</a></li>
                    
                </ul>
            </div>
</footer>     
<script src="JavaScript/Script.js"></script>










  </body>
</html>