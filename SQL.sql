/*
 Navicat MySQL Data Transfer

 Source Server         : tp5_study
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : www_shop_com

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 11/12/2020 01:01:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `create_time` int(11) NULL DEFAULT NULL,
  `update_time` int(11) NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '后台管理员表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1606150774, 1606150774, 1);
INSERT INTO `admin` VALUES (2, 'hui', 'c4ca4238a0b923820dcc509a6f75849b', 1606213452, 1606213452, 1);

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sort` int(11) NULL DEFAULT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `create_time` int(11) NULL DEFAULT NULL,
  `update_time` int(11) NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '分类表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (14, '文具', 1, '/public/uploads/20201125/dc7118f87a6b660977ce84c5926c8160.jpg', 1606246844, 1606286243, 1);
INSERT INTO `category` VALUES (9, '办公', 2, '/public/uploads/20201125/0bf637c18290e717770aaf262543af43.jpg', 1606224075, 1606286269, 1);
INSERT INTO `category` VALUES (8, '家电', 3, '/public/uploads/20201125/5ae90ba732e48c7e1fad795cbb578064.jpg', 1606224032, 1606286276, 1);
INSERT INTO `category` VALUES (7, '服饰', 4, '/public/uploads/20201125/117be376373b1e5d9c54754583c18723.jpg', 1606223640, 1606286286, 1);
INSERT INTO `category` VALUES (10, '日用', 5, '/public/uploads/20201125/0d8fda099a3acabdfef76896a09890c1.jpg', 1606226597, 1606286294, 1);
INSERT INTO `category` VALUES (11, '蔬果', 6, '/public/uploads/20201125/f176ac28b6a2bd12188bdebe87faaf71.jpg', 1606226837, 1606286305, 1);
INSERT INTO `category` VALUES (12, '运动', 7, '/public/uploads/20201125/fe97f292ac168acb30a028f237962d9e.jpg', 1606229072, 1606286315, 1);
INSERT INTO `category` VALUES (13, '书籍', 8, '/public/uploads/20201125/1b2d1bb1cb415376b34a8a9fd2dea14f.jpg', 1606229162, 1606286325, 1);

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pid` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` decimal(10, 2) NULL DEFAULT NULL,
  `sort` int(11) NULL DEFAULT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '商品内容',
  `intru` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '商品简介',
  `sku` int(11) NULL DEFAULT NULL COMMENT '库存',
  `views` int(11) NULL DEFAULT NULL COMMENT '浏览次数',
  `create_time` int(11) NULL DEFAULT NULL,
  `update_time` int(11) NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '商品表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES (14, 9, '麻辣腰子', 10.00, 1, '/public/uploads/20201125\\4d3eead20e89e58b0958f2cd5ce29f54.jpg', '<p>麻辣腰子麻辣腰子辣辣辣</p>', '麻辣腰子', 25, 100, 1606240721, 1606240721, 1);
INSERT INTO `goods` VALUES (15, 8, '浓香型', 10.00, 1, '/public/uploads/20201125\\7a05524ee6b8cbb9bd5b5ed13c8a5524.jpg', '<p>浓香型真香</p>', '浓香型', 500, 100, 1606244636, 1606244636, 1);
INSERT INTO `goods` VALUES (16, 11, 'abc', 10.00, 2, '/public/uploads/20201125\\37b37d8c392772e834cc2d68c955e04b.jpg', '<p>浓香型</p>', '浓香型', 500, 100, 1606244670, 1606244670, 1);
INSERT INTO `goods` VALUES (17, 13, '火锅', 200.00, 5, '/public/uploads/20201125\\6e924454e32a04e33b46a0f8818bb64a.jpg', '<p>服务好啊服务好啊</p>', '服务好啊', 25, 100, 1606244761, 1606244761, 1);
INSERT INTO `goods` VALUES (18, 10, '甜辣', 10.00, 5, '/public/uploads/20201125\\f8004a87bdce9ec9b9ec750e20c20dcf.jpg', '<p>真好吃真好吃</p>', '真好吃', 500, 100, 1606244795, 1606244795, 1);
INSERT INTO `goods` VALUES (19, 7, '重庆酸辣粉', 10.00, 1, '/public/uploads/20201125\\5f73ab8da06e05907df6b85f4e64f404.jpg', '<p>重庆酸辣粉重庆酸辣粉</p>', '重庆酸辣粉', 25, 100, 1606244826, 1606244826, 1);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `create_time` int(11) NULL DEFAULT NULL,
  `uptate_time` int(11) NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '用户表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (3, '14770789311', 'e10adc3949ba59abbe56e057f20f883e', 1606312754, NULL, NULL);
INSERT INTO `user` VALUES (2, '14589632641', 'e10adc3949ba59abbe56e057f20f883e', 1606296669, NULL, NULL);
INSERT INTO `user` VALUES (5, '14770789312', 'f379eaf3c831b04de153469d1bec345e', 1606313830, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
