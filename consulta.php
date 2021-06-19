
<?php 

include("conexion.php");

$con=conectar();

echo '<HTML>
	
	<HEAD>
		<TITLE> Consulta de Usuario</TITLE>
	</HEAD>
	<BODY>
		<FORM action="Consulta.php" method="POST">
		Ingrese la cédula del Usuario: <input type="text" name="txtCedula"> <br/>
		<input type="submit" value="Consultar" name="btnConsultar"> <br/>';
	$cedula = $_POST['txtCedula'];
	$consulta = "select * from Usuario where Cedula='".$cedula."';";
	if ($resultado  = mysqli_query($con, $consulta)){
	while($fila = mysqli_fetch_row($resultado)){
		echo '
		Nombre: <input type="text" name="txtNombre" value="'.$fila[0].'"> <br/>
		Dirección: <input type="text" name="txtDireccion value="'.$fila[2].'"> <br/>
		Genero: <input type="text" name="txtGenero" value="'.$fila[4].'"> <br/>
		';
	}
}

echo '</FORM>
	</BODY>
</HTML>';
?>
