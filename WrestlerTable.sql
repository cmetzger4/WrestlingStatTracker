CREATE TABLE  `metzgecl`.`Wrestler` (
	`WrestlerID` INT( 10 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`FirstName` VARCHAR( 30 ) NOT NULL ,
	`LastName` VARCHAR( 30 ) NOT NULL ,
	`DateOfBirth` DATE NOT NULL ,
	`Class` ENUM(  'Fr',  'So',  'Jr',  'Sr',  'Other' ) NOT NULL
) ENGINE = MYISAM ;