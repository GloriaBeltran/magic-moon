<?php

class DB {
	public function __construct() {
		$this->server = "localhost";
		$this->user = "root";
		$this->password = "";
		$this->database = null;
	}
	// Funcion para definir la base de datos antes de usar una sentencia SQL
	private function setDatabase($database) {
		// Define la base de datos con el parametro que se le pasa
		return $this->database = $database;
	}
	// Retorna la conexion a la base de datos
	private function connect() {
		return mysqli_connect($this->server, $this->user, $this->password ,$this->database);
	}
	// Crea un carrito de compras para un usuario
	private function crearCarrito($uid) {
		// Define la base de datos a usar
		$this->setDatabase("dbmagicmooncarrito");
		// Crea el registro que va a contener los productos del carrito
		return mysqli_query($this->connect(), "CREATE TABLE $uid (producto VARCHAR(255) NOT NULL PRIMARY KEY)");
	}
	// Obtiene los productos que el usuario tiene en su carrito
	public function obtenerProductosCarrito($uid) {
		// Define la base de datos a usar
		$this->setDatabase("dbmagicmooncarrito");
		// Ejecuta la sentencia SELECT para obtener los productos
		return mysqli_query($this->connect(), "SELECT * FROM $uid");
	}
	// Este metodo registra un usuario con los parametros que se le den
	public function registrarUsuario($nombre, $email, $telefono, $password) {
		// Tambien crea un UserID aleatorio para cada usuario, para mayor seguridad
		$uid = session_create_id();
		// Crea el carrito de compras para el usuario creado
		$this->crearCarrito($uid);
		// Almacena el UserID en una cookie por 30 días para acceder despues
		setcookie("uid", $uid, time()+(86400*30));

		// Define la base de datos a usar
		$this->setDatabase("dbmagicmoon");
		// Crea el registro del usuario
		return mysqli_query($this->connect(), "INSERT INTO tblusuarios(uid, nombre, email, telefono, password) VALUES('$uid', '$nombre', '$email', '$telefono', '$password')");
	}
	// Obtiene la contraseña del usuario con el email que se de
	public function getPassword($email) {
		// Define la base de datos a usar
		$this->setDatabase("dbmagicmoon");
		// Ejecuta la sentencia SELECT para obtener la contraseña
		return mysqli_query($this->connect(), "SELECT password FROM tblusuarios WHERE email = '$email'");
	}
}
