<?php
	include("conexion.php");
	$consulta = "SELECT * FROM productos WHERE sexo='M' ORDER BY referencia DESC";
	$ejecutar_consulta = $conexion->query($consulta);
	?>
<br>
<div class = "row">
	<?php
	while($re=$ejecutar_consulta->fetch_assoc())
	{
?>		
		<div class = "col-md-6 " >
		<center>
				<h3><span id = "titulo"><?php echo $re["nombre"];?></span></h3> <br>
				<a href = "?op=detalles&referencia=<?php echo $re["referencia"];?>">
				<img src = "./productos/<?php echo $re['imagen']; ?>" title = "<?php echo $re["descripcion"];?>" class = "img-rounded"  width= "304" height="236" ><br>
				<span>$<?php echo $re["precio"];?></span><br>
			</a>
			<br><br>
		</center>
		</div>

<?php
	}
?>
</div>