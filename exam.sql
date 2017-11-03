/*
Navicat MySQL Data Transfer

Source Server         : 此电脑
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : exam

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-11-03 15:31:22
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
  `BeginTime` datetime DEFAULT NULL COMMENT '开始时间',
  `EndTime` datetime DEFAULT NULL COMMENT '结束时间',
  `IsAuto` varchar(1) NOT NULL DEFAULT '0' COMMENT '是否自动开始，0 否，1 是',
  `IsBegin` varchar(1) NOT NULL DEFAULT '0' COMMENT '是否开始考试，0 否，1 是',
  `content` varchar(255) NOT NULL DEFAULT 'NULL' COMMENT '考试文件路径',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of exam
-- ----------------------------

-- ----------------------------
-- Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `sId` int(11) NOT NULL COMMENT '学号',
  `sName` varchar(255) NOT NULL COMMENT '姓名',
  `sPassword` varchar(255) NOT NULL DEFAULT '123456' COMMENT '密码',
  `ip` varchar(255) DEFAULT NULL,
  `isSubmit` varchar(1) NOT NULL DEFAULT '0' COMMENT '是否提交，0是未提交，1是提交',
  `examId` int(255) NOT NULL COMMENT '考试id',
  `tId` int(11) NOT NULL,
  PRIMARY KEY (`sId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------

-- ----------------------------
-- Table structure for `stuentfile`
-- ----------------------------
DROP TABLE IF EXISTS `stuentfile`;
CREATE TABLE `stuentfile` (
  `id` int(11) NOT NULL,
  `sId` int(11) NOT NULL COMMENT '学生id',
  `examId` int(11) NOT NULL COMMENT '考试id',
  `content` varchar(255) NOT NULL COMMENT '学生上传文件路径',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stuentfile
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL COMMENT '自增主键',
  `name` varchar(255) NOT NULL COMMENT '姓名',
  `password` varchar(255) NOT NULL COMMENT '密码',
  `type` varchar(1) NOT NULL COMMENT '类型，0是管理员，1教师',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
