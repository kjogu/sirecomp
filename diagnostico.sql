-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2014 at 07:45 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diagnostico`
--
CREATE DATABASE IF NOT EXISTS `diagnostico` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `diagnostico`;

-- --------------------------------------------------------

--
-- Table structure for table `adesco`
--

CREATE TABLE IF NOT EXISTS `adesco` (
  `idnit` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `asamblea` date DEFAULT NULL,
  `juntadirectiva` date DEFAULT NULL,
  `acuerdomuni` date DEFAULT NULL,
  `quien` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaju` date NOT NULL,
  `carta` date NOT NULL,
  `idcomunidad` int(11) NOT NULL,
  PRIMARY KEY (`idnit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adesco`
--

INSERT INTO `adesco` (`idnit`, `nombre`, `asamblea`, `juntadirectiva`, `acuerdomuni`, `quien`, `fechaju`, `carta`, `idcomunidad`) VALUES
(1, 'canton las delicias', '2013-09-03', '2013-09-05', '2013-09-09', 'alcalde hirezi', '2013-09-20', '2013-09-02', 1),
(2, 'Adesco alla ', '2013-10-14', '2013-10-16', '2013-10-09', 'Carlos flores, alcalde', '2013-10-24', '2013-10-10', 3);

-- --------------------------------------------------------

--
-- Table structure for table `calle`
--

CREATE TABLE IF NOT EXISTS `calle` (
  `idcalle` int(11) NOT NULL AUTO_INCREMENT,
  `idcomunidad` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `idtipocalle` int(11) NOT NULL,
  `idcondicion` int(11) NOT NULL,
  PRIMARY KEY (`idcalle`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `calle`
--

INSERT INTO `calle` (`idcalle`, `idcomunidad`, `nombre`, `idtipocalle`, `idcondicion`) VALUES
(1, 1, 'Avenida norte', 2, 3),
(2, 2, 'Principal', 3, 1),
(3, 3, 'Calle', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `idcargo` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idcargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`idcargo`, `cargo`) VALUES
(1, 'Presidente'),
(2, 'Vice Presidente'),
(3, 'Secretario(a)'),
(4, 'Tesorero(a)'),
(5, 'Vocal 1'),
(6, 'Vocal 2'),
(7, 'Vocal 3'),
(8, 'Sidicom');

-- --------------------------------------------------------

--
-- Table structure for table `clima`
--

CREATE TABLE IF NOT EXISTS `clima` (
  `idclima` int(11) NOT NULL AUTO_INCREMENT,
  `clima` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idmedioamb` int(11) DEFAULT NULL,
  `idcomunidad` int(11) NOT NULL,
  PRIMARY KEY (`idclima`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comunal`
--

CREATE TABLE IF NOT EXISTS `comunal` (
  `idcomunal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `area` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fundacion` date DEFAULT NULL,
  `idterreno` int(11) DEFAULT NULL,
  `idobras` int(11) DEFAULT NULL,
  `idcondicion` int(11) DEFAULT NULL,
  `idcomunidad` int(11) NOT NULL,
  PRIMARY KEY (`idcomunal`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comunal`
--

INSERT INTO `comunal` (`idcomunal`, `nombre`, `area`, `fundacion`, `idterreno`, `idobras`, `idcondicion`, `idcomunidad`) VALUES
(1, 'comunal santa lucia', '500', '2001-01-20', 2, NULL, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `comunidad`
--

CREATE TABLE IF NOT EXISTS `comunidad` (
  `idcomunidad` int(11) NOT NULL AUTO_INCREMENT,
  `iddepa` int(11) NOT NULL,
  `idmunicipio` int(11) NOT NULL,
  `idzona` int(11) NOT NULL,
  `idsector` int(11) DEFAULT NULL,
  `idlimitegeo` int(11) DEFAULT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idcomunidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `comunidad`
--

INSERT INTO `comunidad` (`idcomunidad`, `iddepa`, `idmunicipio`, `idzona`, `idsector`, `idlimitegeo`, `nombre`) VALUES
(1, 1, 1, 1, 1, 1, 'Santa Lucia'),
(2, 1, 4, 2, 3, 4, 'Agua Zarca'),
(3, 2, 2, 2, 2, 5, 'El Bosque'),
(4, 1, 1, 1, 1, 1, 'Las margaritas'),
(5, 1, 1, 2, 1, 1, 'Zacatillos'),
(6, 1, 1, 1, 1, 1, 'El volcancito');

-- --------------------------------------------------------

--
-- Table structure for table `condicion`
--

CREATE TABLE IF NOT EXISTS `condicion` (
  `idcondicion` int(11) NOT NULL AUTO_INCREMENT,
  `condicion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idcondicion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `condicion`
--

INSERT INTO `condicion` (`idcondicion`, `condicion`) VALUES
(1, 'Mala'),
(2, 'Regular'),
(3, 'Buena');

-- --------------------------------------------------------

--
-- Table structure for table `depa`
--

CREATE TABLE IF NOT EXISTS `depa` (
  `iddepa` int(11) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`iddepa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `depa`
--

INSERT INTO `depa` (`iddepa`, `departamento`) VALUES
(1, 'La Paz'),
(2, 'San Vicente'),
(3, 'Usulutan');

-- --------------------------------------------------------

--
-- Table structure for table `escuela`
--

CREATE TABLE IF NOT EXISTS `escuela` (
  `idescuela` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `grados` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ninos` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ninas` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `turnos` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `area` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `docentes` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fundacion` date DEFAULT NULL,
  `idcondicion` int(11) DEFAULT NULL,
  `idterreno` int(11) DEFAULT NULL,
  `idobras` int(11) DEFAULT NULL,
  `idinstedu` int(11) NOT NULL,
  `idcomunidad` int(11) NOT NULL,
  PRIMARY KEY (`idescuela`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `escuela`
--

INSERT INTO `escuela` (`idescuela`, `nombre`, `grados`, `ninos`, `ninas`, `turnos`, `area`, `docentes`, `fundacion`, `idcondicion`, `idterreno`, `idobras`, `idinstedu`, `idcomunidad`) VALUES
(1, 'Profesor carlos lovato', '8', '40', '50', 'maÃ±ana y tarde', '700', '3', '2001-01-14', 2, 4, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `especiefauna`
--

CREATE TABLE IF NOT EXISTS `especiefauna` (
  `idespeciefauna` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idespeciefauna`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `especiefauna`
--

INSERT INTO `especiefauna` (`idespeciefauna`, `nombre`) VALUES
(1, 'Mapache'),
(2, 'Cuzuco'),
(3, 'Iguana'),
(4, 'Garrobos'),
(5, 'Cotuza'),
(6, 'Tapir'),
(7, 'Avestruz'),
(8, 'Pezote');

-- --------------------------------------------------------

--
-- Table structure for table `especieflora`
--

CREATE TABLE IF NOT EXISTS `especieflora` (
  `idespecieflora` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idespecieflora`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `especieflora`
--

INSERT INTO `especieflora` (`idespecieflora`, `nombre`) VALUES
(1, 'Orquidia'),
(2, 'Tulipanes'),
(3, 'Rosa '),
(4, 'clavel'),
(5, 'Arbol de Mango'),
(6, 'amate'),
(7, 'Ceiba'),
(8, 'Cacao'),
(9, 'Pino'),
(10, 'Laurel');

-- --------------------------------------------------------

--
-- Table structure for table `instedu`
--

CREATE TABLE IF NOT EXISTS `instedu` (
  `idinstedu` int(11) NOT NULL AUTO_INCREMENT,
  `institucion` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idinstedu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `instedu`
--

INSERT INTO `instedu` (`idinstedu`, `institucion`) VALUES
(1, 'Centro Escolar'),
(2, 'Complejo Educativo'),
(3, 'Colegio'),
(4, 'Instituto'),
(5, 'Instituto Tecnico'),
(6, 'Universidad');

-- --------------------------------------------------------

--
-- Table structure for table `lideres`
--

CREATE TABLE IF NOT EXISTS `lideres` (
  `idlider` int(11) NOT NULL,
  `nombre` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `idnivelacad` int(11) NOT NULL,
  `idcargo` int(11) DEFAULT NULL,
  `feinicio` date DEFAULT NULL,
  `fevencrede` date NOT NULL,
  `idnit` int(11) NOT NULL,
  `idocupacion` int(11) NOT NULL,
  PRIMARY KEY (`idlider`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `lideres`
--

INSERT INTO `lideres` (`idlider`, `nombre`, `fechanac`, `idnivelacad`, `idcargo`, `feinicio`, `fevencrede`, `idnit`, `idocupacion`) VALUES
(1, 'Graciela Rivas', '1992-01-09', 2, 1, '2012-01-06', '2014-01-06', 1, 3),
(2, 'Pedro Nolasco', '1982-01-29', 1, 2, '2012-01-01', '2014-01-06', 1, 2),
(3, 'Rosario Lemus', '1987-01-31', 1, 1, '2011-01-19', '2014-01-19', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `limitegeo`
--

CREATE TABLE IF NOT EXISTS `limitegeo` (
  `idlimitegeo` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idlimitegeo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `limitegeo`
--

INSERT INTO `limitegeo` (`idlimitegeo`, `nombre`) VALUES
(1, 'Barrio'),
(2, 'Colonia'),
(3, 'Residencial'),
(4, 'Caserio'),
(5, 'Lotificacion');

-- --------------------------------------------------------

--
-- Table structure for table `medioamb`
--

CREATE TABLE IF NOT EXISTS `medioamb` (
  `idmedioamb` int(11) NOT NULL AUTO_INCREMENT,
  `ambiente` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idcomunidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmedioamb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `idmunicipio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `iddepa` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idmunicipio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `municipio`
--

INSERT INTO `municipio` (`idmunicipio`, `nombre`, `iddepa`) VALUES
(1, 'Zacatecoluca', '1'),
(2, 'Tepetitan', '2'),
(3, 'Jiquilisco', '3'),
(4, 'San juan Nonualco', '1');

-- --------------------------------------------------------

--
-- Table structure for table `nivelacad`
--

CREATE TABLE IF NOT EXISTS `nivelacad` (
  `idnivelacad` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idnivelacad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nivelacad`
--

INSERT INTO `nivelacad` (`idnivelacad`, `nivel`) VALUES
(1, 'Educacion Basica'),
(2, 'Educacion Media'),
(3, 'Educacion Superior'),
(4, 'Educacion Tecnica');

-- --------------------------------------------------------

--
-- Table structure for table `obras`
--

CREATE TABLE IF NOT EXISTS `obras` (
  `idobras` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idcomunidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`idobras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ocupacion`
--

CREATE TABLE IF NOT EXISTS `ocupacion` (
  `idocupacion` int(11) NOT NULL,
  `ocupacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idocupacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `ocupacion`
--

INSERT INTO `ocupacion` (`idocupacion`, `ocupacion`) VALUES
(1, 'Jornalero'),
(2, 'Agricultor'),
(3, 'Ama de Casa'),
(4, 'Empleado');

-- --------------------------------------------------------

--
-- Table structure for table `parentezco`
--

CREATE TABLE IF NOT EXISTS `parentezco` (
  `idparentezco` int(11) NOT NULL AUTO_INCREMENT,
  `parentezco` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idparentezco`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `parentezco`
--

INSERT INTO `parentezco` (`idparentezco`, `parentezco`) VALUES
(1, 'Padre'),
(2, 'Madre'),
(3, 'Tio'),
(4, 'Tia'),
(5, 'Abuelo'),
(6, 'Abuela'),
(7, 'Hermano'),
(8, 'Hermana'),
(9, 'Primo'),
(10, 'Prima');

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `idpersona` int(11) NOT NULL AUTO_INCREMENT,
  `infancy` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `childhood` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `adolescense` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `adulthood` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `middleage` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `oldage` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `total2` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `mujeres` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `hombres` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `total3` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `jefe1` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ocupacion1` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `nivelacademico1` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `jefe2` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ocupacion2` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `nivelacademico2` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `idvivienda` int(11) NOT NULL,
  PRIMARY KEY (`idpersona`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`idpersona`, `infancy`, `childhood`, `adolescense`, `adulthood`, `middleage`, `oldage`, `total2`, `mujeres`, `hombres`, `total3`, `jefe1`, `ocupacion1`, `nivelacademico1`, `jefe2`, `ocupacion2`, `nivelacademico2`, `idvivienda`) VALUES
(1, '3', '1', '0', '1', '2', '1', '8', '4', '4', '8', 'Tio', 'Ama de casa', 'Tercer ciclo', 'Abuelo', 'Otros', 'Bachillerato completo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `planemer`
--

CREATE TABLE IF NOT EXISTS `planemer` (
  `idplanemer` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechain` date DEFAULT NULL,
  `fechafi` date DEFAULT NULL,
  `encargados` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idriesgo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idplanemer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `produccion`
--

CREATE TABLE IF NOT EXISTS `produccion` (
  `idproduccion` int(11) NOT NULL AUTO_INCREMENT,
  `idtipoproduce` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `estacion` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `area` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `formacrianza` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `formacultivo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `productores` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cantproduc` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `costo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `consumo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `comercio` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `ingreso` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `idvivienda` int(11) NOT NULL,
  PRIMARY KEY (`idproduccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `produccion`
--

INSERT INTO `produccion` (`idproduccion`, `idtipoproduce`, `nombre`, `estacion`, `area`, `cantidad`, `formacrianza`, `formacultivo`, `productores`, `cantproduc`, `costo`, `consumo`, `comercio`, `ingreso`, `idvivienda`) VALUES
(1, 1, 'Tomate', 'verano', '40', '300', 'organico', 'suelo', 'familia', '2', '100', 'familiar', 'pequeno', '350', 1),
(2, 1, 'maiz', 'invierno', '400', '800', 'mixto', 'suelo', 'mosos', '5', '600', 'negocio', 'pequeno', '100', 1);

-- --------------------------------------------------------

--
-- Table structure for table `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `idproyectos` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idtipoayuda` int(11) DEFAULT NULL,
  `fechain` date NOT NULL,
  `fechafi` date NOT NULL,
  PRIMARY KEY (`idproyectos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recreacion`
--

CREATE TABLE IF NOT EXISTS `recreacion` (
  `idrecreacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cbask` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `cfot` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cvol` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `cotra` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `frevisita` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `visitantes` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fundacion` date DEFAULT NULL,
  `idcondicion` int(11) DEFAULT NULL,
  `idterreno` int(11) DEFAULT NULL,
  `idobras` int(11) DEFAULT NULL,
  `idtiporecre` int(11) DEFAULT NULL,
  `idcomunidad` int(11) NOT NULL,
  PRIMARY KEY (`idrecreacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recursoagua`
--

CREATE TABLE IF NOT EXISTS `recursoagua` (
  `idrecursoagua` int(11) NOT NULL AUTO_INCREMENT,
  `idtiporeagua` int(11) DEFAULT NULL,
  `area` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `zona` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idmedioamb` int(11) DEFAULT NULL,
  `idcomunidad` int(11) NOT NULL,
  PRIMARY KEY (`idrecursoagua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recursofauna`
--

CREATE TABLE IF NOT EXISTS `recursofauna` (
  `idrecursofauna` int(11) NOT NULL AUTO_INCREMENT,
  `idespeciefauna` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `zona` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cantidad` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idmedioamb` int(11) DEFAULT NULL,
  `idcomunidad` int(11) NOT NULL,
  PRIMARY KEY (`idrecursofauna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recursoflora`
--

CREATE TABLE IF NOT EXISTS `recursoflora` (
  `idrecursoflora` int(11) NOT NULL AUTO_INCREMENT,
  `idespecieflora` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `zona` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `area` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idmedioamb` int(11) DEFAULT NULL,
  `idcomunidad` int(11) NOT NULL,
  PRIMARY KEY (`idrecursoflora`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `riesgo`
--

CREATE TABLE IF NOT EXISTS `riesgo` (
  `idriesgo` int(11) NOT NULL AUTO_INCREMENT,
  `nombreri` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechain` date DEFAULT NULL,
  `fechafi` date DEFAULT NULL,
  `idcomunidad` int(11) DEFAULT NULL,
  `idobras` int(11) DEFAULT NULL,
  PRIMARY KEY (`idriesgo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `salud`
--

CREATE TABLE IF NOT EXISTS `salud` (
  `idsalud` int(11) NOT NULL AUTO_INCREMENT,
  `idtiposalud` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `equipo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `medicina` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `area` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fundacion` date DEFAULT NULL,
  `idcondicion` int(11) DEFAULT NULL,
  `idobras` int(11) DEFAULT NULL,
  `idterreno` int(11) DEFAULT NULL,
  `idcomunidad` int(11) NOT NULL,
  PRIMARY KEY (`idsalud`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `salud`
--

INSERT INTO `salud` (`idsalud`, `idtiposalud`, `nombre`, `equipo`, `medicina`, `area`, `fundacion`, `idcondicion`, `idobras`, `idterreno`, `idcomunidad`) VALUES
(1, 0, 'santa teresa', '1999-01-27', 'completo', 'no', '0000-00-00', 1, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE IF NOT EXISTS `sector` (
  `idsector` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idzona` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsector`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`idsector`, `nombre`, `idzona`) VALUES
(1, 'Urbano', 1),
(2, 'Sub Urbano', 1),
(3, 'Marranitos', 2),
(4, 'Los Reyes', 2),
(5, 'Los Nilos', 2);

-- --------------------------------------------------------

--
-- Table structure for table `terreno`
--

CREATE TABLE IF NOT EXISTS `terreno` (
  `idterreno` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idterreno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `terreno`
--

INSERT INTO `terreno` (`idterreno`, `tipo`) VALUES
(1, 'Alquilada'),
(2, 'Comodato'),
(3, 'Alcaldia'),
(4, 'En Propiedad');

-- --------------------------------------------------------

--
-- Table structure for table `tipoayuda`
--

CREATE TABLE IF NOT EXISTS `tipoayuda` (
  `idtipoayuda` int(11) NOT NULL,
  `nombreinsti` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idcomunidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`idtipoayuda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tipoayuda`
--

INSERT INTO `tipoayuda` (`idtipoayuda`, `nombreinsti`, `idcomunidad`) VALUES
(1, 'universidad luterana ', 1),
(2, 'goes', 2),
(3, 'iglesia', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tipocalle`
--

CREATE TABLE IF NOT EXISTS `tipocalle` (
  `idtipocalle` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`idtipocalle`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipocalle`
--

INSERT INTO `tipocalle` (`idtipocalle`, `tipo`) VALUES
(1, 'Piedra'),
(2, 'Alfalto'),
(3, 'Tierra');

-- --------------------------------------------------------

--
-- Table structure for table `tipoletrina`
--

CREATE TABLE IF NOT EXISTS `tipoletrina` (
  `idtipoletrina` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idtipoletrina`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipoletrina`
--

INSERT INTO `tipoletrina` (`idtipoletrina`, `tipo`) VALUES
(1, 'Abonera'),
(2, 'Fosa'),
(3, 'Lavable');

-- --------------------------------------------------------

--
-- Table structure for table `tipoproduce`
--

CREATE TABLE IF NOT EXISTS `tipoproduce` (
  `idtipoproduce` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idtipoproduce`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipoproduce`
--

INSERT INTO `tipoproduce` (`idtipoproduce`, `tipo`) VALUES
(1, 'Nativo'),
(2, 'Nativo/Quimico'),
(3, 'Quimico');

-- --------------------------------------------------------

--
-- Table structure for table `tiporeagua`
--

CREATE TABLE IF NOT EXISTS `tiporeagua` (
  `idtiporeagua` int(11) NOT NULL AUTO_INCREMENT,
  `recurso` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idtiporeagua`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tiporeagua`
--

INSERT INTO `tiporeagua` (`idtiporeagua`, `recurso`) VALUES
(1, 'Lago'),
(2, 'Rio'),
(3, 'Laguna');

-- --------------------------------------------------------

--
-- Table structure for table `tiporecre`
--

CREATE TABLE IF NOT EXISTS `tiporecre` (
  `idtiporecre` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idtiporecre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tiporecre`
--

INSERT INTO `tiporecre` (`idtiporecre`, `tipo`) VALUES
(1, 'Parque'),
(2, 'Plaza'),
(3, 'Polideportivo'),
(4, 'CicloVia');

-- --------------------------------------------------------

--
-- Table structure for table `tiposalud`
--

CREATE TABLE IF NOT EXISTS `tiposalud` (
  `idtiposalud` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idtiposalud`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tiposalud`
--

INSERT INTO `tiposalud` (`idtiposalud`, `tipo`) VALUES
(1, 'Unidad de Salud'),
(2, 'Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `tipovivi`
--

CREATE TABLE IF NOT EXISTS `tipovivi` (
  `idtipovivi` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idtipovivi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tipovivi`
--

INSERT INTO `tipovivi` (`idtipovivi`, `tipo`) VALUES
(1, 'Adobe'),
(2, 'Mixto'),
(3, 'Lamina'),
(4, 'Carton');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` varchar(75) NOT NULL,
  `clave` varchar(75) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `clave`, `estado`, `tipo`) VALUES
('admin', '^;±', 1, 'Admin'),
('usuario', '^;±«ú', 1, 'Usuario');

-- --------------------------------------------------------

--
-- Table structure for table `vivienda`
--

CREATE TABLE IF NOT EXISTS `vivienda` (
  `idvivienda` int(11) NOT NULL AUTO_INCREMENT,
  `idtipovivi` int(11) DEFAULT NULL,
  `direccion` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `area` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idcomunidad` int(11) DEFAULT NULL,
  `idtipoletrina` int(11) NOT NULL,
  `idterreno` int(11) DEFAULT NULL,
  `saguapotable` tinyint(1) NOT NULL,
  `salumbrado` tinyint(1) NOT NULL,
  `saguanegras` tinyint(1) NOT NULL,
  `seelectricidad` tinyint(1) NOT NULL,
  `strenaseo` tinyint(1) NOT NULL,
  `migracion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idvivienda`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vivienda`
--

INSERT INTO `vivienda` (`idvivienda`, `idtipovivi`, `direccion`, `area`, `idcomunidad`, `idtipoletrina`, `idterreno`, `saguapotable`, `salumbrado`, `saguanegras`, `seelectricidad`, `strenaseo`, `migracion`) VALUES
(1, 1, 'avenida sur', '300', 1, 1, 1, 0, 1, 0, 1, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `zona`
--

CREATE TABLE IF NOT EXISTS `zona` (
  `idzona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idzona`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `zona`
--

INSERT INTO `zona` (`idzona`, `nombre`) VALUES
(1, 'Urbana'),
(2, 'Rural');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
