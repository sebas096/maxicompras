<?php
	include("conexion.php");
	$consulta = "INSERT INTO `productos`(`nombre`, `imagen`, `descripcion`, `precio`, `sexo`) VALUES ('sebastian','sebas.png','asdasd',123,'m')";
	$je = $conexion->query($consulta)or die("SOy una mierda de servidor");
	if($je)
	{
		echo "LOS agrege";
	}
	else{
		echo "soy una mierda";
	}
?>