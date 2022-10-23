<?php

include("conexion.php");
//VARIABLES 

$usuario = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$pass = $_POST["contra"];

$verificacion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

$respuesta = mysqli_num_rows($verificacion);


// RESTRICION DE USUARIO SOLO PUEDE  SER UN USUARIO CON ESE NOMBRE
if($respuesta > 0) {
    echo '
        <script>
            alert("El nombre de usuario ya esta siendo utilizado");
            location.href = "../nav/registrar.php";
        </script>
    ';
    exit;
}

//INSERCION DE DATOS EN LA TABLA

$insertar = mysqli_query($conexion, "INSERT INTO usuarios (usuario, contraseña, correo, telefono, rol) VALUES ('$usuario','$pass','$correo','$telefono','cliente')");


//CONDICION PARA REGISTRO DE USUARIO
if($insertar) {
    echo '
    <script>
        alert("Registro exitoso");
        location.href = "../nav/acceder.php";
    </script>
    ';
}


//CERRAMOS CONEXION
mysqli_close($conexion);

?>