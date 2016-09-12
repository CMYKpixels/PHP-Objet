-- Vous devez importer cette table dans la base que vous utilisez

CREATE TABLE `annonces` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titre` CHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `prix` DECIMAL(5,2) DEFAULT '0.00',
  `username` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=11 DEFAULT CHARSET=UTF8;