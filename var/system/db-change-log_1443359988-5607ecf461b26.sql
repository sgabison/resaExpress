UPDATE `classes` SET `id` = 13, `name` = 'serving', `description` = '', `creationDate` = 1433433254, `modificationDate` = 1443359988, `userOwner` = 35, `userModification` = 35, `parentClass` = 'Website\\Object\\Serving', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 13);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_13` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '13',
			  `oo_className` varchar(255) default 'serving',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_13` ALTER COLUMN `oo_className` SET DEFAULT 'serving';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_13` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_13` (
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

ALTER TABLE `object_query_13` DROP INDEX `p_index_location__id`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_location__type`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_location__id`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_location__type`;

/*--NEXT--*/

ALTER TABLE `object_query_13` ADD COLUMN `status` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_13` ADD COLUMN `status` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_status`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_status`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_title`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_title`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_day`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_day`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_servingstart`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_servingstart`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_servingend`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_servingend`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxseats`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxseats`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxtables`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxtables`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_mealduration`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_mealduration`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_closedmonday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_closedmonday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_timestartmonday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_timestartmonday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_timeendmonday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_timeendmonday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_closedtuesday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_closedtuesday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_timestarttuesday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_timestarttuesday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_timeendtuesday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_timeendtuesday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_closedwednesday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_closedwednesday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_timestartwednesday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_timestartwednesday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_timeendwednesday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_timeendwednesday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_closedthursday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_closedthursday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_timestartthursday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_timestartthursday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_timeendthursday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_timeendthursday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_closedfriday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_closedfriday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_timestartfriday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_timestartfriday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_timeendfriday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_timeendfriday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_closedsaturday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_closedsaturday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_timestartsaturday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_timestartsaturday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_timeendsaturday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_timeendsaturday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_closedsunday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_closedsunday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_timestartsunday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_timestartsunday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_timeendsunday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_timeendsunday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxseatsmonday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxseatsmonday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxseatstuesday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxseatstuesday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxseatswednesday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxseatswednesday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxseatsthursday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxseatsthursday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxseatsfriday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxseatsfriday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxseatssaturday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxseatssaturday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxseatssunday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxseatssunday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxtablesmonday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxtablesmonday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxtablestuesday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxtablestuesday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxtableswednesday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxtableswednesday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxtablesthursday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxtablesthursday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxtablesfriday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxtablesfriday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxtablessaturday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxtablessaturday`;

/*--NEXT--*/

ALTER TABLE `object_query_13` DROP INDEX `p_index_maxtablessunday`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_maxtablessunday`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_13` AS SELECT * FROM `object_query_13` JOIN `objects` ON `objects`.`o_id` = `object_query_13`.`oo_id`;

/*--NEXT--*/

