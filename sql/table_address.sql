DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `numero` smallint(6) NOT NULL,
    `rue` varchar(255) COLLATE utf8_bin NOT NULL,
    `cp` smallint(6) NOT NULL, 
    `ville` varchar(255) COLLATE utf8_bin NOT NULL,
    `pays` varchar(255) COLLATE utf8_bin NOT NULL,
    `date_add` DEFAULT NOW(),
    `date_update` DEFAULT NOW(),
    `date_delete` datetime NOT NULL,
    `activate` BOOLEAN DEFAULT 1,
    PRIMARY KEY (`id`);
)