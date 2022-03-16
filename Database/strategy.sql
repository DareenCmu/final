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
DROP TABLE IF EXISTS `strategy`;
CREATE TABLE `strategy`  (
  `Strategy` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `subploID1` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `subploID12` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `subploID13` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0,
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
  `subploID62` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 0


) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status 
-- ('1','PLO 1.1 สามารถอธิบายหลักการ แนวคิดและทฤษฏีที่สำคัญในเนื้อหาสาขาวิทยาการคอมพิวเตอร์','','','','','','','','','','' );
-- ----------------------------
INSERT INTO `strategy` VALUES 
('บรรยายแบบปฏิสัมพันธ์และยกตัวอย่างประกอบ','11','12','13','14','15','21','22','23','24','31','32','33','41','42','','','51','','','');
INSERT INTO `strategy` VALUES 
('มอบหมายงานให้ศึกษาด้วยตนเองจากกรณีศึกษา','11','12','13','14','15','21','22','23','24','','','','','','','','51','52','','');
INSERT INTO `strategy` VALUES 
('สาธิตการใช้งานเครื่องมือสำหรับการเขียนโปรแกรม','11','','','','','','','23','24','','','','','','','','','','','');
INSERT INTO `strategy` VALUES 
('มอบหมายงานแบบฝึกหัดปฏิบัติการให้ฝึกปฏิบัติ','11','','','','15','21','22','23','24','','','','','','','','','','','');
INSERT INTO `strategy` VALUES 
('มอบหมายหัวข้อให้นักศึกษาสืบค้นข้อมูลและเขียนรายงานสรุป','','','','14','15','','','','','','','','','','','','51','','','');
INSERT INTO `strategy` VALUES 
('มอบหมายให้พัฒนาโครงงาน ','','','','','15','21','22','23','24','','32','33','','','','','','52','','');
INSERT INTO `strategy` VALUES 
('แนะนำและกระตุ้นให้นักศึกษาหาความรู้และฝึกทักษะเสริมนอกเหนือจากบทเรียน','','','','','15','21','22','23','','','','33','','','','','51','52','','');
INSERT INTO `strategy` VALUES 
('มอบหมายให้พัฒนาโครงงานและเขียนข้อเสนอโครงการ','','','','','','','','','','31','','','','','','','','','','');
INSERT INTO `strategy` VALUES 
('มอบหมายให้เขียนรายงานประกอบการโครงงานหรือรายงานวิจัย ','','','','','','','','','','','32','33','','','','','','','','');
INSERT INTO `strategy` VALUES 
('มอบหมายให้นำเสนอหน้าชั้นเรียน ในรูปแบบปากเปล่าและใช้สื่อประกอบการนำเสนอ','','','','','','','','','','','','','41','','','','','','','');
INSERT INTO `strategy` VALUES 
('มอบหมายให้เขียนบทความสั้น รายงาน รายงานประกอบการ โครงงานหรือรายงานวิจัย ','','','','','','','','','','','','','','42','','','','','','');
INSERT INTO `strategy` VALUES 
('มอบหมายให้พัฒนาโครงงานหรือทำงานในรูปแบบทีม ','','','','','','','','','','','','','','','43','44','','','','');
INSERT INTO `strategy` VALUES 
('การฝึกงานและสหกิจศึกษา','','','','','','','','','','','','','','','43','44','','','',''); 
INSERT INTO `strategy` VALUES 
('มอบหมายงานและกำหนดเวลาในการส่งงาน ','','','','','','','','','','','','','','','','','','','61','');
INSERT INTO `strategy` VALUES 
('ปลูกฝังให้ผู้เรียนมีระเบียบวินัยซึ่งจะเน้นการเข้าเรียนให้ตรงเวลา และส่งงานภายในเวลาที่กำหนด รวมทั้งยกตัวอย่างผลกระทบและความเสียหายจากการไม่ตรงเวลา ','','','','','','','','','','','','','','','','','','','61','');
INSERT INTO `strategy` VALUES 
('จัดกิจกรรมการเรียนการสอนที่เน้นการทำงานเป็นกลุ่มและงานที่ต้องมีปฏิสัมพันธ์กันระหว่างบุคคลเช่น 
การระดมความคิดเห็น การอภิปรายหรือการสัมมนาเกี่ยวกับประเด็นที่นักศึกษาสนใจ ','','','','','','','','','','','','','','','','','','','61','');
INSERT INTO `strategy` VALUES 
('สอดแทรกเรื่องความรับผิดชอบ ต่อตนเองและสังคมในระหว่าง การจัดการเรียนการสอน โดย ยกตัวอย่างจากสถานการณ์จริง ซึ่งเน้นในเรื่องจรรยาบรรณทาง วิชาการและวิชาชีพเป็นสำคัญ','','','','','','','','','','','','','','','','','','','61','');
INSERT INTO `strategy` VALUES 
('ประเมินจากการมีวินัยการตรงต่อเวลาในการทำหรือส่งงานตามเวลาที่กำหนด','','','','','','','','','','','','','','','','','','','','62');
INSERT INTO `strategy` VALUES 
('ประเมินจากการที่ผู้เรียนไม่คัดลอกผลงานของผู้อื่นและมีการอ้างอิงผลงานของผู้อื่นอย่างถูกต้องและเหมาะสม ','','','','','','','','','','','','','','','','','','','','62');
INSERT INTO `strategy` VALUES 
('ประเมินจากความตระหนักถึงผลกระทบของเทคโนโลยีที่อาจส่งผลกระทบต่อองค์กรหรือสังคมในขั้นตอนของการพัฒนาระบบ','','','','','','','','','','','','','','','','','','','','62');

SET FOREIGN_KEY_CHECKS = 1;
