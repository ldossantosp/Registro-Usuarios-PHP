<?php

class conexion extends mysqli{
    private $user= "root";
	private $pass="root";
	private $server="localhost";
	private $db="Usuarios";

    public function __construct(){
       parent:: __construct($this->server, $this->user, $this->pass, $this->db);
        
        //$this->set_charset('utf-8');
          
        if(mysqli_connect_errno()){
            die('Error en la conexion'.mysqli_connect_errno());
        }
        else{
            $m = 'Conexión exitosa con servidor';
        }
       // echo $m;
        
    }
}

?>