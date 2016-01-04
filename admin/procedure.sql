USE mgAdmin


CREATE TABLE `tblNoticias` (
  `noticias_id` int(11) NOT NULL AUTO_INCREMENT,
  `noticias_title` text COLLATE utf8_spanish_ci,
  `noticias_descrip` text COLLATE utf8_spanish_ci,
  `noticias_fecha` text COLLATE utf8_spanish_ci,
  `noticias_code_social` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`noticias_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tblNoticias`
--

INSERT INTO `tblNoticias` (`noticias_id`, `noticias_title`, `noticias_descrip`, `noticias_fecha`, `noticias_code_social`) VALUES
(2, 'Demo 2', 'Este es un demo 2', '09-02-214', '123456'),
(3, 'Demo 3', 'Demo 3', '1212', '1121');


-- // Insert Noticias
DROP PROCEDURE IF EXISTS insertNoticias;
DELIMITER $$
CREATE PROCEDURE `insertNoticias` (IN title TEXT, IN descripcion TEXT, IN fecha TEXT, IN codeSocial TEXT)
BEGIN
	INSERT INTO tblNoticias(noticias_title, noticias_descrip, noticias_fecha, noticias_code_social)
		VALUES(title, descripcion, fecha, codeSocial);
END
-- //

-- // Show noticias
DROP PROCEDURE IF EXISTS showNoticias;
DELIMITER $$
CREATE PROCEDURE `showNoticias` ()
BEGIN
	SELECT noticias_title as title, noticias_descrip as descripcion, noticias_fecha as fecha, noticias_code_social as social FROM tblNoticias;
END


-- // Delete Noticias
DROP PROCEDURE IF EXISTS deleteNoticias;
DELIMITER $$
CREATE PROCEDURE `deleteNoticias` (IN idNoticias INT)
BEGIN
	DELETE FROM tblNoticias WHERE noticias_id = idNoticias;
END


-- CALL procedure
CALL insertNoticias('Demo 3', 'Demo 3', '1212', '1121');
CALL showNoticias();



call showNoticias()