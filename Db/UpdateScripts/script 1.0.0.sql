CREATE DATABASE snowyDatabase;

CREATE TABLE `snowydatabase`.`users` ( `id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , `created` TIMESTAMP NOT NULL , `visiting_count` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;