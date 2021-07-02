<?php

class User {
	public function __construct($uid) {
		$this->uid = $uid;
	}
	public function connectCarrito() {
		return mysqli_connect("localhost", "root", "", "dbmagicmooncarrito");
	}
	public function obtenerProductosCarrito() {
		return mysqli_query($this->connect(), "SELECT * FROM productos")
	}
}