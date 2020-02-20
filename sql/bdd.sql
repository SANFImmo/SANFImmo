DROP DATABASE IF EXISTS `sanfimmo_bdd`;
CREATE DATABASE IF NOT EXISTS `sanfimmo_bdd`
DEFAULT CHARSET=utf8 COLLATE  utf8_bin;

USE `liste_articles`;
SET default_storage_engine=InnoDB;

START TRANSACTION;

-- Table Favoris --


DROP TABLE  IF EXISTS `wishlist`;
CREATE TABLE  IF NOT  EXISTS `wishlist`(
`id` int(11) NOT NULL  AUTO_INCREMENT,
`id_bien` int(11) NOT NULL,
`id_property` int(11) NOT NULL,
`date_add` datetime DEFAULT  NOW(),
`date_update` datetime DEFAULT  NOW(),
`date_delete` datetime,
`activate` boolean DEFAULT 1,
PRIMARY KEY (`id`),
FOREIGN KEY (id_user) REFERENCES users(id),
FOREIGN KEY (id_property) REFERENCES properties(id)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Table Catégorie--

DROP TABLE  IF EXISTS `categories`;
CREATE TABLE  IF NOT  EXISTS `categories`(
`id` int(11) NOT NULL  AUTO_INCREMENT,
`nom` varchar (255) COLLATE utf8_bin NOT NULL,
`date_add` datetime DEFAULT  NOW(),
`date_update` datetime DEFAULT  NOW(),
`date_delete` datetime,
`activate` boolean DEFAULT 1,
PRIMARY KEY (`id`)

)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


-- Table Images --

DROP TABLE  IF EXISTS `images`;
CREATE TABLE  IF NOT  EXISTS `images`(
`id` int(11) NOT NULL  AUTO_INCREMENT,
`nom` varchar (255) COLLATE utf8_bin NOT NULL,
`chemin` varchar (255) COLLATE utf8_bin NOT NULL,
`date_add` datetime DEFAULT  NOW(),
`date_update` datetime DEFAULT  NOW(),
`date_delete` datetime,
`activate` boolean DEFAULT 1,
`default` boolean DEFAULT 0,
`id_bien` int(11) NOT NULL,
PRIMARY KEY (`id`),
FOREIGN KEY (id_property) REFERENCES properties(id)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;