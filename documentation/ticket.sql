CREATE DATABASE IF NOT EXISTS tickets;

USE tickets;

-- TABLA DETALLE TICKET --
CREATE TABLE td_detalleticket (
  tickd_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  tick_id int(11) NOT NULL,
  usu_id int(11) NOT NULL,
  tickd_descrip mediumtext NOT NULL,
  fech_crea datetime NOT NULL,
  est int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- INSERCION DATOS TABLA DETALLE TICKET --
INSERT INTO td_detalleticket (tickd_id, tick_id, usu_id, tickd_descrip, fech_crea, est) VALUES
(1, 1, 2, 'Respuesta', '2022-02-26 13:00:00', 1),
(2, 1, 1, 'Respuesta 2', '2022-02-26 13:30:00', 1),
(3, 1, 2, 'Respuesta 3', '2022-02-26 14:00:00', 1),
(4, 1, 1, 'Respuesta 4', '2022-02-26 14:30:00', 1),
(5, 1, 2, 'Respuesta 5', '2022-02-26 15:00:00', 1),
(6, 2, 2, 'Respuesta', '2022-02-26 13:00:00', 1),
(7, 2, 1, 'Respuesta 2', '2022-02-26 13:30:00', 1),
(8, 2, 2, 'Respuesta 3', '2022-02-26 14:00:00', 1),
(9, 2, 1, 'Respuesta 4', '2022-02-26 14:30:00', 1),
(10, 2, 2, 'Respuesta 5', '2022-02-26 15:00:00', 1);

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
  tick_titulo varchar(250) NOT NULL,
  tick_descrip mediumtext NOT NULL,
  tick_estado varchar(15) NOT NULL,
  fech_crea datetime DEFAULT NULL,
  usu_asig int(11) DEFAULT NULL,
  fech_asig datetime DEFAULT NULL,
  est int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- INSERCION DATOS TABLA TICKET --
INSERT INTO tm_ticket (tick_id, usu_id, cat_id, tick_titulo, tick_descrip, tick_estado, fech_crea, usu_asig, fech_asig, est) VALUES
(1, 1, 1, 'TEST 1', 'TICKET 1', 'Abierto', NULL, NULL, NULL, 1),
(2, 1, 1, 'TEST 2', 'TICKET 2', 'Abierto', NULL, NULL, NULL, 1),
(3, 1, 1, 'TEST 3', 'TICKET 3', 'Abierto', NULL, NULL, NULL, 1),
(4, 1, 1, 'TEST 4', 'TICKET 4', 'Abierto', NULL, NULL, NULL, 1),
(5, 1, 1, 'TEST 5', 'TICKET 5', 'Abierto', NULL, NULL, NULL, 1),
(6, 1, 1, 'TEST 6', 'TICKET 6', 'Abierto', NULL, NULL, NULL, 1),
(7, 1, 1, 'TEST 7', 'TICKET 7', 'Abierto', NULL, NULL, NULL, 1),
(8, 1, 1, 'TEST 8', 'TICKET 8', 'Abierto', NULL, NULL, NULL, 1),
(9, 1, 1, 'TEST 9', 'TICKET 9', 'Abierto', NULL, NULL, NULL, 1),
(10, 1, 1, 'TEST 10', 'TICKET 10', 'Abierto', NULL, NULL, NULL, 1),
(11, 1, 1, 'TEST 11', 'TICKET 11', 'Abierto', NULL, NULL, NULL, 1),
(12, 1, 1, 'TEST 12', 'TICKET 12', 'Abierto', NULL, NULL, NULL, 1);

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
(1, 'JUAN JOSE', 'CAMPOS MENDOZA', 'ADMIN1@PRUEBA.COM', '1234', 1, NULL, NULL, NULL, 1),
(2, 'JUAN MANUEL', 'PARRA NAVARRETE', 'ADMIN2@PRUEBA.COM', '1234', 2, NULL, NULL, NULL, 1),
(3, 'JORGE ELIECER', 'ROLDAN BRAVO', 'ADMIN3@PRUEBA.COM', '1234', 1, NULL, NULL, NULL, 1);


DELIMITER $$

CREATE PROCEDURE sp_i_ticketdetalle_01 (xtick_id INT, xusu_id INT)  BEGIN INSERT INTO td_detalleticket (tickd_id, tick_id, usu_id, tickd_descrip, fech_crea, est)
VALUES (NULL,xtick_id,xusu_id,'Ticket Cerrado', NOW(),'1');END$$

CREATE PROCEDURE sp_l_usuario_01 ()  BEGIN SELECT * FROM tm_usuario WHERE est='1'; END$$

CREATE PROCEDURE sp_l_usuario_02 (IN xusu_id INT)  BEGIN SELECT * FROM tm_usuario WHERE usu_id=xusu_id; END$$

DELIMITER ;