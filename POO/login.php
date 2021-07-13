<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario LogIn</title>
</head>
<body>
<h1> Iniciar Sesion: </h1>

<FORM action="controlador.usuario.php" method="POST">
    Cedula: <input type="text" name="txtCedula" required> <br/>
    Clave: <input type="text" name="txtClave" required> <br/>

    <input type="hidden" name="accion" value="<?php echo $accion?>">
    <?php if($_GET['res']=='loginerror') echo '<h3 style="color: red;">Error de logueo </h3><br/>'?>
    <input type="submit" value="Sign In" name="login"> <br/>	
</FORM>
</body>
</html>