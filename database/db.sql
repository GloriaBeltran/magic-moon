SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS tblproductos (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre varchar(200) NOT NULL,
	categoria varchar(250) NOT NULL,
	precio varchar(150) NOT NULL,
	cantidad varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS tblusuarios (
	uid varchar(260) NOT NULL PRIMARY KEY,
	nombre varchar(250) NOT NULL,
	email varchar(250) NOT NULL,
	telefono varchar(250) NOT NULL,
	password varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS tblventas (
	idPedido varchar(250) NOT NULL PRIMARY KEY,
	fecha date NOT NULL,
	uid varchar(250) NOT NULL,
	idProductos varchar(300) NOT NULL,
	valorP varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;