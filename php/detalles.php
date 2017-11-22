<?php
	include("conexion.php");
	session_start();
	if(isset($_SESSION["usuario"]))
	{
?>
	<div class = "cerrar"><a href = "php/eliminarproducto.php?referencia=<?php echo $_GET["referencia"];?>">Eliminar</a></div>
	<div class = "cerrar"><a href = "php/admin.php?ad=modificar&referencia=<?php echo $_GET["referencia"];?>">Modificar</a></div>
<?php
	}
	$consulta = "SELECT * FROM	productos WHERE referencia = '".$_GET["referencia"]."'";
	$ejecutar_cunsulta = $conexion->query($consulta);
	while($re = $ejecutar_cunsulta->fetch_assoc())
	{
?>
	<center>
		<h2><span id = "titulo"><?php echo $re["nombre"];?></span></h2><br>
		<img src = "productos/<?php echo $re["imagen"];?>"><br>
		<span>Precio : $<?php echo $re["precio"];?></span><br>
		<span id = "description"><?php echo $re["descripcion"];?></span><br>
		<nav><ul><li><a href = "./">Volver al catalogo</a></li></ul></nav>
	</center>
	
<?php
	}
?>

<fieldset>
	<legend>Comentarios</legend>
	<br>
<form action = "php/comentarios.php" method = "POST" name = "form" title = "Comentario" enctype = "application/form-data">
	<input type = "text" name = "name" required title = "Nombre" placeholder = "Nombre">
	<?php if(isset($_SESSION["usuario"])){?><input type = "hidden" name = "adm" value = "Admin: <?php echo $_SESSION["usuario"]["nombre"];?>"><?php }?>
	<input type = "hidden" name = "referencia" value = "<?php echo  $_GET["referencia"];?>">
	<br><br>
	<textarea class = "comentario" name = "comentario" title = "comentario" placeholder = "Ingrese un comentario ... maximo 600 caracteres" required ></textarea><br><br>
	<input type = "submit" name "boton" value = "Comentar" title = "Comentar">
</form>
<br>
<?php
	$consulta = "SELECT * FROM comentarios WHERE referencia =".$_GET["referencia"];
	$ejecutar_cunsulta = $conexion->query($consulta);
	$num_regs = $ejecutar_cunsulta->num_rows;
	if($num_regs == 0)
	{
		echo "No hay comentarios";
	}
	else
	{

		while($com = $ejecutar_cunsulta->fetch_assoc())
		{
?>
		
			<span><?php echo $com["nombre"];?></span><br>
			<div id = "comentarios">
				<p><pre><?php echo $com["comentario"];?></pre></p>
			</div>
			<span><?php echo $com["adm"];?><br></span>
			<br>
<?php
		}
	}
?>

</fieldset>