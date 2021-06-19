<?php 
function conectar(){
	$user= "root";
	$pass="root";
	$server="localhost";
	$db="Usuarios";
	$con=mysqli_connect($server,$user,$pass, $db) or die(mysqli_error());
	//mysqli_select_db($db,$con);
	//echo "Se realizo la conexion a la base"
	return $con;
} 
?>