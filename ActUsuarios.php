<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Multimedia/Logo.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Actualizar Datos de Usuario</title>
</head>
<body>
    <?php
        include "Navbar.php";
        if(isset($_GET['ID'])){
          $ID=$_GET['ID'];
          include("Conexiones/con_db.php");
          $query="SELECT * FROM empresas WHERE Cedula_NIT='$ID'";
          $Consulta=$Conex->query($query);
          if(empty($Consulta)){
            echo"No existen Empresas con ese nombre";
          }else{
            $Fila=mysqli_fetch_array($Consulta);
          }
        }
    ?>
</body>
</html>