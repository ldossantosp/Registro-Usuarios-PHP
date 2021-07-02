<?php
include 'class.agenda.php';
if (isset($_POST['submit'])){
    
    if($_POST['accion'] == 'insert'){

        $clave = $_POST['txtClave'];
        $nombre = $_POST['txtNombre'];
        $direccion = $_POST['txtDireccion'];
        $cedula = $_POST['txtCedula'];
        $genero = $_POST['cmbGenero'];

        $agenda = new Agenda($cedula, $nombre, $clave, $genero, $direccion);
        $agenda->insert();
    }

    if($_POST['accion'] == 'update'){

        $clave = $_POST['txtClave'];
        $nombre = $_POST['txtNombre'];
        $direccion = $_POST['txtDireccion'];
        $cedula = $_POST['txtCedula'];
        $genero = $_POST['cmbGenero'];

        $agenda = new Agenda($cedula, $nombre, $clave, $genero, $direccion);
        $agenda->update();

    }
}

?>