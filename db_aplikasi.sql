/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 8.0.30 : Database - db_aplikasi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_aplikasi` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `db_aplikasi`;

/*Table structure for table `tb_kuis` */

DROP TABLE IF EXISTS `tb_kuis`;

CREATE TABLE `tb_kuis` (
  `id_kuis` int NOT NULL AUTO_INCREMENT,
  `no` int DEFAULT NULL,
  `soal_kuis` varchar(600) DEFAULT NULL,
  `jawab_a` varchar(200) DEFAULT NULL,
  `jawab_b` varchar(200) DEFAULT NULL,
  `jawab_c` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `jawaban` enum('a','b','c') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_kuis`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_kuis` */

insert  into `tb_kuis`(`id_kuis`,`no`,`soal_kuis`,`jawab_a`,`jawab_b`,`jawab_c`,`jawaban`) values 
(101,1,'Apa Bahasa Inggris Buah Apel','pineapple','apple','banana','b'),
(102,2,'B-A-N-A-N-A \r\nDi bawah ini yang merupakan teks diatas adalah','BANANA','WATERMELON','APPLE','a'),
(104,4,'Bahasa Inggrisnya Serigala adalah','bunga','Home','wolf','c'),
(105,4,'Rumah dalam Bahasa Inggris adalah','Flower','Home','Tree','b');

/*Table structure for table `tb_lagu` */

DROP TABLE IF EXISTS `tb_lagu`;

CREATE TABLE `tb_lagu` (
  `id_lagu` int NOT NULL AUTO_INCREMENT,
  `judul_lagu` varchar(50) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `link_lagu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_lagu`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_lagu` */

insert  into `tb_lagu`(`id_lagu`,`judul_lagu`,`tanggal`,`link_lagu`) values 
(21,'Head shoulger knees and toes','2022-11-13 15:29:41','https://www.youtube.com/embed/1io44ucVgtI'),
(22,'Lagu Alphabet Bahasa Inggris','2022-11-13 15:31:47','https://www.youtube.com/embed/LGjC_yiaTjc'),
(24,'Mengenal Buah-Buahan Dalam Bahasa Inggris','2022-11-13 15:34:16','https://www.youtube.com/embed/0jHDwRzDEk8'),
(25,'Colors','2022-11-29 00:00:00','https://www.youtube.com/embed/sKV1-tEjDLo'),
(26,'Animals','2022-11-29 22:36:00','https://www.youtube.com/embed/gMMi57z1wm0');

/*Table structure for table `tb_nilai` */

DROP TABLE IF EXISTS `tb_nilai`;

CREATE TABLE `tb_nilai` (
  `id_nilai` int NOT NULL AUTO_INCREMENT,
  `id_siswa` int DEFAULT NULL,
  `benar` int DEFAULT NULL,
  `salah` int DEFAULT NULL,
  `kosong` int DEFAULT NULL,
  `hasil` int DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_nilai` */

insert  into `tb_nilai`(`id_nilai`,`id_siswa`,`benar`,`salah`,`kosong`,`hasil`) values 
(1,11,3,1,0,75),
(2,11,1,3,0,25),
(3,11,4,0,0,100);

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `level_user` enum('admin','siswa') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `umur` varchar(255) NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_hp` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`nama_user`,`email_user`,`password_user`,`level_user`,`nama_lengkap`,`umur`,`alamat`,`no_hp`) values 
(11,'selli siswa','selly67@gmail.com','25d55ad283aa400af464c76d713c07ad','siswa','selli','5 tahun','jl.guramr','082143567899'),
(14,'admin','santi01@mhs.eng.upr.ac.id','b717415eb5e699e4989ef3e2c4e9cbf7','admin','Santi','19 tahun','jl.tjilik riwut km.18','082198616604');

/*Table structure for table `tb_video` */

DROP TABLE IF EXISTS `tb_video`;

CREATE TABLE `tb_video` (
  `id_video` int NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `judul_video` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `link_video` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_video`),
  KEY `id_video` (`id_video`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_video` */

insert  into `tb_video`(`id_video`,`tanggal`,`judul_video`,`link_video`) values 
(1,'2022-11-06','Video Game Bahasa Inggris','https://www.youtube.com/embed/fguLqA7u2ZI'),
(2,'2022-11-13','ANGKA','https://www.youtube.com/embed/A2qAMy2exTI'),
(3,'2022-11-13','Mengenal Hewan','https://www.youtube.com/embed/c9fbuARCE9Y'),
(5,'2022-11-13','ABJAD','https://www.youtube.com/embed/-292I9naeH8'),
(6,'2022-11-20','Memperkenalkan Diri','https://www.youtube.com/embed/8zhrZlFS5Yw');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
