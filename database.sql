-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: blog
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `body` text CHARACTER SET utf8,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'El Blog de eClass','Bienvenido al Blog de eClass!!','2017-07-26 00:56:10',NULL),(2,'Â¡En eClass celebramos 500 mil alumnos!','Nos llena de orgullo contarles que en junio de este aÃ±o, llegamos a los 500 mil alumnos matriculados en nuestros distintos cursos y diplomados. Un hito por el cual trabajamos con pasiÃ³n, creatividad, trabajo en equipo y excelencia desde hace mÃ¡s de 12 aÃ±os. Pero en el aÃ±o 2004 rompimos con todas las barreras que impedÃ­an lograr esta meta con un innovador modelo de educaciÃ³n online que facilita e impulsa el aprendizaje de los alumnos a travÃ©s del llamado â€œblended learningâ€: la opciÃ³n de realizar cursos y diplomados de manera presencial, semipresencial (algunas clases presenciales y otras online) o completamente en lÃ­nea. De esta forma ampliamos el abanico de opciones para todas aquellas personas que querÃ­an estudiar a su ritmo, a cualquier hora y desde cualquier lugar, creando una plataforma que ayuda a superar las barreras de la distancia y el tiempo en LatinoamÃ©rica. Para que la calidad de nuestra oferta fuera variada y sobresaliente, generamos alianzas con prestigiosas instituciones como la Universidad Adolfo IbÃ¡Ã±ez, Duoc UC, Universidad de los Andes, Mutual CapacitaciÃ³n, y Aptus Chile. Hoy podemos celebrar con orgullo los primeros 500 mil matriculados y festejar el hecho de que muchos nos han elegido como una alternativa de estudio y capacitaciÃ³n para reforzar y adquirir conocimientos en sus Ã¡reas de expertise sin dejar de lado su vida personal y laboral. TambiÃ©n hemos logrado que las empresas nos vean como un verdadero aliado en sus diversas necesidades de capacitaciÃ³n. Prueba de esto son las mÃ¡s de 600 empresas en toda LatinoamÃ©rica que ya nos han elegido para capacitar a sus colaboradores. <a href=\"https://www.eclass.cl/noticia/671/en-eclass-celebramos-500-mil-alumnos\">Fuente</a>','2017-07-26 06:56:39','2017-07-26 06:56:39'),(3,'Trump asegura que Apple construirÃ¡ tres plantas','Apple fue un blanco de crÃ­ticas varias veces durante la campaÃ±a del actual presidente de los Estados Unidos, Donald Trump, debido a que la gran mayorÃ­a de su manufactura es llevada a cabo en China, y no en su paÃ­s de origen. Si bien en mayo pasado, Tim Cook â€“CEO de Appleâ€“ asegurÃ³ que la compaÃ±Ã­a invertirÃ¡ mÃ¡s de 1.000 millones de dÃ³lares en fÃ¡bricas y proveedores dentro los de Estados Unidos, el dÃ­a de hoy, el jefe de estado â€œconfirmÃ³â€ en una entrevista otorgada al The Wall Street Journal, que Apple construirÃ¡ tres grandes plantas en el paÃ­s. â€œHablÃ© con Ã©l (Cook), me prometiÃ³ tres grandes plantas, grandes, grandes, grandes. Le dije: Tim, a menos que comiences a construir tus plantas en este paÃ­s, no considerarÃ© a mi gobierno como un Ã©xito econÃ³micoâ€ â€“ Donald Trump Apple no ha confirmado ni desmentido esta afirmaciÃ³n, y el mandatario tampoco ha indicado lugares o fechas especÃ­ficas. Se trata de una promesa ambiciosa que harÃ¡ realidad la obsesiÃ³n del republicano de que todo sea made in America. De concretarse la construcciÃ³n de estas plantas, significarÃ¡ un gran y esforzado cambio para los de Cupertino, quienes actualmente contratan empresas externas, como Foxconn o Pegatron, para la fabricaciÃ³n de sus dispositivos mÃ³viles, mientras que otros productos son manufacturados por una fabrica propia ubicada en Irlanda. <a href=\"https://pisapapeles.net/trump-asegura-que-apple-pronto-construira-tres-plantas-en-estados-unidos/\">Fuente</a>','2017-07-26 06:57:05','2017-07-26 06:57:05');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'demo','$10$yL2/eX9dindX8ReWUID4y.8K6Jhp.Lj9V30hXbHPNJ0Bp2VihIfJe','2017-07-26 00:23:20',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'blog'
--

--
-- Dumping routines for database 'blog'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-26  1:08:59
