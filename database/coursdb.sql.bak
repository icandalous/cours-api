-- MySQL dump 10.13  Distrib 5.7.14, for Win64 (x86_64)
--
-- Host: localhost    Database: coursdb
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorie` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categorie_nom_unique` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` VALUES (1,'coran','Sunt voluptates facere non asperiores minus corporis. Magnam ea asperiores impedit nostrum. Quis eligendi minus ex est sint.','2018-08-19 23:26:59','2018-08-19 23:26:59'),(2,'tajweed','Voluptatum corporis minus porro quidem sunt illum. Dignissimos incidunt labore ipsa in voluptatem ut. Nostrum reiciendis consequuntur numquam incidunt doloribus quas voluptatibus omnis. Quos aperiam dolorem voluptas ab minus corporis nemo.','2018-08-19 23:26:59','2018-08-19 23:26:59'),(3,'arabe','Nulla consequatur cupiditate sed qui eaque voluptate eum. Cumque a dolor ab commodi accusantium dignissimos doloremque. Ea voluptatem iusto error praesentium ipsum error non deserunt. Consequatur provident aperiam cum expedita. Officiis eos qui aut et.','2018-08-19 23:26:59','2018-08-19 23:26:59'),(4,'memorisation','Dolore itaque assumenda quibusdam quia et qui ut atque. Deleniti unde consequuntur dolor earum aliquam eos. Autem pariatur numquam voluptas qui ratione. Optio voluptas repellendus ut assumenda.','2018-08-19 23:26:59','2018-08-19 23:26:59'),(5,'fiqh','Corrupti odio aperiam asperiores et minima voluptatem. Eum dolores rerum officiis fugiat. Quo reprehenderit eius sequi quam porro aspernatur voluptate.','2018-08-19 23:26:59','2018-08-19 23:26:59'),(6,'informatique','Ea sint itaque aut nulla. Aliquam nobis harum quis quibusdam ducimus quis. Odio veniam nobis illum aut.','2018-08-19 23:26:59','2018-08-19 23:26:59'),(7,'mathematique','At nihil ut nulla ratione suscipit. Facere omnis minima nobis ut porro et. Explicabo molestias illum ea rem perferendis. Reprehenderit qui similique sed vitae cumque.','2018-08-19 23:26:59','2018-08-19 23:26:59'),(8,'langue','Quo aspernatur numquam repellendus animi. Porro quia aut possimus est. Perferendis est quia est omnis nesciunt aspernatur debitis.','2018-08-19 23:26:59','2018-08-19 23:26:59'),(9,'test','Quas totam incidunt adipisci expedita ea vel. Est incidunt fuga non eaque. Consequatur quia quos modi iusto mollitia qui. Beatae vero voluptatem at qui illum.','2018-08-19 23:26:59','2018-08-19 23:26:59'),(10,'autre','Suscipit ratione eos quos vitae. Ad beatae officiis beatae dolores aut incidunt et. Sed amet eaque unde. Id dolores eligendi itaque asperiores optio.','2018-08-19 23:26:59','2018-08-19 23:26:59');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorie_cours`
--

DROP TABLE IF EXISTS `categorie_cours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorie_cours` (
  `cours_id` int(10) unsigned NOT NULL,
  `categorie_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cours_id`,`categorie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie_cours`
--

LOCK TABLES `categorie_cours` WRITE;
/*!40000 ALTER TABLE `categorie_cours` DISABLE KEYS */;
INSERT INTO `categorie_cours` VALUES (1,1,NULL,NULL),(1,2,NULL,NULL),(2,3,NULL,NULL),(3,4,NULL,NULL),(4,5,NULL,NULL);
/*!40000 ALTER TABLE `categorie_cours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cours`
--

DROP TABLE IF EXISTS `cours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cours` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `prix` double(5,2) DEFAULT NULL,
  `organisateur_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cours_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cours`
--

LOCK TABLES `cours` WRITE;
/*!40000 ALTER TABLE `cours` DISABLE KEYS */;
INSERT INTO `cours` VALUES (1,'nostrum','suscipit','Et illo quia eos perferendis exercitationem. Adipisci porro tempora quos sed. Dolorem alias esse est consequuntur.',77.00,3,'2018-08-19 03:13:06','2018-08-19 03:13:06'),(2,'sed','ut','Vel debitis assumenda quia ullam quam explicabo quia assumenda. Dolores officia provident sit eum. Repellat doloremque et voluptatibus qui quos facilis. Ea est delectus qui natus.',166.00,2,'2018-08-19 03:13:06','2018-08-19 03:13:06'),(3,'aut','neque','Blanditiis adipisci veniam sunt dolorem debitis ut. Possimus quidem exercitationem iste nostrum laborum qui. Nihil quasi distinctio aut ut et aut qui assumenda.',24.00,1,'2018-08-19 03:13:07','2018-08-19 03:13:07'),(4,'perspiciatis','porro','Et est totam voluptatem ex animi. Placeat officia repudiandae est placeat. Molestiae corrupti voluptates eos ex. Earum laborum est quo aut nemo laudantium sed.',106.00,4,'2018-08-19 03:13:07','2018-08-19 03:13:07'),(5,'quam','minus','Nesciunt autem rerum quidem temporibus nisi quibusdam dolor ut. In id expedita non consequatur. Deleniti sed ratione odio dicta dolorem.',66.00,2,'2018-08-19 03:13:07','2018-08-19 03:13:07'),(6,'qui','fugiat','Id eius veniam doloribus rerum qui qui assumenda. Qui possimus vitae et voluptas consequuntur. Porro explicabo voluptatem nemo. At sint quasi similique repellat alias fugiat.',40.00,5,'2018-08-19 03:13:07','2018-08-19 03:13:07'),(7,'sunt','hic','Ipsam perspiciatis aut dolores minima. At neque consequatur architecto rerum repudiandae. Dolores placeat consequatur quo non magnam at quaerat.',136.00,1,'2018-08-19 03:13:07','2018-08-19 03:13:07'),(8,'ipsam','similique','Fugit est laborum in iste nam. Beatae hic consectetur rerum possimus. Et unde autem aut quae qui soluta quis. Laborum et assumenda qui sunt nisi nemo eaque.',87.00,4,'2018-08-19 03:13:07','2018-08-19 03:13:07'),(9,'odit','aut','Quae nesciunt aut explicabo facere et rerum. Voluptatem ipsam reprehenderit possimus aut aut laudantium quasi. Quo inventore provident tempora expedita porro.',155.00,1,'2018-08-19 03:13:07','2018-08-19 03:13:07'),(10,'harum','enim','Quidem odio consequatur aut esse aspernatur vel. Similique vel et rem neque harum dicta consequatur quas. Est unde minima veritatis libero.',17.00,4,'2018-08-19 03:13:07','2018-08-19 03:13:07'),(11,'ea','laudantium','Doloremque ea nulla error officiis vel. Accusantium magni culpa eius accusantium. Eveniet excepturi atque praesentium animi eos laudantium. Et consequuntur sit esse.',98.00,1,'2018-08-19 03:13:07','2018-08-19 03:13:07');
/*!40000 ALTER TABLE `cours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etudiant` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `etudiant_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiant`
--

LOCK TABLES `etudiant` WRITE;
/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
/*!40000 ALTER TABLE `etudiant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horaire`
--

DROP TABLE IF EXISTS `horaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horaire` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `id_session` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horaire`
--

LOCK TABLES `horaire` WRITE;
/*!40000 ALTER TABLE `horaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `horaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscription` (
  `session_id` int(10) unsigned NOT NULL,
  `etudiant_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`session_id`,`etudiant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscription`
--

LOCK TABLES `inscription` WRITE;
/*!40000 ALTER TABLE `inscription` DISABLE KEYS */;
/*!40000 ALTER TABLE `inscription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `intervenant`
--

DROP TABLE IF EXISTS `intervenant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `intervenant` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `intervenant_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intervenant`
--

LOCK TABLES `intervenant` WRITE;
/*!40000 ALTER TABLE `intervenant` DISABLE KEYS */;
INSERT INTO `intervenant` VALUES (1,'Cheikh Wael','cheikh@test.com','metro cote vertu','514-999-0000','2018-08-23 06:37:32','2018-08-23 06:37:32'),(2,'Karine Green','xquitzon@mueller.info','5786 Satterfield Knolls Apt. 084\nNew Andrestad, PE  S2N 8J9','(450) 325-0679 x569','2018-08-23 06:37:32','2018-08-23 06:37:32'),(3,'Terrance Shields','anienow@hotmail.com','6083 Ferry Ports Apt. 100\nTrantowland, NT  L0N1C9','992-607-8002','2018-08-23 06:37:32','2018-08-23 06:37:32'),(4,'Brenda Bartoletti','bert37@gmail.com','5785 Maia Mount\nWehnerview, NU  C8Y6K4','(631) 243-5750','2018-08-23 06:37:32','2018-08-23 06:37:32'),(5,'Martina Monahan','lebsack.camylle@gmail.com','681 Goldner Knolls\nNaderchester, SK  A0A 6P2','1 (103) 436-2208','2018-08-23 06:37:33','2018-08-23 06:37:33'),(6,'Queen Hammes','xabbott@gmail.com','855 Schowalter Shoal\nSouth Abdulmouth, NT  M3H 2T1','1-238-990-8160','2018-08-23 06:37:33','2018-08-23 06:37:33'),(7,'Yvette Olson','hgaylord@yahoo.com','879 Collin Circle Suite 603\nMargretmouth, MB  V1B0N8','1 (982) 619-5599','2018-08-23 06:37:33','2018-08-23 06:37:33'),(8,'Mrs. Emely Wisozk III','bashirian.christophe@gmail.com','2110 Lyla Creek Apt. 020\nJessyhaven, PE  P4H2E9','(868) 223-2705 x948','2018-08-23 06:37:33','2018-08-23 06:37:33'),(9,'Bernice Weber','zstanton@bartell.biz','59576 Corine Estate\nLednerbury, QC  K2N 8C0','1-737-351-4402','2018-08-23 06:37:33','2018-08-23 06:37:33'),(10,'Prof. Adelia Runte V','ida.waters@wyman.com','4637 Lane Orchard Apt. 564\nPabloland, NU  E9A5J7','+1 (343) 978-6031','2018-08-23 06:37:33','2018-08-23 06:37:33'),(11,'Delfina Zulauf','qfunk@yahoo.com','149 Ankunding Green Suite 742\nKemmerfort, MB  Y8A-2M2','+1 (789) 600-0577','2018-08-23 06:37:33','2018-08-23 06:37:33'),(12,'Hyman Koepp','jennyfer.brekke@runolfsson.com','34585 Orin Extension\nPort Alexzander, NB  A1B-1G8','+1 (674) 031-2532','2018-08-23 06:37:33','2018-08-23 06:37:33'),(13,'Lottie Moen','lydia12@howe.com','733 Cyril Motorway\nHuelschester, ON  B4T 6A3','(290) 927-7311','2018-08-23 06:37:33','2018-08-23 06:37:33'),(14,'Lacey Keeling','renner.bryana@klein.com','9778 Kelton Lane Suite 385\nMarquardtburgh, QC  A9H8J0','1-140-506-4035','2018-08-23 06:37:33','2018-08-23 06:37:33'),(15,'Mr. Taylor Torphy','goodwin.jennyfer@beier.com','7683 Collier Motorway\nEichmannmouth, NB  M4T0C5','+1 (266) 564-7028','2018-08-23 06:37:33','2018-08-23 06:37:33');
/*!40000 ALTER TABLE `intervenant` ENABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (15,'2014_10_12_000000_create_users_table',1),(16,'2014_10_12_100000_create_password_resets_table',1),(17,'2018_08_15_011655_create_cours_table',1),(18,'2018_08_15_013205_create_categorie_table',1),(19,'2018_08_15_013424_create_organisateur_table',1),(20,'2018_08_15_013536_create_intervenant_table',1),(21,'2018_08_15_013617_create_etudiant_table',1),(22,'2018_08_15_013649_create_session_table',1),(23,'2018_08_15_013725_create_horaire_table',1),(24,'2018_08_16_010915_create_inscription_table',1),(25,'2018_08_16_021402_create_catcours_table',1),(26,'2018_08_19_143759_adds_api_token_to_users_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organisateur`
--

DROP TABLE IF EXISTS `organisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organisateur` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `organisateur_nom_unique` (`nom`),
  UNIQUE KEY `organisateur_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organisateur`
--

LOCK TABLES `organisateur` WRITE;
/*!40000 ALTER TABLE `organisateur` DISABLE KEYS */;
INSERT INTO `organisateur` VALUES (1,'Kareem Mertz','uhills@hotmail.com','973 Ankunding Grove\nAbbottmouth, AB  C3X2P4','(971) 601-8921 x377','2018-08-19 22:34:50','2018-08-19 22:34:50'),(2,'Patricia Okuneva','romaguera.ray@yahoo.com','64227 Powlowski Avenue\nKeeblerburgh, BC  J4L2R5','327 666 1157','2018-08-19 22:34:50','2018-08-19 22:34:50'),(3,'Beaulah O\'Reilly','magali07@yahoo.com','351 Kreiger Ville Suite 093\nRosenbaumburgh, AB  S6M 8R7','+1 (761) 731-7841','2018-08-19 22:34:50','2018-08-19 22:34:50'),(4,'Ezekiel Walker','lavon01@mcclure.com','6248 Lauryn Summit Suite 172\nSouth Karianebury, NT  P9N-9H1','1-261-752-1100','2018-08-19 22:34:50','2018-08-19 22:34:50'),(5,'Jacky Mante','stokes.irma@jerde.net','3770 Grant Gardens\nGutmannstad, AB  L0E-8T8','(868) 534-3994','2018-08-19 22:34:50','2018-08-19 22:34:50'),(6,'Kristofer Runolfsson','beer.aurelio@gmail.com','8002 Kylie Neck\nProsaccoville, NS  N5K-4L0','735-202-2889 x625','2018-08-19 22:34:50','2018-08-19 22:34:50'),(7,'Amara Ruecker','zboncak.kaylah@hotmail.com','75627 Hettinger Common\nHerthamouth, BC  J6Y 2J8','+1 (616) 015-0917','2018-08-19 22:34:50','2018-08-19 22:34:50'),(8,'Dianna Bednar V','bartell.moises@marvin.biz','1715 Mayert Cape Suite 498\nZboncaktown, PE  Y8R 0H6','596 218 0328','2018-08-19 22:34:50','2018-08-19 22:34:50'),(9,'Mrs. Kavon Koepp I','raheem.schaden@yahoo.com','7437 West Crescent Apt. 791\nEast Tamaramouth, AB  S6X0E6','1 (967) 617-4797','2018-08-19 22:34:50','2018-08-19 22:34:50'),(10,'Zack Bruen DDS','brekke.holden@hotmail.com','5605 Kshlerin Well Apt. 140\nLoyceville, NU  J1J-9T4','469.649.8272','2018-08-19 22:34:50','2018-08-19 22:34:50');
/*!40000 ALTER TABLE `organisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `local` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `capacite` int(11) NOT NULL,
  `cours_id` int(11) NOT NULL,
  `intervenant_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` VALUES (1,'reprehenderit','2018-05-01 00:00:00','2018-12-19 00:00:00',9,1,1,'2018-08-23 04:47:13','2018-08-23 04:47:13'),(2,'voluptatem','2016-02-17 00:00:00','2019-04-21 00:00:00',87,2,2,'2018-08-23 04:47:13','2018-08-23 04:47:13'),(3,'doloremque','2008-05-09 00:00:00','2002-12-26 00:00:00',55,3,8,'2018-08-23 04:47:13','2018-08-23 04:47:13'),(4,'eum','1971-08-18 00:00:00','1974-06-26 00:00:00',69,4,5,'2018-08-23 04:47:13','2018-08-23 04:47:13'),(5,'quidem','1990-05-31 00:00:00','1973-10-26 00:00:00',4,5,1,'2018-08-23 04:47:13','2018-08-23 04:47:13'),(6,'modi','1989-12-10 00:00:00','1980-09-17 00:00:00',12,1,8,'2018-08-23 04:47:13','2018-08-23 04:47:13'),(7,'qui','1979-10-06 00:00:00','1986-02-25 00:00:00',92,3,8,'2018-08-23 04:47:13','2018-08-23 04:47:13'),(8,'provident','2006-01-15 00:00:00','2012-01-19 00:00:00',41,6,5,'2018-08-23 04:47:13','2018-08-23 04:47:13'),(9,'voluptas','2000-08-01 00:00:00','2005-03-09 00:00:00',73,3,1,'2018-08-23 04:47:13','2018-08-23 04:47:13'),(10,'accusamus','2001-08-31 00:00:00','1998-02-04 00:00:00',35,7,6,'2018-08-23 04:47:13','2018-08-23 04:47:13'),(11,'autem','1974-12-09 00:00:00','2000-03-03 00:00:00',68,0,5,'2018-08-23 04:47:13','2018-08-23 04:47:13'),(12,'ut','2000-09-28 00:00:00','1992-02-17 00:00:00',58,0,8,'2018-08-23 04:47:13','2018-08-23 04:47:13'),(13,'ipsum','2005-06-21 00:00:00','1977-07-16 00:00:00',38,0,5,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(14,'pariatur','2011-10-31 00:00:00','2015-08-02 00:00:00',88,0,9,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(15,'laudantium','1987-08-31 00:00:00','1974-02-28 00:00:00',7,0,10,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(16,'dicta','1999-10-06 00:00:00','1976-03-31 00:00:00',49,0,4,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(17,'et','1976-10-19 00:00:00','1972-04-27 00:00:00',28,0,2,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(18,'eveniet','1979-09-10 00:00:00','1999-03-16 00:00:00',35,0,0,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(19,'cupiditate','2001-12-16 00:00:00','2008-02-10 00:00:00',9,0,4,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(20,'non','2001-11-21 00:00:00','2013-11-13 00:00:00',38,0,0,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(21,'deserunt','1972-08-26 00:00:00','1995-07-30 00:00:00',70,0,9,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(22,'voluptas','2014-12-21 00:00:00','2018-11-01 00:00:00',42,0,1,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(23,'magnam','1995-04-27 00:00:00','2014-08-20 00:00:00',94,0,3,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(24,'ut','1994-04-19 00:00:00','1982-12-31 00:00:00',71,0,5,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(25,'totam','1977-02-27 00:00:00','1987-08-27 00:00:00',80,0,7,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(26,'aliquid','2000-09-05 00:00:00','2019-04-23 00:00:00',4,0,8,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(27,'velit','1990-04-01 00:00:00','1981-10-25 00:00:00',7,0,9,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(28,'consequatur','1975-04-19 00:00:00','1985-08-04 00:00:00',64,0,8,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(29,'ex','1972-07-20 00:00:00','2014-07-25 00:00:00',66,0,7,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(30,'qui','2014-08-05 00:00:00','1977-02-12 00:00:00',41,0,6,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(31,'magni','2006-02-10 00:00:00','2003-12-24 00:00:00',82,0,6,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(32,'ea','1982-12-21 00:00:00','2005-11-16 00:00:00',74,0,3,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(33,'ut','1971-12-17 00:00:00','1985-12-22 00:00:00',77,0,9,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(34,'eveniet','1999-10-20 00:00:00','1998-02-19 00:00:00',59,0,8,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(35,'voluptatem','1994-07-22 00:00:00','1974-09-18 00:00:00',74,0,4,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(36,'quae','1994-12-28 00:00:00','1986-01-30 00:00:00',21,0,7,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(37,'quam','1971-11-29 00:00:00','1980-06-12 00:00:00',64,0,4,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(38,'et','1989-07-30 00:00:00','1997-05-06 00:00:00',3,0,4,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(39,'recusandae','1977-05-16 00:00:00','2007-06-20 00:00:00',55,0,8,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(40,'quaerat','1974-01-29 00:00:00','2002-03-06 00:00:00',80,0,0,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(41,'blanditiis','1988-12-29 00:00:00','1984-05-06 00:00:00',54,0,9,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(42,'ad','1975-12-30 00:00:00','1973-03-31 00:00:00',6,0,6,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(43,'voluptatum','1991-01-24 00:00:00','2018-11-08 00:00:00',18,0,6,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(44,'rerum','2013-04-27 00:00:00','2002-02-16 00:00:00',65,0,8,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(45,'voluptas','2006-04-15 00:00:00','1973-11-10 00:00:00',72,0,0,'2018-08-23 04:47:14','2018-08-23 04:47:14'),(46,'culpa','2014-04-30 00:00:00','1984-04-19 00:00:00',64,0,5,'2018-08-23 04:47:15','2018-08-23 04:47:15'),(47,'iusto','2002-01-09 00:00:00','1990-02-03 00:00:00',27,0,7,'2018-08-23 04:47:15','2018-08-23 04:47:15'),(48,'ut','1979-02-08 00:00:00','1996-06-11 00:00:00',80,0,8,'2018-08-23 04:47:15','2018-08-23 04:47:15'),(49,'ab','1985-08-09 00:00:00','1977-12-03 00:00:00',42,0,10,'2018-08-23 04:47:15','2018-08-23 04:47:15'),(50,'a','2012-06-27 00:00:00','2014-08-23 00:00:00',76,0,0,'2018-08-23 04:47:15','2018-08-23 04:47:15');
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `api_token` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_api_token_unique` (`api_token`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','admin@test.com','$2y$10$VoCXkEgWiEJ5qdXRDaWmbOyZHh90rYZdYHsQsh/3VVSdg5QqnMVIS',NULL,'2018-08-19 18:26:13','2019-01-19 00:45:09','dXpgUSpg8Dlqwtkk1XEvip48fHf5QvXQnmcQUKITxBlNpKh0j9of2h9LRMno'),(2,'Brody Yost','hegmann.milo@gmail.com','$2y$10$VoCXkEgWiEJ5qdXRDaWmbOyZHh90rYZdYHsQsh/3VVSdg5QqnMVIS',NULL,'2018-08-19 18:26:13','2018-08-19 18:26:13',NULL),(3,'Charlotte Weissnat','afarrell@hotmail.com','$2y$10$VoCXkEgWiEJ5qdXRDaWmbOyZHh90rYZdYHsQsh/3VVSdg5QqnMVIS',NULL,'2018-08-19 18:26:13','2018-08-19 18:26:13',NULL),(4,'Vicky McCullough','anahi61@gutkowski.com','$2y$10$VoCXkEgWiEJ5qdXRDaWmbOyZHh90rYZdYHsQsh/3VVSdg5QqnMVIS',NULL,'2018-08-19 18:26:13','2018-08-19 18:26:13',NULL),(5,'Johnny Klein DDS','rkunde@okuneva.com','$2y$10$VoCXkEgWiEJ5qdXRDaWmbOyZHh90rYZdYHsQsh/3VVSdg5QqnMVIS',NULL,'2018-08-19 18:26:13','2018-08-19 18:26:13',NULL),(6,'Ron Roob','amelia82@gmail.com','$2y$10$VoCXkEgWiEJ5qdXRDaWmbOyZHh90rYZdYHsQsh/3VVSdg5QqnMVIS',NULL,'2018-08-19 18:26:13','2018-08-19 18:26:13',NULL),(7,'Prof. Stephon Stamm MD','gudrun65@wisoky.com','$2y$10$VoCXkEgWiEJ5qdXRDaWmbOyZHh90rYZdYHsQsh/3VVSdg5QqnMVIS',NULL,'2018-08-19 18:26:13','2018-08-19 18:26:13',NULL),(8,'Hollis Lynch','alanis.marks@bergnaum.com','$2y$10$VoCXkEgWiEJ5qdXRDaWmbOyZHh90rYZdYHsQsh/3VVSdg5QqnMVIS',NULL,'2018-08-19 18:26:13','2018-08-19 18:26:13',NULL),(9,'Carlotta Rice','zetta.rolfson@dach.com','$2y$10$VoCXkEgWiEJ5qdXRDaWmbOyZHh90rYZdYHsQsh/3VVSdg5QqnMVIS',NULL,'2018-08-19 18:26:13','2018-08-19 18:26:13',NULL),(10,'Norval Kulas','ehomenick@lowe.com','$2y$10$VoCXkEgWiEJ5qdXRDaWmbOyZHh90rYZdYHsQsh/3VVSdg5QqnMVIS',NULL,'2018-08-19 18:26:13','2018-08-19 18:26:13',NULL),(11,'Jackson Thiel IV','kathryne55@altenwerth.com','$2y$10$VoCXkEgWiEJ5qdXRDaWmbOyZHh90rYZdYHsQsh/3VVSdg5QqnMVIS',NULL,'2018-08-19 18:26:13','2018-08-19 18:26:13',NULL),(12,'Moussa','moussa.th@domain.com','$2y$10$H3o80ffTn3N6l1RUMW.Swuks2AURyZOoFyvgEOgWM5eAEwTQuwPES',NULL,'2018-08-19 19:01:26','2018-08-19 19:01:26',NULL),(13,'John','john.doe@domain.com','$2y$10$zB6Sai/.r15lVHmXLGSB2ue3fx.2LRLA/NzkUCYD0IJth/j7./6rK',NULL,'2018-08-19 19:25:13','2018-08-19 19:25:13','ictsx34OZqHBSRWjPb7Ek2iC0MNZaBa7wGMic7sc4pRVu4bU9KFifAcH9CSQ');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-18 14:54:02
