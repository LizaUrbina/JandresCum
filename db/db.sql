-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema crudvrgas
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema crudvrgas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `crudvrgas` DEFAULT CHARACTER SET latin1 ;
USE `crudvrgas` ;

-- -----------------------------------------------------
-- Table `crudvrgas`.`automovil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `crudvrgas`.`automovil` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `marca` VARCHAR(100) NULL DEFAULT NULL,
  `modelo` VARCHAR(100) NULL DEFAULT NULL,
  `anho` VARCHAR(100) NULL DEFAULT NULL,
  `estado` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 17
DEFAULT CHARACTER SET = latin1;

USE `crudvrgas` ;

-- -----------------------------------------------------
-- procedure p_Consultar
-- -----------------------------------------------------

DELIMITER $$
USE `crudvrgas`$$
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
USE `crudvrgas`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_Editar`(
	in numerin int,
    in mar varchar(100),
    in modelin varchar(100),
    in ano varchar(100)
)
begin 
	update automovil set marca = mar, modelo = modelin, anho = ano where id = numerin;
end$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure p_Eliminar
-- -----------------------------------------------------

DELIMITER $$
USE `crudvrgas`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_Eliminar`(
	in numerin int
)
begin
	update automovil set estado = 0 where id = numerin;
end$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure p_Registrar
-- -----------------------------------------------------

DELIMITER $$
USE `crudvrgas`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_Registrar`(
	in mar varchar(100),
    in modelin varchar(100),
    in ano varchar(100)
)
begin
	insert into automovil(marca, modelo, anho, estado) values(mar, modelin, ano, 1);
end$$

DELIMITER ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
