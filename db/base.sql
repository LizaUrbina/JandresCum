drop database if exists base;
create database if not exists base;

USE `base` ;



CREATE TABLE IF NOT EXISTS `base`.`rol` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `estado` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `base`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NULL,
  `password` VARCHAR(250) NULL,
  `estado` INT NULL,
  `rol_id` INT NOT NULL,
  `salt` VARCHAR(250) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuario_rol_idx` (`rol_id` ASC),
  CONSTRAINT `fk_usuario_rol`
    FOREIGN KEY (`rol_id`)
    REFERENCES `base`.`rol` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `base`.`factura` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(50) NULL,
  `fecha` DATE NULL,
  `fechaRegistroSistema` DATE NULL,
  `fechaModificacionSistema` DATE NULL,
  `usuario_id` INT NOT NULL,
  `estado` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_factura_usuario_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_factura_usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `base`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `base`.`detalle_factura` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cantidad` FLOAT NULL,
  `precio` FLOAT NULL,
  `nombreProducto` VARCHAR(45) NULL,
  `factura_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_factura_detalle_idx` (`factura_id` ASC),
  CONSTRAINT `fk_factura_id`
    FOREIGN KEY (`factura_id`)
    REFERENCES `base`.`factura` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


DELIMITER $$
USE `base`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_Consultar`(
	numerin int
)
begin
	select * from automovil where id = numerin;
end$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure p_Editar
-- -----------------------------------------------------

DELIMITER $$
USE `base`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_Editar`(
	in num INT,
  in user VARCHAR(50),
   in pass VARCHAR(250),
  in est INT,
  in rol INT
)
begin 
	update usuario set username = user, password = pass, estado = est, rol_id = rol where id = num;
end$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure p_Eliminar
-- -----------------------------------------------------

DELIMITER $$
USE `base`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_Eliminar`(
	in numerin int
)
begin
	update usuario set estado = 0 where id = numerin;
end$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure p_Registrar
-- -----------------------------------------------------

DELIMITER $$
USE `base`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_Registrar`(
  in user VARCHAR(50),
   in pass VARCHAR(250),
  in est INT,
  in rol INT
)
begin
	insert into usuario(username, password, estado, rol_id) values(user, pass, 1, rol);
end$$

DELIMITER ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;