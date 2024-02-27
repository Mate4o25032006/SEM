<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="img/Logo.png">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/linecons.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/responsive.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>


  <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>
  <script type="text/javascript" src="js/classie.js"></script>

  <title>Actualizar Datos Empresas</title>
</head>
<body>
  <?php
    include "Navbar2.php";
    $ID = isset($_GET['ID']) ? $_GET['ID'] : null;
    if($ID){
      include("Conexiones/con_db.php");
      $query = "SELECT * FROM empresas WHERE Cedula_NIT='$ID'";
      $Consulta = $Conex->query($query);
      if(empty($Consulta)){
        echo "No existen Empresas con ese nombre";
      } else {
        $Fila = mysqli_fetch_array($Consulta);
      }
    }
  ?>

  <section class="footer_section" id="contact">
    <div class="container">
      <section class="main-section contact" id="contact">
        <div class="contact_section">
          <h2>Actualizar datos Empresa</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 wow fadeInLeft">
            <div class="contact-info-box address clearfix">
              <h3>Info</h3>
              <p>Este es un formulario de Actualización de Empresas, acá podrá actualizar los datos que considere necesarios para su empresa.</p>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp delay-06s">
            <div class="form">    
              <form action="Conexiones/ActualizarEmp.php" method="POST" enctype="multipart/form-data">
                  <input class="input-text animated wow flipInY delay-02s" hidden="hidden" type="number" name="Cedula_NIT" value="<?php echo $Fila['Cedula_NIT'];?>"  >

                  <input class="input-text animated wow flipInY delay-04s" type="text" name="Tipo_doc" value="<?php echo $Fila['Tipo_doc'];?>" >

                  <input class="input-text animated wow flipInY delay-04s" type="text" name="Nombre" value="<?php echo $Fila['Nombre'];?>"  >

                  <input class="input-text animated wow flipInY delay-04s" type="file" name="Imagen" accept="image/*"   value="<?php echo $Fila['Imagen'];?>"  >  

                  <input class="input-text animated wow flipInY delay-04s" type="text" name="Descripcion_Emp" value="<?php echo $Fila['Descripcion_Emp'];?>"  >

                  <input class="input-text animated wow flipInY delay-04s" type="text" name="Direccion" value="<?php echo $Fila['Direccion'];?>"   >

                  <input class="input-text animated wow flipInY delay-04s" type="text" name="Correo" value="<?php echo $Fila['Correo'];?>"  >

                  <input class="input-text animated wow flipInY delay-04s" type="text" name="Telefono" value="<?php echo $Fila['Telefono'];?>"  >


                  <input class="input-btn animated wow flipInY delay-08s" type="submit" name="Actualizar" style="background: #FF4500;">
                  <input class="input-btn animated wow flipInY delay-08s" type="reset" name="Borrar" style="background: #FF4500;">
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="container">
      <div class="footer_bottom"> <span>Copyright © 2022 SEMS. </span> </div>
    </div>
  </section>


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