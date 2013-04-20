SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `chronos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `chronos` ;

-- -----------------------------------------------------
-- Table `chronos`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chronos`.`user` ;

CREATE  TABLE IF NOT EXISTS `chronos`.`user` (
  `user_id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(50) NOT NULL ,
  `password` VARCHAR(50) NOT NULL ,
  `first_name` VARCHAR(50) NULL ,
  `last_name` VARCHAR(50) NULL ,
  `Email` VARCHAR(50) NULL ,
  `Role` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`user_id`) ,
  UNIQUE INDEX `Id_UNIQUE` (`user_id` ASC) ,
  UNIQUE INDEX `Username_UNIQUE` (`username` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chronos`.`customer`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chronos`.`customer` ;

CREATE  TABLE IF NOT EXISTS `chronos`.`customer` (
  `customer_id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NOT NULL ,
  `description` VARCHAR(300) NULL ,
  PRIMARY KEY (`customer_id`) ,
  UNIQUE INDEX `Id_UNIQUE` (`customer_id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chronos`.`project`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chronos`.`project` ;

CREATE  TABLE IF NOT EXISTS `chronos`.`project` (
  `project_id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NOT NULL ,
  `description` VARCHAR(300) NULL ,
  `customer_id` INT NOT NULL ,
  PRIMARY KEY (`project_id`) ,
  UNIQUE INDEX `Id_UNIQUE` (`project_id` ASC) ,
  INDEX `Id_idx` (`customer_id` ASC) ,
  CONSTRAINT `fk_project_customer`
    FOREIGN KEY (`customer_id` )
    REFERENCES `chronos`.`customer` (`customer_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chronos`.`shcedule`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chronos`.`shcedule` ;

CREATE  TABLE IF NOT EXISTS `chronos`.`shcedule` (
  `schedule_id` INT NOT NULL AUTO_INCREMENT ,
  `check_in` DATETIME NOT NULL ,
  `check_out` DATETIME NULL ,
  `id_user` INT NOT NULL ,
  PRIMARY KEY (`schedule_id`) ,
  UNIQUE INDEX `Id_UNIQUE` (`schedule_id` ASC) ,
  INDEX `FK_ScheduleUser_idx` (`id_user` ASC) ,
  CONSTRAINT `fk_schedule_user`
    FOREIGN KEY (`id_user` )
    REFERENCES `chronos`.`user` (`user_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chronos`.`report`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chronos`.`report` ;

CREATE  TABLE IF NOT EXISTS `chronos`.`report` (
  `report_id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NOT NULL ,
  `description` VARCHAR(300) NULL ,
  `report_type` VARCHAR(50) NOT NULL ,
  `customer_id` INT NOT NULL ,
  `project_id` INT NOT NULL ,
  `user_id` INT NOT NULL ,
  `owner_id` INT NOT NULL ,
  PRIMARY KEY (`report_id`) ,
  UNIQUE INDEX `Id_UNIQUE` (`report_id` ASC) ,
  INDEX `IdCustomer_idx` (`customer_id` ASC) ,
  INDEX `IdProject_idx` (`project_id` ASC) ,
  INDEX `IdUser_idx` (`user_id` ASC) ,
  INDEX `IdOwner_idx` (`owner_id` ASC) ,
  CONSTRAINT `fk_report_customer`
    FOREIGN KEY (`customer_id` )
    REFERENCES `chronos`.`customer` (`customer_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_report_project`
    FOREIGN KEY (`project_id` )
    REFERENCES `chronos`.`project` (`project_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_report_user`
    FOREIGN KEY (`user_id` )
    REFERENCES `chronos`.`user` (`user_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_report_owner`
    FOREIGN KEY (`owner_id` )
    REFERENCES `chronos`.`user` (`user_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chronos`.`worklog`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chronos`.`worklog` ;

CREATE  TABLE IF NOT EXISTS `chronos`.`worklog` (
  `worklog_id` INT NOT NULL AUTO_INCREMENT ,
  `customer_id` INT NOT NULL ,
  `project_id` INT NOT NULL ,
  `user_id` INT NOT NULL ,
  `description` VARCHAR(300) NOT NULL ,
  `start_time` DATETIME NOT NULL ,
  `end_time` DATETIME NOT NULL ,
  PRIMARY KEY (`worklog_id`) ,
  UNIQUE INDEX `Id_UNIQUE` (`worklog_id` ASC) ,
  INDEX `Customer_idx` (`customer_id` ASC) ,
  INDEX `Project_idx` (`project_id` ASC) ,
  INDEX `User_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_worklog_customer`
    FOREIGN KEY (`customer_id` )
    REFERENCES `chronos`.`customer` (`customer_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_worklog_project`
    FOREIGN KEY (`project_id` )
    REFERENCES `chronos`.`project` (`project_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_worklog_user`
    FOREIGN KEY (`user_id` )
    REFERENCES `chronos`.`user` (`user_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `chronos` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
