<?php

include 'class.conexion.php';

class Agenda{
    protected $cedula;
    protected $nombre;
    protected $clave;
    protected $genero;
    protected $direccion;

    //public function __construct(){}
    
    public function __construct($ci, $nom, $pass, $gen, $dir){
        $this->cedula = $ci;
        $this->nombre = $nom;
        $this->clave = $pass;
        $this->genero = $gen;
        $this->direccion = $dir;
    }

    

    static function instancia(){
        return new self('','','','','');
    }

    static function soloCedula($ci){
        return new self($ci,'','','','');
    }

    public function insert(){
        $db= new conexion();
        $insertar="INSERT INTO Usuario(Nombre, Password, Direccion, Cedula, Genero) 
        VALUES ('$this->nombre', '$this->clave', '$this->direccion', '$this->cedula', '$this->genero')";
        
       
        $db->query($insertar) ? header("location: index.php?res=insertado") : header("location: index.php?res=error");

        //echo $insertar;
    }

    public function update($cedula){
        $db= new conexion();

        $actualizar ="UPDATE Usuario SET Nombre= , Password= , Direccion= , Genero=";

        $db->query($actualizar) ? header("location: index.php?res=actualizado") : header("location: index.php?res=error");
    }

    public function selectPorCedula(){
        $db= new Conexion();

        $query = "select * from Usuario where Cedula = $this->cedula";

        $result = $db->query($query);
        return $result;
    }
    public function select(){
        $db= new Conexion();

        $query = "select * from Usuario";

        $result = $db->query($query);
        return $result;
    }
}

?>