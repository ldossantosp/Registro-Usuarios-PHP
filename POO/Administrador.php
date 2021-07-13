<?php
require "class.session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $session = new Session();
        $nombre = $session->getAttribute("nombre"); 
        if(!empty($nombre)){
            echo 'Bienvenido '.$nombre;
    ?>
    <a href="controlador.usuario.php?res=logout">Salir</a>
    <?php    
        }
        else{
            header("location: login.php");
        }
    ?>
</body>
</html>