<?php
include 'con_db.php';

if(isset($_POST['Actualizar'])){
    $Cedula_NIT=$_POST['Cedula_NIT'];
    $Tipo_doc=$_POST['Tipo_doc'];
    $Nombre=$_POST['Nombre'];

    $ruta='Multimedia/'.$_FILES['Imagen']['name'];//Captura el nombre de la imagen
    $ruta2='../Multimedia/'.$_FILES['Imagen']['name'];
    $tempruta=$_FILES['Imagen']['tmp_name'];//nombre temporal
    move_uploaded_file($tempruta,$ruta2);//manda la imagen a la carpeta del proyecto

    $Descripcion_Emp=$_POST['Descripcion_Emp'];
    $Direccion=$_POST['Direccion'];
    $Correo=$_POST['Correo'];
    $Telefono=$_POST['Telefono'];

    $Actualizar="UPDATE empresas SET Tipo_doc='$Tipo_doc', Nombre='$Nombre', Imagen='$ruta', Descripcion_Emp='$Descripcion_Emp', Direccion='$Direccion',
    Correo='$Correo', Telefono='$Telefono' WHERE Cedula_NIT='$Cedula_NIT'";
    
    if(mysqli_query($Conex,$Actualizar)){
      echo"<script>alert('Datos Actualizados Correctamente')
      window.location.href='../index.php';</script>";
    }else{
      echo"<script>alert('Ha ocurrido un error en la actualización')
      window.location.href='../ActuEmp.php';</script>";
    }
}
?>