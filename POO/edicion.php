<?php
   
if ((isset($_GET['accion'])) && (isset($_GET['cedula'])) && (is_numeric($_GET['cedula'])) &&
($_GET['accion'] == 'editar')){ 
    $cedula = $_GET['cedula'];   
    $agenda = Agenda::soloCedula($cedula);
    $array = $agenda->selectPorCedula();
    $datos = $array->fetch_array();
    $accion='update';
}
elseif ((isset($_GET['accion'])) && (isset($_GET['cedula'])) && (is_numeric($_GET['cedula'])) &&
($_GET['accion'] == 'eliminar')){
    $cedula = $_GET['cedula'];   
    $agenda = Agenda::soloCedula($cedula);
    $array = $agenda->eliminar();    
} 
?>