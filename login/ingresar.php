<?php

require_once "../lib/db.config.php";

$email = $_POST['email'];
$password = $_POST['password'];

if (isset($email)) {
	$db = new DB();
	$consulta = mysqli_fetch_row($db->getPassword($email));
	$server_password = $consulta[0];
	$uid = $consulta[1];
	if (isset($server_password)) {
		if ($password == $server_password) {
			setcookie("uid", $uid);
			// print $_COOKIE["uid"];
			print('<script>' .
				'Swal.fire({' .
				'icon: "success",' .
				'title: "' . $uid . '"' .
				'});' .
				'</script>');
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
