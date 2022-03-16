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
DROP TABLE IF EXISTS `subplo`;
CREATE TABLE `subplo`  (
  `subploID` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `subploIDname` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ploID` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `subPLO` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,

  PRIMARY KEY (`subploID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status 
-- ('1','PLO 1.1 สามารถอธิบายหลักการ แนวคิดและทฤษฏีที่สำคัญในเนื้อหาสาขาวิทยาการคอมพิวเตอร์','','','','','','','','','','' );
-- ----------------------------
INSERT INTO `subplo` VALUES 
('11','1.1','1','PLO 1.1 สามารถอธิบายหลักการ แนวคิดและทฤษฏีที่สำคัญในเนื้อหาสาขาวิทยาการคอมพิวเตอร์');
INSERT INTO `subplo` VALUES 
('12','1.2','1','PLO 1.2 : สามารถอธิบายหลักการ แนวคิด และทฤษฏีที่สำคัญในเนื้อหาความรู้เกี่ยวกับวิทยาศาสตร์พื้นฐาน  คณิตศาสตร์ และสถิติ');
INSERT INTO `subplo` VALUES 
('13','1.3','1','PLO 1.3 : สามารถอธิบายหลักการ แนวคิด และทฤษฏีที่สำคัญที่เป็นความรู้พื้นฐานของศาสตร์ด้านอื่นๆที่เกี่ยวข้องหรือสนใจได้');
INSERT INTO `subplo` VALUES 
('14','1.4','1','PLO 1.4 : สามารถอธิบายเกี่ยวกับความก้าวหน้าของเทคโนโลยี คอมพิวเตอร์ และผลกระทบของการใช้เทคโนโลยีนั้นได้');
INSERT INTO `subplo` VALUES 
('15','1.5','1','PLO 1.5 : สามารถวิเคราะห์ปัญหา ประเมิน และเลือกประยุกต์ใช้ความรู้ในเชิงลึกและแนวกว้าง โดยนำไปบูรณาการกับความก้าวหน้าทางเทคโนโลยีและความรู้จากศาสตร์สาขาต่างๆ เพื่อแก้ปัญหาหรือเสนอแนะแนวทางแก้ปัญหา');
INSERT INTO `subplo` VALUES 
('21','2.1','2','PLO 2.1 : สามารถรวบรวม ศึกษา วิเคราะห์ และสรุปประเด็นปัญหาและความต้องการงานได้อย่างมีวิจารณญาณ');
INSERT INTO `subplo` VALUES 
('22','2.2','2','PLO 2.2 : สามารถออกแบบงานตามความต้องการใช้งานได้อย่างเป็นระบบ และเลือกใช้เครื่องมือที่เหมาะสมเพื่อประกอบการแก้ปัญหา');
INSERT INTO `subplo` VALUES 
('23','2.3','2','PLO 2.3 : สามารถพัฒนางานที่มีคุณภาพด้วยการประยุกต์ความรู้ ทักษะ และ เครื่องมือทางด้านวิทยาการคอมพิวเตอร์ร่วมกับการบูรณาการ ความก้าวหน้าทางเทคโนโลยีและความรู้จากศาสตร์สาขาต่างๆ');
INSERT INTO `subplo` VALUES 
('24','2.4','2','PLO 2.4 : สามารถทดสอบและประเมินคุณภาพของงานด้านคอมพิวเตอร์ รวมทั้งสามารถแปลผล วิเคราะห์ผลและสรุปผลการประเมินด้วยการประยุกต์หลักการและทฤษฎีทางคอมพิวเตอร์ คณิตศาสตร์และสถิติ ได้อย่างเหมาะสม');
INSERT INTO `subplo` VALUES 
('31','3.1','3','PLO 3.1 : สามารถวางแผนและเขียนข้อเสนอโครงการอย่างครอบคลุมและรอบคอบด้วยกระบวนการทางวิทยาศาสตร์อย่างเป็นระบบ');
INSERT INTO `subplo` VALUES 
('32','3.2','3','PLO 3.2 : สามารถดำเนินโครงการจนสำเร็จลุล่วงตามเวลาและข้อกำหนดที่ตั้งไว้ รวมทั้งวิเคราะห์และอธิบายคุณค่าและข้อจำกัดของโครงงานโดยแสดงจุดยืนได้อย่างเหมาะสม');
INSERT INTO `subplo` VALUES 
('33','3.3','3','PLO 3.3 : สามารถอธิบายแนวทางการสร้างหรือพัฒนาต่อยอดผลงานให้เป็นนวัตกรรมคอมพิวเตอร์และเสนอแนะแนวทางการเพิ่มคุณค่าของนวัตกรรมด้วยการประยุกต์ความรู้ด้านวิทยาการคอมพิวเตอร์กับความก้าวหน้าเทคโนโลยีได้อย่างสมเหตุสมผล');
INSERT INTO `subplo` VALUES 
('41','4.1','4','PLO 4.1 : สามารถนำเสนอผลงานแบบปากเปล่าโดยใช้ภาษาไทยได้ในระดับดี และภาษาอังกฤษได้ รวมทั้งสามารถเลือกใช้สื่อสำหรับการนำเสนอได้อย่างเหมาะสมและมีประสิทธิภาพ');
INSERT INTO `subplo` VALUES 
('42','4.2','4','PLO 4.2 : สามารถเขียนบทความสั้น รายงาน หรือเอกสารทางวิชาโดยใช้ ภาษาไทยได้ในระดับดี และภาษาอังกฤษได้');
INSERT INTO `subplo` VALUES 
('43','4.3','4','PLO 4.3: สามารถทำงานเป็นทีมและประสานงานกับผู้ร่วมงานได้รวมทั้ง แสดงออกถึงการเคารพสิทธิ คุณค่า และศักดิ์ศรีของความเป็นมนุษย์ และรับฟังความคิดเห็นของผู้อื่น ');
INSERT INTO `subplo` VALUES 
('44','4.4','4','PLO 4.4: สามารถสื่อสารกับบุคคลที่เกี่ยวของในทุกระดับไดอยางดี ');
INSERT INTO `subplo` VALUES 
('51','5.1','5','PLO 5.1 : สามารถแสวงหาความรู้ด้วยตนเอง โดยการประยุกต์ความรู้ ความเข้าใจ เกี่ยวกับเทคนิค วิธีและกระบวนการ ทางวิทยาศาสตร์ได้อย่างเหมาะสม ');
INSERT INTO `subplo` VALUES 
('52','5.2','5','PLO 5.2 : แสดงออกถึงการเป็นผู้มีความใฝ่รู้ มีความสนใจ และมีความรับผิดชอบ ในการพัฒนาการเรียนรู้อย่างต่อเนื่อง ');
INSERT INTO `subplo` VALUES 
('61','6.1','6','PLO 6.1 : แสดงพฤติกรรมทางจริยธรรมที่ดี ปฏิบัติตามระเบียบกฎเกณฑ์ขององค์กรและสังคม ตรงต่อเวลา ซื่อสัตย์สุจริต และมีความ รับผิดชอบต่อตนเอง มีจรรยาบรรณทางวิชาการและวิชาชีพ รวมทั้ง ตระหนักถึงคุณค่าของการเป็นพลเมืองที่ดีของสังคม ');
INSERT INTO `subplo` VALUES 
('62','6.2','6','PLO 6.2 : สามารถอธิบายเกี่ยวกับจรรยาบรรณทางวิชาการและวิชาชีพ รวมทั้งผลกระทบที่เกิดจาก พฤติกรรมและความประพฤติที่ไม่เหมาะสมได้ ');


SET FOREIGN_KEY_CHECKS = 1;
