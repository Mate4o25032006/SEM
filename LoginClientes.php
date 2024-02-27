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

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>

<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->

<script type="text/javascript">
	$(document).ready(function(e) {
        $('.res-nav_click').click(function(){
		$('ul.toggle').slideToggle(600)	
			});	
			
	$(document).ready(function() {
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 0) {
             $('#header_outer').addClass('fixed');
         }
         else {
             $('#header_outer').removeClass('fixed');
         }
    });
	
	  });
	  

		    });	
function resizeText() {
	var preferredWidth = 767;
	var displayWidth = window.innerWidth;
	var percentage = displayWidth / preferredWidth;
	var fontsizetitle = 25;
	var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
	$(".divclass").css("font-size", newFontSizeTitle)
}
</script>
    <title>Login</title>
</head>
<body>
  <?php
    include "Navbar.php";
  ?>
  <footer class="footer_section" id="contact">
    <div class="container">
      <section class="main-section contact" id="contact">
        <div class="contact_section">
          <h2>Iniciar Sesión</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 wow fadeInLeft">
            <div class="contact-info-box address clearfix">
              <h3>Info</h3>
              <p>Este es un formulario de Login de Clientes, Aquí podrá iniciar sesión y acceder a la interfaz de Clientes.</p>
              <p>¿No tiene una cuenta?<br>
              Cree una ahora.</p>
              <a href="RegClientes.php"><input style="background: #FF4500;"
              class="input-btn animated wow flipInY delay-08s" type="submit" value="Registrar Cliente"></a>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp delay-06s">
            <div class="form">    
              <form action="Conexiones/LoginCliente.php" method="POST">
                  <input  class="input-text animated wow flipInY delay-02s" type="text" name="Correo" value="Correo *" onFocus="if    (this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">

                  <input class="input-text animated wow flipInY delay-04s" type="password" name="Contraseña" value="Contraseña *"  onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this. defaultValue;">

                  <input class="input-btn animated wow flipInY delay-08s" type="submit" name="Enviar" value="Enviar" style="background: #FF4500;">
                  <input class="input-btn animated wow flipInY delay-08s" type="reset" name="Borrar" value="Reestablecer" style="background: #FF4500;">
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
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