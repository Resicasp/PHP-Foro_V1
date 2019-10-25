<html>
	<head>
		<meta charset="UTF-8">
		<link href="web/micss.css" rel="stylesheet" type="text/css" />
		<title>Miniforo</title>
	</head>
	
	<body>
		<div id="container" style="width: 450px;">
			<div class="cabecera">
				<center><img src="web/logo.png" class="foto">
				<h1 style="color:white">Miniforo versión 1.0</h1></center>
			</div>

			<div id="content">
				<?php 
					// PRIMERA APROXIMACIÓN AL MODELO VISTA CONTROLADOR. 
					// Funciones auxiliars Ej- usuarioOK
					include_once 'app/funciones.php';

					// Activo el control de sesiones
					session_start();

					// No hay ninguna orden muestro la entrada
					if(!isset($_REQUEST['orden'])){
						include_once 'app/entrada.php';
						exit();
					} 
					// La orden es Entrar anoto el usuario en la session si es correcto
					if($_REQUEST['orden'] == "Entrar"){
							if(isset($_REQUEST['nombre']) && isset($_REQUEST['contraseña']) && usuarioOK($_REQUEST['nombre'], $_REQUEST['contraseña'])){
									// Anoto el usuario en la session USUARIO CONECTADO 
									$_SESSION['usuario'] = $_REQUEST['nombre'];
									echo "<br>Bienvenido <b>".$_REQUEST['nombre']."</b><br><br>";
									include_once  'app/comentario.html';
								}
								else{
									include_once 'app/entrada.php';
									echo "<br> Usuario no válido </br>";
								}
							exit();
					}
					else {
						// Cualquier otra orden tiene EXISTIR EL USUARIO EN LA SESSION
						if(!isset($_SESSION['usuario']) ){
							include_once 'app/entrada.php';
							exit();
						}
						// ORDENES QUE SE PUEDEN REALIZAR SI EL USUARIO SE HA AUTENTICADO
						
						switch ($_REQUEST['orden']){ 
							case "Nueva opinión":
								echo "<br>Nueva opinión.<br><br>";
								include_once  'app/comentario.html';
								break;
							case "Detalles": // Mensaje y detalles
								echo "<br>Detalles de su opinión.<br><br>";
								include_once 'app/comentariorelleno.php';
								include_once 'app/detalles.php';
								break;
							case "Terminar": // Formulario inicial
								// Cierro la session
								session_destroy();
								include_once 'app/entrada.php';
						}
					}
				?>
			</div>
		</div>
	</body>
</html>
