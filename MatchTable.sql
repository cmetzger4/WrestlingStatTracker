CREATE TABLE  `metzgecl`.`Match` (
	`MatchID` INT( 10 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`DateOfMatch` DATE NOT NULL ,
	`WrestlerID` INT( 10 ) NOT NULL ,
	`Result` ENUM(  'W',  'L' ) NOT NULL ,
	`ResultType` ENUM(  'Decision',  'MajorDecision',  'Pin',  'TechFall' ) NOT NULL ,
	`WeightClass` ENUM(  '106',  '113',  '120',  '126',  '132',  '138',  '145',  '152',  '160',  '170',  '184',  '195',  '220',  '285' ) NOT NULL ,
	`OpponentFirstName` VARCHAR( 30 ) NOT NULL ,
	`OpponentLastName` VARCHAR( 30 ) NOT NULL ,
	`Venue` VARCHAR( 50 ) NOT NULL
) ENGINE = MYISAM ;