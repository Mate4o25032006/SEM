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
<title>User Interface</title>

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

var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>
</head>
<body>

<!--Header_section-->
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
    <h2><?php echo $Fila['Nombre'];?> interface</h2>
    <div class="service_area">
      <div class="row">
        <div class="col-lg-4">
          <div class="service_block">
            <a href="RegProductos.php">
             <div class="service_icon delay-03s animated wow  zoomIn"> <img src="img/AggProd.png" alt="Agregar"> </div>
             <h3 class="animated fadeInUp wow">Add Product</h3>
            </a>
            <p>This option will allow you to add the products to your venture.</p>
          </div>
        </div>
        
        <div class="col-lg-4">
          <div class="service_block">
            <a href="ActEmpresas.php?ID=<?php echo $Fila["Cedula_NIT"] ?>">
             <div class="service_icon icon2  delay-03s animated wow zoomIn"><img src="img/Actualizar.png" alt="Actualizar"> </div>
             <h3 class="animated fadeInUp wow">Update Company</h3>
            </a>
            <p>This option will allow you to update your Company.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service_block">
            <a href="Conexiones/Cerrar_sesion.php">
             <div class="service_icon icon3  delay-03s animated wow zoomIn"> <img src="img/Eliminar.png" alt="Cerrar Sesión"> </div>
             <h3 class="animated fadeInUp wow">Sign off</h3> 
            </a>
            <p>This option will allow you sign off.</p>
          </div>
        </div>
      </div>  
    </div>
  </div>
</section>
<!--Service-->

<section  id="work_outer">
  <div class="container">
    <h2>My Products</h2>
    <div class="service_area">
      <div class="row">
        <?php
          include 'Conexiones/con_db.php';
          $query="SELECT * FROM productos WHERE Empresas_Cedula_NIT LIKE '$user_query'";
          $Consulta=mysqli_query($Conex,$query);
        
          if (mysqli_num_rows($Consulta) >= 1) {
            while($Fila=mysqli_fetch_array($Consulta)){ ?>
            <div class="col-lg-4">
              <div class="service_block"><img src="<?php echo $Fila['Imagen'] ?>" width="130px" height="120px"" alt="Objetivos">
                <div>  </div>
                <h3 class="animated fadeInUp wow"><?php echo $Fila['Nombre'] ?></h3>
                <p class="animated fadeInDown wow">-<?php echo $Fila['Descripcion'] ?></p>
                <p>-<?php echo $Fila['Precio'] ?></p>
                <p>-<?php echo $Fila['Categoria'] ?></p>
                <p>-<a href="ActProductos.php?ID=<?php echo $Fila["idProducto"] ?>">Update</a></p>
                <p>-<a href="EliProductos.php?ID=<?php echo $Fila["idProducto"] ?>">Delete</a></p>
                
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
