<?php
	if(isset($_SESSION["usuario"]))
	{
		include("conexion.php");
		$consulta = "SELECT * FROM productos WHERE referencia =".$_GET["referencia"];
		$ejecutar_consulta = $conexion->query($consulta);
		$registro = $ejecutar_consulta->fetch_assoc();
?>
		<fieldset>
		<legend>Modificar Productos</legend>
		<form action = "modificar_productos.php?referencia=<?php echo $_GET["referencia"];?>" method = "POST" name = "form" title = "Modificar" enctype = "multipart/form-data">
			<label for = "name">Nombre</label>
			<input required type = "text" name = "nombre" value = "<?php echo $registro["nombre"];?>" id = "name" title = "nombre" required><br>
			<label >Descripcion</label>
			<textarea name = "descripcion" title = "Descripcion" required ><?php echo $registro["descripcion"]?></textarea>
			<label for = "preci">Precio : </label>
			<input name = "precio" type = "text" value = "<?php echo $registro["precio"]?>" id = "preci" required>
			<input type = "submit" name = "enviar" value = "Modificar">
			</form>
		</fieldset>
<?php
	}
?>