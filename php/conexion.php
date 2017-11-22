<?php
	function conectarse()
	{
		$servidor ="sql304.260mb.net";
		$usuario = "n260m_14154680";
		$password ="abretesesamo";
		$bd = "n260m_14154680_maxicompras";
		$conectar = new mysqli($servidor,$usuario,$password,$bd)or die("error al conectar a la base de datos");
		return $conectar;
	}
$conexion = conectarse();
?>