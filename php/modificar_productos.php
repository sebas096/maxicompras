<?php
	session_start();
	if(isset($_SESSION["usuario"]))
	{
		include("conexion.php");
		$nombre = $_POST["nombre"];
		$descripcion = $_POST["descripcion"];
		$precio = $_POST["precio"];
		$consulta = "UPDATE productos SET nombre='$nombre',descripcion = '$descripcion',precio = '$precio' WHERE referencia =".$_GET["referencia"];
		$ejecutar_consulta = $conexion->query($consulta);
		header("location:../?op=detalles&referencia=".$_GET['referencia']);
	}
?>