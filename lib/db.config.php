<?php

class DB {
	public function __construct() {
		$this->server = "localhost";
		$this->user = "root";
		$this->password = "";
		$this->database = "dbmagicmoon";
		$this->uid = null;
	}
	// Retorna la conexion a la base de datos
	private function connect() {
		return mysqli_connect($this->server, $this->user, $this->password ,$this->database);
	}
	// Este metodo registra un usuario con los parametros que se le den
	public function registrarUsuario($nombre, $email, $telefono, $password) {
		// Tambien crea un UserID aleatorio para cada usuario, para mayor seguridad
		$this->uid = session_create_id();
		// Almacena el UserID en una cookie por 30 días para acceder despues
		setcookie("uid", $this->uid, time()+(86400*30));

		// Crea el registro del usuario
		return mysqli_query($this->connect(), "INSERT INTO tblusuarios(uid, nombre, email, telefono, password) VALUES('$this->uid', '$nombre', '$email', '$telefono', '$password')");
	}
	// Obtiene la contraseña del usuario con el email que se de
	public function getPassword($email) {
		// Ejecuta la sentencia SELECT para obtener la contraseña
		return mysqli_query($this->connect(), "SELECT password FROM tblusuarios WHERE email = '$email'");
	}
}
