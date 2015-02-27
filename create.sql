-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema facebook_map
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `facebook_map` ;

-- -----------------------------------------------------
-- Schema facebook_map
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `facebook_map` DEFAULT CHARACTER SET latin1 ;
USE `facebook_map` ;

-- -----------------------------------------------------
-- Table `facebook_map`.`categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `facebook_map`.`categoria` ;

CREATE TABLE IF NOT EXISTS `facebook_map`.`categoria` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(70) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `facebook_map`.`datos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `facebook_map`.`datos` ;

CREATE TABLE IF NOT EXISTS `facebook_map`.`datos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `latidud` DECIMAL(10,6) NULL DEFAULT NULL,
  `longitud` DECIMAL(10,6) NULL DEFAULT NULL,
  `id_categoria` INT(11) NULL,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `categoria`
    FOREIGN KEY (`id`)
    REFERENCES `facebook_map`.`categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
