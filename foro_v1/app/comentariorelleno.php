<?php
	$asunto=$_REQUEST['asunto'];
	$txtasunto=$_REQUEST['txtasunto'];
	//echo $txtasunto;
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Comentario</title>
	</head>
	<body>
		<form name="Comentario" method="POST">
			<label>Tema:</label>
			<input type="text" name="asunto" value="<?php echo $asunto ?>"/>
			<br>
			<label>Comentario:</label>
			<textarea name="txtasunto" rows="10" cols="53"/><?php echo $txtasunto ?></textarea><br><br>		
			<center><button class="boton" type="submit" name="orden" value="Detalles">Detalles</button>
			<button class="boton" type="submit" name="orden" value="Nueva opinión">Nueva opinión</button>
			<button class="boton" type="submit" name="orden" value="Terminar">Terminar</button></center>
		</form>
	</body>
</html>


