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

  <title>Registrar Empresas</title>
</head>
<body>
  <?php
    session_start();  
    $navbar = isset($_SESSION['Cedula_NIT']) ? "Navbar2.php" : "Navbar.php";
    include $navbar;
  ?>

  <section class="footer_section" id="contact">
    <div class="container">
      <section class="main-section contact" id="contact">
        <div class="contact_section">
          <h2>Registrar Empresa</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 wow fadeInLeft">
            <div class="contact-info-box address clearfix">
              <h3>Info</h3>
              <p>Este es un formulario de registro de Empresas, Aquí podrá registrar su empresa o su emprendimiento, con esto usted hará público su negocio.</p>
              <p>¿Ya tiene una cuenta?<br>
              Inicie sesión ahora.</p>
              <a href="Login.php"><input style="background: #FF4500;"
              class="input-btn animated wow flipInY delay-08s" type="submit" value="Iniciar Sesión"></a>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp delay-06s">
            <div class="form">    
              <form action="Conexiones/ConEmpresa.php" method="POST" enctype="multipart/form-data">
                  <input class="input-text animated wow flipInY delay-02s" type="number" name="Cedula_NIT" placeholder="Documento de su empresa *" onFocus="if    (this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">

                  <select class="input-text animated wow flipInY delay-04s" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this. defaultValue;" name="Tipo">
                      <option selected>Tipo de Documento</option>
                      <option name="Cedula">NIT</option>
                      <option name="Cedula">Cédula</option>
                      <option name="Doc_extr">Documento de extranjería</option>
                      <option name="Reg_ci">Registro Civil</option>
                  </select>

                  <input class="input-text animated wow flipInY delay-04s" type="text" name="Nombre" value="Nombre *"  onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this. defaultValue;">

                  <input class="input-text animated wow flipInY delay-04s" type="file" name="Imagen" accept="image/*"   value="imagen *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this. defaultValue;">

                  <input class="input-text animated wow flipInY delay-04s" type="text" name="Descrip_Emp" value="Descripción Empresa *"  onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this. defaultValue;">

                  <input class="input-text animated wow flipInY delay-04s" type="text" name="Direccion" value="Dirección *"  onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this. defaultValue;">

                  <input class="input-text animated wow flipInY delay-04s" type="text" name="Correo" value="Correo *"  onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this. defaultValue;">

                  <input class="input-text animated wow flipInY delay-04s" type="text" name="Telefono" value="Telefono "  onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this. defaultValue;">


                  <input class="input-btn animated wow flipInY delay-08s" type="submit" name="Enviar" value="Enviar" style="background: #FF4500;">
                  <input class="input-btn animated wow flipInY delay-08s" type="reset" name="Borrar" value="Restablecer" style="background: #FF4500;">
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
  <script>
      wow = new WOW(
        {
          animateClass: 'animated',
          offset:       100
        }
      );
      wow.init();
      document.getElementById('').onclick = function() {
        var section = document.createElement('section');
        section.className = 'wow fadeInDown';
      section.className = 'wow shake';
      section.className = 'wow zoomIn';
      section.className = 'wow lightSpeedIn';
        this.parentNode.insertBefore(section, this);
      };
    </script> 
  <script type="text/javascript">
    $(window).load(function(){
      
      $('a').bind('click',function(event){
        var $anchor = $(this);
        
        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top - 91
        }, 1500,'easeInOutExpo');
        event.preventDefault();
      });
    })
  </script> 
</body>
</html>