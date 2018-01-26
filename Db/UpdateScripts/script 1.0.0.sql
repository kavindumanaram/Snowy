CREATE DATABASE snowyDatabase;

CREATE TABLE `snowydatabase`.`users` ( `id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , `created` TIMESTAMP NOT NULL , `visiting_count` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

--------------------------------------------------------------------------------------------------------
--  Crate table resume
--------------------------------------------------------------------------------------------------------
CREATE TABLE `snowydatabase`.`resume` ( `Id` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(50) NOT NULL , `Nic` INT(10) NOT NULL , `Title` VARCHAR(5) NOT NULL , `Gender` INT(1) NOT NULL , `Email` VARCHAR(30) NOT NULL , `Mobile` VARCHAR(15) NOT NULL , `ProfessionId` INT NOT NULL , `Location` VARCHAR(30) NOT NULL , `SalaryExpec` DOUBLE NOT NULL , `CurrentDesignation` VARCHAR(30) NOT NULL , `ExperienceYears` INT NOT NULL , `Description` VARCHAR(100) NOT NULL , `HighestQualificationId` INT NOT NULL , PRIMARY KEY (`Id`)) ENGINE = InnoDB;

-------------------------------------------------------------------------------
-- update the resume table
-------------------------------------------------------------------------------
ALTER TABLE `resume` CHANGE `Location` `CurrentResidence` VARCHAR(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `resume` ADD `HomePhone` VARCHAR(15) NOT NULL AFTER `Mobile`;

ALTER TABLE `resume` ADD `MaritalStatus` VARCHAR(10) NOT NULL AFTER `HomePhone`;

ALTER TABLE `resume` ADD `ApplyPosition` VARCHAR(15) NOT NULL AFTER `HighestQualificationId`, ADD `Photo` VARCHAR(15) NOT NULL AFTER `ApplyPosition`;

ALTER TABLE `resume` ADD `HighestQualificationTitle` VARCHAR(20) NOT NULL AFTER `HighestQualificationId`;

ALTER TABLE `resume` ADD `SpecializedAreaId` INT NOT NULL AFTER `ApplyPosition`;

ALTER TABLE `resume` ADD `skill` VARCHAR(30) NOT NULL AFTER `ApplyPosition`;
