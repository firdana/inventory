-- MySQL dump 10.14  Distrib 5.5.65-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: inventory
-- ------------------------------------------------------
-- Server version	5.5.65-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contents` text NOT NULL,
  `admin` varchar(20) NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'aktif',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` VALUES (22,'test note','admin','aktif');
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sbrg_keluar`
--

DROP TABLE IF EXISTS `sbrg_keluar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sbrg_keluar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idx` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `penerima` varchar(35) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sbrg_keluar`
--

LOCK TABLES `sbrg_keluar` WRITE;
/*!40000 ALTER TABLE `sbrg_keluar` DISABLE KEYS */;
INSERT INTO `sbrg_keluar` VALUES (15,244,'2020-08-29',1000,'Kasmina','Laku'),(16,248,'2020-10-16',5,'',''),(17,250,'2020-10-25',75,'Toko 1','');
/*!40000 ALTER TABLE `sbrg_keluar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sbrg_masuk`
--

DROP TABLE IF EXISTS `sbrg_masuk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sbrg_masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idx` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sbrg_masuk`
--

LOCK TABLES `sbrg_masuk` WRITE;
/*!40000 ALTER TABLE `sbrg_masuk` DISABLE KEYS */;
INSERT INTO `sbrg_masuk` VALUES (9,244,'2020-08-07',600,'kk'),(13,248,'2020-10-16',10,''),(14,250,'2020-10-28',20,'salah input'),(15,252,'2020-10-13',30,''),(16,246,'2020-10-28',90,'');
/*!40000 ALTER TABLE `sbrg_masuk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slogin`
--

DROP TABLE IF EXISTS `slogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slogin`
--

LOCK TABLES `slogin` WRITE;
/*!40000 ALTER TABLE `slogin` DISABLE KEYS */;
INSERT INTO `slogin` VALUES (14,'userku','d2aa8eb84ec5e7cd2d86f8fcc8e59e97','admin','stock');
/*!40000 ALTER TABLE `slogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sstock_brg`
--

DROP TABLE IF EXISTS `sstock_brg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sstock_brg` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(55) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `merk` varchar(40) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `stock` int(12) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `lokasi` varchar(55) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `id_barcode` varchar(255) NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=256 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sstock_brg`
--

LOCK TABLES `sstock_brg` WRITE;
/*!40000 ALTER TABLE `sstock_brg` DISABLE KEYS */;
INSERT INTO `sstock_brg` VALUES (247,'8981231','Sendal','ungu','Mysendal','35',13,'Buah','Toko 1','',''),(246,'1231231','Sepatu','merah','Mysepatu','50',110,'Buah','gudang','',''),(245,'1231231','Sepatu','biru','Mysepatu','42',30,'Buah','gudang','',''),(248,'1231231','Sepatu','hitam','Mysepatu','34',95,'Buah','gudang','',''),(250,'abc','Sepatu','kuning','','35',45,'Unit','gudang','',''),(251,'787878','Sepatu','hijau','test','46',2,'Buah','toko','787878hij46.png',''),(252,'9090','Sepatu','hitam','www','30',50,'Buah','gudang','9090hit30.png',''),(253,'567890','Sendal','biru','ooo','35',90,'Buah','gudang 1','567890bir35.png',''),(254,'89080','Sepatu','biru','pppp','43',20,'Buah','n','89080bir43.png',''),(255,'765','Sepatu','putih','ssss','25',11,'Buah','k','765put25.png','765put25');
/*!40000 ALTER TABLE `sstock_brg` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-10 14:03:11
