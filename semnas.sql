/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : semnas

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-03-05 15:49:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for abstrak
-- ----------------------------
DROP TABLE IF EXISTS `abstrak`;
CREATE TABLE `abstrak` (
  `idabstrak` int(11) NOT NULL AUTO_INCREMENT,
  `idpendseminar` int(11) DEFAULT NULL,
  `namaabstrak` varchar(85) DEFAULT NULL,
  `fileabstrak` varchar(85) DEFAULT NULL,
  `tgluploadabstrak` datetime DEFAULT NULL,
  `statusabstrak` int(11) DEFAULT NULL,
  PRIMARY KEY (`idabstrak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of abstrak
-- ----------------------------

-- ----------------------------
-- Table structure for abstrakartikel
-- ----------------------------
DROP TABLE IF EXISTS `abstrakartikel`;
CREATE TABLE `abstrakartikel` (
  `idabstrakartikel` int(11) NOT NULL AUTO_INCREMENT,
  `idpemakalah` int(11) DEFAULT NULL,
  `abstrak` varchar(100) DEFAULT NULL,
  `tglabstrak` datetime DEFAULT NULL,
  `updateabstrak` datetime DEFAULT NULL,
  `statusabstrak` tinyint(1) DEFAULT NULL,
  `artikel` varchar(100) DEFAULT NULL,
  `statusartikel` tinyint(1) DEFAULT NULL,
  `tglartikel` datetime DEFAULT NULL,
  `updateartikel` datetime DEFAULT NULL,
  PRIMARY KEY (`idabstrakartikel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of abstrakartikel
-- ----------------------------

-- ----------------------------
-- Table structure for artikel
-- ----------------------------
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel` (
  `idartikel` int(11) NOT NULL AUTO_INCREMENT,
  `idpendseminar` int(11) DEFAULT NULL,
  `namaartikel` varchar(85) DEFAULT NULL,
  `fileartikel` varchar(85) DEFAULT NULL,
  `tgluploadartikel` datetime DEFAULT NULL,
  `statusartikel` int(11) DEFAULT NULL,
  PRIMARY KEY (`idartikel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of artikel
-- ----------------------------

-- ----------------------------
-- Table structure for buktipembayaran
-- ----------------------------
DROP TABLE IF EXISTS `buktipembayaran`;
CREATE TABLE `buktipembayaran` (
  `idbuktipembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `idpendseminar` int(11) DEFAULT NULL,
  `buktipembayaran` varchar(100) DEFAULT NULL,
  `statusbuktipembayaran` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idbuktipembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of buktipembayaran
-- ----------------------------

-- ----------------------------
-- Table structure for halaman
-- ----------------------------
DROP TABLE IF EXISTS `halaman`;
CREATE TABLE `halaman` (
  `idhalaman` int(11) NOT NULL AUTO_INCREMENT,
  `namahalaman` varchar(75) DEFAULT NULL,
  `isihalaman` varchar(75) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idhalaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of halaman
-- ----------------------------

-- ----------------------------
-- Table structure for pemakalah
-- ----------------------------
DROP TABLE IF EXISTS `pemakalah`;
CREATE TABLE `pemakalah` (
  `idpemakalah` int(11) NOT NULL AUTO_INCREMENT,
  `idpendseminar` int(11) DEFAULT NULL,
  `penulis1` varchar(75) DEFAULT NULL,
  `penulis2` varchar(75) DEFAULT NULL,
  `penulis3` varchar(75) DEFAULT NULL,
  `penulis4` varchar(75) DEFAULT NULL,
  `penulis5` varchar(75) DEFAULT NULL,
  `judulartikel` text,
  `area` varchar(35) DEFAULT NULL,
  `statuspemakalah` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idpemakalah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pemakalah
-- ----------------------------

-- ----------------------------
-- Table structure for pendaftaran
-- ----------------------------
DROP TABLE IF EXISTS `pendaftaran`;
CREATE TABLE `pendaftaran` (
  `idpendseminar` int(11) NOT NULL AUTO_INCREMENT,
  `idseminar` int(11) DEFAULT NULL,
  `idpengguna` int(11) DEFAULT NULL,
  `nama` varchar(75) DEFAULT NULL,
  `gelarawal` varchar(15) DEFAULT NULL,
  `gelarakhir` varchar(75) DEFAULT NULL,
  `tempatlahir` varchar(75) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `institusi` text,
  `email` varchar(45) DEFAULT NULL,
  `nohp` varchar(45) DEFAULT NULL,
  `telepon` varchar(45) DEFAULT NULL,
  `statuspend` tinyint(1) DEFAULT NULL,
  `tanggaldaftar` datetime DEFAULT NULL,
  PRIMARY KEY (`idpendseminar`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pendaftaran
-- ----------------------------
INSERT INTO `pendaftaran` VALUES ('3', '1', '2', 'Jasiman uhuy', 'Drs', 'S.E., M.Si', 'Banyumas', '1989-12-31', 'gsdfsdf', 'jasiman@yahu.um', '081222222222', '028164777777', '2', null);

-- ----------------------------
-- Table structure for pengguna
-- ----------------------------
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna` (
  `idpengguna` int(11) NOT NULL AUTO_INCREMENT,
  `namapengguna` varchar(75) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `statusaktiv` tinyint(1) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pengguna
-- ----------------------------
INSERT INTO `pengguna` VALUES ('1', 'admin', 'admin', 'admin', '1', '1');
INSERT INTO `pengguna` VALUES ('2', 'Jasiman', 'jasiman', '1234', '1', '3');

-- ----------------------------
-- Table structure for seminar
-- ----------------------------
DROP TABLE IF EXISTS `seminar`;
CREATE TABLE `seminar` (
  `idseminar` int(11) NOT NULL AUTO_INCREMENT,
  `namaseminar` varchar(85) DEFAULT NULL,
  `tanggalpelaksanaan` date DEFAULT NULL,
  `statusseminar` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idseminar`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of seminar
-- ----------------------------
INSERT INTO `seminar` VALUES ('1', 'Sustainable Competitive Advantage and Call For Paper 9', '2019-09-18', '1');
