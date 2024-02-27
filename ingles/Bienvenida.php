<?php
  session_start();  
  if(isset($_SESSION['Cedula_NIT'])){
    header("location:Bienvenida2.php");
  }else{
    header("location:Bienvenida.php");
  }
?>


</body>
</html>
