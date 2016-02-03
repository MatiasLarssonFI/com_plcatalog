CREATE TABLE IF NOT EXISTS `#__plcatalog_product` (
	`id`        INT(11)     NOT NULL AUTO_INCREMENT,
	`name`      VARCHAR(64) NOT NULL,
	`description` text COLLATE utf8_swedish_ci NOT NULL,
    `price_eur` DECIMAL(13, 2) NOT NULL,
    `time_created` DATETIME NOT NULL,
    `published` TINYINT(1) NOT NULL,
    `img_url` VARCHAR(256),
	PRIMARY KEY (`id`)
)
	ENGINE=InnoDB
	AUTO_INCREMENT=0
	DEFAULT CHARSET=utf8 COLLATE utf8_swedish_ci;
