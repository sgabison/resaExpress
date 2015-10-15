UPDATE `classes` SET `id` = 12, `name` = 'guest', `description` = '', `creationDate` = 1433423698, `modificationDate` = 1443178405, `userOwner` = 35, `userModification` = 35, `parentClass` = 'Website\\Object\\Guest', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 12);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_12` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '12',
			  `oo_className` varchar(255) default 'guest',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_12` ALTER COLUMN `oo_className` SET DEFAULT 'guest';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_12` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_12` (
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

ALTER TABLE `object_query_12` DROP INDEX `p_index_title`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_title`;

/*--NEXT--*/

ALTER TABLE `object_query_12` DROP INDEX `p_index_countrycode`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_countrycode`;

/*--NEXT--*/

ALTER TABLE `object_query_12` DROP INDEX `p_index_lastname`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_lastname`;

/*--NEXT--*/

ALTER TABLE `object_query_12` DROP INDEX `p_index_tel`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_tel`;

/*--NEXT--*/

ALTER TABLE `object_query_12` DROP INDEX `p_index_email`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_email`;

/*--NEXT--*/

ALTER TABLE `object_query_12` DROP INDEX `p_index_newsletterActive`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_newsletterActive`;

/*--NEXT--*/

ALTER TABLE `object_query_12` DROP INDEX `p_index_newsletterConfirmed`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_newsletterConfirmed`;

/*--NEXT--*/

ALTER TABLE `object_query_12` DROP INDEX `p_index_dateregister`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_dateregister`;

/*--NEXT--*/

ALTER TABLE `object_query_12` DROP INDEX `p_index_password`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_password`;

/*--NEXT--*/

ALTER TABLE `object_query_12` DROP INDEX `p_index_societe__id`;

/*--NEXT--*/

ALTER TABLE `object_query_12` DROP INDEX `p_index_societe__type`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_societe__id`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_societe__type`;

/*--NEXT--*/

ALTER TABLE `object_query_12` DROP INDEX `p_index_avatar`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_avatar`;

/*--NEXT--*/

ALTER TABLE `object_query_12` DROP INDEX `p_index_firstname`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_firstname`;

/*--NEXT--*/

ALTER TABLE `object_query_12` DROP INDEX `p_index_bookingnotes`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_bookingnotes`;

/*--NEXT--*/

ALTER TABLE `object_query_12` ADD COLUMN `preferredlanguage` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_12` ADD COLUMN `preferredlanguage` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_12` DROP INDEX `p_index_preferredlanguage`;

/*--NEXT--*/

ALTER TABLE `object_store_12` DROP INDEX `p_index_preferredlanguage`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_12` AS SELECT * FROM `object_query_12` JOIN `objects` ON `objects`.`o_id` = `object_query_12`.`oo_id`;

/*--NEXT--*/

