
DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `admin_ID` int unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `pasword` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`admin_ID`)
) ;


LOCK TABLES `admin` WRITE;

INSERT INTO `admin` VALUES (3,'ifadaty','yusuph','ifa@gmail.com','1234');

UNLOCK TABLES;



DROP TABLE IF EXISTS `client_items`;

CREATE TABLE `client_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `phoneNumber` int DEFAULT NULL,
  `files` varchar(50) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ;



LOCK TABLES `client_items` WRITE;

INSERT INTO `client_items` VALUES (2,'michael','shayo',719995432,'20240617_173502.jpg','etaznhszheztnzx');

UNLOCK TABLES;


DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `phoneNumber` decimal(30,0) NOT NULL,
  `addres` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `pasword` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
);
LOCK TABLES `user` WRITE;

INSERT INTO `user` VALUES (25,'michael','shayo','shayomichael174@gmail.com',719995432,'mirambo','1234'),(28,'juma','kisanga','aronikisanga@gmail.com',719995432,'mirambo 300','1234'),(29,'jesca','Tarimo','jeccy1@gmail.com',677889965,'mkwawa','1234');

UNLOCK TABLES;

