-- Create users table
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nom` varchar(255) COLLATE utf8_bin NOT NULL,
    `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
    `telephone` varchar(255) COLLATE utf8_bin NOT NULL,
    `mail` varchar(255) COLLATE utf8_bin NOT NULL,
    `password` varchar(255) NOT NULL,
    `naissance` datetime NOT NULL,
    `date_add` datetime NOT NULL DEFAULT now(),
    `date_update` datetime NOT NULL DEFAULT now(),
    `date_delete` datetime,
    `activate` BOOLEAN DEFAULT 1,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin; 


-- Create message table 
DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `object` varchar(255) COLLATE utf8_bin NOT NULL,
    `message` varchar(255) COLLATE utf8_bin NOT NULL,  
    `read` BOOLEAN DEFAULT 0,
    `date_add` datetime NOT NULL DEFAULT now(),
    `date_delete` datetime,
    `activate` BOOLEAN DEFAULT 1,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin; 