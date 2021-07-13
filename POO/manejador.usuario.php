<?php

require "class.agenda.php";

class manejadorUsuario{

    public function __construct(){}


    public function login($cedula, $clave){
        $agenda = Agenda::soloCedula($cedula);
        $datos = array('Cedula'=>'', 'Nombre'=>'', 'Genero'=>'', 'Password'=>'', 'Direccion'=>'');
        $agenda = Agenda::soloCedula($cedula);
        $array = $agenda->selectPorCedula();
        $datos = $array->fetch_array();
        if($datos['Cedula'] === $cedula && $datos['Password'] == $clave){
            return true;
        }else{
            return false;
        }
    }

    public function getNombreUsuario($cedula){
        $agenda = Agenda::soloCedula($cedula);
        $datos = array('Cedula'=>'', 'Nombre'=>'', 'Genero'=>'', 'Password'=>'', 'Direccion'=>'');
        $array = $agenda->selectPorCedula();
        $datos = $array->fetch_array();
        return $datos['Nombre'];
    }

}


?>