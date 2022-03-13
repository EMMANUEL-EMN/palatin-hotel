DROP DATABASE IF EXISTS `palatin`;
CREATE DATABASE `palatin`;
USE `palatin`;
SET NAMES utf8;
SET character_set_client= utf8mb4;

CREATE TABLE `conference`(
`bid` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`first name` varchar(50) NOT NULL,
`last name` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`password` varchar(20) NOT NULL,
`id number` varchar(8) NOT NULL,
`mobile number` int(10) NOT NULL,
`checkin` date NOT NULL,
`checkout` date NOT NULL,
`number of people` int(10) NOT NULL,
`status` varchar(30) NOT NULL,
`image` varchar(255) NOT NULL

)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;

CREATE TABLE `room`(
`rid` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`first name` varchar(50) NOT NULL,
`last name` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`password` varchar(20) NOT NULL,
`id number` varchar(8) NOT NULL,
`mobile number` int(10) NOT NULL,
`checkin` date NOT NULL,
`checkout` date NOT NULL,
`number of people` int(10) NOT NULL,
`status` varchar(30) NOT NULL,
`image` varchar(255) NOT NULL
)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;

CREATE TABLE `admin`(
`aid` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`first name` varchar(50) NOT NULL,
`last name` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`password` varchar(20) NOT NULL,
`id number` varchar(8) NOT NULL,
`mobile number` int(10) NOT NULL,
`position` varchar(30) NOT NULL,
`image` varchar(255) NOT NULL
)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin` (`aid`,`first name`,`last name`,`email`,`password`,`id number`,`mobile number`,`position`,`image`)
VALUES (NULL,'Emmanuel','Nyamawi','nyamawiemmanuel07@gmail.com','EMN/1998',56732898,0758501290,'CEO','ceo.jpg');

CREATE TABLE `staff`(
`sid` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`first name` varchar(50) NOT NULL,
`last name` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`password` varchar(20) NOT NULL,
`id number` varchar(8) NOT NULL,
`mobile number` int(10) NOT NULL,
`position` varchar(30) NOT NULL,
`status` varchar(30) NOT NULL,
`age` int(10) NOT NULL,
`dob` date NOT NULL,
`image` varchar(255) NOT NULL
)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;

CREATE TABLE `news`(
`nid` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`message` LONGTEXT NOT NULL,
`date` date NOT NULL,
`topic` varchar(255) NOT NULL,
`image` varchar(255) NOT NULL
)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;

CREATE TABLE `comments`(
`cid` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`comment` LONGTEXT NOT NULL,
`date` date NOT NULL,
`email` varchar(255) NOT NULL

)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;

CREATE TABLE `leave`(
`lid` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`reason` LONGTEXT NOT NULL,
`email` varchar(40) NOT NULL,
`date` date NOT NULL,
`status` varchar(30) NOT NULL
)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;