<form name = "cuenta_form" method = "POST" action = "agregarproducto.php" enctype = "multipart/form-data">
	<fieldset>
		<legend>Nuevo Producto</legend>
		<label for = "title">Titulo del producto: </label>
		<input type = "text" name = "titulo" title = "Nombre de la imagen" required id = "title" placeholder = "Nombre imagen"><br>
		<label for = "img">Imagen :</label>
		<div class = "adjuntar_archivo">
			<input type = "file" name = "imagen" required title = "Imagen" id = "img">
		</div>
		<label>Sexo :</label>
		<label for "m">M</label>
		<input type = "radio" value = "M" name = "sexofm" required title = "Masculino">
		<label for "f">F</label>
		<input type = "radio" value = "F" name = "sexofm" required title = "Femenino">
		<br>
		<label for "valor">Precio</label>
		<input type = "number" id ="valor" placeholder = "Precio" title = "Precio" name = "precio">
		<br>
		<label for= "des">Descripcion </label>
		<textarea name = "descripcion" required id = "des" placeholder = "Descripcion" title = "descripcion"></textarea>
		<input type = "submit" name = "enviar" value = "Agregar" title = "enviar"><br>
		<?php include("mensaje.php") ?>
	</fieldset>
</form>
