<?php
  session_start();  
  if(isset($_SESSION['Cedula_NIT'])){
    header("location:Bienvenida2.php");
  }elseif(isset($_SESSION['Correo'])){
    header("location:Bienvenida3.php");
  }else{
    echo"Nada";
  }
?>


</body>
</html>
