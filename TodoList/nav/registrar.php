<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Acceder</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<?php
include("../php/sesion.php");
?>

    <div class="imagen_fondo">
	<video src="../Imagenes/fondo2.mp4" autoplay loop muted class="video"></video>
	</div>

    <form action="../php/registro.php" method="POST" class="formulario_ing" id="registro_for">
		<h2 class="info_h2">Registrarse</h2>
		<input type="text" class="formula" required placeholder=" Nombre de Usuario" name="nombre">
        <input type="textarea" class="formula" required placeholder=" Correo Electronico" name="correo">
        <input type="tel" class="formula" required placeholder=" Telefono" name="telefono">
		<input type="password" class="formula" required placeholder=" Contraseña" name="contra">
		<input type="submit" class="enviar">
	</form>


    </form>

</body>