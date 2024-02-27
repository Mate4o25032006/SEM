<?php
 include("con_db.php");

    if(isset($_POST['Enviar'])){
        $Cedula_NIT=trim($_POST['Cedula_NIT']);
        $Tipo=trim($_POST['Tipo']);
        $Nombre=trim($_POST['Nombre']);

        $ruta='Multimedia/'.$_FILES['Imagen']['name'];//Captura el nombre de la imagen
        $ruta2='../Multimedia/'.$_FILES['Imagen']['name'];
        $tempruta=$_FILES['Imagen']['tmp_name'];//nombre temporal
        move_uploaded_file($tempruta,$ruta2);//manda la imagen a la carpeta del proyecto

        $Descrip_Emp=trim($_POST['Descrip_Emp']);
        $Direccion=trim($_POST['Direccion']);
        $Correo=trim($_POST['Correo']);
        $Telefono=trim($_POST['Telefono']);

        $consulta="INSERT INTO empresas(Cedula_NIT, Tipo_doc, Nombre, Imagen, Descripcion_Emp, Direccion, Correo, Telefono) VALUES ('$Cedula_NIT','$Tipo','$Nombre','$ruta','$Descrip_Emp','$Direccion','$Correo','$Telefono')";

        $resultado= mysqli_query($Conex,$consulta);

        if($resultado){
            $consulta2="INSERT INTO usuarios(Nombre, Cedula_NIT, Telefono, Correo,Contraseña,Rol) 
            VALUES ('$Nombre','$Cedula_NIT','$Telefono','$Correo','$Cedula_NIT',1)";
            $resultado2= mysqli_query($Conex,$consulta2);
        
           echo"<script>alert('Empresa correctamente registrada')
           window.location.href='../Login.php';</script>";
        }else{
            echo"<script>alert('Ha Ocurrido un error en el registro')
            window.location.href='../RegEmpresa.php';</script>";
        }
    }
?>