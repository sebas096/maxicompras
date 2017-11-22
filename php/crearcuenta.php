<?php
	session_start();
	if(isset($_SESSION["usuario"]))
	{
		include("conexion.php");
		$email = $_POST["email"];
		$password = $_POST["password"];
		$nombre = $_POST["name"];
		$sexo = $_POST["sexofm"];
		$imagen = $_POST["imagen"];
		$consulta = "SELECT * FROM registro WHERE email = '$email'";
		$ejecutar_consulta = $conexion->query($consulta);
		$num_regs = $ejecutar_consulta->num_rows;
		if($num_regs==0)
		{
			$consulta = "INSERT INTO registro (email,password,nombre,sexo,imagen) VALUES ('$email','$password','$nombre','$sexo','$imagen')";
			$ejecutar_consulta = $conexion->query($consulta)or die("error en la consulta");
			if($ejecutar_consulta)
			{
				$mensaje = "Se ha guardado correctamente";
			}
			else
			{
				$mensaje = "Ha ocurrido un problema vuelve a intentar";
			}
			
		}
		else
		{
			$mensaje = "El email $email ya existe";
		}
		header("location:admin.php?ad=Nuevacuenta&mensaje=$mensaje");
	
	}
	else
	{
		header("location:../index.php?op=loggin&mensaje=No ha iniciado sesion");
	}
?>