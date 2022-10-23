

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
		<img src="../imagenes/fondo3.jpg" alt="fondo">
	</div>


	<form action="../php/login.php" method="POST" class="formulario_ing">
		<h2 class="info_h2">Acceder</h2>
		<input type="text" class="formula" required placeholder="" name="usuario">
		<input type="password" class="formula" required placeholder="" name="pass">
		<input type="submit" class="enviar">
		<h5 class="nueva_cuenta">¿No tienes una cuenta?</h5>
		<a href="registrar.php" class="enlace_nuevaCuenta">Registrarse</a>
	</form>
</body>
</html>