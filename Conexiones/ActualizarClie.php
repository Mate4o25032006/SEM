<?php
include 'con_db.php';

if(isset($_POST['Actualizar'])){
    $idDocumento=$_POST['idDocumento'];
    $Nombre=$_POST['Nombre'];
    $Apellidos=$_POST['Apellidos'];
    $Telefono=$_POST['Telefono'];
    $Correo=$_POST['Correo'];
    $Direccion=$_POST['Direccion'];

    $Actualizar="UPDATE clientes SET Nombre='$Nombre', Apellidos='$Apellidos',
    Telefono='$Telefono', Correo='$Correo', Direccion='$Direccion' WHERE idDocumento='$idDocumento'";
    
    if(mysqli_query($Conex,$Actualizar)){
      echo"<script>alert('Cliente Actualizado Correctamente')
      window.location.href='../index.php';</script>";
    }else{
      echo"<script>alert('Ha ocurrido un error en la actualización')
      window.location.href='../ActClientes.php';</script>";
    }
}
?>