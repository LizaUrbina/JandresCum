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

