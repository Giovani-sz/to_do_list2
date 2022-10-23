<?php

include("conexion.php");

//variables de usuario y pass

$usuario = $_POST["usuario"];
$contra = $_POST["pass"];

//consulta llamando al usuario registrado y la contraseña de manera correcta

$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and contraseña = '$contra'");

$fila = mysqli_num_rows($resultado);

//validiacion de correo y contraseña valida 

if ($fila > 0){
    session_start();
    $_SESSION["cliente"] = $usuario;
    header("location:../nav/usuario.php");
}else {
    echo ' 
    <script>
        alert("El correo o la contraseña son invalidos");
        location.href = "../nav/acceder.php";
    </script>
    ';
}

//libera la memoria de nuestras consultas
mysqli_free_result($resultado);

//cierro la conexoin
mysqli_close($conexion);


?>