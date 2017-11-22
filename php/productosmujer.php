
<?php
	include("conexion.php");
	$consulta = "SELECT * FROM productos WHERE sexo='F' ORDER BY referencia DESC";
	$ejecutar_consulta = $conexion->query($consulta);
	while($re=$ejecutar_consulta->fetch_assoc())
	{
?>		
		<div class = "producto">
		<center>
				<h2><span id ="titulo"><?php echo $re["nombre"];?></sapn></h2> <br>
				<a href = "?op=detalles&referencia=<?php echo $re["referencia"];?>">
				<img src = "./productos/<?php echo $re["imagen"]; ?>" title = "<?php echo $re["descripcion"];?>"><br>
				<span>$<?php echo $re["precio"];?></span><br>
			</a>
		</center>
		</div>

<?php
	}
?>