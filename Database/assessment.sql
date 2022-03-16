/*
 Navicat Premium Data Transfer

 Source Server         : epg
 Source Server Type    : MariaDB
 Source Server Version : 100412
 Source Host           : 202.28.24.196:3306
 Source Schema         : acad

 Target Server Type    : MariaDB
 Target Server Version : 100412
 File Encoding         : 65001

 Date: 06/05/2021 15:14:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ref_edu_status
-- ----------------------------
DROP TABLE IF EXISTS `assessment`;
CREATE TABLE `assessment`  (
  `id` int NOT NULL AUTO_INCREMENT , 
  `course_no` int(10)  NULL DEFAULT NULL,
  `score` int(10)  NULL DEFAULT NULL,
  `1.1` DECIMAL(5,2)  NULL DEFAULT NULL,
  `1.2` DECIMAL(5,2)  NULL DEFAULT NULL,
  `1.3` DECIMAL(5,2)  NULL DEFAULT NULL,
  `1.4` DECIMAL(5,2)  NULL DEFAULT NULL,
  `1.5` DECIMAL(5,2)  NULL DEFAULT NULL,
  `1.6` DECIMAL(5,2)  NULL DEFAULT NULL,
  `1.7` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.1` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.2` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.3` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.4` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.5` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.6` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.7` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.8` DECIMAL(5,2)  NULL DEFAULT NULL,
  `3.1` DECIMAL(5,2)  NULL DEFAULT NULL,
  `3.2` DECIMAL(5,2)  NULL DEFAULT NULL,
  `3.3` DECIMAL(5,2)  NULL DEFAULT NULL,
  `3.4` DECIMAL(5,2)  NULL DEFAULT NULL,
  `4.1` DECIMAL(5,2)  NULL DEFAULT NULL,
  `4.2` DECIMAL(5,2)  NULL DEFAULT NULL,
  `4.3` DECIMAL(5,2)  NULL DEFAULT NULL,
  `4.4` DECIMAL(5,2)  NULL DEFAULT NULL,
  `4.5` DECIMAL(5,2)  NULL DEFAULT NULL,
  `4.6` DECIMAL(5,2)  NULL DEFAULT NULL,
  `5.1` DECIMAL(5,2)  NULL DEFAULT NULL,
  `5.2` DECIMAL(5,2)  NULL DEFAULT NULL,
  `5.3` DECIMAL(5,2)  NULL DEFAULT NULL,
  `5.4` DECIMAL(5,2)  NULL DEFAULT NULL,

    PRIMARY KEY (`id`) USING BTREE
  
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status
-- ----------------------------

INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`3.1`,`3.4`,`5.4`)  VALUES ('25','204111','0.25','0.25','0.25','0.25','0.25');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`3.1`,`3.4`,`5.4`)  VALUES ('30','204111','0.30','0.30','0.30','0.30','0.30');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`3.1`,`3.4`,`5.4`)  VALUES ('8','204111','0.08','0.08','0.08','0.08','0.08');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`3.1`,`3.4`,`5.4`)  VALUES ('8','204111','0.08','0.08','0.08','0.08','0.08');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204111');
INSERT INTO `assessment` (`score`,`course_no`,`1.2`,`2.1`,`2.2`,`3.1`,`3.4`,`5.4`)  VALUES ('20','204111','0.20','0.20','0.20','0.20','0.20','0.20');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204111');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204111');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204111');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204111');
INSERT INTO `assessment` (`score`,`course_no`,`1.2`,`2.1`,`2.2`,`3.1`,`3.4`,`5.4`)  VALUES ('10','204111','0.10','0.10','0.10','0.10','0.10','0.10');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204111');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204111');

INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`2.7`,`3.1`)  VALUES ('20','204113','0.20','0.20','0.20','0.20');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`2.7`,`3.1`,`3.4`,`5.1`)  VALUES ('20','204113','0.20','0.20','0.20','0.20','0.20','0.20');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`2.7`,`3.1`)  VALUES ('20','204113','0.20','0.20','0.20','0.20');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204113');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204113');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204113');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204113');
INSERT INTO `assessment` (`score`,`course_no`,`2.8`,`3.1`,`3.2`,`3.4`,`5.1`)  VALUES ('40','204113','0.40','0.40','0.40','0.40','0.40');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204113');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204113');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204113');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204113');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204113');

INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`3.1`,`3.4`,`5.4`)  VALUES ('25','204211','0.25','0.25','0.25','0.25','0.25');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`3.1`,`3.4`,`5.4`)  VALUES ('10','204211','0.10','0.10','0.10','0.10','0.10');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204211');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204211');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204211');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204211');
INSERT INTO `assessment` (`score`,`course_no`,`1.1`,`1.6`,`2.4`,`3.2`,`5.2`)  VALUES ('30','204211','0.30','0.30','0.30','0.30','0.30');
INSERT INTO `assessment` (`score`,`course_no`,`1.1`,`1.6`,`2.4`,`3.2`,`5.2`)  VALUES ('8','204211','0.08','0.08','0.08','0.08','0.08');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204211');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204211');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204211');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204211');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204211');

INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`3.3`)  VALUES ('40','204231','0.40','0.40');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`3.3`)  VALUES ('40','204231','0.40','0.40');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`3.3`,`5.1`)  VALUES ('10','204231','0.10','0.10','0.10');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204231');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`3.3`,`5.1`)  VALUES ('10','204231','0.10','0.10','0.10');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204231');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204231');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204231');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204231');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204231');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204231');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204231');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204231');

INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`3.1`,`3.4`,`5.4`)  VALUES ('35','204232','0.35','0.35','0.35','0.35','0.35');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`3.1`,`3.4`,`5.4`)  VALUES ('40','204232','0.40','0.40','0.40','0.40','0.40');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`3.1`,`3.4`,`5.4`)  VALUES ('10','204232','0.10','0.10','0.10','0.10','0.10');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204232');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`3.1`,`3.4`,`5.4`)  VALUES ('8','204232','0.08','0.08','0.08','0.08','0.08');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204232');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`3.1`,`3.4`,`5.4`)  VALUES ('8','204232','0.08','0.08','0.08','0.08','0.08');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204232');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204232');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204232');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204232');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204232');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204232');

INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`2.8`,`3.4`,`4.6`,`5.2`)  VALUES ('30','204251','0.30','0.30','0.30','0.30','0.30','0.30');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`2.8`,`3.4`,`4.6`,`5.2`)  VALUES ('35','204251','0.35','0.35','0.35','0.35','0.35','0.35');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`2.2`,`2.8`,`3.4`,`4.6`,`5.2`)  VALUES ('10','204251','0.10','0.10','0.10','0.10','0.10','0.10');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204251');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`)  VALUES ('10','204251','0.10');
INSERT INTO `assessment` (`score`,`course_no`,`2.2`)  VALUES ('15','204251','0.15');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204251');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204251');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204251');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204251');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204251');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204251');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204251');

INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204306');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204306');
INSERT INTO `assessment` (`score`,`course_no`,`1.1`,`1.4`,`1.5`,`1.6`,`1.7`,`2.1`)  VALUES ('60','204306''0','0.60','0.60','0.60','0.60','0.60','0.60');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204306');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204306');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204306');
INSERT INTO `assessment` (`score`,`course_no`,`1.1`,`1.4`,`1.5`,`1.6`,`1.7`,`2.1`,`5.2`,`5.4`)  VALUES ('20','204306','0.20','0.20','0.20','0.20','0.20','0.20','0.20','0.20');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204306');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204306');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204306');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204306');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204306');
INSERT INTO `assessment` (`score`,`course_no`,`1.1`,`1.4`,`1.5`,`1.6`,`1.7`,`2.1`,`5.2`,`5.4`)  VALUES ('20','204306','0.20','0.20','0.20','0.20','0.20','0.20','0.20','0.20');

INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204315');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`3.1`)  VALUES ('70','204315','0.70','0.70');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204315');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204315');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`)  VALUES ('30','204315','0.30');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204315');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204315');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204315');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204315');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204315');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204315');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204315');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204315');

INSERT INTO `assessment` (`score`,`course_no`,`2.1`)  VALUES ('30','204321','0.30');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`)  VALUES ('30','204321','0.30');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`3.3`)  VALUES ('10','204321','0.10','0.10');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`,`3.3`)  VALUES ('10','204321','0.10','0.10');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204321');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204321');
INSERT INTO `assessment` (`score`,`course_no`,`1.2`,`2.7`,`3.3`,`4.4`,`4.5`,`5.3`)  VALUES ('7','204321','0.07','0.07','0.07','0.07','0.07','0.07');
INSERT INTO `assessment` (`score`,`course_no`,`1.2`,`2.7`,`3.3`,`4.4`,`4.5`,`5.3`)  VALUES ('7','204321','0.07','0.07','0.07','0.07','0.07','0.07');
INSERT INTO `assessment` (`score`,`course_no`,`1.2`,`2.7`,`3.3`,`4.4`,`4.5`,`5.3`)  VALUES ('7','204321','0.07','0.07','0.07','0.07','0.07','0.07');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204321');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204321');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204321');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204321');

INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204341');
INSERT INTO `assessment` (`score`,`course_no`,`2.1`)  VALUES ('70','204341','0.70');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204341');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204341');
INSERT INTO `assessment` (`score`,`course_no`,`3.3`)  VALUES ('30','204341','0.30');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204341');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204341');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204341');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204341');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204341');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204341');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204341');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204341');

INSERT INTO `assessment` (`score`,`course_no`,`2.1`)  VALUES ('30','204361','0.30');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204361');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204361');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204361');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204361');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204361');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204361');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204361');
INSERT INTO `assessment` (`score`,`course_no`,`1.2`,`2.7`,`3.3`,`4.4`,`4.5`,`5.3`)  VALUES ('7','204361','0.07','0.07','0.07','0.07','0.07','0.07');
INSERT INTO `assessment` (`score`,`course_no`,`1.2`,`2.7`,`3.3`,`4.4`,`4.5`,`5.3`)  VALUES ('7','204361','0.07','0.07','0.07','0.07','0.07','0.07');
INSERT INTO `assessment` (`score`,`course_no`,`1.2`,`2.7`,`3.3`,`4.4`,`4.5`,`5.3`)  VALUES ('7','204361','0.07','0.07','0.07','0.07','0.07','0.07');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204361');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204361');

INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204362');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204362');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204362');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204362');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204362');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204362');
INSERT INTO `assessment` (`score`,`course_no`,`1.2`,`2.2`,`2.7`,`3.1`,`3.3`,`3.4`,`4.6`,`5.1`,`5.4`)  VALUES ('30','204362','0.30','0.30','0.30','0.30','0.30','0.30','0.30','0.30','0.30');
INSERT INTO `assessment` (`score`,`course_no`,`1.2`,`2.2`,`2.7`,`3.1`,`3.3`,`3.4`,`4.6`,`5.1`,`5.4`)  VALUES ('50','204362','0.50','0.50','0.50','0.50','0.50','0.50','0.50','0.50','0.50');
INSERT INTO `assessment` (`score`,`course_no`,`1.2`,`2.2`,`2.7`,`3.1`,`3.3`,`3.4`,`4.6`,`5.1`,`5.4`)  VALUES ('20','204362','0.20','0.20','0.20','0.20','0.20','0.20','0.20','0.20','0.20');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204362');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204362');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204362');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204362');

INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204451');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204490');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204390');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204491');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204497');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204496');
INSERT INTO `assessment` (`score`,`course_no`)  VALUES ('0','204499');




SET FOREIGN_KEY_CHECKS = 1;
