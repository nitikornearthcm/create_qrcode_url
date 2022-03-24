/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : url_db

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 25/03/2022 04:57:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for url_generate
-- ----------------------------
DROP TABLE IF EXISTS `url_generate`;
CREATE TABLE `url_generate`  (
  `url_id` int NOT NULL AUTO_INCREMENT COMMENT 'รหัสรายการสราง url',
  `full_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'full url',
  `short_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'short url',
  `create_time` datetime(0) NULL DEFAULT NULL COMMENT 'เวลาในการสร้างรายการ short url',
  PRIMARY KEY (`url_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of url_generate
-- ----------------------------
INSERT INTO `url_generate` VALUES (1, 'https://ocsc9.thaijobjob.com/search/paystatus/', 'http://localhost/create_qrcode_url/Short?url=d52a0', '2022-03-24 15:38:22');
INSERT INTO `url_generate` VALUES (2, 'https://www.w3schools.com/tags/att_a_target.asp', 'http://localhost/create_qrcode_url/Short?url=68df5', '2022-03-24 15:39:21');
INSERT INTO `url_generate` VALUES (3, 'https://ocsc9.thaijobjob.com/search/paystatus/', 'http://localhost/create_qrcode_url/Short?url=14acb', '2022-03-24 15:41:11');

SET FOREIGN_KEY_CHECKS = 1;
