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
</head>
<body>

<!--Header_section-->
<?php
  session_start();  
  if(isset($_SESSION['Cedula_NIT'])){
    include "Navbar2.php";
  }elseif(isset($_SESSION['Correo'])){
    include "Navbar3.php";
  }else{
    include "Navbar.php";
  }
?>
<!--Header_section--> 

<!--Top_content-->
<section id="top_content" class="top_cont_outer">
  <div class="top_cont_inner">
    <div class="container">
      <div class="top_content">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont flipInY wow animated">
              <h3 style="color: #000080;">SERVICE TO THE PEOPLE</h3>
              <h2>HELLO! WE WELCOME YOU TO SEMS</h2>
              <p> 
              How wide is the Sonsoneño trade? There is no clear answer to this question, since there are a large number of businesses present in the municipality, and it is this question that leads us to another, How to make them known? This is why SEMS emerges as an alternative to the development and marketing of Entrepreneur Products.
              </p>
              <div style="display: flex; flex-direction: row; gap: 12px;">
                <a href="RegEmpresa.php" class="learn_more2" style="background: #FF4500;">Sell ​​with us</a>
                <a href="RegClientes.php" class="learn_more2" style="background: #FF4500;">Shop with us</a>
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
<!--Top_content--> 

<!--Service-->
<!-- <section  id="service">
  <div class="container">
    <h2>Sobre Nosotros</h2>
    <div class="service_area">
      <div class="row">
        <div class="col-lg-4">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <img src="img/Objetivos.png" alt="Objetivos"> </div>
            <h3 class="animated fadeInUp wow">Objetivo</h3>
            <p class="animated fadeInDown wow">Plantear una solución para los emprendedores Sonsoneños, promocionando sus productos en busca de reconocimiento para las empresas independientes.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <img src="img/Medios.png" alt="Medios"> </div>
            <h3 class="animated fadeInUp wow">Medios</h3>
            <p class="animated fadeInDown wow">Por medio de las Tecnologías existentes en las TIC, y la aplicación de estas, se pudo desarrollar este proyecto en beneficio al emprendimiento.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <img src="img/Beneficiarios.png" alt="Beneficiarios"> </div>
            <h3 class="animated fadeInUp wow">Beneficiarios</h3>
            <p class="animated fadeInDown wow">A nivel general todos los emprendedores que busquen, por medio de este aplicativo, mostrar todos sus productos.</p>
          </div>
        </div>
      </div>  
    </div>
  </div>
</section> -->
<!--Service-->

<!--main-section-start-->
<!--Empresas-->
<section  id="work_outer">
  <div class="container">
    <h2>Companies</h2>
    <div class="service_area">
      <div class="row">
        <?php
           include 'Conexiones/con_db.php';
          $query="SELECT*FROM empresas ORDER BY Nombre";
          $Consulta=mysqli_query($Conex,$query);
        
          if (mysqli_num_rows($Consulta) >= 1) {
            while($Fila=mysqli_fetch_array($Consulta)){ ?>
        <div class="col-lg-4">
          <div class="service_block">
            <div> <img src="<?php echo $Fila['Imagen'] ?>" width="100px" height="80px"" alt="Objetivos"> </div>
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
      <h2>Products</h2>
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
                <div> <img src="<?php echo $Fila['Imagen'] ?>" width="130px" height="120px"" alt="Objetivos"> </div>
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
<!--Empresas-->
<!--main-section-end--> 

<section class="main-section team" id="team"><!--main-section team-start-->
  <div class="container">
    <h2> Work team </h2>
    <h6>This is the project's design and coding team.</h6>
    <div class="team-leader-block clearfix">
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-03s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/Mafe.jpg" height="350px" width="100%" alt="Mafe">
        </div>
        <h3 class="wow fadeInDown delay-03s">Maria Fernanda Echeverri Osorio</h3>
        <span class="wow fadeInDown delay-03s">programmer</span>
      </div>
      <div class="team-leader-box">
        <div class="team-leader  wow fadeInDown delay-06s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/Majo.jpg" height="350px" width="100%" alt="Majo">
        </div>
        <h3 class="wow fadeInDown delay-06s">María José Henao Grisales</h3>
        <span class="wow fadeInDown delay-06s">designer</span>
      </div>
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-09s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/Estefa.jpg" height="350px" width="100%" alt="Estefa">
        </div>
        <h3 class="wow fadeInDown delay-09s">Estefanía Valencia Valencia</h3>
        <span class="wow fadeInDown delay-09s">designer</span>
      </div>
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-09s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/Santi.png" height="350px" width="100%" alt="Santiago">
        </div>
        <h3 class="wow fadeInDown delay-09s">Santiago Carmona Rendón</h3>
        <span class="wow fadeInDown delay-09s">designer and analyst</span>
      </div>
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-09s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/Teo.jpg" height="350px" width="100%" alt="Teo">
        </div>
        <h3 class="wow fadeInDown delay-09s">Sebastián Mateo Espinosa Trejos</h3>
        <span class="wow fadeInDown delay-09s">programmer</span>
      </div>
    </div>
  </div>
</section>
<!--main-section team-end-->

<!--twitter-feed-end-->
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
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script> 

<!--<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 350,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>


--> 

<script type="text/javascript">

   
  jQuery(document).ready(function($){     
// Portfolio Isotope
	var container = $('#portfolio-wrap');	
	

	container.isotope({
		animationEngine : 'best-available',
	  	animationOptions: {
	     	duration: 200,
	     	queue: false
	   	},
		layoutMode: 'fitRows'
	});	

	$('#filters a').click(function(){
		$('#filters a').removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
	  	container.isotope({ filter: selector });
        setProjects();		
	  	return false;
	});
		
		
		function splitColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = 1;
			
			
			if (winWidth > 1024) {
				columnNumb = 4;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 479) {
				columnNumb = 2;
			} else if (winWidth < 479) {
				columnNumb = 1;
			}
			
			return columnNumb;
		}		
		
		function setColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = splitColumns(), 
				postWidth = Math.floor(winWidth / columnNumb);
			
			container.find('.portfolio-item').each(function () { 
				$(this).css( { 
					width : postWidth + 'px' 
				});
			});
		}		
		
		function setProjects() { 
			setColumns();
			container.isotope('reLayout');
		}		
		
		container.imagesLoaded(function () { 
			setColumns();
		});
		
	
		$(window).bind('resize', function () { 
			setProjects();			
		});

});
$( window ).load(function() {
	jQuery('#all').click();
	return false;
});
</script>

</body>
</html>