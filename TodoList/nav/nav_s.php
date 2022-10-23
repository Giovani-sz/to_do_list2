
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand h1">TU LISTA</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active" aria-current="page">Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">¡Hola <?php echo $_SESSION['cliente']; ?>! 
                  
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a href="usuario.php" class="dropdown-item">Perfil</a></li>
                            <li><a href="../php/cerrar_sesion.php" class="dropdown-item">Cerrar sesion</a>
                        
                        
                        </li>

   
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
         <!-- separacion de union-->
                      
                     <!-- separacion de union-->
                            
    </nav>





    <!-- usamos js para activar la funcion del menu con boostrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>


<!-- comienzo-->


    <form action="insert.php" method="POST">
    <div class="container">
      <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
        <h3 class="text-center text-primary font-monospace">LISTA DE TAREAS</h3>
           <div class="col-8">
              <input type="text" required name="list" class="form-control">
      </div>
          <div class="col-2">
    <button class="btn btn-outline-primary">AÑADIR</button>
</div>
</div>
</div>
</form>


<!-- get data-->
<?php
include "config.php";
$rawData= mysqli_query($con, "select * from tbltodo");

?>

<div class="container">
<div class="col-8 bg-white m-auto mt-3">

<table class="table">
    <tbody>
    <?php
      while($row = mysqli_fetch_array($rawData)){

    ?>
        <tr>
           
            <td><?php echo $row['list']?></td>
            <td style="width: 10%;"> <a href="delete.php? ID=<?php echo $row['id'] ?>"class="btn btn-outline-danger">BORRAR</a></td>
            <td style="width: 10%;"><a href="update.php? ID=<?php echo $row['id'] ?>"class="btn btn-outline-success">ACTUALIZAR</a></td>
        </tr>
        <?php
     }

    ?>

    </tbody>
</table>
</div>
</div>
<!-- fin-->
</body>
</html>