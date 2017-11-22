<?php
	include("conexion.php");
	$CONSULTA = 'SELECT * FROM quienesomos order by id desc limit 1';
	$ejecutar_consulta = $conexion->query($CONSULTA);
	$registro = $ejecutar_consulta->fetch_assoc();
 ?>
	<section>
	<article>
		<p><?php echo $registro[descripcion];?></p>
	</article>
</section>