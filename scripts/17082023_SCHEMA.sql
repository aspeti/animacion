-- MySQL Script generated by MySQL Workbench
-- Thu Aug 17 09:00:58 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sisue_db
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema animacion_db
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `animacion_db` ;

-- -----------------------------------------------------
-- Schema animacion_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `animacion_db` DEFAULT CHARACTER SET utf8 ;
USE `animacion_db` ;

-- -----------------------------------------------------
-- Table `animacion_db`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `animacion_db`.`categoria` (
  `id_categoria` INT(11) NOT NULL AUTO_INCREMENT, 
  `nombre` VARCHAR(50) NULL,
  `descripcion` VARCHAR(250) NULL DEFAULT NULL,
  `estado` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_categoria`),
  UNIQUE INDEX `id_categoria_UNIQUE` (`id_categoria` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `animacion_db`.`servicio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `animacion_db`.`servicio` (
  `id_servicio` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` DATETIME NULL DEFAULT NULL,
  `fecha_actualizacion` DATETIME NULL DEFAULT NULL,
  `estado` TINYINT(4) NULL DEFAULT NULL,
  `nombre` VARCHAR(50) NULL,
  `descripcion` VARCHAR(250) NULL DEFAULT NULL,
  `precio` DECIMAL(10,0) NULL,
  `id_categoria` INT(11) NOT NULL,
  PRIMARY KEY (`id_servicio`),
  INDEX `fk_Producto_categoria1` (`id_categoria` ASC) ,
  UNIQUE INDEX `id_servicio_UNIQUE` (`id_servicio` ASC),
  CONSTRAINT `fk_Producto_categoria1`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `animacion_db`.`categoria` (`id_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `animacion_db`.`persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `animacion_db`.`persona` (
  `id_persona` INT(11) NOT NULL AUTO_INCREMENT,
  `fechaCreacion` DATETIME NULL DEFAULT NULL,
  `fechaActualizacion` DATETIME NULL DEFAULT NULL,
  `estado` TINYINT(4) NULL DEFAULT NULL,
  `nombre` VARCHAR(100) NULL,
  `apellido` VARCHAR(100) NULL DEFAULT NULL,
  `ci` INT(11) NULL DEFAULT NULL,
  `direccion` VARCHAR(200) NULL DEFAULT NULL,
  `telefono` INT(11) NULL,
  PRIMARY KEY (`id_persona`),
  UNIQUE INDEX `id_persona_UNIQUE` (`id_persona` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `animacion_db`.`reserva`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `animacion_db`.`reserva` (
  `id_reserva` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` DATETIME NULL DEFAULT NULL,
  `fecha_actualizacion` DATETIME NULL DEFAULT NULL,
  `estado` TINYINT(4) NULL DEFAULT NULL,
  `direccion_evento` VARCHAR(250) NULL,
  `ubicacion` VARCHAR(250) NULL DEFAULT NULL,
  `ciudad` VARCHAR(45) NULL DEFAULT NULL,
  `fecha_evento` DATETIME NULL,
  `referencia` VARCHAR(45) NULL DEFAULT NULL,
  `id_persona` INT(11) NOT NULL,
  PRIMARY KEY (`id_reserva`, `id_persona`),
  INDEX `fk_Reseva_Cliente1` (`id_persona` ASC) ,
  CONSTRAINT `fk_Reseva_Cliente1`
    FOREIGN KEY (`id_persona`)
    REFERENCES `animacion_db`.`persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `animacion_db`.`recibo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `animacion_db`.`recibo` (
  `id_recibo` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` DATETIME NULL DEFAULT NULL,
  `fecha_actualizacion` DATETIME NULL DEFAULT NULL,
  `estado` TINYINT(4) NULL DEFAULT NULL,
  `deposito_inicial` DECIMAL(10,0) NULL,
  `saldo` DECIMAL(10,0) NULL DEFAULT NULL,
  `total` DECIMAL(10,0) NULL DEFAULT NULL,
  `id_persona` INT(11) NOT NULL,
  `serie` VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (`id_recibo`),
  INDEX `fk_recibo_Persona1` (`id_persona` ASC) ,
  CONSTRAINT `fk_recibo_Persona1`
    FOREIGN KEY (`id_persona`)
    REFERENCES `animacion_db`.`persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `animacion_db`.`detalle_paquete`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `animacion_db`.`detalle_paquete` (
  `id_reserva` INT(11) NOT NULL,
  `id_servicio` INT(11) NOT NULL,
  `precio` DECIMAL(10,0) NULL,
  `cantidad` INT(11) NULL,
  `id_recibo` INT(11) NOT NULL,
  PRIMARY KEY (`id_reserva`, `id_servicio`, `id_recibo`),
  INDEX `fk_Reseva_has_Producto_Producto1` (`id_servicio` ASC) ,
  INDEX `fk_detalle_paquete_Pago1` (`id_recibo` ASC) ,
  CONSTRAINT `fk_Reseva_has_Producto_Producto1`
    FOREIGN KEY (`id_servicio`)
    REFERENCES `animacion_db`.`servicio` (`id_servicio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Reseva_has_Producto_Reseva`
    FOREIGN KEY (`id_reserva`)
    REFERENCES `animacion_db`.`reserva` (`id_reserva`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalle_paquete_Pago1`
    FOREIGN KEY (`id_recibo`)
    REFERENCES `animacion_db`.`recibo` (`id_recibo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `animacion_db`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `animacion_db`.`rol` (
  `id_rol` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  `estado` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_rol`),
  UNIQUE INDEX `id_rol_UNIQUE` (`id_rol` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `animacion_db`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `animacion_db`.`usuario` (
  `id_usuario` INT(11) NOT NULL UNIQUE AUTO_INCREMENT,
  `email` VARCHAR(50) NULL,
  `password` VARCHAR(50) NULL,
  `estado` TINYINT(4) NULL DEFAULT NULL,
  `id_rol` INT(11) NOT NULL,
  `id_persona` INT(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  CONSTRAINT `fk_Usuario_rol1`
    FOREIGN KEY (`id_rol`)
    REFERENCES `animacion_db`.`rol` (`id_rol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_persona1`
    FOREIGN KEY (`id_persona`)
    REFERENCES `animacion_db`.`persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
