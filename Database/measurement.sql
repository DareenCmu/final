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
DROP TABLE IF EXISTS `measurement`;
CREATE TABLE `measurement`  (
  `mNO` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Measurement` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `subploID1` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `subploID12` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `subploID13` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `subploID14` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID15` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID21` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID22` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID23` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID24` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID31` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID32` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID33` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID41` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID42` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID43` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID44` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID51` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID52` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID61` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
  `subploID62` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,

  PRIMARY KEY (`mNO`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status 
-- ('1','PLO 1.1 สามารถอธิบายหลักการ แนวคิดและทฤษฏีที่สำคัญในเนื้อหาสาขาวิทยาการคอมพิวเตอร์','','','','','','','','','','' );
-- ----------------------------
INSERT INTO `measurement` VALUES 
('1','ประเมินผลจากการสอบข้อเขียน','11','12','13','14','15','21','22','23','24','','','','','','','','','','','62');
INSERT INTO `measurement` VALUES 
('2','ประเมินผลจากการทำแบบฝึกหัด','11','','','','15','21','22','23','24','','','','','','','','','','','');
INSERT INTO `measurement` VALUES 
('3','ประเมินจากการสอบปฏิบัติ','11','','','','','','','23','24','','','','','','','','','','','');
INSERT INTO `measurement` VALUES 
('5','ประเมินจากคุณภาพของรายงาน','','','','14','15','21','22','','','','','','','42','','','51','','','');
INSERT INTO `measurement` VALUES 
('6','ประเมินจากความสามารถกระตือรือร้นในการค้นคว้าความรู้และฝึกทักษะเสริมนอกเหนือจากบทเรียน','','','','14','15','','','','','','','','','','','','51','52','','');
INSERT INTO `measurement` VALUES 
('7','ประเมินจากคุณภาพของโครงงาน','','','','','15','21','22','23','24','','','','','','','','','','','');
INSERT INTO `measurement` VALUES 
('8','ประเมินจากคุณภาพของรายงานประกอบโครงงานหรือรายงานวิจัย','','','','','','','','','','','32','33','','','','','','','','');
INSERT INTO `measurement` VALUES 
('9','ประเมินจากความสามารถและ/ หรือความกระตือรือร้นในการค้นคว้าหาความรู้และฝึกทักษะ เสริมนอกเหนือจากบทเรียนเพื่อนำมาพัฒนาโครงงาน','','','','','','','','','','','32','33','','','','','','','','');
INSERT INTO `measurement` VALUES 
('10','ประเมินจากความคิดริเริ่มสร้างสรรค์และความสอดคล้องของการประยุกต์ความก้าวหน้าทางวิชาการและเทคโนโลยี รวมถึงการเลือกใช้เครื่องมือในการแก้ปัญหา','','','','','','','','','','','','33','','','','','','52','','');
INSERT INTO `measurement` VALUES 
('11','ประเมินจากการเสนอผลงานในรูปแบบปากเปล่าและสื่อ','','','','','','','','','','','','','41','','','','','','','62');
INSERT INTO `measurement` VALUES 
('12','ประเมินจากการสังเกตพฤติกรรมการทำงานของผู้เรียนขณะทำกิจกรรมกลุ่มและการปฏิสัมพันธ์กัน ระหว่างเพื่อนร่วมงาน ','','','','','','','','','','','','','','','43','44','','','','');
INSERT INTO `measurement` VALUES 
('13','ประเมินระหว่างผู้เรียน','','','','','','','','','','','','','','','43','44','','','','');
INSERT INTO `measurement` VALUES 
('14','ประเมินจากผลการฝึกงานและสหกิจศึกษาที่ประเมินโดยสถานประกอบการ','','','','','','','','','','','','','','','43','44','','','','');
INSERT INTO `measurement` VALUES 
('15','ประเมินจากการมีวินัยการตรงต่อเวลาในการทำหรือส่งงานตามเวลาที่กำหนด','','','','','','','','','','','','','','','','','','','61','');
INSERT INTO `measurement` VALUES 
('16','ประเมินจากการที่ผู้เรียนไม่คัดลอกผลงานของผู้อื่นและมีการอ้างอิงผลงานของผู้อื่นอย่างถูกต้อง และเหมาะสม','','','','','','','','','','','','','','','','','','','61','');
INSERT INTO `measurement` VALUES 
('17','ประเมินจากความตระหนักถึงผลกระทบของเทคโนโลยีที่อาจส่งผลกระทบต่อองค์กรหรือสังคมในขั้นตอนของการวิเคราะห์และออกแบบระบบ','','','','','','','','','','','','','','','','','','','61','');
INSERT INTO `measurement` VALUES 
('18','ประเมินจากคุณภาพของข้อเสนอโครงการ','','','','','','','','','','31','32','33','','','','','','','','');

SET FOREIGN_KEY_CHECKS = 1;
