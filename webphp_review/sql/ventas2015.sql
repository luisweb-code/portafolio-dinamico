-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ventas2015
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `boleta`
--

DROP TABLE IF EXISTS `boleta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `boleta` (
  `num_boleta` int NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `id_cliente` char(5) NOT NULL,
  PRIMARY KEY (`num_boleta`),
  KEY `fkboletacliente_idx` (`id_cliente`),
  CONSTRAINT `fkboletacliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boleta`
--

LOCK TABLES `boleta` WRITE;
/*!40000 ALTER TABLE `boleta` DISABLE KEYS */;
INSERT INTO `boleta` VALUES (1,'2015-01-10','C0011'),(2,'2015-01-20','C0002'),(3,'2015-01-20','C0001'),(4,'2015-01-23','C0005'),(5,'2015-02-10','C0001'),(6,'2015-02-20','C0002'),(7,'2015-03-05','C0006'),(8,'2015-03-24','C0006'),(9,'2015-04-20','C0005'),(10,'2015-04-20','C0011'),(11,'2015-05-10','C0006'),(12,'2015-06-20','C0006'),(13,'2015-07-20','C0001'),(14,'2015-07-26','C0006'),(15,'2015-07-20','C0006'),(16,'2015-07-20','C0005'),(17,'2015-08-10','C0002'),(18,'2015-09-05','C0012'),(19,'2015-10-20','C0006'),(20,'2015-11-27','C0014'),(21,'2015-11-05','C0002'),(22,'2015-11-20','C0001');
/*!40000 ALTER TABLE `boleta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `id_cliente` char(5) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `paterno` varchar(45) NOT NULL,
  `materno` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `fono` char(15) DEFAULT NULL,
  `id_distrito` char(3) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `fkclientedistro_idx` (`id_distrito`),
  CONSTRAINT `fkclientedistro` FOREIGN KEY (`id_distrito`) REFERENCES `distro` (`id_distro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES ('12345','Luis luis','Carrasco','Sanchez','mayas l4 56 ','4569872136','L17','luis@luis.com'),('C0001','CARLOS','LOPEZ','HURTADO','Calle El Pino 346','4677352','L01','clopez@hotmail.com'),('C0002','FRIDA','QUIROZ','DUARTE','Jr. Los reyes 475','6734732','L06','fquiroz@peru.com'),('C0003','ALEJANDRO','TRAUCO','MANRIQUE','Jr. Huáscar 956','4676732','L04','atruco@gmail.com'),('C0004','CARLA','BLANCO','RUIZ','Av. Arequipa 451','4867438','L03','cblancoz@hotmail.com'),('C0005','CORINA','MENDOZA','PEREZ','Av. Ingenieros 111','2548965','L09','cmendoza@hotmail.com'),('C0006','JORGE','RODAS','DIONICIO','Jr. Las Liras 456','4789658','L03','jrodas@gmail.com'),('C0007','FRIDA','QUIROZ','DUARTE','Jr. Los reyes 475','6734732','L06','fquiroz@peru.com'),('C0008','ANTUANE','RODRIGUEZ','ALARCON','Av. Dorado 347','4589732','L05','arodriguez@hotmail.com'),('C0009','MANUEL','SUAREZ','FERNANDEZ','Jr. Los Robles 854','4576738','L19','msuarez@gmail.com'),('C0010','JUAN','GUTIERREZ','DIAZ','Calle Girasoles 456','4897421','L14','jgutierrez@hotmail.com'),('C0011','CARLOS','COLAN','BARDALES','Av. Los Héroes 895','3698574','L19','ccolan@peru.com'),('C0012','MARTIN','CARRILLO','SALAS','Calle Los Huertos 844','8965952','L08','mcarrillo@gmail.com'),('C0013','JOSE','LAZARTE','LUJAN','Jr. Agapito 452','1258965','L17','jlazarte@gmail.com'),('C0014','VIDAL','ZORRILLA','RODRIGUEZ','Av. Héroes del cenepa 635','1547894','L20','vzorrilla@hotmail.com'),('C0015','GUILLERMO','RAMOS','FLORES','Jr. Las Almendras 211','4587964','L03','gramos@gmail.com'),('c0016','Natalia','Miluska','Nicho','Cerrada del jardin #128','9653214578','L16','natalia@natalia.com'),('c0017','Katia','Flores','Antigua','Cuscos #124 Sector la antigua Santa cruz','9862354168','L11','katia@katia.com'),('c0018','Mia','Flores','Flores','Cerrada de Tepehuanos #43','5541236987','L10','mia@mia.com'),('C0019','Luis Alfredo','Carrasco','Sánchez','Calle Mixicas M.45 Lote 7 Col. Santa Cruz Del','5577882214','L13','luis@luis.com');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalleboleta`
--

DROP TABLE IF EXISTS `detalleboleta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalleboleta` (
  `num_boleta` int NOT NULL,
  `id_producto` char(5) NOT NULL,
  `cantidad` varchar(45) NOT NULL,
  KEY `fkdetalleboletaproducto_idx` (`id_producto`),
  KEY `fkdetalleboletaboleta` (`num_boleta`),
  CONSTRAINT `fkdetalleboletaboleta` FOREIGN KEY (`num_boleta`) REFERENCES `boleta` (`num_boleta`),
  CONSTRAINT `fkdetalleboletaproducto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalleboleta`
--

LOCK TABLES `detalleboleta` WRITE;
/*!40000 ALTER TABLE `detalleboleta` DISABLE KEYS */;
INSERT INTO `detalleboleta` VALUES (1,'P0005','10'),(1,'P0001','20'),(2,'P0002','20'),(2,'P0005','10'),(2,'P0003','15'),(3,'P0005','19'),(4,'P0001','19'),(4,'P0005','15'),(4,'P0003','11'),(5,'P0002','15'),(5,'P0005','10'),(6,'P0003','19'),(7,'P0002','11'),(8,'P0001','10'),(9,'P0005','11'),(10,'P0015','12'),(11,'P0002','11'),(11,'P0005','15'),(12,'P0003','19'),(12,'P0015','15'),(13,'P0005','11'),(13,'P0002','12'),(14,'P0005','19'),(15,'P0003','12'),(16,'P0015','15'),(17,'P0001','21'),(18,'P0005','21'),(18,'P0004','12'),(19,'P0004','15'),(20,'P0015','30'),(21,'P0005','30'),(22,'P0001','30');
/*!40000 ALTER TABLE `detalleboleta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `distro`
--

DROP TABLE IF EXISTS `distro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `distro` (
  `id_distro` char(3) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id_distro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `distro`
--

LOCK TABLES `distro` WRITE;
/*!40000 ALTER TABLE `distro` DISABLE KEYS */;
INSERT INTO `distro` VALUES ('L01','CERCANO'),('L02','ANCON'),('L03','ATE'),('L04','BARRANCO'),('L05','BREÑA'),('L06','CARABAYLLO'),('L07','COMAS'),('L08','CHACLACAYO'),('L09','CHORRILLOS'),('L10','EL AGUSTINO'),('L11','JESUS MARIA'),('L12','LA MOLINA'),('L13','LA VICTORIA'),('L14','LINCE'),('L15','LURIGANCHO'),('L16','LURIN'),('L17','MAGDALENA'),('L19','PACHACAMAC'),('L20','PUCUSANA');
/*!40000 ALTER TABLE `distro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto` (
  `id_producto` char(5) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `stock` int NOT NULL,
  `fecha_venc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES ('P0001','PYE DE MANZANA',20.00,500,'2015/05/14'),('P0002','TORTA DE CHOCOLATE',45.00,100,'2015/07/04'),('P0003','TORTA TRES LECHES',30.00,40,'2015/06/24'),('P0004','MOUSE DE MANZANA',35.00,70,'2015/09/06'),('P0005','ARROZ CON LECHE-ENVASE ESPECIAL',13.00,40,'2015/11/04'),('P0006','MAZAMORRA MORADA',1.50,70,'2015/12/04'),('P0007','YOGURT ARABE',3.00,100,'2015/05/04'),('P0008','PAN CON POLLO',2.00,500,'2015/06/05'),('P0009','BROWNIE',3.00,300,'2015/05/04'),('P0010','BESO DE MOZA',1.00,400,'2015/06/03'),('P0011','PYE DE LIMON',1.70,100,'2015/05/02'),('P0012','TORTA DE NARANJA',16.00,10,'2015/04/07'),('P0013','TORTA DE FRESA',41.00,100,'2015/05/07'),('P0014','ALFAJORES',0.30,400,'2015/04/06'),('P0015','CHOCOTEJAS',2.00,100,'2015/04/14'),('P0016','SUSPIRO A LA LIMEÑA',3.50,100,'2015/06/12');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-22 18:52:26
