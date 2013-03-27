SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `12ac3d11` ;
CREATE SCHEMA IF NOT EXISTS `12ac3d11` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
SHOW WARNINGS;
USE `12ac3d11` ;

-- -----------------------------------------------------
-- Table `12ac3d11`.`contact`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `12ac3d11`.`contact` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `12ac3d11`.`contact` (
  `contactID` INT NOT NULL AUTO_INCREMENT ,
  `houseNumberName` VARCHAR(45) NOT NULL ,
  `street` VARCHAR(45) NOT NULL ,
  `county` VARCHAR(45) NOT NULL ,
  `postcode` VARCHAR(45) NOT NULL ,
  `country` VARCHAR(45) NOT NULL ,
  `mobileNumber` INT NOT NULL ,
  `homeNumber` INT NOT NULL ,
  `emailAddress` INT NOT NULL ,
  PRIMARY KEY (`contactID`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `12ac3d11`.`guardian`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `12ac3d11`.`guardian` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `12ac3d11`.`guardian` (
  `guardianID` INT NOT NULL AUTO_INCREMENT ,
  `firstName` VARCHAR(45) NOT NULL ,
  `surname` VARCHAR(45) NOT NULL ,
  `contactID` INT NOT NULL ,
  PRIMARY KEY (`guardianID`) )
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `contactID_idx` ON `12ac3d11`.`guardian` (`contactID` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `12ac3d11`.`staff`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `12ac3d11`.`staff` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `12ac3d11`.`staff` (
  `staffNumber` INT NOT NULL AUTO_INCREMENT ,
  `firstName` VARCHAR(45) NOT NULL ,
  `surname` VARCHAR(45) NOT NULL ,
  `contactID` INT NOT NULL ,
  `role` VARCHAR(45) NOT NULL ,
  `currentlyEmployed` TINYINT(1) NOT NULL ,
  `staffRecordNumber` INT NOT NULL ,
  `roomName` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`staffNumber`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `contactID_idx` ON `12ac3d11`.`staff` (`contactID` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `12ac3d11`.`room`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `12ac3d11`.`room` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `12ac3d11`.`room` (
  `roomName` VARCHAR(45) NOT NULL ,
  `roomCapacity` INT NOT NULL ,
  `dailyCharge` FLOAT NOT NULL ,
  `weeklyCharge` FLOAT NOT NULL ,
  `teaCost` FLOAT NULL ,
  PRIMARY KEY (`roomName`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `12ac3d11`.`child`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `12ac3d11`.`child` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `12ac3d11`.`child` (
  `childID` INT NOT NULL AUTO_INCREMENT ,
  `firstName` VARCHAR(45) NOT NULL ,
  `surname` VARCHAR(45) NOT NULL ,
  `dateOfBirth` DATE NOT NULL ,
  `contactID` INT NOT NULL ,
  `currentlyEnrolled` TINYINT(1) NOT NULL ,
  `daysAttended` INT NOT NULL ,
  `guardianID` INT NOT NULL ,
  `staffNumber` INT NOT NULL ,
  `roomName` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`childID`) )
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `guardianID_idx` ON `12ac3d11`.`child` (`guardianID` ASC) ;

SHOW WARNINGS;
CREATE INDEX `contactID_idx` ON `12ac3d11`.`child` (`contactID` ASC) ;

SHOW WARNINGS;
CREATE INDEX `staffNumber_idx` ON `12ac3d11`.`child` (`staffNumber` ASC) ;

SHOW WARNINGS;
CREATE INDEX `roomName_idx` ON `12ac3d11`.`child` (`roomName` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `12ac3d11`.`emergencyContact`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `12ac3d11`.`emergencyContact` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `12ac3d11`.`emergencyContact` (
  `emmergencyContactID` INT NOT NULL AUTO_INCREMENT ,
  `firstName` VARCHAR(45) NOT NULL ,
  `surname` VARCHAR(45) NOT NULL ,
  `relation` VARCHAR(45) NOT NULL ,
  `contactID` INT NOT NULL ,
  `childID` INT NOT NULL ,
  `gurdianID` INT NOT NULL ,
  `pointOfContact` INT NOT NULL ,
  PRIMARY KEY (`emmergencyContactID`) )
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `guardianID_idx` ON `12ac3d11`.`emergencyContact` (`gurdianID` ASC) ;

SHOW WARNINGS;
CREATE INDEX `childID_idx` ON `12ac3d11`.`emergencyContact` (`childID` ASC) ;

SHOW WARNINGS;
CREATE INDEX `contactID_idx` ON `12ac3d11`.`emergencyContact` (`contactID` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `12ac3d11`.`guardianInvoice`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `12ac3d11`.`guardianInvoice` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `12ac3d11`.`guardianInvoice` (
  `guardianInvoiceNumber` INT NOT NULL AUTO_INCREMENT ,
  `weeklyFee` FLOAT NOT NULL ,
  `credit` FLOAT NOT NULL ,
  `teaCost` FLOAT NOT NULL ,
  `extraDays` INT NOT NULL ,
  `dateInvoiceIssued` DATETIME NOT NULL ,
  `invoicePaid` TINYINT(1) NOT NULL ,
  `dateInvoicePaid` DATE NULL ,
  `paymentMethod` VARCHAR(45) NOT NULL ,
  `childID` INT NOT NULL ,
  `guardianID` INT NOT NULL ,
  PRIMARY KEY (`guardianInvoiceNumber`) )
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `childID_idx` ON `12ac3d11`.`guardianInvoice` (`childID` ASC) ;

SHOW WARNINGS;
CREATE INDEX `guardianID_idx` ON `12ac3d11`.`guardianInvoice` (`guardianID` ASC) ;

SHOW WARNINGS;
USE `12ac3d11` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
