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
DROP TABLE IF EXISTS `weight_score_plo`;
CREATE TABLE `weight_score_plo`  (
  `PLO` int(3) NOT NULL,
  `Subplo` int(10)  NULL DEFAULT NULL,
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
  `Total` DECIMAL(5,2) NULL DEFAULT NULL
    
  
  
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status
-- ----------------------------

INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`2.1`,`Total`)  VALUES ('1','11','10.45','10.45');
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`2.6`,`Total`)  VALUES ('1','12','0.60','0.60');
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`2.6`,`Total`)  VALUES ('1','13','0.60','0.60');
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`1.6`,`2.6`,`2.8`,`4.3`,`Total`)  VALUES ('1','14','1','0.60','3.30','0.05','4.95');
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`2.2`,`2.8`,`3.4`,`4.3`,`5.2`,`Total`)  VALUES ('1','15','10.70','3.30','10.80','0.05','2.05','17.90');
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`2.3`,`2.7`,`3.1`,`3.3`,`3.4`,`Total`)  VALUES ('2','21','4.75','6.80','7.30','6.90','10.80','37.55');
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`2.3`,`2.7`,`3.1`,`3.4`,`Total`)  VALUES ('2','22','4.75','6.80','7.30','10.80','30.65');
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`2.3`,`2.7`,`3.1`,`3.4`,`Total`)  VALUES ('2','23','4.75','6.80','7.30','10.80','30.65');
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`2.3`,`2.7`,`3.1`,`3.4`,`Total`) VALUES ('2','24','4.75','6.80','7.30','10.80','30.65' );
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`2.3`,`3.1`,`3.4`,`Total`) VALUES ('3','31','4.75','7.30','10.80','23.85');
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`2.3`,`3.1`,`3.4`,`Total`) VALUES ('3','32','4.75','7.30','10.80','23.85');
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`3.1`,`3.4`,`4.3`,`4.5`,`5.2`,`Total`) VALUES ('3','33','7.30','10.80','0.05','0.20','2.05','21.40' );
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`5.1`,`5.3`,`5.4`,`Total`) VALUES ('4','41','5.35','4.75','4','14.10' );
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`5.1`,`5.3`,`5.4`,`Total`) VALUES ('4','42','5.35','4.75','4','14.10' );
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`1.3`,`1.4`,`4.2`,`4.4`,`4.5`,`Total`) VALUES ('4','43','0.05','3.20','1.30','2.25','0.20','7' );
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`4.2`,`Total`) VALUES ('4','44','0.20' ,'0.20');
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`2.4`,`3.2`,`5.1`,`5.4`,`Total`) VALUES ('5','51','1.50','1.90','5.35','4','12.75');
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`2.4`,`2.5`,`4.6`,`Total`) VALUES ('5','52','1.50','1','3.80','6.30' );
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`1.1`,`1.2`,`1.4`,`1.5`,`1.7`,`4.4`,`Total`) VALUES ('6','61','1.20','4.85','3.20','3','3.20','2.25','17.70' );
INSERT INTO `weight_score_plo` (`PLO`, `Subplo`,`1.6`,`1.7`,`4.3`,`Total`) VALUES ('6','62','1','3.20','0.05' ,'4.25');



SET FOREIGN_KEY_CHECKS = 1;
