<?php
include 'class.agenda.php';
$datos = array('Cedula'=>'', 'Nombre'=>'', 'Genero'=>'', 'Password'=>'', 'Direccion'=>'');
$accion = 'insert';
include 'edicion.php';
echo $accion;
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
            Cedula: <input type="text" name="txtCedula" value="<?php echo $datos['Cedula']?>" <?php if($accion=='update') echo 'disabled'?>> <br/>
            Nombre: <input type="text" name="txtNombre" value="<?php echo $datos['Nombre']?>"> <br/>
            Clave: <input type="text" name="txtClave" value="<?php echo $datos['Password']?>"> <br/>
			Genero: 
				<select name="cmbGenero" default="<?php echo $datos['Genero']?>">
                    <?php if($datos['Genero'] == 'Masculino'){
                        echo '<option value="Masculino" selected>Masculino</option>
                              <option value="Femenino">Femenino</option>';
                    }
                    else if($datos['Genero'] == 'Femenino') {
                        echo '<option value="Masculino">Masculino</option>
                              <option value="Femenino" selected>Femenino</option>';
                    }
                    else{
                        echo'<option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>';
                    }?>
				</select> </br>
			
			Dirección: <input type="text" name="txtDireccion" value="<?php echo $datos['Direccion']?>"> <br/>
            <input type="hidden" name="accion" value="<?php echo $accion?>">
			<input type="submit" value="Enviar" name="submit"> <br/>	

		</FORM>

        <?php include 'listar_usuarios.php'; ?>
</body>
</html>