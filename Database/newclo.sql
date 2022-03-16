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
DROP TABLE IF EXISTS `newclo`;
CREATE TABLE `newclo`  (
    `cloID`  int NOT NULL AUTO_INCREMENT , 
  `clo` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `measurement` int(5) NULL DEFAULT NULL,
  

  PRIMARY KEY (`cloID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status
-- ----------------------------
INSERT INTO `newclo` (`clo`,`measurement`) VALUES ('CLO 1 : นักศึกษาสามารถอธิบายแนวคิดพื้นฐานและประเด็นหลักของวิศวกรรมซอฟต์แวร์','21');
INSERT INTO `newclo` (`clo`,`measurement`) VALUES ('CLO 1 : นักศึกษาสามารถอธิบายแนวคิดพื้นฐานและประเด็นหลักของวิศวกรรมซอฟต์แวร์','22');
INSERT INTO `newclo` (`clo`,`measurement`) VALUES ('CLO 1 : นักศึกษาสามารถอธิบายแนวคิดพื้นฐานและประเด็นหลักของวิศวกรรมซอฟต์แวร์','31');
INSERT INTO `newclo` (`clo`,`measurement`) VALUES ('CLO 2 : นักศึกษาสามารถประยุกต์ใช้เครื่องมือและเทคนิคในปัจจุบันเพื่อปรับปรุงคุณภาพผลิตภัณฑ์ซอฟต์แวร์','21');
INSERT INTO `newclo` (`clo`,`measurement`) VALUES ('CLO 2 : นักศึกษาสามารถประยุกต์ใช้เครื่องมือและเทคนิคในปัจจุบันเพื่อปรับปรุงคุณภาพผลิตภัณฑ์ซอฟต์แวร์','22');
INSERT INTO `newclo` (`clo`,`measurement`) VALUES ('CLO 2 : นักศึกษาสามารถประยุกต์ใช้เครื่องมือและเทคนิคในปัจจุบันเพื่อปรับปรุงคุณภาพผลิตภัณฑ์ซอฟต์แวร์','31');
INSERT INTO `newclo` (`clo`,`measurement`) VALUES ('CLO 3 : นักศึกษาสามารถสืบค้นข้อมูลตามหัวข้อที่เกี่ยวกับวิศวกรรมซอฟต์แวร์และเขียนรายงานสรุปจากประเด็นที่ศึกษา','21');
INSERT INTO `newclo` (`clo`,`measurement`) VALUES ('CLO 3 : นักศึกษาสามารถสืบค้นข้อมูลตามหัวข้อที่เกี่ยวกับวิศวกรรมซอฟต์แวร์และเขียนรายงานสรุปจากประเด็นที่ศึกษา','22');
INSERT INTO `newclo` (`clo`,`measurement`) VALUES ('CLO 3 : นักศึกษาสามารถสืบค้นข้อมูลตามหัวข้อที่เกี่ยวกับวิศวกรรมซอฟต์แวร์และเขียนรายงานสรุปจากประเด็นที่ศึกษา','31');
INSERT INTO `newclo` (`clo`,`measurement`) VALUES ('CLO 4 : นักศึกษาสามารถทำงานเป็นทีมเพื่อดำเนินโครงงานโดยประยุกต์แนวคิดด้านวิศวกรรมซอฟต์แวร์ได้อย่างมีประสิทธิภาพ','21');
INSERT INTO `newclo` (`clo`,`measurement`) VALUES ('CLO 4 : นักศึกษาสามารถทำงานเป็นทีมเพื่อดำเนินโครงงานโดยประยุกต์แนวคิดด้านวิศวกรรมซอฟต์แวร์ได้อย่างมีประสิทธิภาพ','22');
INSERT INTO `newclo` (`clo`,`measurement`) VALUES ('CLO 4 : นักศึกษาสามารถทำงานเป็นทีมเพื่อดำเนินโครงงานโดยประยุกต์แนวคิดด้านวิศวกรรมซอฟต์แวร์ได้อย่างมีประสิทธิภาพ','31');
INSERT INTO `newclo` (`clo`) VALUES ('CLO 5 : นักศึกษาสามารถนำเสนอโครงงานทั้งในรูปแบบปากเปล่าและการเขียนได้อย่างมีประสิทธิภาพ');
INSERT INTO `newclo` (`clo`,`measurement`) VALUES ('CLO 6 : นักศึกษาแสดงพฤติกรรมความเป็นผู้มีจรรยาบรรณทางวิชาชีพ มีวินัย ตรงต่อเวลา รวมทั้งมีความรับผิดชอบต่อตนเองและสังคม','12');



SET FOREIGN_KEY_CHECKS = 1;
