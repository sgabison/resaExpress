UPDATE `classes` SET `id` = 11, `name` = 'reservation', `description` = '', `creationDate` = 1433423557, `modificationDate` = 1443262169, `userOwner` = 35, `userModification` = 35, `parentClass` = 'Website\\Object\\Reservation', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 11);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_11` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '11',
			  `oo_className` varchar(255) default 'reservation',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_11` ALTER COLUMN `oo_className` SET DEFAULT 'reservation';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_11` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_11` (
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

ALTER TABLE `object_query_11` DROP INDEX `p_index_datereservation`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_datereservation`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_location__id`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_location__type`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_location__id`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_location__type`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_serving__id`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_serving__type`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_serving__id`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_serving__type`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_guest__id`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_guest__type`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_guest__id`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_guest__type`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_person__id`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_person__type`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_person__id`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_person__type`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_start`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_start`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_end`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_end`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_status`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_status`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_arrived`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_arrived`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_bookingref`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_bookingref`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_partysize`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_partysize`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_bookingnotes`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_bookingnotes`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP COLUMN `actualpartysize`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP COLUMN `actualpartysize`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_11` AS SELECT * FROM `object_query_11` JOIN `objects` ON `objects`.`o_id` = `object_query_11`.`oo_id`;

/*--NEXT--*/

