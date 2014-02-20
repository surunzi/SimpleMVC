SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `simplemvc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `simplemvc` ;

-- -----------------------------------------------------
-- Table `simplemvc`.`message`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `simplemvc`.`message` (
  `msg_id` INT NOT NULL AUTO_INCREMENT ,
  `msg_author` VARCHAR(25) NOT NULL ,
  `msg_content` TEXT NOT NULL ,
  `msg_date` DATETIME NOT NULL ,
  PRIMARY KEY (`msg_id`) )
ENGINE = InnoDB;

USE `simplemvc` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
