<?php require_once "registrar.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registro</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="contenedor" id="contenedor">
		<section class="main" id="main">
			<h1 class="titulo" id="titulo">Registro</h1>
			<form class="formulario" id="formulario" method="POST" autocomplete="off">
				<!-- Grupo: Nombre -->
				<div class="grupo_nombre" id="grupo_nombre">
					<label for="input_nombre" class="label" id="label_nombre">Nombre</label>
					<input type="text" class="input" id="input_nombre" name="nombre">
				</div>
				<!-- Grupo: Correo Electronico -->
				<div class="grupo_email" id="grupo_email">
					<label for="input_email" class="label" id="label_email">Correo Electronico</label>
					<input type="email" class="input" id="input_email" name="email">
				</div>
				<!-- Grupo: Telefono -->
				<div class="grupo_telefono" id="grupo_telefono">
					<label for="input_telefono" class="label" id="label_telefono">Telefono</label>
					<input type="tel" class="input" id="input_telefono" name="telefono">
				</div>
				<!-- Grupo: Contraseña -->
				<div class="grupo_password" id="grupo_password">
					<label for="input_password" class="label" id="label_password">Contraseña</label>
					<input type="password" class="input" id="input_password" name="password">
				</div>
				<button class="btn" id="btn-enviar">Registrarme</button>
			</form>
			<p class="texto_usuario_existente" id="texto_usuario_existente">¿Ya tienes cuenta? <a href="../login" class="enlace">¡Ingresa ahora!</a></p>
		</section>
	</div>
	<script src="https://kit.fontawesome.com/4060128349.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="../components.js"></script>
</body>
</html>