ALTER TABLE `classificationstore_keys` ADD COLUMN `sorter` INT(10) NULL DEFAULT '0' AFTER `enabled`;

/*--NEXT--*/

ALTER TABLE `classificationstore_groups` ADD COLUMN `sorter` INT(10) NULL DEFAULT '0' AFTER `modificationDate`;

/*--NEXT--*/

