/*
Navicat MySQL Data Transfer

Source Server         : 王腾飞
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : exam

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-11-24 12:23:34
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `exam`
-- ----------------------------
DROP TABLE IF EXISTS `exam`;
CREATE TABLE `exam` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增主键',
  `class` varchar(255) NOT NULL COMMENT '班级名称',
  `tId` int(11) NOT NULL COMMENT '教师id',
  `examnation` varchar(255) NOT NULL COMMENT '考试名称',
  `BeginTime` datetime NOT NULL COMMENT '开始时间',
  `EndTime` datetime NOT NULL COMMENT '结束时间',
  `IsAuto` int(1) NOT NULL DEFAULT '0' COMMENT '是否自动开始，0 否，1 是',
  `IsBegin` int(1) NOT NULL DEFAULT '0' COMMENT '是否开始考试，0 否，1 是',
  `subject` varchar(255) NOT NULL DEFAULT 'NULL' COMMENT '考试文件路径',
  `creater` char(255) DEFAULT NULL,
  `path` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of exam
-- ----------------------------
INSERT INTO exam VALUES ('22', '15-5', '0', '15-4demo.xlsx', '2017-11-21 21:28:00', '2017-12-07 10:50:00', '1', '0', '数据结构', '网拉屎', './upfile/teacher/1511270624.xlsx');

-- ----------------------------
-- Table structure for `message`
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` char(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO message VALUES ('4', '21234234', '2017-11-20 00:00:00');

-- ----------------------------
-- Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `sId` int(11) NOT NULL COMMENT '学号',
  `sName` varchar(255) NOT NULL COMMENT '姓名',
  `sPassword` varchar(255) NOT NULL DEFAULT '123456' COMMENT '密码',
  `ip` varchar(255) DEFAULT NULL,
  `isSubmit` int(1) NOT NULL DEFAULT '0' COMMENT '是否提交，0是未提交，1是提交',
  `exam` char(11) NOT NULL COMMENT '考试id',
  `tId` int(11) NOT NULL,
  PRIMARY KEY (`sId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------

-- ----------------------------
-- Table structure for `studentfile`
-- ----------------------------
DROP TABLE IF EXISTS `studentfile`;
CREATE TABLE `studentfile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sId` int(11) NOT NULL COMMENT '学生id',
  `examId` int(11) NOT NULL COMMENT '考试id',
  `path` varchar(255) NOT NULL COMMENT '学生上传文件路径',
  `time` char(255) NOT NULL,
  `name` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of studentfile
-- ----------------------------

-- ----------------------------
-- Table structure for `system_set`
-- ----------------------------
DROP TABLE IF EXISTS `system_set`;
CREATE TABLE `system_set` (
  `id` int(11) NOT NULL,
  `time` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `period` int(11) DEFAULT NULL,
  `min_byte` int(11) DEFAULT NULL,
  `max_byte` int(11) DEFAULT NULL,
  `power` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_set
-- ----------------------------
INSERT INTO system_set VALUES ('1', '2', '2', '1', '0', '2', 'off');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增主键',
  `name` varchar(255) NOT NULL COMMENT '姓名',
  `password` varchar(255) NOT NULL COMMENT '密码',
  `type` varchar(1) NOT NULL COMMENT '类型，0是管理员，1教师',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO user VALUES ('12', 'toby', '123', '1');
INSERT INTO user VALUES ('25', 'teacher', '123', '0');
