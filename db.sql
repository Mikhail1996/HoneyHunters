CREATE SCHEMA `hhtest` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;

CREATE TABLE `hhtest`.`comments` (
  `idcomment` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `mail` VARCHAR(45) NOT NULL,
  `comment` VARCHAR(900) NOT NULL,
  PRIMARY KEY (`idcomment`));
  
INSERT INTO `hhtest`.`comments` (`name`, `mail`, `comment`) VALUES ('Вася', 'vasya@mail.ru', 'Сообщение от Василия Пупкина.');
INSERT INTO `hhtest`.`comments` (`name`, `mail`, `comment`) VALUES ('Маруся', 'marysia@mail.ru', 'Всем привет, я Маруся');
INSERT INTO `hhtest`.`comments` (`name`, `mail`, `comment`) VALUES ('Вася', 'vasya@mail.ru', 'Сообщение от Василия Пупкина.');
INSERT INTO `hhtest`.`comments` (`name`, `mail`, `comment`) VALUES ('Маруся', 'marysia@mail.ru', 'Всем привет, я Маруся');
INSERT INTO `hhtest`.`comments` (`name`, `mail`, `comment`) VALUES ('Вася', 'vasya@mail.ru', 'Сообщение от Василия Пупкина.');
