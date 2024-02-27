<?php
include 'con_db.php';

if(isset($_POST['Eliminar'])){
    $idProducto=$_POST['idProducto'];

    $Eliminar="DELETE FROM Productos WHERE idProducto='$idProducto'";
    
    if(mysqli_query($Conex,$Eliminar)){
      echo"<script>alert('Product Removed Successfully')
      window.location.href='../index.php';</script>";
    }else{
      echo"<script>alert('Deletion failed')
      window.location.href='../EliProductos.php';</script>";
    }
}
?>