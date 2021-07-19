<?php

require_once "../lib/db.config.php";

if (isset($_POST["nombre"])) {
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$password = $_POST["password"];

	$db = new DB();
	$db->registrarUsuario($nombre, $email, $telefono, $password);
?>
	<script>
		Swal.fire({
			icon: "success",
			title: "Registro Exitoso",
			background: "#a5dc86",
			toast: true,
			position: 'bottom-right',
			iconColor: 'white',
			customClass: {
				popup: 'colored-toast'
			},
			showConfirmButton: false,
			timer: 1500,
			timerProgressBar: true
		})
	</script>
<?php
}
