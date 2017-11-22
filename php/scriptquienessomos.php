<?php 
	session_start();
	if(isset($_SESSION["usuario"]))
	{
		include("conexion.php");
		$descripcion = @$_POST["descripcion"];
		$consulta ="INSERT INTO quienesomos (descripcion) VALUES ('".$descripcion."')";
		$ejecutar_consulta = $conexion->query($consulta);
		if($ejecutar_consulta)
		{
			$mensaje  = "El campo se agrego correctamente";
		}
		else
		{
			$mensaje = "Ocurrio un problema a al intentar guardar el campo";
		}
		header("location:admin.php?mensaje=$mensaje");
	}
	else
	{
		header("location:?op=loggin&mensaje=No ha iniciado session");
	}
	header("location:admin.php?ad=quienesomos");
	
?>