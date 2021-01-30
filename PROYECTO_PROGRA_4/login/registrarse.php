<?php
require 'database.php';
$message ='';

if(!empty($_POST['nombre'])&& !empty($_POST['email']) && !empty($_POST['password'])){
$sql="INSERT INTO usuarios (nombre,email,password) VALUES (:nombre, :email, :password)";
$stmt=$conn->prepare($sql);
$stmt->bindParam(':nombre',$_POST['nombre']);
$stmt->bindParam(':email',$_POST['email']);
$password  = password_hash($_POST['password'], PASSWORD_BCRYPT);
$stmt->bindParam(':password',$password);

if($stmt->execute()){
    $message='A sido creado el usuario satisfactoriamente';

}else{
    $message='A ocurrido un error creando su contraseña';
}

}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>registrarse</title>
<link href = "https://fonts.googleapis.com/css2? family = Open + Sans & display = swap" rel = "hoja de estilo">
<link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body>
<header>
   <b> <a href="/PROYECTO_FIN/index.html"> Bienvenido</a></b>
</header>

<?php if(!empty($message)): ?>
    <p> <?= $message ?></p>
<?php endif; ?>

<h1>REGISTRARSE</h1>

<b>
<form action="registrarse.php" method="post">
NOMBRE:  <input type="text"name="nombre" placeholder="ingresa tu nombre">
EMAIL:   <input type="text"name="email" placeholder="ingresa tu email">
CONTRASEÑA:<input type="password"name="password" placeholder="ingresa tu contraseña">
<input type="submit"  value="enviar"><br> 
<div>
<br>
<a href="../index.html"><font color="#000000"><b>INICIO</b></font></a><i class="fa fa-home" aria-hidden="true"></i>
</div>
</form>
</body>
</html>