<!DOCTYPE html>
<html>
    <head>
        <title>mail formulario</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body><center>
        <body background="img/fondo.jpg">
    <a href="/PROYECTO_FIN/LOG/menu_responsive.html"><p><h3>cerrar sesion</h3> </p></a> </center>
        <form method="post">
            <input type="text" placeholder="name"name="name"require="">
            <input type="email" placeholder="email"name="email"require="">
            <input type="text" placeholder="asunto"name="asunto"require="">
            <textarea placeholder="mensaje"name="msg"></textarea>
            <input type="submit"name="enviar" >
        </form>
        <?php
      include("correo.php");
        ?>
        
    </body>
</html>

