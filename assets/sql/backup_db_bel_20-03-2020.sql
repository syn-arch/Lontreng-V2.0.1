SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- Database: `db_bel`
--




CREATE TABLE `tb_audio` (
  `kd_audio` int(11) NOT NULL AUTO_INCREMENT,
  `nm_audio` varchar(30) NOT NULL,
  `audio` varchar(128) NOT NULL,
  PRIMARY KEY (`kd_audio`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


INSERT INTO tb_audio VALUES
("6","ATM Sule","5e743dc2684f7.mp3"),
("7","Last Child","5e743e3adc3b4.mp3");




CREATE TABLE `tb_jadwal` (
  `kd_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `kd_kategori` int(11) NOT NULL,
  `kd_audio` int(11) NOT NULL,
  `kd_jam` int(11) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `tipe` enum('harian','ujian') NOT NULL,
  PRIMARY KEY (`kd_jadwal`),
  KEY `kd_kategori` (`kd_kategori`,`kd_audio`,`kd_jam`),
  KEY `kd_audio` (`kd_audio`),
  KEY `kd_jam` (`kd_jam`),
  CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`kd_audio`) REFERENCES `tb_audio` (`kd_audio`),
  CONSTRAINT `tb_jadwal_ibfk_2` FOREIGN KEY (`kd_kategori`) REFERENCES `tb_kategori` (`kd_kategori`),
  CONSTRAINT `tb_jadwal_ibfk_3` FOREIGN KEY (`kd_jam`) REFERENCES `tb_jam` (`kd_jam`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;


INSERT INTO tb_jadwal VALUES
("8","42","6","5","Jumat","harian"),
("13","42","6","4","Senin","harian"),
("15","43","7","5","Jumat","ujian");




CREATE TABLE `tb_jam` (
  `kd_jam` int(11) NOT NULL AUTO_INCREMENT,
  `jam` varchar(10) NOT NULL,
  PRIMARY KEY (`kd_jam`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


INSERT INTO tb_jam VALUES
("4","07:00:00"),
("5","23:57:00");




CREATE TABLE `tb_kategori` (
  `kd_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nm_kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`kd_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;


INSERT INTO tb_kategori VALUES
("42","Pelajaran Pertama"),
("43","Pelajaran Kedua"),
("44","Pelajaran Ketiga"),
("45","Pelajaran Keempat"),
("46","Pelajaran Kelima"),
("47","Pelajaran Keenam");




CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_user` varchar(30) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO tb_user VALUES
("2","Adiatna Sukmana","dyatna.id@gmail.com","21232f297a57a5a743894a0e4a801fc3");




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;