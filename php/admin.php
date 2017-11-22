<?php
	session_start();
	if(isset($_SESSION["usuario"]))
	{
		
		$ad = $_GET["ad"];
		switch($ad)
		{
			case "ventas":
				$con = "ventas.php";
				break;
			case "Nuevacuenta":
				$con = "nuevacuenta.php";
				break;
			case "modificar":
				$con = "modificarproducto.php";
				break;
			case "quienesomos":
				$con = "Formulario_QuienesSomos.php";
				break;	
			default:
				$con = "agregar.php";
		}
	}
	else
	{
		header("location:../index.php?op=loggin&mensaje=No ha iniciado sesion");
	}
?> 
<!DOCTYPE html>
<html lang = "es">
	<head>
		<meta charset = "utf-8">
		<meta name = "author" content = "sebastian posada calderon">
		<meta name = "keywords" content = "maxicompras,ventas,ropa,marca unica,monini,calidad">
		<meta name = "description" content = "maxicompras prope expression ropa unica">
		<meta name = "title" content "MAXICOMPRAS">
		<title>Maxicompras</title>
		<link rel = "stylesheet" href = "../css/prope_expression.css" type = "text/css">
			<link href='http://fonts.googleapis.com/css?family=Allura' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<div class = "contenedor">
		
		<header>
			<hgroup>
			<h1><a href = "admin.php">Maxi compras</a></h1>
			</hgroup>
		</header>
			<?php if(isset($_SESSION["usuario"]))
			{
				echo "<div class = 'cerrar'><a href = 'cerrar.php'>Cerrar sesion</a></div>";
				echo "<center><div class = 'cerrar'><img src = '../Imagenes/".$_SESSION["usuario"]["imagen"]."'></div>";
				echo "<h1>Admin ".$_SESSION["usuario"]["nombre"]."</h1></center>";
				print_r($_SESSION["usuario"]);
			}?>
		<div id = "contenido">
			<nav>
				<ul>
					<li><a href = "?ad=agregar">Agregar</a></li>
					<li><a href = "?ad=Nuevacuenta">Nueva cuenta de adm</a></li>
					<li><a href = "../index.php">Pagina principal</a></li>
					<li><a href = "?ad=quienesomos">Quienes Somos</a></li>
				</ul>
			</nav>
		<div id = "principal">
			<?php include($con);?>
		</div>
		</div>
	</div>
