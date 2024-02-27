<?php
include("con_db.php");


if(isset($_POST['Enviar'])){
    $Documento=trim($_POST['Cedula_NIT']);
    $Contraseña=trim($_POST['Contraseña']);

    $Validacion="SELECT * FROM usuarios WHERE cedula_NIT='$Documento' AND contraseña='$Contraseña'";
    $Validar_Login=mysqli_query($Conex,$Validacion);

    if(mysqli_num_rows($Validar_Login) > 0){
        session_start();

        $_SESSION['Cedula_NIT']=$Documento;
        $_SESSION['Contraseña']=$Contraseña;
        header("location:../Bienvenida.php");
        exit();
    }else{
        echo'<script>alert("Incorrect Username or Password");
        window.location = "../Login.php";
        </script>';
    }
}
?>
