ALTER TABLE `assets` ADD INDEX `modificationDate` (`modificationDate`);

/*--NEXT--*/

ALTER TABLE `documents` ADD INDEX `modificationDate` (`modificationDate`);

/*--NEXT--*/

ALTER TABLE `objects` ADD INDEX `o_modificationDate` (`o_modificationDate`);

/*--NEXT--*/

