<?php
include 'class.agenda.php';
include 'edicion.php';

$datos = array();

/*include 'class.conexion.php';

$bd= new conexion();
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<FORM action="registro.php" method="POST">
            Cedula: <input type="text" name="txtCedula"> <br/>
            Nombre: <input type="text" name="txtNombre"> <br/>
            Clave: <input type="text" name="txtClave"> <br/>
			Genero: 
				<select name="cmbGenero">
					<option value="Masculino">Masculino</option>
					<option value="Femenino">Femenino</option>
				</select> </br>
			
			Dirección: <input type="text" name="txtDireccion"> <br/>
            <input type="hidden" name="accion" value="insert">
			<input type="submit" value="registro" name="submit"> <br/>	

		</FORM>

        <?php include 'listar_usuarios.php'; ?>
</body>
</html>