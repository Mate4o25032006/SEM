<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/linecons.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/responsive.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="https://cdn.jsdeliv">
  <link rel="icon" href="img/Logo.png">
  <title>Interfaz de Usuario</title>

  <link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>


  <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>
  <script type="text/javascript" src="js/classie.js"></script>

</head>
<body>

  <?php
    session_start();  

    $navbar = isset($_SESSION['Cedula_NIT']) ? "Navbar2.php" : (isset($_SESSION['Correo']) ? "Navbar3.php" : "Navbar.php");
    include $navbar;
  ?>

  <!--Empresas-->
  <section  id="work_outer">
    <div class="container">
      <h2>Empresas</h2>
      <div class="service_area">
        <div class="row">
          <?php
            include 'Conexiones/con_db.php';
            $query="SELECT * FROM empresas ORDER BY Nombre";
            $Consulta=mysqli_query($Conex,$query);
          
            if (mysqli_num_rows($Consulta) >= 1) {
              while($Fila=mysqli_fetch_array($Consulta)){ ?>
          <div class="col-lg-4">
            <div class="service_block">
              <div> <img src="<?php echo $Fila['Imagen'] ?>" width="100px" height="80px"" alt="Objetivos" style="border-radius:20px; "> </div>
              <h3 class="animated fadeInUp wow"><?php echo $Fila['Nombre'] ?></h3>
              <p class="animated fadeInDown wow">-<?php echo $Fila['Descripcion_Emp'] ?></p>
              <p>-<?php echo $Fila['Correo'] ?></p>
              <p>-<?php echo $Fila['Telefono'] ?></p>
              <img class="btn-whatsapp" src="img/WP.jpeg" width="30" height="30" alt="Whatsapp" onclick="window.location.href='https:wa.me/57<?php echo $Fila['Telefono'] ?>?text=Hola!%20Estoy%20interesado%20en%20tu%20servicio'">
              <p>-<?php echo $Fila['Direccion'] ?></p>
            </div>
          </div>
          <?php
          }
        }else{
          echo"No Hay resultados :(";
        }    
        ?> 
        </div>  
      </div>
    </div>
  </section>  

  <footer class="footer_section" id="contact" style="background: #FF4500; bottom:0;">
    <div class="container">
      <div class="footer_bottom"> <span>Copyright © 2022 SEMS. </span> </div>
    </div>
  </footer>

  <script type="text/javascript">
    $(document).ready(function(e) {
      $('#header_outer').scrollToFixed();
      $('.res-nav_click').click(function(){
        $('.main-nav').slideToggle();
        return false    
      }); 
    });
  </script> 
</body>
</html>
