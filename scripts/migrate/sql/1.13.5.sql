-- ---------------------------------------------------------------------
-- basemap
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `basemap`;

CREATE TABLE `basemap`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `key` VARCHAR(128) NOT NULL,
    `region_id` VARCHAR(128),
    `version` INTEGER DEFAULT 1 NOT NULL,
    `last_version` INTEGER DEFAULT 1 NOT NULL,
    `title` VARCHAR(128) NOT NULL,
    `version_title` VARCHAR(128) NOT NULL,
    `created_at` DATETIME NOT NULL,
    `regions` VARCHAR(128),
    `borders` VARCHAR(128),
    `keys` LONGTEXT,
    `raw_data` LONGTEXT,
    `mapshaper_parameters` LONGTEXT,
    `topojson` LONGTEXT,
    `is_public` TINYINT(1) DEFAULT 1,
    PRIMARY KEY (`id`,`key`,`version_title`),
    INDEX `basemap_FI_1` (`region_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- region
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `region`;

CREATE TABLE `region`
(
    `id` VARCHAR(128) NOT NULL,
    `title` VARCHAR(128) NOT NULL,
    `aspect` FLOAT,
    `projection` VARCHAR(512),
    `area` BIGINT,
    `bounding_box` VARCHAR(512),
    `outline_topojson` LONGTEXT,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;