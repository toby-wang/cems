/*
Navicat MySQL Data Transfer

Source Server         : 王腾飞
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : exam

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-11-18 16:27:28
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of exam
-- ----------------------------
INSERT INTO exam VALUES ('15', '15-6', '0', '15-4demo.xlsx', '2017-11-10 18:00:00', '2017-11-10 18:00:00', '1', '0', '数据结构', null, './upfile/student/1510974353.xlsx');
INSERT INTO exam VALUES ('16', '15-4', '0', '15-4.xlsx', '2017-11-10 18:00:00', '2017-11-10 18:00:00', '1', '0', '创新项目', null, './upfile/teacher/1510974545.xlsx');

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
  `examId` int(11) NOT NULL COMMENT '考试id',
  `tId` int(11) NOT NULL,
  PRIMARY KEY (`sId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO student VALUES ('1510120001', '赵红光', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120002', '侯勇康', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120011', '李益鸿', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120014', '许青', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120015', '蔡廷翰', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120018', '邱锦毫', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120021', '曹冠文', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120022', '刘璇', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120023', '陈庆祥', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120024', '郑森', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120025', '温兴杰', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120028', '段玲蕊', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120031', '李朝阳', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120032', '明伟', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120034', '董庚', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120036', '聂璋', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120047', '孙瑶', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120057', '黄怡', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120058', '王熏远', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510120062', '彭记贤', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121006', '闫美玲', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121009', '陈映宇', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121021', '刘凯鹏', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121022', '彭忠义', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121031', '赵国浩', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121036', '余昊泽', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121049', '焦正浩', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121051', '郭柯', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121075', '蒋晓晗', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121079', '袁亮亮', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121080', '王壮', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121081', '聂金松', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121084', '陈茜茹', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121096', '王亚杰', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121097', '郭智慧', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121100', '王腾飞', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121103', 'teacher', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121105', '王乾坤', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121112', '王铮', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121113', '李浩', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121120', '张天啸', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121124', '周玉欣', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121139', '杜新辉', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121151', '杨满', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121168', '姚亚强', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121179', '郭繁森', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121184', '和国庆', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510121296', '刘晓茜', '123456', null, '0', '1', '0');
INSERT INTO student VALUES ('1510131156', '曾志文', '123456', null, '0', '1', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of studentfile
-- ----------------------------
INSERT INTO studentfile VALUES ('13', '0', '0', './upfile/student/1510974227.xlsx', '17-11-18 11:03:47', '15-4.xlsx');
INSERT INTO studentfile VALUES ('14', '0', '0', './upfile/student/1510974725.txt', '17-11-18 11:12:05', '科三灯光.txt');

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
INSERT INTO system_set VALUES ('1', '2', '1', '1', '1', '1', 'off');

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO user VALUES ('12', 'toby', '123', '1');
INSERT INTO user VALUES ('24', '的放大', '奋斗奋斗', '1');
INSERT INTO user VALUES ('25', 'teacher', '123', '0');
INSERT INTO user VALUES ('27', '222', '2222', '1');
