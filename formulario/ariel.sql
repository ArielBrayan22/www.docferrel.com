/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 50531
 Source Host           : localhost
 Source Database       : ariel

 Target Server Type    : MySQL
 Target Server Version : 50531
 File Encoding         : utf-8

 Date: 08/21/2014 12:57:27 PM



 nota el nombre de la base de datos "ariel" 
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `persona`
-- ----------------------------
DROP TABLE IF EXISTS `persona`;
CREATE TABLE `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `telefono` int(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `persona`
-- ----------------------------
BEGIN;
INSERT INTO `persona` VALUES ('1', 'jose', 'jose', '8686', 'jose'), ('2', 'pedro', 'juan', '66', 'pedrito');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
