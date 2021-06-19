<?php
if ((isset($_GET['accion'])) && (isset($_GET['cedula'])) && ($_GET['accion'] == 'editar')){
    $cedula = $_GET['cedula'];

    $agenda = Agenda::soloCedula($cedula);

    $array = $agenda->selectPorCedula();
    
}
if ((isset($_GET['accion'])) && (isset($_GET['cedula'])) && ($_GET['accion'] == 'eliminar')){
    echo $_GET['cedula'];
}
?>