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
        $db= new conexion();
        $this->cedula = $db->real_escape_string($ci);
        $this->nombre = $db->real_escape_string($nom);
        $this->clave = $db->real_escape_string($pass);
        $this->genero = $db->real_escape_string($gen);
        $this->direccion = $db->real_escape_string($dir);
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

    public function update(){
        $db= new conexion();
        $actualizar ="UPDATE Usuario SET Nombre='$this->nombre' , Password='$this->clave', 
        Direccion='$this->direccion', Genero='$this->genero' where Cedula= '$this->cedula'";
        $db->query($actualizar) ? header("location: index.php?res=actualizado") : 
        header("location: index.php?res=error");
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

    public function eliminar(){
        $db= new conexion();
        $eliminar = "delete from Usuario where Cedula= '$this->cedula'";
        $db->query($eliminar) ? header("location: index.php?res=eliminado") : 
        header("location: index.php?res=error");
    }
}

?>