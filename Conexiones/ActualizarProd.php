<?php
include 'con_db.php';

if(isset($_POST['Actualizar'])){
    $idProducto=$_POST['idProducto'];
    $Nombre=$_POST['Nombre'];

    $ruta='Multimedia/'.$_FILES['Imagen']['name'];//Captura el nombre de la imagen
    $ruta2='../Multimedia/'.$_FILES['Imagen']['name'];
    $tempruta=$_FILES['Imagen']['tmp_name'];//nombre temporal
    move_uploaded_file($tempruta,$ruta2);//manda la imagen a la carpeta del proyecto

    $Precio=$_POST['Precio'];
    $Descripcion=$_POST['Descripcion'];
    $Categoria=$_POST['Categoria'];

    $Actualizar="UPDATE productos SET Nombre='$Nombre', Imagen='$ruta', Precio='$Precio', Descripcion='$Descripcion', Categoria='$Categoria' WHERE idProducto='$idProducto'";
    
    if(mysqli_query($Conex,$Actualizar)){
      echo"<script>alert('Datos Actualizados Correctamente')
      window.location.href='../index.php';</script>";
    }else{
      echo"<script>alert('Ha ocurrido un error en la actualización')
      window.location.href='../ActuProductos.php';</script>";
    }
}
?>