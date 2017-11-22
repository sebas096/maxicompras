<?php
	session_start();
	include("conexion.php");
	if(isset($_POST["name"]) && !empty($_POST["name"])
	&& isset($_POST["password"]) && !empty($_POST["password"]))
	{
	
		$email = $_POST["name"];
		$password = $_POST["password"];
		$consulta = "SELECT * FROM registro WHERE email = '$email'";
		$ejecutar_consulta = $conexion->query($consulta)or die("error en la base de datos");
		$registro = $ejecutar_consulta->fetch_assoc();
		if($password == $registro["password"])
		{
			$arreglo = array("nombre"=>$registro["nombre"],
							"imagen"=>$registro["imagen"]);
							
			$_SESSION["usuario"] = $arreglo;
			header("location:admin.php");
			
		}
		else		{
			header("location:../index.php?op=loggin&mensaje=usuario o password incorrectos");
		}
	}	
	else
	{
		header("location:../index.php?op=loggin&mensaje=llenar los datos");
	}
	$conexion->close();
?>
	