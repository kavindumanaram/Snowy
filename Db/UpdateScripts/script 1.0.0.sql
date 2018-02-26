CREATE DATABASE snowyDatabase;
-- ------------------------------------------------------------------------------------------------------
--  Crate table resume
--------------------------------------------------------------------------------------------------------
CREATE TABLE `snowydatabase`.`resume` ( `Id` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(50) NOT NULL , `Nic` INT(10) NOT NULL , `Title` VARCHAR(5) NOT NULL , `Gender` INT(1) NOT NULL , `Email` VARCHAR(30) NOT NULL , `Mobile` VARCHAR(15) NOT NULL , `ProfessionId` INT NOT NULL , `Location` VARCHAR(30) NOT NULL , `SalaryExpec` DOUBLE NOT NULL , `CurrentDesignation` VARCHAR(30) NOT NULL , `ExperienceYears` INT NOT NULL , `Description` VARCHAR(100) NOT NULL , `HighestQualificationId` INT NOT NULL , PRIMARY KEY (`Id`)) ENGINE = InnoDB;

-- -----------------------------------------------------------------------------
-- update the resume table
-- -----------------------------------------------------------------------------
ALTER TABLE `resume` CHANGE `Location` `CurrentResidence` VARCHAR(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `resume` ADD `HomePhone` VARCHAR(15) NOT NULL AFTER `Mobile`;

ALTER TABLE `resume` ADD `MaritalStatus` VARCHAR(10) NOT NULL AFTER `HomePhone`;

ALTER TABLE `resume` ADD `ApplyPosition` VARCHAR(15) NOT NULL AFTER `HighestQualificationId`, ADD `Photo` VARCHAR(15) NOT NULL AFTER `ApplyPosition`;

ALTER TABLE `resume` ADD `HighestQualificationTitle` VARCHAR(20) NOT NULL AFTER `HighestQualificationId`;

ALTER TABLE `resume` ADD `SpecializedAreaId` INT NOT NULL AFTER `ApplyPosition`;

ALTER TABLE `resume` ADD `skill` VARCHAR(30) NOT NULL AFTER `ApplyPosition`;

ALTER TABLE `resume` CHANGE `skill` `Skills` VARCHAR(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `resume` ADD `Password` VARCHAR(50) NOT NULL AFTER `Photo`;

-- ------------------------------------------------------------------------------
-- Create User table
-- ------------------------------------------------------------------------------
CREATE TABLE `snowydatabase`.`user` ( `UserId` INT NOT NULL AUTO_INCREMENT , `Email` INT(30) NOT NULL , `Password` VARCHAR(50) NOT NULL , `Created` TIMESTAMP NOT NULL , PRIMARY KEY (`UserId`)) ENGINE = InnoDB;

ALTER TABLE `user` CHANGE `Email` `Email` VARCHAR(30) NOT NULL;

ALTER TABLE `user` ADD UNIQUE(`Email`);


-- ------------------------------------------------------------------------------
-- Creating Job table
-- ------------------------------------------------------------------------------
CREATE TABLE `snowydatabase`.`job` ( `JobId` INT NOT NULL AUTO_INCREMENT , `Title` VARCHAR(30) NOT NULL , `CompanyName` VARCHAR(30) NOT NULL , `CompanyAddress` VARCHAR(50) NOT NULL , `Discription` TEXT NOT NULL , `ApplicationUrlEmail` VARCHAR(30) NOT NULL , `ClosingDate` DATE NOT NULL , `TimeStatus` VARCHAR(20) NOT NULL , `UserId` INT NOT NULL , PRIMARY KEY (`JobId`)) ENGINE = InnoDB;

ALTER TABLE `job` ADD `JobTags` VARCHAR(50) NOT NULL AFTER `TimeStatus`;

ALTER TABLE `job` ADD `CompanyWebsite` VARCHAR(30) NOT NULL AFTER `JobTags`, ADD `Attachments` VARCHAR(20) NOT NULL AFTER `CompanyWebsite`;

ALTER TABLE `job` ADD `Location` VARCHAR(20) NOT NULL AFTER `Title`;

ALTER TABLE `job` ADD `Category` INT NOT NULL AFTER `Location`;

ALTER TABLE `job` CHANGE `ApplicationUrlEmail` `ApplicationUrlEmail` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL, CHANGE `CompanyWebsite` `CompanyWebsite` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

-- ------------------------------------------------------------------------------
-- Creating job categories table
-- ------------------------------------------------------------------------------
CREATE TABLE `snowydatabase`.`job_categories` ( `JobCategoryId` INT NOT NULL AUTO_INCREMENT , `JobCategoryName` VARCHAR(50) NOT NULL , `Description` TEXT NOT NULL , PRIMARY KEY (`JobCategoryId`)) ENGINE = InnoDB;

INSERT INTO `job_categories`( `JobCategoryName`) VALUES ('Finance'),('IT'),('Education/Training'),('Art/Design'), ('Engineering'), ('Sale/Markting'), ('Healthcare'), ('Science'), ('Food Service');

ALTER TABLE `job` CHANGE `Title` `Title` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `job` ADD `JobStatus` VARCHAR(10) NOT NULL AFTER `Attachments`;

ALTER TABLE `resume` CHANGE `ExperienceYears` `ExperienceYears` VARCHAR(20) NOT NULL;

ALTER TABLE `resume` ADD `QulificationDetails` VARCHAR(50) NOT NULL AFTER `HighestQualificationTitle`;

ALTER TABLE `user` ADD `UserLevel` VARCHAR(10) NOT NULL AFTER `Password`;

ALTER TABLE `resume` ADD `UserId` INT NOT NULL AFTER `Photo`;

ALTER TABLE `job_categories` ADD `Image` VARCHAR(30) NOT NULL AFTER `Description`;

-- ---------------------------------------------------------------------------------

UPDATE `job_categories` SET `Image` = 'Finance.jpg' WHERE `job_categories`.`JobCategoryId` = 6;
UPDATE `job_categories` SET `Image` = 'It.jpg' WHERE `job_categories`.`JobCategoryId` = 7;
UPDATE `job_categories` SET `Image` = 'EducationTraining.jpg' WHERE `job_categories`.`JobCategoryId` = 8;
UPDATE `job_categories` SET `Image` = 'ArtDesign.jpg' WHERE `job_categories`.`JobCategoryId` = 9;
UPDATE `job_categories` SET `Image` = 'Engineering.jpg' WHERE `job_categories`.`JobCategoryId` = 10;
UPDATE `job_categories` SET `Image` = 'SalesMarketing.jpg' WHERE `job_categories`.`JobCategoryId` = 11;
UPDATE `job_categories` SET `Image` = 'Healthcare.jpg' WHERE `job_categories`.`JobCategoryId` = 12;
UPDATE `job_categories` SET `Image` = 'Science.jpg' WHERE `job_categories`.`JobCategoryId` = 13;
UPDATE `job_categories` SET `Image` = 'Food Service.jpg' WHERE `job_categories`.`JobCategoryId` = 14;

-- ---------------------------------------------------------------------------------

ALTER TABLE `job` ADD `Created` TIMESTAMP NOT NULL AFTER `UserId`;

-- -------------------------------------------------------------------------------
-- Create new table for serched key woed count
-- ------------------------------------------------------------------------------
CREATE TABLE `popular_keyword` ( `id` INT NOT NULL AUTO_INCREMENT , `Keyword` VARCHAR(20) NOT NULL , `Count` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB

ALTER TABLE `popular_keyword` CHANGE `id` `Id` INT(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `job` ADD `Image` VARCHAR(50) NOT NULL AFTER `UserId`;

-- -----------------------------------------------------------------------------
-- create new table for twitter
-- ------------------------------------------------------------------------------
CREATE TABLE `snowydatabase`.`twitter` ( `id` INT NOT NULL AUTO_INCREMENT , `UserName` VARCHAR(30) NOT NULL , `ScreenName` VARCHAR(50) NOT NULL , `Text` VARCHAR(600) NOT NULL , `Image` VARCHAR(200) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE twitter CONVERT TO CHARACTER SET utf8

ALTER TABLE `twitter` ADD `Created` TIMESTAMP NOT NULL AFTER `Image`;

CREATE TABLE setting ( `id` INT NOT NULL AUTO_INCREMENT , `SettingName` VARCHAR(50) NOT NULL , `SettingValue` VARCHAR(50) NOT NULL , `Created` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
-- ------------------------------------------------------------------------------

INSERT INTO `setting` (`id`, `SettingName`, `SettingValue`, `Created`) VALUES 
(NULL, 'Snowy.Twitter.SearchText', 'job', CURRENT_TIMESTAMP),
(NULL, 'Snow.Twitter.CustomerKey', 'hFT2CiKSpnE9s0Hiob0lAbF5K', CURRENT_TIMESTAMP),
(NULL, 'Snow.Twitter.CustomerSecret', 'JD1leTZQ1WG5xwgWHtImVM9PYehzTUckaplFV2Zlqe261AvDsE', CURRENT_TIMESTAMP),
(NULL, 'Snow.Twitter.AccessToken', '2926889876-bQEvgkP3ngVKMTrleUm3siH8q846SyOMQvloyq6', CURRENT_TIMESTAMP),
(NULL, 'Snow.Twitter.AccessTokenSecret', 'aF7LwPq1HGP0jNmLp7QQ68iLrSZv8sPY3Gcot50P8qbKx', CURRENT_TIMESTAMP),
(NULL, 'Snowy.Twitter.Count', '5', CURRENT_TIMESTAMP)

-- -----------------------------------------------------------------------------