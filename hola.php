

<HTML>
	<HEAD>
		<TITLE> Registro de Usuario</TITLE>
	</HEAD>
	<BODY>
		<FORM action="Registro.php" method="POST">
			Clave: <input type="text" name="txtClave"> <br/>
			Nombre: <input type="text" name="txtNombre"> <br/>
			Genero: 
				<select name="cmbGenero">
					<option value="Masculino">Masculino</option>
					<option value="Femenino">Femenino</option>
				</select> </br>
			Cedula: <input type="text" name="txtCedula"> <br/>
			Dirección: <input type="text" name="txtDireccion"> <br/>

			<input type="submit" value="Registrar" name="btnRegistrar"> <br/>	

		</FORM>
		

	</BODY>
</HTML>
