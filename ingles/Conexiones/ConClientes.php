<?php

if(isset($_POST['Enviar'])){   
   include "con_db.php";
   $Nombre=trim($_POST['Nombre']);
   $Correo=trim($_POST['Correo']);
   $Contraseña=trim($_POST['Contraseña']);
      

   $Consulta="INSERT INTO clientes(Nombre,Correo,Contraseña,Rol)
    VALUES('$Nombre','$Correo','$Contraseña',2)";

    $resultado= mysqli_query($Conex,$Consulta);

    if($resultado) {
      echo "<script>alert('Cliente correctamente registrada')
      window.location.href='../LoginClientes.php';</script>";

      // session_start();
      // $_SESSION['Nombre']=$Nombre;
      // $_SESSION['Correo']=$Correo;
      // header("location:../Bienvenida3.php");
      // exit();

    }else{
      echo "<script>alert('Ha ocurrido un error en el registro')
       window.location.href='../Regclientes.php';</script>";   
    }  
}
?>