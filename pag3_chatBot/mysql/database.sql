-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: preguntas
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `ID_Categoria` int NOT NULL,
  `nombre` text,
  PRIMARY KEY (`ID_Categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (0,'Historia'),(1,'Actividad'),(2,'Aporte'),(3,'Socios'),(4,'Academia');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pregunta`
--

DROP TABLE IF EXISTS `pregunta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pregunta` (
  `ID_pregunta` int NOT NULL,
  `contenido` text,
  `respuesta` text,
  `ID_Categoria` int DEFAULT NULL,
  PRIMARY KEY (`ID_pregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pregunta`
--

LOCK TABLES `pregunta` WRITE;
/*!40000 ALTER TABLE `pregunta` DISABLE KEYS */;
INSERT INTO `pregunta` VALUES (0,'¿Cual es el nombre completo de la empresa?','El nombre completo es Naatik A.I. Solutions, Sociedad Anónima Promotora de Inversión de Capital Variable (SAPI de C.V.). ',0),(1,'¿Què significa Naatik?','Naatik es una expresión en maya que significa comprensión. Se escogió como lema de la empresa sobre comprensión de soluciones inteligentes para las empresas e industrias.',0),(2,'¿Còmo se fundò la empresa Naatik?','Se formó por acuerdo de los dos socios principales: José Álvarez Icaza Longoria (Pepe) y Pablo Héctor Ibargüengoytia González (Pablo). Pepe es economista y tiene cerca de 40 años inmerso en los negocios de tecnologías de información y comunicaciones (TICs) en México. Es el director general de la empresa hermana Masterchannel que tiene presencia en 180 ciudades del país. Pablo es doctor en computación con especialidad en inteligencia artificial y está recién jubilado del Instituto de Investigaciones Eléctricas (IIE) ahora nombrado Instituto Nacional de Electricidad y Energías Limpias (INEEL). El tercer socio es el Maestro en computación aplicada Uriel Alejandro García López quien es el experto en desarrollo de proyectos de software. La unión de talentos de los tres y la coyuntura de la tecnología de la inteligencia artificial en las empresas descubrió un área de oportunidad.',0),(3,'¿Cuàndo comenzaron las operaciones?','e toma como fecha de inicio de operaciones el día de la firma del acta constitutiva en la notaría. La fecha es 23 de Julio del 2020.',0),(4,'¿Tiene Naatik RFC y Reniecyt?','Se toma como fecha de inicio de operaciones el día de la firma del acta constitutiva en la notaría. La fecha es 23 de Julio del 2020.',1),(5,'¿Cuàles son las principales lìneas del negocio?','Naatik A.I. Solutions tiene ambos registros. El federal de causantes en NAS200723T10 y en reniecyt del Conacyt es 2000846',1),(6,'¿Cuàl es la principal lìnea de negocios de Naatik?','\n\n\n        \n        \n        \n        \n\n\nNaatik cuenta con tres líneas principales de negocio:\n\n        Desarrollo de sistemas\n        informáticos con especialidad en el uso de técnicas de\n        inteligencia artificial.\n        \n        Vinculación Academia –\n        Industria.\n        \n        Atención a convocatorias\n        para desarrollo de proyectos.\n\nPara\nla primera línea contamos con años de experiencia en el desarrollo\nde sistemas inteligentes aplicados al sector energético. Como\nejemplos se pueden mencionar el sistema de diagnóstico de turbinas\neólicas basado en modelos de comportamiento. Otro ejemplo es el\npronóstico de energía eólica de un parque utilizando modelos\nhíbridos con IA.\nPara\nla segunda línea, estamos combinando las relaciones del mundo\nempresarial, es decir, detectamos problemas que existan en las\nempresas, con los mejores talentos del país en diferentes\nespecialidades de la academia donde estamos en contacto. Contamos con\ncolegas asociados en diferentes instalaciones de la UNAM como el\nInstituto de Energías Renovables (IER) o del Instituto Nacional de\nAstrofísica, Óptica y Electrónica (INAOE) así como de otras\ninstituciones académicas.\nPara\nla tercera línea, hemos aplicado a convocatorias como la de\nProyectos Nacionales Estratégicos (Pronaces) del Conacyt.\nParticipamos con la propuesta titulada Sistemas Energéticos\nSustentables para el municipio de Tepoztlán, Morelos. Para esta\nconvocatoria, formamos un equipo de trabajo de primer nivel con\nexpertos en diferentes especialidades como energía solar y energía\nbasada en biomasa y otras especialidades de gestión rural de\nproyectos. La propuesta no fue favorecida por Conacyt pero el equipo\nhumano quedó formado y con la decisión para buscar otras fuentes de\nfinanciamiento.',1),(7,'¿Què problemas puede resolver Naatik en las empresas o industrias?','En principio, aunque la primera línea de negocios es el diseño de sistemas inteligentes, \ncualquier tipo de problema se puede resolver encontrando el experto apropiado. Naatik tiene \nrelaciones con talentos que laboran en diferentes instituciones académicas del país. Naatik \nbusca al experto y propone el proyecto para resolver el problema.',2),(8,'¿Què tipo de soluciones me ofrece la inteligencia artificial?','La inteligencia artificial (IA) pretende automatizar las habilidades humanas. Por ejemplo \nrazonar, entender lenguaje natural, ver y reconocer patrones, manejar incertidumbre y tomar \ndecisiones. Cuando algún problema en la empresa requiera de esas habilidades humanas pero \nhacerlo rápido y preciso, se utiliza la IA',2),(9,'¿Còmo funciona la vinculaciòn Industria / Academia?','or una parte, Naatik está inmerso en el mundo de los negocios en México, especialmente los \nde Tecnologías de Información y Telecomunicaciones (TICs). Conocemos de los problemas \ntípicos y no tan típicos que las empresas modernas tienen. Por otra parte, conocemos talentos \nde varias instituciones académicas, de diversas áreas del conocimiento y que son capaces de \nproponer soluciones novedosas a los problemas identificados. También existe conocimiento de \ngrandes avances de la ciencia que los científicos tienen en sus cajones por desconocimiento de \ncómo sacarlos a la industria. Naatik ofrece esta vinculación como otra área del negocio.',4),(10,'¿Quiènes son los socios principales?','Son tres los socios iniciales de Naatik.\n José Álvarez Icaza Longoria, licenciado en economía, empresario y con más de 35 años \nde involucramiento en empresas de Tecnologías de Información y Telecomunicaciones \n(TICs).\n Pablo Héctor Ibargüengoytia González, doctor en Computación con especialidad en \nInteligencia Artificial. Jubilado después de 35 años de labores en el Instituto de \nInvestigaciones Eléctricas (IIE), ahora Instituto Nacional de Electricidad y Energías \nLimpias (INEEL).\n Uriel Alejandro García López, maestro en computación aplicada y con más de 10 años \nde experiencia en desarrollo de proyectos de software utilizando técnicas de \ninteligencia artificial.',3),(11,'¿Ademàs de los socios, tienen algunos otros colaboradores?','Tenemos colaboradores principalmente de las siguientes instituciones:\n Instituto Nacional de Electricidad y Energías Limpias (INEEL)\n Instituto Nacional de Astrofísica, Óptica y Electrónica (INAOE)\n Instituto de Energías Renovables (IER) de la UNAM\n Instituto de Ingeniería de la UNAM\n Academia Mexicana de Computación (AMEXCOMP)\n Universidad Autónoma del Estado de Morelos (UAEM)\n Instituto de Bioingeniería (IBT) de la UNAM\n Instituto Tecnológico y de Estudios Superiores de Monterrey (ITESM)',3),(12,'¿Tienen empresas hermanas y cuàles son?','Tenemos dos empresas hermanas principales:\n1. Masterchannel, empresa proveedora de servicios profesionales en la Industria de \nTecnologías de Información y Comunicaciones, con presencia en las 80 ciudades más \nimportantes de México. (masterchannel.com.mx) \n2. Aldawa Technologies, empresa especializada en proveer soluciones de alta tecnología \ny la utilización de inteligencia artificial para el sector salud. (aldawatech.com)',3),(13,'¿Con cuales otras instituciones tiene Naatik relaciones de negocios?','Naatik tiene la capacidad de buscar relaciones en las instituciones apropiadas para resolver \nproblemas. Principalmente, tiene relaciones con las siguientes instituciones:\n Instituto Nacional de Electricidad y Energías Limpias (INEEL)\n Instituto Nacional de Astrofísica, Óptica y Electrónica (INAOE)\n Instituto de Energías Renovables (IER) de la UNAM\n Instituto de Ingeniería de la UNAM\n Academia Mexicana de Computación (AMEXCOMP)\n Universidad Autónoma del Estado de Morelos (UAEM)\n Instituto de Bioingeniería (IBT) de la UNAM\n Instituto Tecnológico y de Estudios Superiores de Monterrey (ITESM)\n Y otros más',3),(14,'¿Què opciones se ofrecen para estudiantes?','Naatik ofrece todo tipo de oportunidades para estudiantes en las carreras que requiera la \nempresa. Desde servicio social, prácticas profesionales, estancias académicas, becas de tesis \nde licenciatura, maestría y doctorado. También podremos próximamente aceptar programas \nde posdoctorado.',4);
/*!40000 ALTER TABLE `pregunta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-05 22:58:43
