/* ---------------------------------------------------- */
/*  Generated by Enterprise Architect Version 15.2 		*/
/*  Created On : 04-Nov-2021 12:19:05 				*/
/*  DBMS       : MySql 						*/
/* ---------------------------------------------------- */

SET FOREIGN_KEY_CHECKS=0
; 
/* Drop Tables */

DROP TABLE IF EXISTS `Admin` CASCADE
;

DROP TABLE IF EXISTS `Avatars` CASCADE
;

DROP TABLE IF EXISTS `Products` CASCADE
;

DROP TABLE IF EXISTS `UserActions` CASCADE
;

DROP TABLE IF EXISTS `UserProducts` CASCADE
;

DROP TABLE IF EXISTS `Users` CASCADE
;

/* Create Tables */

CREATE TABLE `Admin`
(
	`idAdmin` INT NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(100) NOT NULL,
	`password` VARCHAR(50) NOT NULL,
	CONSTRAINT `PK_Admin` PRIMARY KEY (`idAdmin` ASC)
)

;

CREATE TABLE `Avatars`
(
	`idAvatars` INT NOT NULL AUTO_INCREMENT,
	`gender` VARCHAR(50) NULL,
	`name` VARCHAR(50) NULL,
	`idUserActions` INT NULL,
	CONSTRAINT `PK_Avatars` PRIMARY KEY (`idAvatars` ASC)
)

;

CREATE TABLE `Products`
(
	`idProduct` INT NOT NULL AUTO_INCREMENT,
	`code` VARCHAR(20) NOT NULL,
	`name` VARCHAR(100) NOT NULL,
	`brand` VARCHAR(50) NOT NULL,
	`line` VARCHAR(50) NOT NULL,
	`price` VARCHAR(50) NULL,
	`description` TEXT NULL,
	`currency` VARCHAR(100) NULL,
	CONSTRAINT `PK_Products` PRIMARY KEY (`idProduct` ASC)
)

;

CREATE TABLE `UserActions`
(
	`idUserActions` INT NOT NULL AUTO_INCREMENT,
	`idUser` INT NOT NULL,
	`sessionNumber` VARCHAR(50) NULL,
	`timeLogin` TIMESTAMP NULL,
	`timeExit` TIMESTAMP NULL,
	`EnterFair` INT NULL,
	`EnterCheckOut` INT NULL,
	`DidTheOrder` INT NULL,
	`ip` VARCHAR(15) NULL,
	`Likes` TEXT NULL,
	`Dislikes` TEXT NULL,
	`Improvements` TEXT NULL,
	`ThingsWouldLike` TEXT NULL,
	`contactUs` INT NULL,
	`download` INT NULL,
	`city` VARCHAR(50) NULL,
	CONSTRAINT `PK_UserActions` PRIMARY KEY (`idUserActions` ASC)
)

;

CREATE TABLE `UserProducts`
(
	`idUser` INT NOT NULL,
	`idProduct` INT NOT NULL,
	`closeTime` INT NULL,
	`examineTime` INT NULL,
	`like` INT NULL,
	`addToCard` INT NULL,
	`Bought` INT NULL,
	`amountOrdered` INT NULL,
	CONSTRAINT `PK_UserProducts` PRIMARY KEY (`idUser` ASC, `idProduct` ASC)
)

;

CREATE TABLE `Users`
(
	`idUser` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NULL,
	`NIT` VARCHAR(15) NULL,
	`email` VARCHAR(50) NULL,
	`phoneNumber` VARCHAR(50) NULL,
	`TimeAppoiment` TIMESTAMP(4) NULL,
	`code` VARCHAR(50) NULL,
	CONSTRAINT `PK_Users` PRIMARY KEY (`idUser` ASC)
)

;

/* Create Primary Keys, Indexes, Uniques, Checks */

ALTER TABLE `Avatars` 
 ADD INDEX `IXFK_Avatars_UserActions` (`idUserActions` ASC)
;

ALTER TABLE `UserActions` 
 ADD INDEX `IXFK_UserActions_Users` (`idUser` ASC)
;

ALTER TABLE `UserProducts` 
 ADD INDEX `IXFK_UserProducts_Products` (`idProduct` ASC)
;

ALTER TABLE `UserProducts` 
 ADD INDEX `IXFK_UserProducts_Users` (`idUser` ASC)
;

/* Create Foreign Key Constraints */

ALTER TABLE `Avatars` 
 ADD CONSTRAINT `FK_Avatars_UserActions`
	FOREIGN KEY (`idUserActions`) REFERENCES `UserActions` (`idUserActions`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `UserActions` 
 ADD CONSTRAINT `FK_UserActions_Users`
	FOREIGN KEY (`idUser`) REFERENCES `Users` (`idUser`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `UserProducts` 
 ADD CONSTRAINT `FK_UserProducts_Products`
	FOREIGN KEY (`idProduct`) REFERENCES `Products` (`idProduct`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `UserProducts` 
 ADD CONSTRAINT `FK_UserProducts_Users`
	FOREIGN KEY (`idUser`) REFERENCES `Users` (`idUser`) ON DELETE Restrict ON UPDATE Restrict
;

SET FOREIGN_KEY_CHECKS=1
; 
