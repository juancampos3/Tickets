CREATE DATABASE IF NOT EXISTS tickets;

USE tickets;

-- TABLA DETALLE TICKET --
CREATE TABLE td_ticketdetalle (
  tickd_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  tick_id int(11) NOT NULL,
  usu_id int(11) NOT NULL,
  tickd_descrip mediumtext NOT NULL,
  fech_crea datetime NOT NULL,
  est int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- TABLA CATEGORIA --
CREATE TABLE tm_categoria (
  cat_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  cat_nom varchar(150) NOT NULL,
  est int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- INSERCION DATOS TABLA CATEGORIA --
INSERT INTO tm_categoria (cat_id, cat_nom, est) VALUES
(1, 'HARDWARE', 1),
(2, 'SOFTWARE', 1),
(3, 'OTROS', 1);

-- TABLA TICKET --
CREATE TABLE tm_ticket (
  tick_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  usu_id int(11) NOT NULL,
  cat_id int(11) NOT NULL,
  cats_id INT NOT NULL,
  tick_titulo varchar(250) NOT NULL,
  tick_descrip mediumtext NOT NULL,
  tick_estado varchar(15) NOT NULL,
  fech_crea datetime DEFAULT NULL,
  usu_asig int(11) DEFAULT NULL,
  fech_asig datetime DEFAULT NULL,
  tick_estre INT NULL,
  tick_coment VARCHAR (300) NULL,
  est int(11) NOT NULL,
  fech_cierre DATETIME,
  prio_id INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- TABLA USUARIO --
CREATE TABLE tm_usuario (
  usu_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  usu_nom varchar(150) NOT NULL,
  usu_ape varchar(150) NOT NULL,
  usu_correo varchar(150) NOT NULL,
  usu_pass varchar(500) NOT NULL,
  rol_id int(11) NOT NULL,
  fech_crea datetime DEFAULT NULL,
  fech_mod datetime DEFAULT NULL,
  fech_elim datetime DEFAULT NULL,
  est int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- INSERCION DATOS TABLA USUARIO --
INSERT INTO tm_usuario (usu_id, usu_nom, usu_ape, usu_correo, usu_pass, rol_id, fech_crea, fech_mod, fech_elim, est) VALUES
(1, 'JUAN', 'CAMPOS', 'jujocamen@gmail.com', '56a33df92d65617683e23eecbbd90169', 1, NULL, NULL, NULL, 1),
(2, 'DESARROLLO', 'SOPORTE', 'desarrollo@soporteencasa.com', '29c2b9eb8cf2bdc98be0c38202e63582', 2, NULL, NULL, NULL, 1),
(3, 'JORGE', 'ROLDAN', 'jerby94@gmail.com', 'ccf3d8c196514f5c572b740163576b58', 2, NULL, NULL, NULL, 1),
(4, 'JUAN', 'PARRA', 'juanparra2517@gmail.com', '6812a633f869947aaaa0804a1dcd4dd1', 1, NULL, NULL, NULL, 1);

-- TABLA DOCUMENTOS --
CREATE TABLE td_documento(
	doc_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tick_id INT NOT NULL,
    doc_nom VARCHAR(500) NOT NULL,
    fech_crea DATETIME NULL,
    est INT NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE tm_subcategoria(
	cats_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cat_id int(11) NOT NULL,
    cats_nom VARCHAR(150) NULL,
    est INT NOT NULL
);

INSERT INTO tm_subcategoria (cats_id, cat_id, cats_nom, est) VALUES
(1, 1,'MONITOR', 1),
(2, 2,'WINRAR', 1),
(3, 3,'CAPRICHITOS', 1);

CREATE TABLE tm_prioridad(
	prio_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    prio_nom VARCHAR(50) NOT NULL,
    est INT NOT NULL
);

INSERT INTO tm_prioridad (prio_id, prio_nom, est) VALUES
(1, 'ALTA', 1),
(2, 'MEDIA', 1),
(3, 'BAJA', 1);

DELIMITER $$

CREATE PROCEDURE sp_i_ticketdetalle_01 (xtick_id INT, xusu_id INT)  BEGIN INSERT INTO td_ticketdetalle (tickd_id, tick_id, usu_id, tickd_descrip, fech_crea, est)
VALUES (NULL,xtick_id,xusu_id,'Ticket Cerrado', NOW(),'1');END$$

CREATE PROCEDURE sp_l_usuario_01 ()  BEGIN SELECT * FROM tm_usuario WHERE est='1'; END$$

CREATE PROCEDURE sp_l_usuario_02 (IN xusu_id INT)  BEGIN SELECT * FROM tm_usuario WHERE usu_id=xusu_id; END$$

DELIMITER ;