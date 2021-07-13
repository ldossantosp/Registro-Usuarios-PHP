<?php

require "manejador.usuario.php";
require "class.session.php";

if(isset($_POST['login'])){
    if((isset($_POST['txtCedula'])) && (!empty($_POST['txtCedula'])) && (isset($_POST['txtClave'])) && 
    (!empty($_POST['txtClave']))){
        $cedula = $_POST['txtCedula'];
        $clave = $_POST['txtClave'];
        $manejador = new manejadorUsuario();
        if($manejador->login($cedula, $clave)){
            $nombre = $manejador->getNombreUsuario($cedula);
            $session = new Session();
            $session->setAttribute("cedula",$cedula);
            $session->setAttribute("nombre",$nombre);
           /*
           echo "Valor del atributo nombre: ".$session->getAttribute("nombre")."<br/>";
           $session->deleteAttribute("nombre");
           echo "Valor del atributo nombre: ".$session->getAttribute("nombre")."<br/>";
           $session->destroySession();*/
           header("location: Administrador.php");
        }
        else{
            header("location: login.php?res=loginerror");
        }

    }else{
        header("location: login.php");
    } 
}else{
    header("location: login.php");
}

if(isset($_GET['res']) && $_GET['res'] == 'logout'){
    $session = new Session();
    $session->destroySession();
    header("location: login.php");
}
?>