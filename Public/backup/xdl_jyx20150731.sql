/*
Navicat MySQL Data Transfer

Source Server         : 本地数据库
Source Server Version : 50538
Source Host           : 127.0.0.1:3306
Source Database       : xdl_jyx

Target Server Type    : MYSQL
Target Server Version : 50538
File Encoding         : 65001

Date: 2015-07-31 14:00:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `jyx_access`
-- ----------------------------
DROP TABLE IF EXISTS `jyx_access`;
CREATE TABLE `jyx_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jyx_access
-- ----------------------------

-- ----------------------------
-- Table structure for `jyx_node`
-- ----------------------------
DROP TABLE IF EXISTS `jyx_node`;
CREATE TABLE `jyx_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jyx_node
-- ----------------------------

-- ----------------------------
-- Table structure for `jyx_role`
-- ----------------------------
DROP TABLE IF EXISTS `jyx_role`;
CREATE TABLE `jyx_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jyx_role
-- ----------------------------

-- ----------------------------
-- Table structure for `jyx_role_user`
-- ----------------------------
DROP TABLE IF EXISTS `jyx_role_user`;
CREATE TABLE `jyx_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jyx_role_user
-- ----------------------------

-- ----------------------------
-- Table structure for `jyx_setting`
-- ----------------------------
DROP TABLE IF EXISTS `jyx_setting`;
CREATE TABLE `jyx_setting` (
  `varname` varchar(50) NOT NULL,
  `varinfo` varchar(255) NOT NULL,
  `vargroup` smallint(5) DEFAULT NULL,
  `vartype` char(10) DEFAULT NULL,
  `varvalue` text,
  `orderid` smallint(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jyx_setting
-- ----------------------------
INSERT INTO `jyx_setting` VALUES ('cfg_webname', '网站名称', '0', '1', '就要学-在线教育平台', '1');
INSERT INTO `jyx_setting` VALUES ('cfg_domain', '网站域名', '0', '0', 'www.baidu.com11', '2');
INSERT INTO `jyx_setting` VALUES ('cfg_pagelimit', '每页显示记录数', '2', '0', '30', '3');
INSERT INTO `jyx_setting` VALUES ('upload', '上传水印', '3', '2', 'aa', null);
INSERT INTO `jyx_setting` VALUES ('cfg_var_abc', '性能设置', '2', '0', 'aa', null);
INSERT INTO `jyx_setting` VALUES ('cfgweburl', '网站地址', '0', '0', '', null);
INSERT INTO `jyx_setting` VALUES ('cfg_keyword', '关键字设置', '0', '0', '', null);
INSERT INTO `jyx_setting` VALUES ('cfg_description', '网站描述', '0', '0', '', null);
INSERT INTO `jyx_setting` VALUES ('cfg_copyright', '版权信息', '0', '0', '', null);
INSERT INTO `jyx_setting` VALUES ('cfg_webswitch', '启用站点', '0', '2', '', null);
INSERT INTO `jyx_setting` VALUES ('cfg_upload_img_type', '上传图片类型', '1', '0', '', null);
INSERT INTO `jyx_setting` VALUES ('cfg_upload_media_type', '上传媒体类型', '1', '0', 'swf|flv|mpg|mp3|rm|rmvb|wmv|wma|wav', null);
INSERT INTO `jyx_setting` VALUES ('cfg_countcode', '流量统计代码', '1', '3', '', null);

-- ----------------------------
-- Table structure for `jyx_user`
-- ----------------------------
DROP TABLE IF EXISTS `jyx_user`;
CREATE TABLE `jyx_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jyx_user
-- ----------------------------
