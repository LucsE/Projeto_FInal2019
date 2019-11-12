SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `mapa_cefet`
--
#drop database mapa_cefet;
create database mapa_cefet;
use mapa_cefet;
-- --------------------------------------------------------

#DROP TABLE IF EXISTS `info_sala`;
CREATE TABLE IF NOT EXISTS `info_sala` (
  `identificacao` varchar(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `departamento` varchar(45)  NOT NULL,
  `localizacao` VARCHAR(200),
  `ponto_de_referencia` VARCHAR(200),
  `responsavel` varchar(90) NOT NULL,
  `descricao` varchar(580) NOT NULL,
  `telefone` varchar(9),
  `horario_funcionamento` VARCHAR(100) NOT NULL,
  
  PRIMARY KEY (`identificacao`)
);


#DROP TABLE IF EXISTS `imagens`;
CREATE TABLE IF NOT EXISTS `imagens` (
  `id` int AUTO_INCREMENT,
  `identificacao` varchar(10) NOT NULL,
  `panoramica` varchar(100)  NOT NULL,
  `frontal` varchar(100)  NOT NULL,
  `lateral` varchar(100)  NOT NULL,
  `dianteira` varchar(100)  NOT NULL,
  `imagem360` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

#select*from imagens;