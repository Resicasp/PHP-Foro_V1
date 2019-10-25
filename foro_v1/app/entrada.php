<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="web/micss.css" rel="stylesheet" type="text/css" />
		<title>Entrada</title>
	</head>

	<body>
		<form name='entrada' method="POST" >
			<table>
				<tr><br>
					<td>Nombre:</td><td> <input type="text" name="nombre" value="<?=(isset($_REQUEST['nombre']))?$_REQUEST['nombre']:''?>"></td></tr>
				<tr>
					<td>Contraseña: </td><td><input type="password" name="contraseña" value="<?=(isset($_REQUEST['contraseña']))?$_REQUEST['contraseña']:''?>"></td>
				</tr>
			</table><br>
			<button class="boton" type="submit" name="orden" value="Entrar" >Entrar</button>
		</form>
	</body>
</html>