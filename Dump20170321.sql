CREATE DATABASE  IF NOT EXISTS `sipema_db_2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sipema_db_2`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: sipema_db_2
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `areas`
--

DROP TABLE IF EXISTS `areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas`
--

LOCK TABLES `areas` WRITE;
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beneficio_social`
--

DROP TABLE IF EXISTS `beneficio_social`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beneficio_social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cobertura` varchar(250) NOT NULL,
  `pre_h` int(11) NOT NULL,
  `pre_m` int(11) NOT NULL,
  `nin_h` int(11) NOT NULL,
  `nin_m` int(11) NOT NULL,
  `ado_h` int(11) NOT NULL,
  `ado_m` int(11) NOT NULL,
  `jov_h` int(11) NOT NULL,
  `jov_m` int(11) NOT NULL,
  `adu_h` int(11) NOT NULL,
  `adu_m` int(11) NOT NULL,
  `may_h` int(11) NOT NULL,
  `may_m` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beneficio_social`
--

LOCK TABLES `beneficio_social` WRITE;
/*!40000 ALTER TABLE `beneficio_social` DISABLE KEYS */;
INSERT INTO `beneficio_social` VALUES (88,'COBERTURA',1,1,10,9,9,11,9,1,9,9,8,10),(89,'COBERTURA',1,1,10,9,9,11,9,1,9,9,8,10);
/*!40000 ALTER TABLE `beneficio_social` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carta_descriptiva`
--

DROP TABLE IF EXISTS `carta_descriptiva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_descriptiva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eje_tematico` varchar(200) NOT NULL,
  `programa_sectorial` varchar(200) NOT NULL,
  `programa_presupuestario` varchar(200) NOT NULL,
  `nombre_proyecto` varchar(200) NOT NULL,
  `periodo_ejec_inicio` date NOT NULL,
  `subeje` varchar(100) NOT NULL,
  `area_responsable` varchar(100) NOT NULL,
  `empleado_titular` varchar(100) NOT NULL,
  `empleado_responsable` varchar(100) NOT NULL,
  `periodo_ejec_fin` date NOT NULL,
  `fundamento_legal` text NOT NULL,
  `situacion_actual` text NOT NULL,
  `justificacion_proyecto` text NOT NULL,
  `objetivo_proyecto` text NOT NULL,
  `estrategias` text NOT NULL,
  `lineas_accion` text NOT NULL,
  `situacion_esperada` text NOT NULL,
  `justificacion_recursos` text NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_descriptiva`
--

LOCK TABLES `carta_descriptiva` WRITE;
/*!40000 ALTER TABLE `carta_descriptiva` DISABLE KEYS */;
INSERT INTO `carta_descriptiva` VALUES (102,'EJE TEM&Aacute;TICO','PROGRAMA SECTORIAL','PROGRAMA PRESUPUESTARIO','NOMBRE DEL COMPONENTE','2017-03-01','SUBEJE','&Aacute;REA RESPONSABLE','TITULAR','RESPONSABLE','2017-03-28','FUNDAMENTO LEGAL','SITUACI&Oacute;N ACTUAL','JUSTIFICACI&oacute;N DEL PROYECTO','OBJETIVO DEL PROYECTO','ESTRATEGIAS (ALINEADAS AL PED Y PLAN SECTORIAL 2016 - 2022)','LINEAS DE ACCI&oacute;N (ALINEADAS AL PED Y PLAN SECTORIAL 2016 - 2022)','SITUACI&oacute;N ESPERADA 2017 (EN FUNCI&oacute;N DE LA METAS PROGRAMADAS EN LOS INDICADORES ESTRAT&eacute;GICOS)','JUSTIFICACI&oacute;N DE RECURSOS','OBSERVACIONES 2017'),(103,'EJE TEM&Aacute;TICO','PROGRAMA SECTORIAL','PROGRAMA PRESUPUESTARIO','NOMBRE DEL COMPONENTE','2017-03-01','SUBEJE','&Aacute;REA RESPONSABLE','TITULAR','RESPONSABLE','2017-03-28','FUNDAMENTO LEGAL','SITUACI&Oacute;N ACTUAL','JUSTIFICACI&Oacute;N DEL PROYECTO','OBJETIVO DEL PROYECTO','ESTRATEGIAS (ALINEADAS AL PED Y PLAN SECTORIAL 2016 - 2022)','LINEAS DE ACCI&Oacute;N (ALINEADAS AL PED Y PLAN SECTORIAL 2016 - 2022)','SITUACI&Oacute;N ESPERADA 2017 (EN FUNCI&Oacute;N DE LA METAS PROGRAMADAS EN LOS INDICADORES ESTRAT&Eacute;GICOS)','JUSTIFICACI&Oacute;N DE RECURSOS','OBSERVACIONES 2017');
/*!40000 ALTER TABLE `carta_descriptiva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_programas`
--

DROP TABLE IF EXISTS `cat_programas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_programas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `id_cat_sipema` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_tmp_autoinc` (`id`),
  KEY `fk_cat_programas_cat_sipema` (`id_cat_sipema`),
  CONSTRAINT `fk_cat_programas_cat_sipema` FOREIGN KEY (`id_cat_sipema`) REFERENCES `cat_sipema` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_programas`
--

LOCK TABLES `cat_programas` WRITE;
/*!40000 ALTER TABLE `cat_programas` DISABLE KEYS */;
INSERT INTO `cat_programas` VALUES (1,'Fondo ambiental',NULL,9),(2,'Programa estatal de acción ante el cambio climático',NULL,9),(3,'Agenda estatal, nacional e internacional para la gestión ambiental implementada',NULL,9),(4,'Mitigación ante el cambio climático',NULL,9),(5,'Programas municipales de accion ante el cambio cimático',NULL,9);
/*!40000 ALTER TABLE `cat_programas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_sipema`
--

DROP TABLE IF EXISTS `cat_sipema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_sipema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_tmp_autoinc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_sipema`
--

LOCK TABLES `cat_sipema` WRITE;
/*!40000 ALTER TABLE `cat_sipema` DISABLE KEYS */;
INSERT INTO `cat_sipema` VALUES (1,'Manejo integral de residuos sólidos',NULL),(2,'Áreas naturales protegidas',NULL),(3,'Prevención y control de la contaminación',NULL),(4,'Procuración y acceso a la juasticia ambiental',NULL),(5,'* TRIAL * TRIAL * T',NULL),(6,'Atención y apoyo en (no entendí)',NULL),(7,'Planeación e instrumentación de politica ambiental',NULL),(8,'Desarrollo sustentable',NULL),(9,'Cambio climático',NULL),(10,'Biodiversidad y vida silvestre',NULL);
/*!40000 ALTER TABLE `cat_sipema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_sub_programas`
--

DROP TABLE IF EXISTS `cat_sub_programas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_sub_programas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `id_cat_programas` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_tmp_autoinc` (`id`),
  KEY `fk_cat_sub_programas_cat_programas` (`id_cat_programas`),
  CONSTRAINT `fk_cat_sub_programas_cat_programas` FOREIGN KEY (`id_cat_programas`) REFERENCES `cat_programas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_sub_programas`
--

LOCK TABLES `cat_sub_programas` WRITE;
/*!40000 ALTER TABLE `cat_sub_programas` DISABLE KEYS */;
INSERT INTO `cat_sub_programas` VALUES (1,'Programas y proyectos de inversión',NULL,5),(2,'Seguimiento a la evaluación del desempeño operativo',NULL,5),(3,'Programas operativos anueles POA\'s',NULL,5);
/*!40000 ALTER TABLE `cat_sub_programas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `desglose_viaticos`
--

DROP TABLE IF EXISTS `desglose_viaticos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `desglose_viaticos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto` varchar(100) NOT NULL,
  `comision` varchar(100) NOT NULL,
  `objetivo` varchar(200) NOT NULL,
  `no_personas` int(11) NOT NULL,
  `mes` varchar(45) NOT NULL,
  `duracion_dias` int(11) NOT NULL,
  `lugar_comision` varchar(45) NOT NULL,
  `alimentacion` float NOT NULL,
  `hospedaje` float NOT NULL,
  `traslado` float NOT NULL,
  `id_viaticos` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `desglose_viaticos_viaticos_fk_idx` (`id_viaticos`),
  CONSTRAINT `desglose_viaticos_viaticos_fk` FOREIGN KEY (`id_viaticos`) REFERENCES `viaticos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `desglose_viaticos`
--

LOCK TABLES `desglose_viaticos` WRITE;
/*!40000 ALTER TABLE `desglose_viaticos` DISABLE KEYS */;
INSERT INTO `desglose_viaticos` VALUES (67,'PROYECTO','COMISI&oacute;N','OBJETIVO',0,'SEPTIEMBRE',0,'LOCAL',0,0,0,59),(68,'AAAAAAAAAAAAAAAA','AAAAAAAAAAAA','AAAAAAAAAAAAAAAAAAAAAAA',0,'MAYO',0,'NACIONAL',0,0,0,59),(69,'BBBBBBBBB','BBBBBBBBBBBBBBBB','BBBBBBBBB',0,'OCTUBRE',0,'EXTANJRO',0,0,0,59),(70,'PROYECTO','COMISI&Oacute;N','OBJETIVO',0,'SEPTIEMBRE',0,'LOCAL',0,0,0,60),(71,'AAAAAAAAAAAAAAAA','AAAAAAAAAAAA','AAAAAAAAAAAAAAAAAAAAAAA',0,'MAYO',0,'NACIONAL',0,0,0,60),(72,'BBBBBBBBB','BBBBBBBBBBBBBBBB','BBBBBBBBB',0,'OCTUBRE',0,'EXTANJRO',0,0,0,60);
/*!40000 ALTER TABLE `desglose_viaticos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleado`
--

DROP TABLE IF EXISTS `empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_puesto` int(11) NOT NULL,
  `no_control` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no_control_UNIQUE` (`no_control`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleado`
--

LOCK TABLES `empleado` WRITE;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objeto_gasto`
--

DROP TABLE IF EXISTS `objeto_gasto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objeto_gasto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_presupuesto_desagregado` int(11) NOT NULL,
  `partida_especifica` varchar(100) NOT NULL,
  `nombre_partida` varchar(100) NOT NULL,
  `monto_solicitado` float NOT NULL,
  `mto_ene` float NOT NULL,
  `mto_feb` float NOT NULL,
  `mto_mar` float NOT NULL,
  `mto_abr` float NOT NULL,
  `mto_may` float NOT NULL,
  `mto_jun` float NOT NULL,
  `mto_jul` float NOT NULL,
  `mto_ago` float NOT NULL,
  `mto_sep` float NOT NULL,
  `mto_oct` float NOT NULL,
  `mto_nov` float NOT NULL,
  `mto_dic` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `presupuestodes_objgasto_fk_idx` (`id_presupuesto_desagregado`),
  CONSTRAINT `presupuestodes_objgasto_fk` FOREIGN KEY (`id_presupuesto_desagregado`) REFERENCES `presupuesto_desagregado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objeto_gasto`
--

LOCK TABLES `objeto_gasto` WRITE;
/*!40000 ALTER TABLE `objeto_gasto` DISABLE KEYS */;
INSERT INTO `objeto_gasto` VALUES (80,89,'PARTIDA ESPEC&iacute;FICA','NOMBRE DE LA PARTIDA',7,14,11,17,0,0,0,0,0,0,0,0,0),(81,89,'AAAAAA','AAAAAAAAAAAAAA',0,0,0,0,0,0,0,0,0,0,0,0,0),(82,89,'BBBBBBBBBBBBBBB','BBBBBBBBBBBBBBBBBBBB',0,0,0,0,0,0,0,0,0,0,0,0,0),(83,89,'CCCCCCCC','CCCCCCCCCCCCCCCCCCCC',0,0,0,0,0,0,0,0,0,0,0,0,0),(84,90,'PARTIDA ESPEC&Iacute;FICA','NOMBRE DE LA PARTIDA',7,14,11,17,0,0,0,0,0,0,0,0,0),(85,90,'AAAAAA','AAAAAAAAAAAAAA',0,0,0,0,0,0,0,0,0,0,0,0,0),(86,90,'BBBBBBBBBBBBBBB','BBBBBBBBBBBBBBBBBBBB',0,0,0,0,0,0,0,0,0,0,0,0,0),(87,90,'CCCCCCCC','CCCCCCCCCCCCCCCCCCCC',0,0,0,0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `objeto_gasto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `presupuesto_desagregado`
--

DROP TABLE IF EXISTS `presupuesto_desagregado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `presupuesto_desagregado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organo_sup` varchar(100) NOT NULL,
  `nombre_proyecto` varchar(100) NOT NULL,
  `unidad_presupuestal` varchar(100) NOT NULL,
  `descripcion_proyecto` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presupuesto_desagregado`
--

LOCK TABLES `presupuesto_desagregado` WRITE;
/*!40000 ALTER TABLE `presupuesto_desagregado` DISABLE KEYS */;
INSERT INTO `presupuesto_desagregado` VALUES (89,'&Oacute;RGANO SUPERIOR','NOMBRE DEL PROYECTO AQUI QUE PEDO!','UNIDAD PRESUPUESTAL','DESCRIPCI&oacute;N DEL PROYECTO'),(90,'&Oacute;RGANO SUPERIOR','NOMBRE DEL PROYECTO AQUI QUE PEDO!','UNIDAD PRESUPUESTAL','DESCRIPCI&Oacute;N DEL PROYECTO');
/*!40000 ALTER TABLE `presupuesto_desagregado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programacion_actividades`
--

DROP TABLE IF EXISTS `programacion_actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programacion_actividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_actividad` varchar(100) NOT NULL,
  `acti_ene` text NOT NULL,
  `acti_feb` text NOT NULL,
  `acti_mar` text NOT NULL,
  `acti_abr` text NOT NULL,
  `acti_may` text NOT NULL,
  `acti_jun` text NOT NULL,
  `acti_jul` text NOT NULL,
  `acti_ago` text NOT NULL,
  `acti_sep` text NOT NULL,
  `acti_oct` text NOT NULL,
  `acti_nov` text NOT NULL,
  `acti_dic` text NOT NULL,
  `acti_meta_final` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programacion_actividades`
--

LOCK TABLES `programacion_actividades` WRITE;
/*!40000 ALTER TABLE `programacion_actividades` DISABLE KEYS */;
INSERT INTO `programacion_actividades` VALUES (58,'NOMBRE DE LA ACTIVIDAD','NOMBRE DE LA ACTIVIDAD','FDGFDGFD','GD','GD','GFD','GFD','DFG','GDF','GE','DFG','DF','GFNS TJYBE','VJYJHRHVCYR'),(59,'NOMBRE DE LA ACTIVIDAD','NOMBRE DE LA ACTIVIDAD','FDGFDGFD','GD','GD','GFD','GFD','DFG','GDF','GE','DFG','DF','GFNS TJYBE','VJYJHRHVCYR');
/*!40000 ALTER TABLE `programacion_actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programacion_metas`
--

DROP TABLE IF EXISTS `programacion_metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programacion_metas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_componente` varchar(100) NOT NULL,
  `comp_ene` text NOT NULL,
  `comp_feb` text NOT NULL,
  `comp_mar` text NOT NULL,
  `comp_abr` text NOT NULL,
  `comp_may` text NOT NULL,
  `comp_jun` text NOT NULL,
  `comp_jul` text NOT NULL,
  `comp_ago` text NOT NULL,
  `comp_sep` text NOT NULL,
  `comp_oct` text NOT NULL,
  `comp_nov` text NOT NULL,
  `comp_dic` text NOT NULL,
  `comp_meta_final` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programacion_metas`
--

LOCK TABLES `programacion_metas` WRITE;
/*!40000 ALTER TABLE `programacion_metas` DISABLE KEYS */;
INSERT INTO `programacion_metas` VALUES (58,'NOMBRE DEL COMPONENTE','AAAAAAAAB','BBBB','CCCCCCCCCCCCCC','DDDDDDDDDDDDD','EEEEEEEEE','FFFFFFFFFFFFFF','GGGGGGGGGGGGGGG','HHHHHHHHHHHHH','IIIIIIIIIIIIIII','JJJJJJJJJJJJJJJJJJJJJJJJJJJJ','KKKKKKKKKKKKKKKKKKKK','LLLLLLLLLLLLLLLLLL','MMMMMMMMMMMMMMMMM'),(59,'NOMBRE DEL COMPONENTE','AAAAAAAAB','BBBB','CCCCCCCCCCCCCC','DDDDDDDDDDDDD','EEEEEEEEE','FFFFFFFFFFFFFF','GGGGGGGGGGGGGGG','HHHHHHHHHHHHH','IIIIIIIIIIIIIII','JJJJJJJJJJJJJJJJJJJJJJJJJJJJ','KKKKKKKKKKKKKKKKKKKK','LLLLLLLLLLLLLLLLLL','MMMMMMMMMMMMMMMMM');
/*!40000 ALTER TABLE `programacion_metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puesto`
--

DROP TABLE IF EXISTS `puesto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puesto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puesto`
--

LOCK TABLES `puesto` WRITE;
/*!40000 ALTER TABLE `puesto` DISABLE KEYS */;
/*!40000 ALTER TABLE `puesto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resporte_sipema`
--

DROP TABLE IF EXISTS `resporte_sipema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resporte_sipema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_beneficio_social` int(11) NOT NULL,
  `id_carta_descriptiva` int(11) NOT NULL,
  `id_presupuesto_desagregado` int(11) NOT NULL,
  `id_programacion_actividades` int(11) NOT NULL,
  `programacion_metas` int(11) NOT NULL,
  `viaticos` int(11) NOT NULL,
  `fecha_reg` date NOT NULL,
  `hora_reg` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resporte_sipema`
--

LOCK TABLES `resporte_sipema` WRITE;
/*!40000 ALTER TABLE `resporte_sipema` DISABLE KEYS */;
/*!40000 ALTER TABLE `resporte_sipema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'gama950522','7284407806c1fd94b9ba9238792b4e3e1cced29844daaa13eb9feca01f866355');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `viaticos`
--

DROP TABLE IF EXISTS `viaticos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `viaticos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dependencia` varchar(100) NOT NULL,
  `unidad_presupuestal` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viaticos`
--

LOCK TABLES `viaticos` WRITE;
/*!40000 ALTER TABLE `viaticos` DISABLE KEYS */;
INSERT INTO `viaticos` VALUES (55,'[eje_tematico: &#039;alexis&#039;,&#039;gasga&#039;,&#039;mu&ntilde;oz&#039;]','[eje_tematico: &#039;alexis&#039;,&#039;gasga&#039;,&#039;mu&ntilde;oz&#039;]'),(56,'[eje_tematico: &#039;alexis&#039;,&#039;gasga&#039;,&#039;mu&ntilde;oz&#039;]','[eje_tematico: &#039;alexis&#039;,&#039;gasga&#039;,&#039;mu&ntilde;oz&#039;]'),(57,'[eje_tematico: &#039;alexis&#039;,&#039;gasga&#039;,&#039;mu&ntilde;oz&#039;]','[eje_tematico: &#039;alexis&#039;,&#039;gasga&#039;,&#039;mu&ntilde;oz&#039;]'),(58,'sssssssssssssssssssssssssssssss','sssssssssssssssssssss'),(59,'DFDEPENDENCIA','UNIDAD PRESUPUESTAL'),(60,'DFDEPENDENCIA','UNIDAD PRESUPUESTAL');
/*!40000 ALTER TABLE `viaticos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-21 21:02:10
