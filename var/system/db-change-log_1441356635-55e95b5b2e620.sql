UPDATE `classes` SET `id` = 8, `name` = 'societe', `description` = '', `creationDate` = 1433166188, `modificationDate` = 1441356635, `userOwner` = 30, `userModification` = 35, `parentClass` = 'Website\\Object\\Societe', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 8);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_8` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '8',
			  `oo_className` varchar(255) default 'societe',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_8` ALTER COLUMN `oo_className` SET DEFAULT 'societe';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_8` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_8` (
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

ALTER TABLE `object_query_8` DROP INDEX `p_index_name`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_name`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_address`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_address`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_zip`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_zip`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_city`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_city`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_email`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_email`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_tel`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_tel`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_fax`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_fax`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_reference`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_reference`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_description`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_description`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_maxSeats`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_maxSeats`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_maxTables`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_maxTables`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_resaUnit`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_resaUnit`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_maxResaPerUnit`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_maxResaPerUnit`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_maxResaSeats`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_maxResaSeats`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_mealduration`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_mealduration`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_closingDateStart`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_closingDateStart`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_closingDateEnd`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_closingDateEnd`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_latlngresult__longitude`;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_latlngresult__latitude`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_latlngresult__longitude`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_latlngresult__latitude`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_8` AS SELECT * FROM `object_query_8` JOIN `objects` ON `objects`.`o_id` = `object_query_8`.`oo_id`;

/*--NEXT--*/

