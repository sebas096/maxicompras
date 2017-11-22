<?php
	include("conexion.php");
	$referencia = $_POST["referencia"];
	$nombre = $_POST["name"];
	$comentario = $_POST["comentario"];
	$comentario  = str_replace("<", "&lt", $comentario);
	$adm = $_POST["adm"];
	$consulta = "INSERT INTO comentarios (referencia,nombre,comentario,adm) VALUES ('$referencia','$nombre','$comentario','$adm')";
	$ejecutar_consulta = $conexion->query($consulta)or die("error");
	$conexion->close();
	header("location:../index.php?op=detalles&referencia= $referencia");

?>