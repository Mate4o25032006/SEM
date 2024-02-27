<?php
  // session_start();
  // if(!isset($_SESSION['Cedula_NIT'])){
  //     echo'<script>alert("Primero Inicie Sesión");
  //     window.location = "Login.php";
  //     </script>';
  //     session_destroy();
  //     die();
  // }  
?>
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

  <!--Header-->
  <?php
    include 'Conexiones/con_db.php';
    include "Navbar2.php";
    session_start();

    if (isset($_SESSION['Cedula_NIT'])){
      $user_query = $_SESSION['Cedula_NIT'];
      $query="SELECT * FROM empresas WHERE Cedula_NIT LIKE '$user_query' "; 
      
      $Consulta = $Conex->query($query);

      if(mysqli_num_rows($Consulta) >= 1){
        $Fila=mysqli_fetch_array($Consulta);
      }else{
        echo"No se puede";
      }
    }  
  ?>

  <!--Service-->
  <section  id="service">
    <div class="container">
      <h2>Interfaz de <?php echo $Fila['Nombre'];?></h2>
      <div class="service_area">
        <div class="row">
          <div class="col-lg-4">
            <div class="service_block">
              <a href="RegProductos.php">
              <div class="service_icon delay-03s animated wow  zoomIn"> <img src="img/AggProd.png" alt="Agregar"> </div>
              <h3 class="animated fadeInUp wow">Agregar Productos</h3>
              </a>
              <p>Esta opción le permitirá Agregar los productos de su Emprendimiento.</p>
            </div>
          </div>
          
          <div class="col-lg-4">
            <div class="service_block">
              <a href="ActEmpresas.php?ID=<?php echo $Fila["Cedula_NIT"] ?>">
              <div class="service_icon icon2  delay-03s animated wow zoomIn"><img src="img/Actualizar.png" alt="Actualizar"> </div>
              <h3 class="animated fadeInUp wow">Actualizar Empresa</h3>
              </a>
              <p>Esta opción le permitirá Actualizar los datos de su empresa o emprendimiento.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service_block">
              <a href="Conexiones/Cerrar_sesion.php">
              <div class="service_icon icon3  delay-03s animated wow zoomIn"> <img src="img/Eliminar.png" alt="Cerrar Sesión"> </div>
              <h3 class="animated fadeInUp wow">Cerrar Sesión</h3> 
              </a>
              <p>Esta Opción es para cerrar Sesión en la plataforma.</p>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </section>
  <!--Service-->

  <section  id="work_outer">
    <div class="container">
      <h2>Mis Productos</h2>
      <div class="service_area">
        <div class="row">
          <?php
            include 'Conexiones/con_db.php';
            $query="SELECT * FROM productos WHERE Empresas_Cedula_NIT LIKE '$user_query'";
            $Consulta=mysqli_query($Conex,$query);
          
            if (mysqli_num_rows($Consulta) >= 1) {
              while($Fila=mysqli_fetch_array($Consulta)){ ?>
              <div class="col-lg-4">
                <div class="service_block">
                  <div> <img src="<?php echo $Fila['Imagen'] ?>" width="130px" height="120px"" alt="Objetivos" style="border-radius:20px; "> </div>
                  <h3 class="animated fadeInUp wow"><?php echo $Fila['Nombre'] ?></h3>
                  <p class="animated fadeInDown wow">-<?php echo $Fila['Descripcion'] ?></p>
                  <p>-<?php echo $Fila['Precio'] ?></p>
                  <p>-<?php echo $Fila['Categoria'] ?></p>
                
                  <div style="display: flex; justify-content: center; margin-top: 10px; gap: 5px;">
                    <p><a href="ActProductos.php?ID=<?php echo $Fila['idProducto'] ?>" style="background-color: blue; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Editar</a></p>
                    
                    <p><a href="EliProductos.php?ID=<?php echo $Fila['idProducto'] ?>" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Eliminar</a></p>
                  </div>
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

  <footer class="footer_section" id="contact" style="background: #FF4500;">
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
