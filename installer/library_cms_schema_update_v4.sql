SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

ALTER TABLE `BookRatings` 
ADD COLUMN `updateDateTime` DATETIME NOT NULL AFTER `rating`;

SET SQL_MODE=@OLD_SQL_MODE;