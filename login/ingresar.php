<?php

require_once "../lib/db.config.php";

$email = $_POST['email'];
$password = $_POST['password'];

if (isset($email)) {
	$db = new DB();
	$consulta = $db->getPassword($email);
	$server_password = mysqli_fetch_row($consulta)[0];
	if (isset($server_password)) {
		if ($password == $server_password) {
			print('<script>' .
				'Swal.fire({' .
				'icon: "success",' .
				'title: "Login exitoso"' .
				'});' .
				'</script>');
			setcookie("uid", "asd", time() + (86400 * 30));
		} else {
			print('<script>' .
				'Swal.fire({' .
				'icon: "error",' .
				'title: "La contraseña no es correcta"' .
				'});' .
				'</script>');
		}
	} else {
		print('<script>' .
			'Swal.fire({' .
			'icon: "error",' .
			'title: "El usuario con ese email no existe"' .
			'});' .
			'</script>');
	}
}
