/*
Navicat MySQL Data Transfer

Source Server         : avantis mySQL connection
Source Server Version : 50523
Source Host           : localhost:3306
Source Database       : laratest

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2015-04-13 20:48:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2015_04_13_114637_create_users', '1');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_login_unique` (`login`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_password_unique` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'tarasdj', 'tarasdj@rambler.ru', '$2y$10$rkLJXFloj3b18C3k7ozuY.T0PpS0EYZyQ0Ew3LKg2l97gSs9.I5RO', '0', null, '2015-04-13 13:58:40', '2015-04-13 13:58:40');
INSERT INTO `users` VALUES ('3', 'avantis', 'tyuk@pol.cm', '$2y$10$hvJJLDhZrbpqCB3yQB7XgOWDNCrByia/uHhaw6EBALadRtoavVA5e', '0', null, '2015-04-13 14:11:14', '2015-04-13 14:11:14');
INSERT INTO `users` VALUES ('4', 'trend', 'trned@retg.pol', '$2y$10$Le663s4ylJ.DdZx66Mjjde1Tsh2X8eJnFEo1pASJ/i0uEMxHjx8pO', '0', null, '2015-04-13 14:24:42', '2015-04-13 14:24:42');
INSERT INTO `users` VALUES ('5', 'admin', 'qwerty@trewq.pol', '$2y$10$Szlc7yRdZR94ZL9H2zoXwecGM./iWKqQ5SL5cnym1aXA4t01G9WyC', '0', 'aQJKLEoRH54ZqC8ojvM6iIn3RxiwFDFUVXvZYXXahHbN7tMW9IWNCOBsZjoP', '2015-04-13 16:00:12', '2015-04-13 17:11:15');
INSERT INTO `users` VALUES ('6', 'germaniukt', 'red@red.red', '$2y$10$oyksn9g0KgvUHy8E9T/OZ.Jyrq5ezV0FbjZ5tNAcCTn4IcRMfCABy', '0', 'ojAZmisDmrKrUaJs6lLnOiUoWr9ymA0M1cWEnxaMi9bOXwP712ssid9fZlRR', '2015-04-13 17:30:06', '2015-04-13 17:45:01');
