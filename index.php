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
    <title>SEMS</title>

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

  <!--Header_section-->
  <?php
    session_start();  

    $navbar = isset($_SESSION['Cedula_NIT']) ? "Navbar2.php" : (isset($_SESSION['Correo']) ? "Navbar3.php" : "Navbar.php");

    include $navbar;
  ?>


  <!--Bienvenida-->
  <section id="top_content" class="top_cont_outer">
    <div class="top_cont_inner">
      <div class="container">
        <div class="top_content">
          <div class="row">
            <div class="col-lg-5 col-sm-7">
              <div class="top_left_cont flipInY wow animated">
                <h3 style="color: #000080;">SERVICIO A LA GENTE</h3>
                <h2>HOLA! TE DAMOS LA BIENVENIDA A SEMS</h2>
                <p> 
                  ¿Cuan Amplio es el comercio Sonsoneño? A esta pregunta no hay una respuesta clara, ya que hay un gran número de negocios presentes en el municipio, y es esta pregunta la que nos lleva a otra, ¿Como Darlos a Conocer? Es por esto que surge SEMS como una alternativa al desarrollo y comercialización de Productos de los <b>Emprendedores</b>.
                </p>
                <div style="display: flex; flex-direction: row; gap: 12px;">
                  <a href="RegEmpresa.php" class="learn_more2" style="background: #FF4500;">Vende Con Nosotros</a>
                  <a href="RegClientes.php" class="learn_more2" style="background: #FF4500;">Compra Con Nosotros</a>
                </div>  
              </div>
              </div>
            <div class="col-lg-7 col-sm-5"> 
            <div class="flipInX wow animated">
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                  <img src="img/producto3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/producto7.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/producto6.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>  
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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

    <div class="service_area">
      <div class="row">
        <h2>Productos</h2>
        <?php
          include 'Conexiones/con_db.php';
          
          $query="SELECT p.idProducto,p.Precio,p.Nombre ,p.Imagen, e.Nombre, e.Cedula_NIT,p.Descripcion,p.Categoria
          FROM productos as p 
          INNER JOIN empresas as e ON p.Empresas_Cedula_NIT=e.Cedula_NIT";

          
          $Consulta=mysqli_query($Conex,$query);
          if (mysqli_num_rows($Consulta) >= 1) {
            while($Fila=mysqli_fetch_array($Consulta)){ ?>
              <div class="col-lg-4">
                <div class="service_block">
                  <div> <img src="<?php echo $Fila['Imagen'] ?>" width="130px" height="120px"" alt="Objetivos" style="border-radius:20px; "> </div>
                  <p>-<?php echo $Fila[2] ?></p>
                  <p>-<?php echo $Fila['Precio'] ?></p>
                  <p>-<?php echo $Fila['Descripcion'] ?></p>
                  <p>-<?php echo $Fila['Categoria'] ?></p>
                  <p>-<b><?php echo $Fila['Nombre'] ?></b></p>
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
  </section>

  <!--Equipo de Trabajo-->
  <section class="main-section team" id="team">
    <div class="container">
      <h2>Equipo de Trabajo </h2>
      <h6>Este es el equipo de diseño y codificación del proyecto.</h6>
      <div class="team-leader-block clearfix">
        <div class="team-leader-box">
          <div class="team-leader wow fadeInDown delay-03s">
            <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
            <img src="img/Mafe.jpg" height="350px" width="100%" alt="Mafe">
          </div>
          <h3 class="wow fadeInDown delay-03s">Maria Fernanda Echeverri Osorio</h3>
          <span class="wow fadeInDown delay-03s">Programadora</span>
        </div>
        <div class="team-leader-box">
          <div class="team-leader  wow fadeInDown delay-06s">
            <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
            <img src="img/Majo.jpg" height="350px" width="100%" alt="Majo">
          </div>
          <h3 class="wow fadeInDown delay-06s">María José Henao Grisales</h3>
          <span class="wow fadeInDown delay-06s">Diseñadora</span>
        </div>
        <div class="team-leader-box">
          <div class="team-leader wow fadeInDown delay-09s">
            <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
            <img src="img/Estefa.jpg" height="350px" width="100%" alt="Estefa">
          </div>
          <h3 class="wow fadeInDown delay-09s">Estefanía Valencia Valencia</h3>
          <span class="wow fadeInDown delay-09s">Diseñadora</span>
        </div>
        <div class="team-leader-box">
          <div class="team-leader wow fadeInDown delay-09s">
            <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
            <img src="img/Santi.png" height="350px" width="100%" alt="Santiago">
          </div>
          <h3 class="wow fadeInDown delay-09s">Santiago Carmona Rendón</h3>
          <span class="wow fadeInDown delay-09s">Diseñador y analista</span>
        </div>
        <div class="team-leader-box">
          <div class="team-leader wow fadeInDown delay-09s">
            <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
            <img src="img/Teo.jpg" height="350px" width="100%" alt="Teo">
          </div>
          <h3 class="wow fadeInDown delay-09s">Sebastián Mateo Espinosa Trejos</h3>
          <span class="wow fadeInDown delay-09s">Programador</span>
        </div>
      </div>
    </div>
  </section>

  <!--Footer-->
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