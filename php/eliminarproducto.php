<?php
	session_start();
	if(isset($_SESSION["usuario"]))
	{
		include("conexion.php");
		$consulta = "SELECT imagen FROM productos WHERE referencia =".$_GET["referencia"];
		$ejecutar_consulta=$conexion->query($consulta);
		$re = $ejecutar_consulta->fetch_assoc();
		unlink("../productos/".$re["imagen"]);
		$consulta = "DELETE FROM productos WHERE referencia=".$_GET["referencia"];
		$ejecutar_consulta = $conexion->query($consulta);
		$consulta = "DELETE FROM comentarios WHERE referencia=".$_GET["referencia"];
		$ejecutar_consulta = $conexion->query($consulta);
	}
header("location:../");

?>