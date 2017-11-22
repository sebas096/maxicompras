<?php
session_start();
	if(isset($_SESSION["usuario"]))
	{
		include("conexion.php");
		$tipo = $_FILES["imagen"]["type"];
		if(strstr($tipo,"jpg"))
		{
			$ext = ".jpg";
		}else if(strstr($tipo,"png"))
		{
			$ext = ".png";
		}
		else
		{
			$ext = ".gif";
		}
		$titulo =$_POST["titulo"];
		$precio = $_POST["precio"];
		$sexo = $_POST["sexofm"];
		$descripcion = $_POST["descripcion"];
		$archivo = $_FILES["imagen"]["tmp_name"];
		$imagen = $_FILES["imagen"]["name"];
		$destino = "../productos/".$imagen;
		move_uploaded_file($archivo,$destino)or die("No se pudo subir la imagen");
		$consulta = "INSERT INTO `productos`(`nombre`, `imagen`, `descripcion`, `precio`, `sexo`) VALUES('$titulo', '$imagen', '$descripcion', '$precio' , '$sexo')"; 
		$ejecutar_consulta = $conexion->query($consulta);
		if($ejecutar_consulta)
		{
			$mensaje  = "El producto se agrego correctamente";
		}
		else
		{
			$mensaje = "Ocurrio un problema a al intentar guardar el producto";
		}
		header("location:admin.php?mensaje=$mensaje");
	}
	else
	{
		header("location:?op=loggin&mensaje=No ha iniciado session");
	}

?>