<?php 
if(isset($_SESSION["usuario"]))
{
header("location:admin.php");
}
?>
<div id = "login">
	<h1>Iniciar session</h1><br>
	<form name = "fromularioregistro" action = "php/control.php" method = "POST" enctype = "application/x-www-form-urlencoded">
		<label for = "nom">Usuario : </label>
		<input id ="nom" name = "name" type = "email" required title = "Nombre de usuario" class = "cambio"><br><br>
		<label for "pwd">Password : </label>
		<input type = "password" id = "pwd" name = "password" requiered  title = "password" class = "cambio"><br><br>
		<input type = "submit" name = "boton" value = "acceder" class = "cambio">
	</form>
		<br>
		<?php include("mensaje.php");?>
</div>
