SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `nestali` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `nestali` ;

-- -----------------------------------------------------
-- Table `nestali`.`city`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nestali`.`city` (
  `ptt` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`ptt`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nestali`.`contact`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nestali`.`contact` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `email` VARCHAR(120) NULL,
  `phone` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nestali`.`profile`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nestali`.`profile` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name_surname` VARCHAR(120) NULL,
  `description` VARCHAR(255) NULL,
  `published_date` TIMESTAMP NULL,
  `last_seen_date` TIMESTAMP NULL,
  `is_missing` TINYINT(1) NULL,
  `image` VARCHAR(255) NULL,
  `contact_id` INT NOT NULL,
  `city_ptt` INT NOT NULL,
  `last_seen_destination` VARCHAR(120) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_profile_contact_idx` (`contact_id` ASC),
  INDEX `fk_profile_city1_idx` (`city_ptt` ASC),
  CONSTRAINT `fk_profile_contact`
    FOREIGN KEY (`contact_id`)
    REFERENCES `nestali`.`contact` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_profile_city1`
    FOREIGN KEY (`city_ptt`)
    REFERENCES `nestali`.`city` (`ptt`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nestali`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nestali`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `email` VARCHAR(120) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nestali`.`page`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nestali`.`page` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NULL,
  `content` TEXT NULL,
  `image` VARCHAR(255) NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_page_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_page_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `nestali`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
