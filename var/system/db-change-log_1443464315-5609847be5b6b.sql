UPDATE `classes` SET `id` = 4, `name` = 'person', `description` = '', `creationDate` = 1368620452, `modificationDate` = 1443464315, `userOwner` = 0, `userModification` = 35, `parentClass` = 'Website\\Object\\Person', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 4);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_4` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '4',
			  `oo_className` varchar(255) default 'person',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_4` ALTER COLUMN `oo_className` SET DEFAULT 'person';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_4` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_4` (
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

ALTER TABLE `object_query_4` DROP INDEX `p_index_gender`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_gender`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_firstname`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_firstname`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_lastname`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_lastname`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_email`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_email`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_newsletterActive`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_newsletterActive`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_newsletterConfirmed`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_newsletterConfirmed`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_dateRegister`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_dateRegister`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_positions`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_positions`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_password`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_password`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_rating`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_rating`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_societe__id`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_societe__type`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_societe__id`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_societe__type`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_countrycode`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_countrycode`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_phone`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_phone`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_address`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_address`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_city`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_city`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_avatar`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_avatar`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_permits`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_permits`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_4` AS SELECT * FROM `object_query_4` JOIN `objects` ON `objects`.`o_id` = `object_query_4`.`oo_id`;

/*--NEXT--*/

