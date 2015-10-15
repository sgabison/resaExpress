UPDATE `classes` SET `id` = 15, `name` = 'tags', `description` = '', `creationDate` = 1442664622, `modificationDate` = 1443038523, `userOwner` = 35, `userModification` = 35, `parentClass` = 'Website\\Object\\Tags', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 15);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_15` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '15',
			  `oo_className` varchar(255) default 'tags',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_15` ALTER COLUMN `oo_className` SET DEFAULT 'tags';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_15` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_15` (
          `src_id` int(11) NOT NULL DEFAULT '0',
          `dest_id` int(11) NOT NULL DEFAULT '0',
          `type` varchar(50) NOT NULL DEFAULT '',
          `fieldname` varchar(70) NOT NULL DEFAULT '0',
          `index` int(11) unsigned NOT NULL DEFAULT '0',
          `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
          `ownername` varchar(70) NOT NULL DEFAULT '',
          `position` varchar(70) NOT NULL DEFAULT '0',
          PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
          KEY `index` (`index`),
          KEY `src_id` (`src_id`),
          KEY `dest_id` (`dest_id`),
          KEY `fieldname` (`fieldname`),
          KEY `position` (`position`),
          KEY `ownertype` (`ownertype`),
          KEY `type` (`type`),
          KEY `ownername` (`ownername`)
        ) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_15` DROP INDEX `p_index_code`;

/*--NEXT--*/

ALTER TABLE `object_store_15` DROP INDEX `p_index_code`;

/*--NEXT--*/

ALTER TABLE `object_query_15` DROP INDEX `p_index_localizedfields`;

/*--NEXT--*/

ALTER TABLE `object_store_15` DROP INDEX `p_index_localizedfields`;

/*--NEXT--*/

ALTER TABLE `object_query_15` DROP INDEX `p_index_societe__id`;

/*--NEXT--*/

ALTER TABLE `object_query_15` DROP INDEX `p_index_societe__type`;

/*--NEXT--*/

ALTER TABLE `object_store_15` DROP INDEX `p_index_societe__id`;

/*--NEXT--*/

ALTER TABLE `object_store_15` DROP INDEX `p_index_societe__type`;

/*--NEXT--*/

ALTER TABLE `object_query_15` ADD COLUMN `icon` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_15` ADD COLUMN `icon` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_15` DROP INDEX `p_index_icon`;

/*--NEXT--*/

ALTER TABLE `object_store_15` DROP INDEX `p_index_icon`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_15` AS SELECT * FROM `object_query_15` JOIN `objects` ON `objects`.`o_id` = `object_query_15`.`oo_id`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_localized_data_15` (
		  `ooo_id` int(11) NOT NULL default '0',
		  `language` varchar(10) NOT NULL DEFAULT '',
		  PRIMARY KEY (`ooo_id`,`language`),
          INDEX `ooo_id` (`ooo_id`),
          INDEX `language` (`language`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_localized_data_15` DROP INDEX `p_index_tag`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_localized_query_15_en` (
                  `ooo_id` int(11) NOT NULL default '0',
                  `language` varchar(10) NOT NULL DEFAULT '',
                  PRIMARY KEY (`ooo_id`,`language`),
                  INDEX `ooo_id` (`ooo_id`),
                  INDEX `language` (`language`)
                ) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_localized_query_15_en` DROP INDEX `p_index_tag`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_localized_query_15_fr_FR` (
                  `ooo_id` int(11) NOT NULL default '0',
                  `language` varchar(10) NOT NULL DEFAULT '',
                  PRIMARY KEY (`ooo_id`,`language`),
                  INDEX `ooo_id` (`ooo_id`),
                  INDEX `language` (`language`)
                ) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_localized_query_15_fr_FR` DROP INDEX `p_index_tag`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_localized_15_en` AS

SELECT `oo_id`,`oo_classId`,`oo_className`,`code`,`societe__id`,`societe__type`,`icon`,`o_id`,`o_parentId`,`o_type`,`o_key`,`o_path`,`o_index`,`o_published`,`o_creationDate`,`o_modificationDate`,`o_userOwner`,`o_userModification`,`o_classId`,`o_className`,`en`.`ooo_id` as "ooo_id",`en`.`language` as "language",`en`.`tag` as "tag"
FROM `object_query_15`
    JOIN `objects`
        ON (`objects`.`o_id` = `object_query_15`.`oo_id`)LEFT JOIN object_localized_query_15_en as en
    ON( 1
        AND object_query_15.oo_id = en.ooo_id
    );

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_localized_15_fr_FR` AS

SELECT `oo_id`,`oo_classId`,`oo_className`,`code`,`societe__id`,`societe__type`,`icon`,`o_id`,`o_parentId`,`o_type`,`o_key`,`o_path`,`o_index`,`o_published`,`o_creationDate`,`o_modificationDate`,`o_userOwner`,`o_userModification`,`o_classId`,`o_className`,`fr_FR`.`ooo_id` as "ooo_id",`fr_FR`.`language` as "language",`fr_FR`.`tag` as "tag"
FROM `object_query_15`
    JOIN `objects`
        ON (`objects`.`o_id` = `object_query_15`.`oo_id`)LEFT JOIN object_localized_query_15_fr_FR as fr_FR
    ON( 1
        AND object_query_15.oo_id = fr_FR.ooo_id
    );

/*--NEXT--*/

