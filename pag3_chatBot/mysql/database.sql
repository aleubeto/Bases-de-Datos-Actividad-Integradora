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
INSERT INTO `pregunta` VALUES (0,'??Cual es el nombre completo de la empresa?','El nombre completo es Naatik A.I. Solutions, Sociedad An??nima Promotora de Inversi??n de Capital Variable (SAPI de C.V.). ',0),(1,'??Qu?? significa Naatik?','Naatik es una expresi??n en maya que significa comprensi??n. Se escogi?? como lema de la empresa sobre comprensi??n de soluciones inteligentes para las empresas e industrias.',0),(2,'??C??mo se fund?? la empresa Naatik?','Se form?? por acuerdo de los dos socios principales: Jos?? ??lvarez Icaza Longoria (Pepe) y Pablo H??ctor Ibarg??engoytia Gonz??lez (Pablo). Pepe es economista y tiene cerca de 40 a??os inmerso en los negocios de tecnolog??as de informaci??n y comunicaciones (TICs) en M??xico. Es el director general de la empresa hermana Masterchannel que tiene presencia en 180 ciudades del pa??s. Pablo es doctor en computaci??n con especialidad en inteligencia artificial y est?? reci??n jubilado del Instituto de Investigaciones El??ctricas (IIE) ahora nombrado Instituto Nacional de Electricidad y Energ??as Limpias (INEEL). El tercer socio es el Maestro en computaci??n aplicada Uriel Alejandro Garc??a L??pez quien es el experto en desarrollo de proyectos de software. La uni??n de talentos de los tres y la coyuntura de la tecnolog??a de la inteligencia artificial en las empresas descubri?? un ??rea de oportunidad.',0),(3,'??Cu??ndo comenzaron las operaciones?','e toma como fecha de inicio de operaciones el d??a de la firma del acta constitutiva en la notar??a. La fecha es 23 de Julio del 2020.',0),(4,'??Tiene Naatik RFC y Reniecyt?','Se toma como fecha de inicio de operaciones el d??a de la firma del acta constitutiva en la notar??a. La fecha es 23 de Julio del 2020.',1),(5,'??Cu??les son las principales l??neas del negocio?','Naatik A.I. Solutions tiene ambos registros. El federal de causantes en NAS200723T10 y en reniecyt del Conacyt es 2000846',1),(6,'??Cu??l es la principal l??nea de negocios de Naatik?','\n\n\n        \n        \n        \n        \n\n\nNaatik cuenta con tres l??neas principales de negocio:\n\n        Desarrollo de sistemas\n        inform??ticos con especialidad en el uso de t??cnicas de\n        inteligencia artificial.\n        \n        Vinculaci??n Academia ???\n        Industria.\n        \n        Atenci??n a convocatorias\n        para desarrollo de proyectos.\n\nPara\nla primera l??nea contamos con a??os de experiencia en el desarrollo\nde sistemas inteligentes aplicados al sector energ??tico. Como\nejemplos se pueden mencionar el sistema de diagn??stico de turbinas\ne??licas basado en modelos de comportamiento. Otro ejemplo es el\npron??stico de energ??a e??lica de un parque utilizando modelos\nh??bridos con IA.\nPara\nla segunda l??nea, estamos combinando las relaciones del mundo\nempresarial, es decir, detectamos problemas que existan en las\nempresas, con los mejores talentos del pa??s en diferentes\nespecialidades de la academia donde estamos en contacto. Contamos con\ncolegas asociados en diferentes instalaciones de la UNAM como el\nInstituto de Energ??as Renovables (IER) o del Instituto Nacional de\nAstrof??sica, ??ptica y Electr??nica (INAOE) as?? como de otras\ninstituciones acad??micas.\nPara\nla tercera l??nea, hemos aplicado a convocatorias como la de\nProyectos Nacionales Estrat??gicos (Pronaces) del Conacyt.\nParticipamos con la propuesta titulada Sistemas Energ??ticos\nSustentables para el municipio de Tepoztl??n, Morelos. Para esta\nconvocatoria, formamos un equipo de trabajo de primer nivel con\nexpertos en diferentes especialidades como energ??a solar y energ??a\nbasada en biomasa y otras especialidades de gesti??n rural de\nproyectos. La propuesta no fue favorecida por Conacyt pero el equipo\nhumano qued?? formado y con la decisi??n para buscar otras fuentes de\nfinanciamiento.',1),(7,'??Qu?? problemas puede resolver Naatik en las empresas o industrias?','En principio, aunque la primera l??nea de negocios es el dise??o de sistemas inteligentes, \ncualquier tipo de problema se puede resolver encontrando el experto apropiado. Naatik tiene \nrelaciones con talentos que laboran en diferentes instituciones acad??micas del pa??s. Naatik \nbusca al experto y propone el proyecto para resolver el problema.',2),(8,'??Qu?? tipo de soluciones me ofrece la inteligencia artificial?','La inteligencia artificial (IA) pretende automatizar las habilidades humanas. Por ejemplo \nrazonar, entender lenguaje natural, ver y reconocer patrones, manejar incertidumbre y tomar \ndecisiones. Cuando alg??n problema en la empresa requiera de esas habilidades humanas pero \nhacerlo r??pido y preciso, se utiliza la IA',2),(9,'??C??mo funciona la vinculaci??n Industria / Academia?','or una parte, Naatik est?? inmerso en el mundo de los negocios en M??xico, especialmente los \nde Tecnolog??as de Informaci??n y Telecomunicaciones (TICs). Conocemos de los problemas \nt??picos y no tan t??picos que las empresas modernas tienen. Por otra parte, conocemos talentos \nde varias instituciones acad??micas, de diversas ??reas del conocimiento y que son capaces de \nproponer soluciones novedosas a los problemas identificados. Tambi??n existe conocimiento de \ngrandes avances de la ciencia que los cient??ficos tienen en sus cajones por desconocimiento de \nc??mo sacarlos a la industria. Naatik ofrece esta vinculaci??n como otra ??rea del negocio.',4),(10,'??Qui??nes son los socios principales?','Son tres los socios iniciales de Naatik.\n??? Jos?? ??lvarez Icaza Longoria, licenciado en econom??a, empresario y con m??s de 35 a??os \nde involucramiento en empresas de Tecnolog??as de Informaci??n y Telecomunicaciones \n(TICs).\n??? Pablo H??ctor Ibarg??engoytia Gonz??lez, doctor en Computaci??n con especialidad en \nInteligencia Artificial. Jubilado despu??s de 35 a??os de labores en el Instituto de \nInvestigaciones El??ctricas (IIE), ahora Instituto Nacional de Electricidad y Energ??as \nLimpias (INEEL).\n??? Uriel Alejandro Garc??a L??pez, maestro en computaci??n aplicada y con m??s de 10 a??os \nde experiencia en desarrollo de proyectos de software utilizando t??cnicas de \ninteligencia artificial.',3),(11,'??Adem??s de los socios, tienen algunos otros colaboradores?','Tenemos colaboradores principalmente de las siguientes instituciones:\n??? Instituto Nacional de Electricidad y Energ??as Limpias (INEEL)\n??? Instituto Nacional de Astrof??sica, ??ptica y Electr??nica (INAOE)\n??? Instituto de Energ??as Renovables (IER) de la UNAM\n??? Instituto de Ingenier??a de la UNAM\n??? Academia Mexicana de Computaci??n (AMEXCOMP)\n??? Universidad Aut??noma del Estado de Morelos (UAEM)\n??? Instituto de Bioingenier??a (IBT) de la UNAM\n??? Instituto Tecnol??gico y de Estudios Superiores de Monterrey (ITESM)',3),(12,'??Tienen empresas hermanas y cu??les son?','Tenemos dos empresas hermanas principales:\n1. Masterchannel, empresa proveedora de servicios profesionales en la Industria de \nTecnolog??as de Informaci??n y Comunicaciones, con presencia en las 80 ciudades m??s \nimportantes de M??xico. (masterchannel.com.mx) \n2. Aldawa Technologies, empresa especializada en proveer soluciones de alta tecnolog??a \ny la utilizaci??n de inteligencia artificial para el sector salud. (aldawatech.com)',3),(13,'??Con cuales otras instituciones tiene Naatik relaciones de negocios?','Naatik tiene la capacidad de buscar relaciones en las instituciones apropiadas para resolver \nproblemas. Principalmente, tiene relaciones con las siguientes instituciones:\n??? Instituto Nacional de Electricidad y Energ??as Limpias (INEEL)\n??? Instituto Nacional de Astrof??sica, ??ptica y Electr??nica (INAOE)\n??? Instituto de Energ??as Renovables (IER) de la UNAM\n??? Instituto de Ingenier??a de la UNAM\n??? Academia Mexicana de Computaci??n (AMEXCOMP)\n??? Universidad Aut??noma del Estado de Morelos (UAEM)\n??? Instituto de Bioingenier??a (IBT) de la UNAM\n??? Instituto Tecnol??gico y de Estudios Superiores de Monterrey (ITESM)\n??? Y otros m??s',3),(14,'??Qu?? opciones se ofrecen para estudiantes?','Naatik ofrece todo tipo de oportunidades para estudiantes en las carreras que requiera la \nempresa. Desde servicio social, pr??cticas profesionales, estancias acad??micas, becas de tesis \nde licenciatura, maestr??a y doctorado. Tambi??n podremos pr??ximamente aceptar programas \nde posdoctorado.',4);
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
