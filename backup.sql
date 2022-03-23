-- MariaDB dump 10.19  Distrib 10.5.11-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: sgen_db
-- ------------------------------------------------------
-- Server version	10.5.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ativo`
--

DROP TABLE IF EXISTS `ativo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ativo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_legado` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordenadas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ativo` tinyint(4) NOT NULL,
  `observacao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funcao_id` int(10) unsigned NOT NULL,
  `equipamento_id` int(10) unsigned NOT NULL,
  `site_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip_UNIQUE` (`ip`),
  KEY `fk_ativo_funcao1_idx` (`funcao_id`),
  KEY `fk_ativo_equipamento1_idx` (`equipamento_id`),
  KEY `fk_ativo_site1_idx` (`site_id`),
  CONSTRAINT `fk_ativo_equipamento1_idx` FOREIGN KEY (`equipamento_id`) REFERENCES `equipamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ativo_funcao1_idx` FOREIGN KEY (`funcao_id`) REFERENCES `funcao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ativo_site1_idx` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ativo`
--

LOCK TABLES `ativo` WRITE;
/*!40000 ALTER TABLE `ativo` DISABLE KEYS */;
INSERT INTO `ativo` VALUES (1,'Alto Paraíso',NULL,'192.168.33.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-APIS',1,NULL,1,6,1,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(2,'Alto Paraíso2','192.168.6.15','192.168.23.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-APIS',1,NULL,1,7,2,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(3,'Ariquemes','192.168.6.14','192.168.22.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-AQS',1,NULL,1,7,2,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(4,'Borda Ji-Paraná',NULL,'192.168.5.255','Lat: -10.8754 Lon: -61.9549','MAD4IT-JIP',1,NULL,2,1,23,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(5,'Borda Pimenta Bueno',NULL,'192.168.1.255','Lat: -10.8754 Lon: -61.9549','MAD4IT-PBW',1,NULL,2,1,19,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(6,'Borda Porto Velho',NULL,'192.168.29.255','Lat: -10.8754 Lon: -61.9549','MAD4IT-PVO',1,NULL,2,2,3,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(7,'Brasil Digital - Dom Pedro - Porto Velho','192.168.6.18','192.168.29.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-PVO',1,NULL,1,7,3,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(8,'Brasilândia / NetMais','192.168.6.35','192.168.13.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-NBA',1,NULL,1,7,15,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(9,'Cacaulândia','192.168.6.13','192.168.21.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-CAUL',1,NULL,1,7,4,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(10,'CACOAL / CPD / NETWAY','192.168.6.4','192.168.3.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-CWL',1,NULL,1,7,16,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(11,'Costa Marques',NULL,'192.168.34.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-CMR',1,NULL,1,6,6,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(12,'Cuiabá - Site Vivo',NULL,'192.168.51.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-CBA',1,NULL,1,7,39,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(13,'Equinix SP1',NULL,'192.168.192.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-SPO',1,NULL,1,2,41,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(14,'Espigão / Centranet','192.168.6.30','192.168.2.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-EOE',1,NULL,1,7,5,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(15,'Governador Jorge Teixeira',NULL,'192.168.37.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-GJT',1,NULL,1,6,9,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(16,'Guajara-Mirim',NULL,'192.168.36.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-GUM',1,NULL,1,6,24,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(17,'Humaita - Site Vivo',NULL,'192.168.32.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-HUT',1,NULL,1,6,40,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(18,'Itapuã do Oeste','192.168.6.16','192.168.24.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-ITDO',1,NULL,1,7,10,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(19,'JARÚ / CPD / GIGANET','192.168.6.8','192.168.7.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-JAW',1,NULL,1,7,8,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(20,'JI-PARANÁ / CPD / ONDA AGIL','192.168.6.6','192.168.5.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-JIP',1,NULL,1,7,23,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(21,'MACHADINHO / CPD / WEBDA','192.168.6.84','192.168.11.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-MACH',1,NULL,1,7,36,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(22,'MÉDICE / CPD / UZZY','192.168.6.5','192.168.4.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-PYM',1,NULL,1,7,30,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(23,'Millenium - Alvorada',NULL,'192.168.27.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-ADW',1,NULL,1,7,11,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(24,'Millenium - Mirante',NULL,'192.168.26.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-MTRR',1,NULL,1,6,12,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(25,'Millenium - Urupá',NULL,'192.168.25.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-URUW',1,NULL,1,6,13,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(26,'Monte Negro',NULL,'192.168.38.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-MNK',1,NULL,1,6,14,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(27,'Netway - Distrito de Guaporé','10.255.255.3','192.168.18.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-PBW',1,NULL,1,6,17,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(28,'Netway - Posto São Roque','10.255.255.2','192.168.17.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-PBW',1,NULL,1,6,18,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(29,'Netway - Usina Hidrelétrica Ávila','10.255.255.4','192.168.19.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-VHA',1,NULL,1,6,20,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(30,'Netway - ViaFibra','10.255.255.5','192.168.20.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-VHA',1,NULL,1,6,21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(31,'Nova União',NULL,'192.168.28.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-NVUO',1,NULL,1,6,22,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(32,'OLT Ariquemes',NULL,'10.0.22.200','Lat: -10.8754 Lon: -61.9549','MAD4IT-AQS',1,NULL,4,3,2,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(33,'OURO PRETO / CPD / GIGANET','192.168.6.7','192.168.6.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-OPO',1,NULL,1,7,7,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(34,'PIMENTA BUENO / CPD1 / NETWAY','192.168.6.3','192.168.1.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-PBW',1,NULL,1,7,19,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(35,'Porto Velho - Site Vivo',NULL,'192.168.31.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-PVO',1,NULL,1,7,25,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(36,'Posto Cinquentinha','192.168.6.17','192.168.30.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-CDEY',1,NULL,1,7,26,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(37,'QUINTO BEC / CPD / WEBDA','192.168.6.83','192.168.10.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-MACH',1,NULL,1,6,27,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(38,'ROLIM DE MOURA / CPD / SISTEM','192.168.6.34','192.168.12.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-RMM',1,NULL,1,7,28,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(39,'Service Router JIP',NULL,'10.0.5.254','Lat: -10.8754 Lon: -61.9549','MAD4IT-JIP',1,NULL,3,8,23,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(40,'Service Router PBW',NULL,'10.0.1.254','Lat: -10.8754 Lon: -61.9549','MAD4IT-PBW',1,NULL,3,8,19,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(41,'Teleturbo / Netway',NULL,'192.168.50.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-CBA-TLT',1,NULL,1,7,38,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(42,'TEOBROMA / CPD / WEBDA','192.168.6.81','192.168.8.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-TORM',1,NULL,1,6,29,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(43,'VALE DO ANARI / CPD / WEBDA','192.168.6.82','192.168.9.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-VEAI',1,NULL,1,6,31,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(44,'Vale do Paraiso',NULL,'192.168.35.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-VALP',1,NULL,1,6,32,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(45,'Videosat - São Francisco',NULL,'192.168.16.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-SFYO',1,NULL,1,6,33,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(46,'Videosat - São Miguel','192.168.6.36','192.168.14.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-SMGE',1,NULL,1,6,34,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(47,'Videosat - Sede',NULL,'192.168.15.1','Lat: -10.8754 Lon: -61.9549','MAD4IT-SRGS',1,NULL,1,6,35,'2021-05-14 18:08:14','2022-03-23 15:09:12');
/*!40000 ALTER TABLE `ativo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cidade`
--

DROP TABLE IF EXISTS `cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cidade` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sigla` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `sigla_UNIQUE` (`sigla`),
  KEY `fk_cidade_estado1_idx` (`estado_id`),
  CONSTRAINT `fk_cidade_estado1_idx` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidade`
--

LOCK TABLES `cidade` WRITE;
/*!40000 ALTER TABLE `cidade` DISABLE KEYS */;
INSERT INTO `cidade` VALUES (1,'Alta Floresta D\'Oeste','AFT',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(2,'Alto Alegre dos Parecis','AAPC',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(3,'Alto Paraíso','APIS',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(4,'Alvorada D\'Oeste','ADW',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(5,'Ariquemes','AQS',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(6,'Buritis','BTIS',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(7,'Cabixi','CBXI',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(8,'Cacaulândia','CAUL',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(9,'Cacoal','CWL',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(10,'Campo Novo de Rondônia','CMNV',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(11,'Candeias do Jamari','CDEY',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(12,'Castanheiras','CSTH',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(13,'Cerejeiras','CJW',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(14,'Chupinguaia','CHUG',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(15,'Colorado do Oeste','KLO',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(16,'Corumbiara','CRBR',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(17,'Costa Marques','CMR',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(18,'Espigão D\'Oeste','EOE',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(19,'Governador Jorge Teixeira','GJT',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(20,'Guajará-Mirim','GUM',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(21,'Itapuã do Oeste','ITDO',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(22,'Jaru','JAW',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(23,'Ji-Paraná','JIP',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(24,'Machadinho D\'Oeste','MACH',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(25,'Ministro Andreazza','MNAZ',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(26,'Mirante da Serra','MTRR',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(27,'Monte Negro','MNK',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(28,'Nova Brasilândia D\'Oeste','NBA',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(29,'Nova Mamoré','NVME',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(30,'Nova União','NVUO',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(31,'Novo Horizonte do Oeste','NHDO',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(32,'Ouro Preto do Oeste','OPO',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(33,'Parecis','PREC',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(34,'Pimenta Bueno','PBW',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(35,'Pimenteiras do Oeste','PTRS',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(36,'Porto Velho','PVO',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(37,'Presidente Médici','PYM',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(38,'Primavera de Rondônia','PIVR',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(39,'Rio Crespo','RCR',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(40,'Rolim de Moura','RMM',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(41,'Santa Luzia D\'Oeste','SKZ',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(42,'São Felipe D\'Oeste','SOFP',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(43,'São Francisco do Guaporé','SFYO',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(44,'São Miguel do Guaporé','SMGE',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(45,'Seringueiras','SRGS',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(46,'Teixeirópolis','TXPP',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(47,'Theobroma','TORM',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(48,'Urupá','URUW',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(49,'Vale do Anari','VEAI',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(50,'Vale do Paraíso','VALP',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(51,'Vilhena','VHA',21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(52,'Cuiabá','CBA',10,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(53,'Humaita','HUT',4,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(54,'São Paulo','SPO',24,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(55,'Cujubim','CUJU',21,'2021-05-14 18:08:14','2022-03-23 15:09:12');
/*!40000 ALTER TABLE `cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cidade_has_ultima_milha`
--

DROP TABLE IF EXISTS `cidade_has_ultima_milha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cidade_has_ultima_milha` (
  `cidade_id` int(10) unsigned NOT NULL,
  `ultima_milha_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `cidade_has_ultima_milha_cidade_id_foreign` (`cidade_id`),
  KEY `cidade_has_ultima_milha_ultima_milha_id_foreign` (`ultima_milha_id`),
  CONSTRAINT `cidade_has_ultima_milha_cidade_id_foreign` FOREIGN KEY (`cidade_id`) REFERENCES `cidade` (`id`) ON DELETE CASCADE,
  CONSTRAINT `cidade_has_ultima_milha_ultima_milha_id_foreign` FOREIGN KEY (`ultima_milha_id`) REFERENCES `ultima_milha` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidade_has_ultima_milha`
--

LOCK TABLES `cidade_has_ultima_milha` WRITE;
/*!40000 ALTER TABLE `cidade_has_ultima_milha` DISABLE KEYS */;
INSERT INTO `cidade_has_ultima_milha` VALUES (1,14,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(2,17,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(4,10,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(5,18,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(6,18,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(7,2,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(8,18,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(9,2,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(10,7,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(11,3,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(13,2,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(14,2,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(15,2,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(16,2,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(17,19,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(19,5,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(20,3,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(21,3,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(22,8,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(23,1,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(25,2,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(26,10,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(28,11,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(29,3,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(30,10,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(31,14,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(32,8,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(33,17,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(34,2,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(35,2,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(36,3,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(37,15,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(38,17,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(40,14,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(41,14,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(42,17,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(46,10,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(48,10,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(50,8,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(51,2,'2021-05-14 18:08:14','2022-03-23 15:09:12');
/*!40000 ALTER TABLE `cidade_has_ultima_milha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome_UNIQUE` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (10,'MADE4IT','2021-05-14 18:08:14','2022-03-23 15:09:12'),(11,'SISTEM TELECOM','2021-05-14 18:08:14','2022-03-23 15:09:12'),(12,'NETMAIS','2021-05-14 18:08:14','2022-03-23 15:09:12'),(13,'WM TELECOM','2021-05-14 18:08:14','2022-03-23 15:09:12'),(14,'CLICKNET','2021-05-14 18:08:14','2022-03-23 15:09:12'),(15,'NETWAY','2021-05-14 18:08:14','2022-03-23 15:09:12'),(16,'ONDA AGIL','2021-05-14 18:08:14','2022-03-23 15:09:12'),(17,'MILLENIUM','2021-05-14 18:08:14','2022-03-23 15:09:12'),(18,'UZZY','2021-05-14 18:08:14','2022-03-23 15:09:12'),(19,'GIGANET','2021-05-14 18:08:14','2022-03-23 15:09:12'),(20,'WEBDA','2021-05-14 18:08:14','2022-03-23 15:09:12'),(21,'CENTRANET','2021-05-14 18:08:14','2022-03-23 15:09:12'),(22,'VIDEOSAT','2021-05-14 18:08:14','2022-03-23 15:09:12'),(23,'BRDIGITAL','2021-05-14 18:08:14','2022-03-23 15:09:12'),(24,'WORLDNET','2021-05-14 18:08:14','2022-03-23 15:09:12');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enlace`
--

DROP TABLE IF EXISTS `enlace`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enlace` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mlink` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faixa` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_mestre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_escravo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacoes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ativo_mestre` int(10) unsigned NOT NULL,
  `ativo_escravo` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `faixa_UNIQUE` (`faixa`),
  UNIQUE KEY `mlink_UNIQUE` (`mlink`),
  UNIQUE KEY `route_mestre_UNIQUE` (`route_mestre`),
  UNIQUE KEY `route_escravo_UNIQUE` (`route_escravo`),
  KEY `fk_enlace_mestre_idx` (`ativo_mestre`),
  KEY `fk_enlace_escravo_idx` (`ativo_escravo`),
  CONSTRAINT `fk_enlace_escravo_idx` FOREIGN KEY (`ativo_escravo`) REFERENCES `ativo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_enlace_mestre_idx` FOREIGN KEY (`ativo_mestre`) REFERENCES `ativo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enlace`
--

LOCK TABLES `enlace` WRITE;
/*!40000 ALTER TABLE `enlace` DISABLE KEYS */;
INSERT INTO `enlace` VALUES (2,'002','10.10.0.8/29','10.10.0.9','10.0.0.12','VLAN 103 / VLAN 100',34,10,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(3,'003','10.10.0.16/29','10.10.0.17','10.10.0.18','VLAN 103 / VLAN 100',10,22,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(4,'004','10.10.0.24/29','10.10.0.25','10.10.0.26','VLAN 103 / VLAN 100',22,20,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(5,'005','10.10.0.32/29','10.10.0.33','10.10.0.34','VLAN 103 / VLAN 100',20,33,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(6,'006','10.10.0.40/29','10.10.0.41','10.10.0.42','VLAN 103 / VLAN 100',33,19,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(7,'007','10.10.0.48/29','10.10.0.49','10.10.0.50','VLAN 103 / VLAN 100',19,42,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(8,'008','10.10.0.56/29','10.10.0.57','10.10.0.58','VLAN 103 / VLAN 100',42,43,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(9,'009','10.10.0.64/29','10.10.0.65','10.10.0.66','VLAN 103 / VLAN 100',43,47,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(10,'010','10.10.0.72/29','10.10.0.73','10.10.0.74','VLAN 100 / VLAN 100',37,21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(11,'011','10.10.0.80/29','10.10.0.81','10.10.0.82','VLAN 110 / VLAN 110',34,38,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(12,'012','10.10.0.88/29','10.10.0.89','10.10.0.90','VLAN 102 / VLAN 100',34,14,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(13,'013','10.10.0.96/29','10.10.0.97','10.10.0.98','VLAN 115 / VLAN 115',38,8,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(14,'014','10.10.0.104/29','10.10.0.105','10.10.0.106','VLAN 101 / VLAN 100',8,46,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(15,'015','10.10.0.112/29','10.10.0.113','10.10.0.114','VLAN 102 / VLAN 102',46,47,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(16,'016','10.10.0.120/29','10.10.0.121','10.10.0.122','VLAN 101 / VLAN 101',47,45,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(21,'021','10.10.0.160/29','10.10.0.161','10.10.0.162','VLAN 102 / VLAN 100',19,9,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(22,'022','10.10.0.168/29','10.10.0.169','10.10.0.170','VLAN 101 / VLAN 100',9,3,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(23,'023','10.10.0.176/29','10.10.0.177','10.10.0.178','VLAN 101 / VLAN 100',3,2,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(24,'024','10.10.0.184/29','10.10.0.185','10.10.0.186','VLAN 101 / VLAN 100',2,18,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(25,'025','10.10.0.192/29','10.10.0.193','10.10.0.194','VLAN 101 / VLAN 100',18,36,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(26,'026','10.10.0.200/29','10.10.0.201','10.10.0.202','VLAN 101 / VLAN 100',36,7,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(27,'027','10.10.0.208/29','10.10.0.209','10.10.0.210','VLAN 102 / VLAN 100',22,23,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(28,'028','10.10.0.216/29','10.10.0.217','10.10.0.218','VLAN 101 / VLAN 101',7,30,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(29,'029','10.10.0.224/29','10.10.0.225','10.10.0.226','VLAN 101 / VLAN 101 (Switch Terra Boa 10.10.0.230)',23,46,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(30,'030','10.10.0.232/29','10.10.0.233','10.10.0.234','VLAN 101 / VLAN 60',30,41,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(31,'031','110.10.0.240/29','10.10.0.241','10.10.0.242','VLAN 101 / VLAN 101',41,12,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(32,'032','10.10.0.248/29','10.10.0.249','10.10.0.250','VLAN 101 / VLAN 102',35,12,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(33,'033','10.10.1.0/29','10.10.1.1','10.10.1.2','VLAN 100 / VLAN 100',12,13,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(34,'034','10.10.1.8/29','10.10.1.9','10.10.1.10','VLAN 102 / VLAN 100',23,25,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(35,'035','10.10.1.16/29','10.10.1.17','10.10.1.18','VLAN 101 / VLAN 100',25,24,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(36,'036','10.10.1.24/29','10.10.1.25','10.10.1.26','VLAN 102 / VLAN 100',7,35,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(37,'037','10.10.1.32/29','10.10.1.33','10.10.1.34','VLAN 110 / VLAN 110',35,17,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(38,'038','10.10.1.40/29','10.10.1.41','10.10.1.42','VLAN 105 / VLAN 105',2,1,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(39,'039','10.10.1.48/29','10.10.1.49','10.10.1.50','VLAN 104 / VLAN 104',3,1,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(40,'040','10.10.1.56/29','10.10.1.57','10.10.1.58','VLAN 102 / VLAN 100',33,44,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(41,'041','10.10.1.64/29','10.10.1.65','10.10.1.66','VLAN 103 / VLAN 100',20,16,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(42,'042','10.10.1.72/29','10.10.1.73','110.10.1.74','VLAN 103 / VLAN 100',19,15,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(43,'043','10.10.1.80/29','10.10.1.81','10.10.1.82','Inativo',45,11,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(44,'044','10.10.1.88/29','10.10.1.89','10.10.1.90','Múltiplas VLANs, Múltiplas Faixas',34,30,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(45,'045','10.10.1.96/29','10.10.1.97','10.10.1.98','VLAN 102 / VLAN 100',3,26,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(46,'046','10.10.1.104/29','10.10.1.105','10.10.1.106','VLAN 105 / VLAN 105',2,7,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(47,'047','10.10.1.112/29','10.10.1.113','10.10.1.114','VLAN 105 / VLAN 105',3,19,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(48,'048','10.10.1.120/29','10.10.1.121','10.10.1.122','VLAN 103 / VLAN 104 (Via DWDM C34)',7,20,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(49,'049','10.10.1.128/29','10.10.1.129','10.10.1.130','VLAN 104 / VLAN 103 (Via DWDM C33)',7,34,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(50,'050','10.10.1.136/29','10.10.1.137','10.10.1.138','VLAN 106 / VLAN 106',7,16,'2021-05-14 18:08:14','2022-03-23 15:09:12');
/*!40000 ALTER TABLE `enlace` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipamento`
--

DROP TABLE IF EXISTS `equipamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipamento` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `marca` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modelo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patrimonio` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `patrimonio_UNIQUE` (`patrimonio`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipamento`
--

LOCK TABLES `equipamento` WRITE;
/*!40000 ALTER TABLE `equipamento` DISABLE KEYS */;
INSERT INTO `equipamento` VALUES (1,'Mikrotik','RB2011',NULL,NULL,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(2,'Mikrotik','RB4011',NULL,NULL,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(3,'Fiberhome','Fiberhome',NULL,NULL,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(4,'Huawei','NE20',NULL,NULL,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(5,'Huawei','NE40',NULL,NULL,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(6,'Huawei','s6720',NULL,NULL,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(7,'Huawei','s6730',NULL,NULL,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(8,'Mikrotik','CCR 1009',NULL,NULL,'2021-05-14 18:08:14','2022-03-23 15:09:12');
/*!40000 ALTER TABLE `equipamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sigla` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome_UNIQUE` (`nome`),
  UNIQUE KEY `sigla_UNIQUE` (`sigla`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (1,'Acre','AC','2021-05-14 18:08:14','2022-03-23 15:09:12'),(2,'Alagoas','AL','2021-05-14 18:08:14','2022-03-23 15:09:12'),(3,'Amapá','AP','2021-05-14 18:08:14','2022-03-23 15:09:12'),(4,'Amazonas','AM','2021-05-14 18:08:14','2022-03-23 15:09:12'),(5,'Bahia','BA','2021-05-14 18:08:14','2022-03-23 15:09:12'),(6,'Ceará','CE','2021-05-14 18:08:14','2022-03-23 15:09:12'),(7,'Espírito Santo','ES','2021-05-14 18:08:14','2022-03-23 15:09:12'),(8,'Goiás','GO','2021-05-14 18:08:14','2022-03-23 15:09:12'),(9,'Maranhão','MA','2021-05-14 18:08:14','2022-03-23 15:09:12'),(10,'Mato Grosso','MT','2021-05-14 18:08:14','2022-03-23 15:09:12'),(11,'Mato Grosso do Sul','MS','2021-05-14 18:08:14','2022-03-23 15:09:12'),(12,'Minas Gerais','MG','2021-05-14 18:08:14','2022-03-23 15:09:12'),(13,'Pará','PA','2021-05-14 18:08:14','2022-03-23 15:09:12'),(14,'Paraíba','PB','2021-05-14 18:08:14','2022-03-23 15:09:12'),(15,'Paraná','PR','2021-05-14 18:08:14','2022-03-23 15:09:12'),(16,'Pernambuco','PE','2021-05-14 18:08:14','2022-03-23 15:09:12'),(17,'Piauí','PI','2021-05-14 18:08:14','2022-03-23 15:09:12'),(18,'Rio de Janeiro','RJ','2021-05-14 18:08:14','2022-03-23 15:09:12'),(19,'Rio Grande do Norte','RN','2021-05-14 18:08:14','2022-03-23 15:09:12'),(20,'Rio Grande do Sul','RS','2021-05-14 18:08:14','2022-03-23 15:09:12'),(21,'Rondônia','RO','2021-05-14 18:08:14','2022-03-23 15:09:12'),(22,'Roraima','RR','2021-05-14 18:08:14','2022-03-23 15:09:12'),(23,'Santa Catarina','SC','2021-05-14 18:08:14','2022-03-23 15:09:12'),(24,'São Paulo','SP','2021-05-14 18:08:14','2022-03-23 15:09:12'),(25,'Sergipe','SE','2021-05-14 18:08:14','2022-03-23 15:09:12'),(26,'Tocantins','TO','2021-05-14 18:08:14','2022-03-23 15:09:12'),(27,'Distrito Federal','DF','2021-05-14 18:08:14','2022-03-23 15:09:12');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcao`
--

DROP TABLE IF EXISTS `funcao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcao` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terminacao` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcao`
--

LOCK TABLES `funcao` WRITE;
/*!40000 ALTER TABLE `funcao` DISABLE KEYS */;
INSERT INTO `funcao` VALUES (1,'MRouter','R:A','2021-05-14 18:08:14','2022-03-23 15:09:12'),(2,'Borda','R:X','2021-05-14 18:08:14','2022-03-23 15:09:12'),(3,'Service Router','R:S','2021-05-14 18:08:14','2022-03-23 15:09:12'),(4,'Acesso','CO:A','2021-05-14 18:08:14','2022-03-23 15:09:12');
/*!40000 ALTER TABLE `funcao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lmc`
--

DROP TABLE IF EXISTS `lmc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lmc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identificador` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spid` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordenadas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ce_identify` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faixa_gerencia` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lmce` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vlan_gerencia` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interface` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade_id` int(10) unsigned NOT NULL,
  `ativo_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `identificador_UNIQUE` (`identificador`),
  UNIQUE KEY `nome_UNIQUE` (`nome`),
  KEY `fk_lmc_cidade1_idx` (`cidade_id`),
  KEY `fk_lmc_ativo1_idx` (`ativo_id`),
  CONSTRAINT `fk_lmc_ativo1_idx` FOREIGN KEY (`ativo_id`) REFERENCES `ativo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_lmc_cidade1_idx` FOREIGN KEY (`cidade_id`) REFERENCES `cidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lmc`
--

LOCK TABLES `lmc` WRITE;
/*!40000 ALTER TABLE `lmc` DISABLE KEYS */;
INSERT INTO `lmc` VALUES (1,'1500','10','Lat: -10.8754 Lon: -61.9549','LMC.10.PVO.1500','IFRO - Porto Velho','172.26.1.240/30','LMCE.10.1500','300','subinterface-qinq',1,1,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(2,'1501','10','Lat: -10.8754 Lon: -61.9549','LMC.10.GUM.1501','IFRO - Guajará Mirim','172.26.1.244/30','LMCE.10.1501','300','subinterface-dot1q',2,1,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(3,'1502','10','Lat: -10.8754 Lon: -61.9549','LMC.10.AQS.1502','TV Allamanda - Ariquemes','172.26.1.248/30','LMCE.10.1502','300','interface-vlanif',1,1,'2021-05-14 18:08:14','2022-03-23 15:09:12');
/*!40000 ALTER TABLE `lmc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lmx`
--

DROP TABLE IF EXISTS `lmx`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lmx` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lmc_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `fk_lmx_lmc1_idx` (`lmc_id`),
  CONSTRAINT `fk_lmx_lmc1_idx` FOREIGN KEY (`lmc_id`) REFERENCES `lmc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lmx`
--

LOCK TABLES `lmx` WRITE;
/*!40000 ALTER TABLE `lmx` DISABLE KEYS */;
INSERT INTO `lmx` VALUES (1,'LMX.10.1500',1,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(2,'LMX.10.1501',2,'2021-05-14 18:08:14','2022-03-23 15:09:12');
/*!40000 ALTER TABLE `lmx` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2021_05_03_000001_create_sgen_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site`
--

DROP TABLE IF EXISTS `site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sigla` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordenadas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faixa_administrativa` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_id` int(10) unsigned NOT NULL,
  `cidade_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome_UNIQUE` (`nome`),
  UNIQUE KEY `sigla_UNIQUE` (`sigla`),
  KEY `fk_estado_id1_idx` (`estado_id`),
  KEY `fk_cidade_id1_idx` (`cidade_id`),
  CONSTRAINT `fk_cidade_id1_idx` FOREIGN KEY (`cidade_id`) REFERENCES `cidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_estado_id1_idx` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site`
--

LOCK TABLES `site` WRITE;
/*!40000 ALTER TABLE `site` DISABLE KEYS */;
INSERT INTO `site` VALUES (1,'Alto Paraíso','NBS-APIS-FZN','Lat: -10.8754 Lon: -61.9549','10.0.23.0/24',21,3,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(2,'Ariquemes','NBS-AQS-CNT','Lat: -10.8754 Lon: -61.9549','10.0.22.0/24',21,5,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(3,'Brasil Digital - Dom Pedro','NBS-PVO-DPD','Lat: -10.8754 Lon: -61.9549','10.0.29.0/24',21,36,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(4,'Cacaulândia','NBS-CAUL-TRV','Lat: -10.8754 Lon: -61.9549','10.0.21.0/24',21,8,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(5,'Centranet - Sede','NBS-EOE-CNT','Lat: -10.8754 Lon: -61.9549','10.0.2.0/24',21,18,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(6,'Costa Marques','NBS-CMR-CNT','Lat: -10.8754 Lon: -61.9549','10.0.34.0/24',21,17,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(7,'GigaNet - Bairro Jardim Novo Estado','NBS-OPO-BJN','Lat: -10.8754 Lon: -61.9549','10.0.6.0/24',21,32,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(8,'GigaNet - Bairro Liberdade','NBS-JAW-BLB','Lat: -10.8754 Lon: -61.9549','10.0.7.0/24',21,22,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(9,'Governador Jorge Teixeira','NBS-GJT-CNT','Lat: -10.8754 Lon: -61.9549','10.0.37.0/24',21,19,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(10,'Itapuã do Oeste','NBS-ITDO-CNT','Lat: -10.8754 Lon: -61.9549','10.0.24.0/24',21,21,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(11,'Millenium - Alvorada','NBS-ADW-CNT','Lat: -10.8754 Lon: -61.9549','10.0.27.0/24',21,4,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(12,'Millenium - Mirante','NBS-MTRR-CNT','Lat: -10.8754 Lon: -61.9549','10.0.26.0/24',21,26,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(13,'Millenium - Urupá','NBS-URUW-CNT','Lat: -10.8754 Lon: -61.9549','10.0.25.0/24',21,48,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(14,'Monte Negro','NBS-MNK-CNT','Lat: -10.8754 Lon: -61.9549','10.0.38.0/24',21,27,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(15,'NetMais - Sede','NBS-NBA-CNT','Lat: -10.8754 Lon: -61.9549','10.0.13.0/24',21,28,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(16,'NetWay - DC03 - Cacoal','NBS-CWL-NCC','Lat: -10.8754 Lon: -61.9549','10.0.3.0/24',21,9,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(17,'Netway - Distrito de Guaporé','NBS-PBW-DGP','Lat: -10.8754 Lon: -61.9549','10.0.18.0/24',21,34,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(18,'Netway - Posto São Roque','NBS-PBW-PSR','Lat: -10.8754 Lon: -61.9549','10.0.17.0/24',21,34,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(19,'NetWay - Sede - Centro','NBS-PBW-CNT','Lat: -10.8754 Lon: -61.9549','10.0.1.0/24',21,34,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(20,'Netway - Usina Hidrelétrica Ávila','NBS-VHA-UHA','Lat: -10.8754 Lon: -61.9549','10.0.19.0/24',21,51,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(21,'Netway - ViaFibra','NBS-VHA-VFB','Lat: -10.8754 Lon: -61.9549','10.0.20.0/24',21,51,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(22,'Nova União','NBS-NVUO-CNT','Lat: -10.8754 Lon: -61.9549','10.0.28.0/24',21,30,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(23,'Onda Ágil Telecom','NBS-JIP-DAB','Lat: -10.8754 Lon: -61.9549','10.0.5.0/24',21,23,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(24,'Portal Telecom','NBS-GUM-CNT','Lat: -10.8754 Lon: -61.9549','10.0.36.0/24',21,20,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(25,'Porto Velho - SIte Vivo','NBS-PVO-VIV','Lat: -10.8754 Lon: -61.9549','10.0.31.0/24',21,36,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(26,'Posto Cinquentinha','NBS-CDEY-PCN','Lat: -10.8754 Lon: -61.9549','10.0.30.0/24',21,11,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(27,'Quinto BEC (WebDA)','NBS-MACH-QBC','Lat: -10.8754 Lon: -61.9549','10.0.10.0/24',21,24,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(28,'Sistem - Sede','NBS-RMM-CNT','Lat: -10.8754 Lon: -61.9549','10.0.12.0/24',21,40,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(29,'Theobroma (WebDA)','NBS-TORM-CNT','Lat: -10.8754 Lon: -61.9549','10.0.8.0/24',21,47,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(30,'Uzzy Telecom','NBS-PYM-CNT','Lat: -10.8754 Lon: -61.9549','10.0.4.0/24',21,37,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(31,'Vale do Anari (WebDA)','NBS-VEAI-CNT','Lat: -10.8754 Lon: -61.9549','10.0.9.0/24',21,49,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(32,'Vale do Paraiso','NBS-VALP-CNT','Lat: -10.8754 Lon: -61.9549','10.0.35.0/24',21,50,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(33,'Videosat - São Francisco','NBS-SFYO-CNT','Lat: -10.8754 Lon: -61.9549','10.0.16.0/24',21,43,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(34,'Videosat - São Miguel','NBS-SMGE-CNT','Lat: -10.8754 Lon: -61.9549','10.0.14.0/24',21,44,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(35,'Videosat - Sede','NBS-SRGS-CNT','Lat: -10.8754 Lon: -61.9549','10.0.15.0/24',21,45,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(36,'WebDA - Sede','NBS-MACH-CNT','Lat: -10.8754 Lon: -61.9549','10.0.11.0/24',21,24,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(37,'Worldnet','NBS-APIS-CNT','Lat: -10.8754 Lon: -61.9549','10.0.33.0/24',21,3,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(38,'Cuiabá - Teleturbo','NBS-CBA-TLT','Lat: -10.8754 Lon: -61.9549','10.0.50.0/24',10,52,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(39,'Cuiabá - Vivo','NBS-CBA-VIV','Lat: -10.8754 Lon: -61.9549','10.0.51.0/24',10,52,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(40,'Humaita - Vivo','NBS-HUT-VIV','Lat: -10.8754 Lon: -61.9549','10.0.32.0/24',4,53,'2021-05-14 18:08:14','2022-03-23 15:09:12'),(41,'São Paulo - Equinix','NBS-SPO-EQN','Lat: -10.8754 Lon: -61.9549','10.0.100.0/24',24,54,'2021-05-14 18:08:14','2022-03-23 15:09:12');
/*!40000 ALTER TABLE `site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subinterface`
--

DROP TABLE IF EXISTS `subinterface`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subinterface` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lmx_id` int(10) unsigned NOT NULL,
  `svc_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `fk_lmx_subinterface1_idx` (`lmx_id`),
  KEY `fk_svc_subinterface1_idx` (`svc_id`),
  CONSTRAINT `fk_lmx_subinterface1_idx` FOREIGN KEY (`lmx_id`) REFERENCES `lmx` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_svc_subinterface1_idx` FOREIGN KEY (`svc_id`) REFERENCES `svc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subinterface`
--

LOCK TABLES `subinterface` WRITE;
/*!40000 ALTER TABLE `subinterface` DISABLE KEYS */;
/*!40000 ALTER TABLE `subinterface` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `svc`
--

DROP TABLE IF EXISTS `svc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `svc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identificador` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `svct` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banda` int(11) DEFAULT NULL,
  `gsvcid` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informacoes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_vlan` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `out_vlan` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peering_mrouter` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peering_cliente1` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peering_cliente2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distinguisher` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cliente_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `identificador_UNIQUE` (`identificador`),
  KEY `fk_svc_cliente1_idx` (`cliente_id`),
  CONSTRAINT `fk_svc_cliente1_idx` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `svc`
--

LOCK TABLES `svc` WRITE;
/*!40000 ALTER TABLE `svc` DISABLE KEYS */;
INSERT INTO `svc` VALUES (1,'1','20',10,'101202','L2L <= FIERO','10','800T','172.26.0.1/30','192.168.0.1/24',NULL,NULL,23,'2021-09-01 20:28:32','2021-09-01 20:28:32');
/*!40000 ALTER TABLE `svc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `svc_has_lmc`
--

DROP TABLE IF EXISTS `svc_has_lmc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `svc_has_lmc` (
  `svc_id` int(10) unsigned NOT NULL,
  `lmc_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `svc_has_lmc_svc_id_foreign` (`svc_id`),
  KEY `svc_has_lmc_lmc_id_foreign` (`lmc_id`),
  CONSTRAINT `svc_has_lmc_lmc_id_foreign` FOREIGN KEY (`lmc_id`) REFERENCES `lmc` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `svc_has_lmc_svc_id_foreign` FOREIGN KEY (`svc_id`) REFERENCES `svc` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `svc_has_lmc`
--

LOCK TABLES `svc_has_lmc` WRITE;
/*!40000 ALTER TABLE `svc_has_lmc` DISABLE KEYS */;
/*!40000 ALTER TABLE `svc_has_lmc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ultima_milha`
--

DROP TABLE IF EXISTS `ultima_milha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ultima_milha` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fantasia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `razao_social` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome_UNIQUE` (`fantasia`),
  UNIQUE KEY `razao_social_UNIQUE` (`razao_social`),
  UNIQUE KEY `cnpj_UNIQUE` (`cnpj`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ultima_milha`
--

LOCK TABLES `ultima_milha` WRITE;
/*!40000 ALTER TABLE `ultima_milha` DISABLE KEYS */;
INSERT INTO `ultima_milha` VALUES (1,'ONDA ÁGIL','R. JOSE DA SILVA E CIA LTDA','84.751.411/0004-51','(69)3422-1298','78390-000','Avenida Marechal Rondon, 1770','ondaagil@hotmail.com','2021-05-13 23:16:28','2022-03-23 15:09:12'),(2,'NETWAY','NETWAY INFORMÁTICA LTDA','85.371.631/0001-70','(69)3441-2001','76962-186','R. Niterói, 1067 - Novo Cacoal, Cacoal - RO','netway@gmail.com','2021-05-13 23:16:28','2022-03-23 15:09:12'),(3,'BRASIL DIGITAL TELECOM','BRASIL DIGITAL SERVICOS DE INFORMATICA E COMERCIO LTDA','14.629.705/0001-87','(69)3441-2001','76804-027','RUA DOM PEDRO II, 2669 - São Cristovão, Porto Velho - RO','brdigital@gmail.com','2021-05-13 23:16:28','2022-03-23 15:09:12'),(4,'CLICKNET TELECOMUNICACOES','CLICKNET TELECOMUNICACOES PROVEDOR DE INTERNET LTDA','16.911.389/0001-67','(69)3441-6060','76962-247','Av. Belo Horizonte, 3781 - Novo Cacoal, Cacoal - RO','click@gmail.com','2021-05-13 23:16:28','2022-03-23 15:09:12'),(5,'ATUAL TELECOM','ATUAL TELECOM PROVEDOR DE INTERNET LTDA','39.481.006/0001-63','(69)3526-1067','76897-890','Av. Francisco Vieira de Souza, Jaru - RO','ismaelsantos@portalevolucao.com','2021-05-13 23:16:28','2022-03-23 15:09:12'),(6,'BUENONET','GR BUENO NET FIBRA SERVICOS DE COMUNICACAO MULTIMIDIA EIRELI','36.169.839/0001-03','(69)8448-6668','76935-000','AVENIDA GUAPORE, 3642, CENTRO, SAO FRANCISCO DO GUAPORE - RO','buenonet.sfg@hotmail.com','2021-05-13 23:16:28','2022-03-23 15:09:12'),(7,'FUTUR@ NET','F.A.A PROVEDOR LTDA','26.133.539/0001-02','(69)3238-3009','76880-000','Avenida Ayrton Senna, 1189, Buritis - RO','','2021-05-13 23:16:28','2022-03-23 15:09:12'),(8,'GIGANET PROVEDOR DE INTERNET','SILVEIRA & GONCALVES COMERCIO DE MATERIAIS DE INFORMATICA LTDA','07.672.623/0001-50','(69)3461-5786','76920-000','Rua Ana Nery, 0528 - Sala 01 - JARDIM TROPICAL - OURO PRETO DO OESTE - RO','','2021-05-13 23:16:28','2022-03-23 15:09:12'),(9,'LINK NET TELECON','LINK NET TELECOMUNICACOES LTDA','10.246.104/0001-34','(69)3236-8140','78.927-000','AVENIDA 03 DE DEZEMBRO , SN - PORTO VELHO - RO','financeirolinknet@hotmail.com','2021-05-13 23:16:28','2022-03-23 15:09:12'),(10,'MILLENIUM TELECOM','F JEAN SILVA EIRELI','05.203.855/0001-33','(69)3412-3966','76930-000','Rua Jose de Alencar, 4906 - CENTRO - ALVORADA D\'OESTE - RO','carimbos10@hotmail.com','2021-05-13 23:16:28','2022-03-23 15:09:12'),(11,'NET MAIS TELECOMUNICACOES','NET MAIS SERVICOS DE TELECOMUNICACOES LTDA','07.939.517/0001-90','(69) 3418-3862','76958-000','Rua Principe da Beira, 2011-B - CENTRO NOVA BRASILANDIA D\'OESTE - RO','formulacontabilidade@hotmail.com','2021-05-13 23:16:28','2022-03-23 15:09:12'),(12,'NET WAY INFORMATICA','NET WAY INFORMATICA LTDA','10.563.381/0001-70','(69) 3451-6665','76.970-000','AVENIDA CASTELO BRANCO , 62 - PIMENTA BUENO - RO','comercial@netway.inf.br','2021-05-13 23:16:28','2022-03-23 15:09:12'),(13,'RIO NET PROVEDOR','J BOSCO DA SILVA & CIA LTDA','05.588.747/0001-26','(69) 3238-2179','76887-000','Avenida Principal, Sn, Distrito Rio Branco, Campo Novo De Rondonia, RO','netbox@netspeed.com.br','2021-05-13 23:16:28','2022-03-23 15:09:12'),(14,'SISTEM TELECOM','SISTEM TELECOMUNICACOES LTDA','14.289.396/0001-43','(69) 3449-3100','76940-000','AVENIDA GUAPORE , 4762 - ROLIM DE MOURA - RO','','2021-05-13 23:16:28','2022-03-23 15:09:12'),(15,'UZZY TELECOM','UZZY TELECOM COMERCIO DE EQUIPAMENTOS DE INFORMATICA E SERVICOS DE COMUNICACOES EIRELI','11.767.980/0001-79','(69) 3471-3230','76916-000','Rua Jose Vidal, 2648 - CENTRO - PRESIDENTE MEDICI - RO','josenilton@uzzy.com.br','2021-05-13 23:16:28','2022-03-23 15:09:12'),(16,'SATNET INFORMATICA','SILVA & SILVA VIDEOSATNET LTDA','10.749.723/0001-41','(69) 3642-1034','76932-000','Rua Sao Miguel, 2370 - CRISTO REI - SAO MIGUEL DO GUAPORE - RO','','2021-05-13 23:16:28','2022-03-23 15:09:12'),(17,'WM INFORMATICA','W M INFORMATICA EIRELI','29.647.424/0001-24','(69) 3643-1446','76952-000','Avenida Tancredo de Almeida Neves, 3941 - Centro - Alto Alegre dos Parecis','lucas.roque@wminformatica.net.br','2021-05-13 23:16:28','2022-03-23 15:09:12'),(18,'WORLDNET FIBRA OPTICA/MADE4IT','WORLDNET SERVICOS DE TELECOMUNICACOES EIRELI','18.456.569/0001-21','(69) 99989-6484','76.880-000','RUA HELENITA FERREIRA DE SOUZA , 1601 - BURITIS - RO','financeiro@nbstelecom.com.br','2021-05-13 23:16:28','2022-03-23 15:09:12'),(19,'PORTAL NET','PORTAL NET COMUNICACAO EIRELI','27.209.885/0001-90','(69) 8481-3388','76.974-000','Avenida Piaui, 2840, LIBERDADE - ESPIGÃO D\'OESTE - RO','escritorioceplasa@hotmail.com','2021-05-13 23:16:28','2022-03-23 15:09:12'),(20,'KM NET TELECOM','JUCILEY DE GREGORI','13.059.655/0001-87','(69) 3251-1688','76846-000','Rua Jose Pereira da Costa, 82 - Vista Alegre do Abuna - RO','km_ro_2010@hotmail.com','2021-05-13 23:16:28','2022-03-23 15:09:12'),(21,'CENTRANET','H & F SOLUCOES TECNOLOGICAS LTDA. - EPP','84.716.059/0001-70','(69)34812828_','76974-000','RUA SURUI','fabianorondonia@gmail.com, hugo@centranet.com.br','2021-05-13 23:16:28','2022-03-23 15:09:12'),(22,'CONECTJA LTDA','CONECT JA - CONECTANDO SONHOS','29.200.024/0001-76','(69)32522078','76847-000','RUA NILO PECANHA','','2021-05-13 23:16:28','2022-03-23 15:09:12'),(23,'EVOLUTION INFORMATICA','ADILSON BENTO FERREIRA','20.558.414/0001-48','(66)81234869','78335-000','AV TARUMA','edilsocolniza@gmail.com','2021-05-13 23:16:28','2022-03-23 15:09:12'),(24,'HAASE TELECON','SALES & PEREIRA LTDA','10.217.619/0001-06','(69)992751291','76909-476','Rua Luiz Matias Carneiro','oms@brturno.com.br','2021-05-13 23:16:28','2022-03-23 15:09:12'),(25,'MEGALYNK TELECOM','MEGALYNK SERVIÇOS DE TELECOMUNICAÇÕES LTDA','10.785.904/0001-23','','76890-000','AV BRASIL','','2021-05-13 23:16:28','2022-03-23 15:09:12'),(26,'DUMONT HOBBY- MegaNet','D R ROCHA E SERVIÇOS DE COMUNICAÇÃO','18.128.296/0001-96','(69)992960774','76909-514','Rua Monteiro Lobato','demersonrocha@hotmail.com','2021-05-13 23:16:28','2022-03-23 15:09:12');
/*!40000 ALTER TABLE `ultima_milha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Admin','MADE4IT','26.824.572/0001-89','2017-01-09','Masculino','Jiparana','Rondonia','76900-825','Rua Joao dos Santos Filho, 123','(69)98501-5841','seguro@gmail.com',NULL,'$2y$10$2KVW8E9IU6Fl3yvsodhmrO7pLMMoQKZiaQdMAuaIX7eMgvdIgF.vG',NULL,'2021-05-06 00:46:52','2022-03-23 15:09:12',1),(2,'Karan','Luciano','26.824.572/0001-69','1992-01-09','Masculino','Jiparana','Rondonia','76900-825','Rua Adeildo, 123','(69)99237-0744','karan@gmail.com',NULL,'$2y$10$OphCpFY.a27LP6ErRdib4e0r7EvszkEl7yymyRGlQuBABqNx5yrgi',NULL,'2021-05-06 00:46:52','2022-03-23 15:09:12',0);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-23 15:09:41
