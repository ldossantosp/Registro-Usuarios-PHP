<?php
include("conexion.php");

$con=conectar();

$clave = $_POST['txtClave'];
$nombre = $_POST['txtNombre'];
$direccion = $_POST['txtDireccion'];
$cedula = $_POST['txtCedula'];
$genero = $_POST['cmbGenero'];

$insertar="INSERT INTO Usuario(Nombre, Password, DIreccion, Cedula, Genero) VALUES ('$nombre', '$clave', '$direccion', '$cedula', '$genero')";
echo $insertar;
//mysqli_select_db($db,$con);
$resultado = mysqli_query($con, $insertar) or die (mysqli_error($con));

mysqli_close($con);

echo "Datos insertados con exito";

?>
