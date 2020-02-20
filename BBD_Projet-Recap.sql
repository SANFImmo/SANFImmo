DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties`
(
    `id`                 int(11)                       NOT NULL AUTO_INCREMENT,
    `nom`                varchar(255) COLLATE utf8_bin NOT NULL,
    `prix`               float(11, 2),
    `reference`          varchar(255) COLLATE utf8_bin NOT NULL,
    `surface`            varchar(255) COLLATE utf8_bin NOT NULL,
    `description`        varchar(255) COLLATE utf8_bin NOT NULL,
    `classe energetique` varchar(255) COLLATE utf8_bin NOT NULL,
    `nbr de pieces`      varchar(255) COLLATE utf8_bin NOT NULL,
    `nbr de chambre`     varchar(255) COLLATE utf8_bin NOT NULL,
    `type`               varchar(255) COLLATE utf8_bin NOT NULL,
    `top`                varchar(255) COLLATE utf8_bin NOT NULL,
    `date_add`           datetime DEFAULT NOW(),
    `date_update`        datetime DEFAULT NOW(),
    `date_delete`        datetime,
    `activate`           boolean  DEFAULT 1,
    `visible`            boolean  DEFAULT 0,
    `id_category`        int(11)                       NOT NULL,
    `id_address`         int(11)                       NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_category`) REFERENCES categories (`id`),
    FOREIGN KEY (`id_address`) REFERENCES adresses (`id`)
)ENGINE = InnoDB  DEFAULT CHARSET = utf8 COLLATE = utf8_bin;