<?php
include 'con_db.php';

if(isset($_POST['Eliminar'])){
    $idProducto=$_POST['idProducto'];

    $Eliminar="DELETE FROM Productos WHERE idProducto='$idProducto'";
    
    if(mysqli_query($Conex,$Eliminar)){
      echo"<script>alert('Producto eliminado Correctamente')
      window.location.href='../index.php';</script>";
    }else{
      echo"<script>alert('Ha ocurrido un error en la actualización')
      window.location.href='../EliProductos.php';</script>";
    }
}
?>