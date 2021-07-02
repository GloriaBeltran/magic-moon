<?php

require_once "../lib/db.config.php";

$db = new DB();
$consulta = $db->obtenerProductosCarrito($_COOKIE["uid"]);
$productos = mysqli_fetch_all($consulta);
// foreach ($productos as $producto) {
// 	print $producto[0];
// }
print_r($productos);

if (isset($_POST["nombre"])) {
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$password = $_POST["password"];

	$db = new DB();
	$db->registrarUsuario($nombre, $email, $telefono, $password);
}
