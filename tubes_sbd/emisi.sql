/*
 Navicat Premium Data Transfer

 Source Server         : hanif_connection
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : emisi

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 06/06/2023 23:44:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message`  (
  `message_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `subject` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`message_id`) USING BTREE,
  INDEX `user_message`(`user_id` ASC) USING BTREE,
  CONSTRAINT `user_message` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of message
-- ----------------------------

-- ----------------------------
-- Table structure for transportationmodes
-- ----------------------------
DROP TABLE IF EXISTS `transportationmodes`;
CREATE TABLE `transportationmodes`  (
  `mode_id` int NOT NULL AUTO_INCREMENT,
  `mode_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `standard_btu` int NOT NULL,
  PRIMARY KEY (`mode_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transportationmodes
-- ----------------------------
INSERT INTO `transportationmodes` VALUES (1, 'Mobil (Diesel)', 'Mesin Diesel', 2604);
INSERT INTO `transportationmodes` VALUES (2, 'Mobil (Bensin)', 'Mesin Bensin', 2412);
INSERT INTO `transportationmodes` VALUES (3, 'Motor', 'Keseluruhan Motor', 1054);
INSERT INTO `transportationmodes` VALUES (4, 'Sepeda', 'Kayuh Manual', 0);
INSERT INTO `transportationmodes` VALUES (5, 'Bus Umum (Solar)', 'Kapasitas 20-30', 394);
INSERT INTO `transportationmodes` VALUES (6, 'Bus Umum (BBG)', 'Kapasitas 20 - 30', 1024);
INSERT INTO `transportationmodes` VALUES (7, 'Mobil Angkot', 'Kapasitas 7 - 10', 1024);

-- ----------------------------
-- Table structure for trips
-- ----------------------------
DROP TABLE IF EXISTS `trips`;
CREATE TABLE `trips`  (
  `trip_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `mode_id` int NOT NULL,
  `distance` int NOT NULL,
  `energy_btu` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`trip_id`) USING BTREE,
  INDEX `user_trip`(`user_id` ASC) USING BTREE,
  INDEX `mode_trip`(`mode_id` ASC) USING BTREE,
  CONSTRAINT `mode_trip` FOREIGN KEY (`mode_id`) REFERENCES `transportationmodes` (`mode_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_trip` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 111 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of trips
-- ----------------------------
INSERT INTO `trips` VALUES (110, 25, 7, 12, 12288, '2023-06-06');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (25, 'HANIF', 'mhanif23@gmail.com', '202cb962ac59075b964b07152d234b70');

-- ----------------------------
-- Triggers structure for table users
-- ----------------------------
DROP TRIGGER IF EXISTS `tr_username`;
delimiter ;;
CREATE TRIGGER `tr_username` BEFORE INSERT ON `users` FOR EACH ROW Set new.username=upper(new.username)
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
