<form name = "cuenta_form" method = "POST" action = "crearcuenta.php" enctype = "multipart/form-data">
	<fieldset>
		<legend>Nueva Cuenta</legend>
		<label for = "name">Ingrese un correo : </label>
		<input type = "email" name = "email" title = "Ingrese un correo" required id = "name"><br>
		
		<label for = "pwd">Ingrese un password</label>
		<input type = "password" name = "password" id="pwd" title = "Ingrese una contrase&ntilde;a">
		<br>
		<label for = "nom">Nombre : </label>
		<input type = "text" name = "name" id = "nom" required title = "Ingrese Nombre">
		<label for  = "sexo">Sexo : </label>
		<label for = "f">F</label>
		<input type = "radio" required name = "sexofm" title = "Tu sexo" id = "f" value ="F">
		<label for = "m">M</label>
		<input type = "radio" required name = "sexofm" title = "Tu sexo" id = "m" value = "M">
		<label for = "img">Imagen :</label>
		<div class = "adjuntar_archivo cambio">
			<input type = "file" name = "imagen" required title = "Imagen" id = "img">
		</div>
		<br>
		<input type = "submit" name = "enviar" value = "Agregar">
	</fieldset>
</form>
<?php include("mensaje.php") ?>