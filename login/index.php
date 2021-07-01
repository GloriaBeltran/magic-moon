<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="Miguel Ángel Vargas Beltrán">
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="contenedor" id="contenedor">
		<section class="main" id="main">
			<h1 class="titulo" id="titulo">Iniciar Sesión</h1>
			<form class="formulario" id="formulario" method="POST">
				<!-- Grupo: Correo Electronico -->
				<div class="grupo_email" id="grupo_email">
					<label for="input_email" class="label" id="label_email">Correo Electronico</label>
					<input type="email" class="input" id="input_email" name="email">
				</div>
				<!-- Grupo: Contraseña -->
				<div class="grupo_password" id="grupo_password">
					<label for="input_password" class="label" id="label_password">Contraseña</label>
					<input type="password" class="input" id="input_password" name="password">
				</div>
				<button class="btn" id="btn-enviar">Ingresar</button>
			</form>
			<p class="texto_nuevo_usuario" id="texto_nuevo_usuario">¿No tienes cuenta? <a href="../registro" class="enlace">¡Registrate!</a></p>
			<p class="texto_recuperar_contraseña" id="texto_recuperar_contraseña">¿Has olvidado tu contraseña? <a href="../recuperar-contraseña" class="enlace">Recuperar contraseña</a></p>
		</section>
	</div>
	<script src="https://kit.fontawesome.com/4060128349.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script><script src="../components.js"></script>
	<?php require_once "ingresar.php"; ?>
</body>
</html>
