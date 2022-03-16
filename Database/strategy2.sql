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
DROP TABLE IF EXISTS `strategy2`;
CREATE TABLE `strategy2`  (
  `subploID` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `strategy1` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `strategy2` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `strategy3` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0



) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status 
-- ('1','PLO 1.1 สามารถอธิบายหลักการ แนวคิดและทฤษฏีที่สำคัญในเนื้อหาสาขาวิทยาการคอมพิวเตอร์','','','','','','','','','','' );
-- ----------------------------
INSERT INTO `strategy2` VALUES 
('11','บรรยายแบบปฏิสัมพันธ์และยกตัวอย่างประกอบ','มอบหมายงานให้ศึกษาด้วยตนเองจากกรณีศึกษา','สาธิตการใช้งานเครื่องมือสำหรับการเขียนโปรแกรม');
INSERT INTO `strategy2` VALUES 
('12','มอบหมายงานให้ศึกษาด้วยตนเองจากกรณีศึกษา','สาธิตการใช้งานเครื่องมือสำหรับการเขียนโปรแกรม','บรรยายแบบปฏิสัมพันธ์และยกตัวอย่างประกอบ');
INSERT INTO `strategy2` VALUES 
('15','สาธิตการใช้งานเครื่องมือสำหรับการเขียนโปรแกรม','','');
INSERT INTO `strategy2` VALUES 
('21','บรรยายแบบปฏิสัมพันธ์และยกตัวอย่างประกอบ','สาธิตการใช้งานเครื่องมือสำหรับการเขียนโปรแกรม','');

SET FOREIGN_KEY_CHECKS = 1;
