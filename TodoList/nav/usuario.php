<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="../css/parallax.css">
</head>
<body>
<?php
include("../php/sesion.php");
?>
    <div class="fondo_user">
        <h1 class="bienvenido"> Bienvenido <?php echo $_SESSION['cliente'];  ?> </h1>
    </div>
</body>
</html>