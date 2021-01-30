<?php
 $server='localhost';
 $username="root";
 $password="";
 $database="registro_usuario";

 try{


    $conn=new PDO("mysql:host=$server;dbname=$database;",$username,$password);

 }catch (PDOException $error){
     die('conexion fallida:' .$error->getMessage());
 }


?>