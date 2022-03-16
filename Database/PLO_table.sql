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
DROP TABLE IF EXISTS `plo_table`;
CREATE TABLE `plo_table`  (
  `num` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `PLO_detail` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
    
  PRIMARY KEY (`num`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status
-- ----------------------------
INSERT INTO `plo_table` VALUES ('1','PLO 1 : บัณฑิตสามารถประยุกต์ความรู้ในเชิงลึกและแนวกว้างในศาสตร์ด้านวิทยาการคอมพิวเตอร์ โดยนำไปบูรณาการกับความก้าวหน้าทางเทคโนโลยีและความรู้พื้นฐานทางวิทยาศาสตร์ คณิตศาสตร์ และสถิติ รวมถึงสาขาต่างๆ เพื่อแก้ปัญหาหรือนำเสนอแนวทางแก้ปัญหาได้อย่างมีประสิทธิภาพและเหมาะสม');
INSERT INTO `plo_table` VALUES ('2','PLO 2 : บัณฑิตสามารถประยุกต์ความรู้ ทักษะ และเครื่องมือที่เหมาะสมสำหรับการแก้ปัญหาทางคอมพิวเตอร์ด้วยกระบวนการทางวิทยาศาสตร์อย่างเป็นระบบ');
INSERT INTO `plo_table` VALUES ('3','PLO 3: บัณฑิตมีแนวคิดพื้นฐานของการผลิตนวัตกรรมคอมพิวเตอร์รวมทั้งแสดงออกถึงความเป็นผู้มีความคิดริเริ่มสร้างสรรค์และถ่ายทอดคุณค่าของผลงานได้อย่างเหมาะสมภายใต้หลักการ แนวคิด ทฤษฎี ความก้าวหน้าทางวิชาการและเทคโนโลยี');
INSERT INTO `plo_table` VALUES ('4','PLO 4 : บัณฑิตสามารถสื่อสารกับบุคคลที่เกี่ยวข้องในทุกระดับได้อย่างดี รวมทั้งสามารถทำงานเป็นทีมและประสานงานกับผู้อื่นได้');
INSERT INTO `plo_table` VALUES ('5','PLO 5 : บัณฑิตสามารถแสวงหาความรู้ด้วยตนเอง มีความใฝ่รู้ และมีคุณลักษณะของการเป็นผู้ที่สามารถเรียนรู้ได้ด้วยตนเองตลอดชีวิต');
INSERT INTO `plo_table` VALUES ('6','PLO 6: บัณฑิตแสดงพฤติกรรมทางจริยธรรมที่ดี มีจรรยาบรรณทางวิชาการและวิชาชีพ มีวินัย ตรงต่อเวลา รวมทั้งมีความรับผิดชอบต่อตนเองและสังคมและตระหนักถึงคุณค่าของการเป็นพลเมืองที่ดีของสังคม');


SET FOREIGN_KEY_CHECKS = 1;
