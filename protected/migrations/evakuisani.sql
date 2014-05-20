-- -----------------------------------------------------
-- Table `nestali`.`evacuees`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nestali`.`evacuees` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(120) NULL,
  `parent_name` VARCHAR(45) NULL,
  `sex` VARCHAR(45) NULL,
  `birthday` TIMESTAMP NULL,
  `hometown` VARCHAR(45) NULL,
  `location` VARCHAR(140) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;