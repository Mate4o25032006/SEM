<?php
 include("con_db.php");

    if(isset($_POST['Enviar'])){
        $Empresa=trim($_POST['Empresa']);
        $Nombre=trim($_POST['Nom_Producto']);

        $ruta='Multimedia/'.$_FILES['Imagen']['name'];//Captura el nombre de la imagen
        $ruta2='../Multimedia/'.$_FILES['Imagen']['name'];
        $tempruta=$_FILES['Imagen']['tmp_name'];//nombre temporal
        move_uploaded_file($tempruta,$ruta2);//manda la imagen a la carpeta del proyecto

        $Precio=trim($_POST['Precio']);
        $Descripcion=trim($_POST['Descripcion']);
        $Categoria=trim($_POST['Categoria']);

        $consulta="INSERT INTO productos(Nombre, Imagen , Precio, Descripcion, Categoria, Empresas_Cedula_NIT) VALUES ('$Nombre','$ruta' ,'$Precio','$Descripcion','$Categoria','$Empresa')";

        $resultado= mysqli_query($Conex,$consulta);

        if($resultado){
           echo"<script>alert('Correctly registered product')
           window.location.href='../BuscarProductos.php';</script>";
        }else{
            echo"<script>alert('A registry error has occurred')
            window.location.href='../RegProductos.php';</script>";
        }
    }
?>