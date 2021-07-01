<?php

class DB {
	private $server;
	private $user;
	private $password;
	private $database;
	public function __construct($server, $user, $password, $database) {
		$this->server = $server;
		$this->user = $user;
		$this->password = $password;
		$this->database = $database;
	}
	private function connect() {
		return mysqli_connect($this->server, $this->user, $this->password ,$this->database);
	}
	public function registrarUsuario($nombre, $email, $telefono, $password) {
		return mysqli_query($this->connect(), "INSERT INTO tblusuarios(uid, nombre, email, telefono, password) VALUES('$telefono', '$nombre', '$email', '$telefono', '$password')");
	}
	public function getPassword($email) {
		return mysqli_query($this->connect(), "SELECT password FROM tblusuarios WHERE email = '$email'");
	}
}
