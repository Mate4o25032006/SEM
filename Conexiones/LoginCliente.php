<?php
include("con_db.php");


if(isset($_POST['Enviar'])){
    $Correo=trim($_POST['Correo']);
    $Contraseña=trim($_POST['Contraseña']);

    $Validacion="SELECT * FROM clientes WHERE correo='$Correo' AND contraseña='$Contraseña'";
    $Validar_Login=mysqli_query($Conex,$Validacion);

    if(mysqli_num_rows($Validar_Login) > 0){
        session_start();

        $_SESSION['Correo']=$Correo;
        $_SESSION['Contraseña']=$Contraseña;
        header("location:../Bienvenida.php");
        exit();
    }else{
        echo'<script>alert("Usuario o Contraseña Incorrecta");
        window.location = "../Login.php";
        </script>';
    }
}
?>
