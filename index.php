<?php
	session_start();
	$op = @$_GET["op"];
	switch($op)
	{
		case "loggin":
			$contenido = "php/loggin.php";
			$title = "Loggin";
			break;
		case "carrito":
			$contenido = "php/carritodecompras.php";
			$title = "Carrito de compras";
			break;
		case "detalles":
			$contenido = "php/detalles.php";
			$title = "Detalles del producto";
			break;
		case "mujer":
			$contenido = "php/productosmujer.php";
			$title = "Productos";
			break;
		case "somos":
			$contenido = "php/quienessomos.php";
			break;
		default:
			$contenido = "php/productos.php";
			$title = "Productos";
	
	}

?>

-------


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Maxi Compras</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Maxicompras,ventas,ropa,marca unica,monini,calidad,ventas,tecnologia,ropa,celulares">
	<meta name = "author" content = "sebastian posada calderon">
	<meta name = "keywords" content = "Maxicompras,ventas,ropa,marca unica,monini,calidad,ventas,tecnologia,ropa,celulares">
	<meta name = "title" content "Maxicompras">

	<meta name="google-site-verification" content="lQCwuMMLgbFvuFhm8zB8Uy1cYURYNFlfPXqEyyyHgEY">

	<link rel="stylesheet" type="text/css"
		href="css/bootstrap/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Allura' rel='stylesheet' type='text/css'>
	

</head>

<body>
	<img alt="Responsive image"
		src="Imagenes/Maxicompras.jpg"
		class="img-responsive center-block">
	<nav class="navbar navbar-inverse ">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Maxicompras</span> <span class="icon-bar"></span>
					<span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="php/admin.php">Maxicompras</a>
				
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
	
					<li><a href="?op=mujer">Mujer</a></li>
					<li><a href="?op=hombre">Hombre</a></li>
					<li><a href="?op=promociones">Promociones</a></li>
					
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="?op=somos">Quienes somos</a></li>
					<li><a href="#contact">Contactenos</a></li>	
					<?php if(isset($_SESSION["usuario"]))
					{
						echo "<li><a href='php/cerrar.php'><span class='glyphicon glyphicon-user'></span> Cerrar sesion</a></li>";
					}else{
						echo "<li><a href='php/admin.php'><span class='glyphicon glyphicon-log-in'></span> Iniciar Sesion</a></li>";
					}
					?>
			<br>	
					
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>
	<br><br>
	<h1 style="text-align: center;"><?php echo $title;?></h1>
<br>
	<div class="container" style="padding: 0px 30px 50px 80px;">
		<div style="border: 1px solid #CCC;border-radius:15px;"> 
  		<?php include($contenido);?>
  		</div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
	$(document).ready(function()
	{
		$("#but").hover(function()
				{
					$("#hi").slideToggle();
				});
	});
	
</script>

</html>







