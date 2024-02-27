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

<style>
    body{
        background-color: #f9f9f9;
        text-align:center
    }

    @media (max-width: 752px){
        table{
          width:100%;
          border-radius: 0.25rem;
        }

        table td[data-titulo]{
          display: flex;
        }

        table td[data-titulo]::before{
          content: attr(data-titulo);
          width: 90px;
          font-weight: bold;
        }

        table tr{
          display: flex;
          flex-direction: column;
          border: 1px solid gray;
          padding: 1em;
          margin-bottom: 1em;
        }

        table thead{
          display: none;
        }
    }

    h1{
    margin: 40px 40px;
    text-align: center;
    }

    button{
    margin: 20px 30px;
    display: flex;
    justify-content:center;
    }

    .container{
    display: flex;
    flex-direction: column;
    }
</style>
    <title>Buscar Productos</title>
</head>
<body>
    <?php
    include "Navbar2.php";
    ?>

<div class="container"> 
    <h1>Search Products</h1>
    <form action="" method="POST">
      <input type="text" class="form-control" id="exampleFormControlInput1" name="TextoBuscar">
      <button class="btn btn-primary" type="submit" name="Buscar">Search</button>
    </form>
   <table class="table table-borderless table-warning">
      <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Category</th>
        <th scope="col">Company</th>
        </tr>    
    </thead>
</div>

   <?php
      include 'Conexiones/con_db.php';
      if (isset($_POST['Buscar']) && isset($_POST['TextoBuscar'])) {
        $Buscar=$_POST['TextoBuscar'];
        $Buscar="%$Buscar%";
        $query="SELECT p.idProducto,p.Precio,p.Nombre ,p.Imagen, e.Nombre, e.Cedula_NIT,p.Descripcion,p.Categoria
        FROM productos as p 
        INNER JOIN empresas as e ON p.Empresas_Cedula_NIT=e.Cedula_NIT 
        WHERE e.Nombre LIKE '$Buscar' OR
        p.Precio LIKE '$Buscar' OR p.Descripcion LIKE '$Buscar' OR p.Categoria LIKE '$Buscar'";
  
        
        $Consulta=mysqli_query($conexion,$query);
        if (mysqli_num_rows($Consulta) >= 1) {
          while($Fila=mysqli_fetch_array($Consulta)){ ?>
           <tr>
             <td data-titulo="Nombre"><?php echo $Fila[2] ?></td>
             <td data-titulo="Imagen"><img src="<?php echo $Fila['Imagen'] ?>" width="100px" heigth="auto"></td>
             <td data-titulo="Precio"><?php echo $Fila['Precio'] ?></td>
             <td data-titulo="Descripción"><?php echo $Fila['Descripcion'] ?></td>
             <td data-titulo="Categoría"><?php echo $Fila['Categoria'] ?></td>
             <td data-titulo="Empresa"><?php echo $Fila['Nombre'] ?></td>
           </tr>
           <?php
          }
        }else{
          echo"No results :(";
        }
      }  
    ?> 
  </table>

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
</body>
</html>