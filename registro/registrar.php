<?php

require_once "../lib/db.config.php";

if (isset($_POST["nombre"])) {
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$password = $_POST["password"];

	$db = new DB("localhost", "root", "", "dbmagicmoon");
	$db->registrarUsuario($nombre, $email, $telefono, $password);
}
