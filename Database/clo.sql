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
DROP TABLE IF EXISTS `clo`;
CREATE TABLE `clo`  (
    `cloID` int NOT NULL AUTO_INCREMENT ,  
    `course_no` int(10)  NULL DEFAULT NULL,
  `subplo_num` int(5) NOT NULL,
  `subplo_num2` int(5) NOT NULL,
  `PLO_detail` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
    
  PRIMARY KEY (`cloID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status
-- ----------------------------
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`) VALUES ('204111','11','','CLO 1 : นักศึกษาสามารถอธิบายแนวคิดพื้นฐานและประเด็นหลักของวิศวกรรมซอฟต์แวร์');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`) VALUES ('204111','14','15','CLO 2 : นักศึกษาสามารถประยุกต์ใช้เครื่องมือและเทคนิคในปัจจุบันเพื่อปรับปรุงคุณภาพผลิตภัณฑ์ซอฟต์แวร์');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`) VALUES ('204111','15','','CLO 3 : นักศึกษาสามารถสืบค้นข้อมูลตามหัวข้อที่เกี่ยวกับวิศวกรรมซอฟต์แวร์และเขียนรายงานสรุปจากประเด็นที่ศึกษา');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`) VALUES ('204111','21','15','CLO 4 : นักศึกษาสามารถทำงานเป็นทีมเพื่อดำเนินโครงงานโดยประยุกต์แนวคิดด้านวิศวกรรมซอฟต์แวร์ได้อย่างมีประสิทธิภาพ');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`) VALUES ('204111','22','','CLO 5 : นักศึกษาสามารถนำเสนอโครงงานทั้งในรูปแบบปากเปล่าและการเขียนได้อย่างมีประสิทธิภาพ');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`) VALUES ('204111','23','','CLO 6 : นักศึกษาแสดงพฤติกรรมความเป็นผู้มีจรรยาบรรณทางวิชาชีพ มีวินัย ตรงต่อเวลา รวมทั้งมีความรับผิดชอบต่อตนเองและสังคม');

INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES ('204113','11','12','CLO 1');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES ('204113','21','23','CLO 2');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES ('204113','31','','CLO 3');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES ('204113','32','41','CLO 4');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES ('204113','42','','CLO 5');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES ('204113','51','61','CLO 6');

INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES ('204211','11','13','CLO 1');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES ('204211','15','21','CLO 2');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES ('204211','41','42','CLO 3');

INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`) VALUES  ('204231','11','21','CLO 1');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`) VALUES  ('204231','23','31','CLO 2');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`) VALUES  ('204231','33','41','CLO 3');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`) VALUES  ('204231','42','51','CLO 4');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`) VALUES  ('204231','62','52','CLO 5');

INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES  ('204232','11','21','CLO 1');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES  ('204232','22','41','CLO 2');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES  ('204232','52','62','CLO 3');

INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES  ('204251','11','13','CLO 1');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES  ('204251','21','31','CLO 2');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES  ('204251','41','42','CLO 3');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES  ('204251','51','62','CLO 4');

INSERT INTO `clo` (`course_no`) VALUES  ('204306');
INSERT INTO `clo` (`course_no`) VALUES  ('204315');
INSERT INTO `clo` (`course_no`) VALUES  ('204321');
INSERT INTO `clo` (`course_no`) VALUES  ('204341');
INSERT INTO `clo` (`course_no`) VALUES  ('204361');

INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES  ('204362','11','13','CLO 1');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES  ('204362','21','31','CLO 2');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES  ('204362','41','42','CLO 3');
INSERT INTO `clo` (`course_no`,`subplo_num`,`subplo_num2`,`PLO_detail`)VALUES  ('204362','51','62','CLO 4');

INSERT INTO `clo` (`course_no`) VALUES  ('204451');
INSERT INTO `clo` (`course_no`) VALUES  ('204490');
INSERT INTO `clo` (`course_no`) VALUES  ('204390');
INSERT INTO `clo` (`course_no`) VALUES  ('204491');
INSERT INTO `clo` (`course_no`) VALUES  ('204497');
INSERT INTO `clo` (`course_no`) VALUES  ('204496');
INSERT INTO `clo` (`course_no`) VALUES  ('204499');



SET FOREIGN_KEY_CHECKS = 1;
