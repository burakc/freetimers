SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for objects
-- ----------------------------
DROP TABLE IF EXISTS `objects`;
CREATE TABLE `objects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `width` double DEFAULT NULL,
  `length` double DEFAULT NULL,
  `measurement` varchar(255) DEFAULT NULL,
  `depth_measurement` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

SET FOREIGN_KEY_CHECKS = 1;
