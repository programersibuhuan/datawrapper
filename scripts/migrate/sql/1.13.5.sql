CREATE TABLE `basemap`
(
    `id` VARCHAR(128) NOT NULL,
    `created_at` DATETIME NOT NULL,
    `title` VARCHAR(128) NOT NULL,
    `regions` VARCHAR(128),
    `borders` VARCHAR(128),
    `aspect` FLOAT,
    `projection` VARCHAR(512),
    `bounding_box` VARCHAR(512),
    `area` BIGINT,
    `keys` LONGTEXT,
    `raw_data` LONGTEXT,
    `mapshaper_parameters` LONGTEXT,
    `topojson` LONGTEXT,
    `outline_topojson` LONGTEXT,
    `last_edit_step` INTEGER,
    `is_public` TINYINT(1) DEFAULT 1,
    `published_map` LONGTEXT,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;