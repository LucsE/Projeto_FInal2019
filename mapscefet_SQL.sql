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
CREATE TABLE `Sala` (
  `identificacao` varchar(5) NOT NULL,
  `nome` text NOT NULL,
  `departamento` text NOT NULL,
  `responsavel` text,
  `definicao` text NOT NULL,
  `utilizacao` text NOT NULL,
  `como_chegar` text NOT NULL,
  `localizacao` text NOT NULL,
  `telefone` text,
  `horario_funcionamento` text 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;


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

create or replace view Sala_Descricao as select definicao,utilizacao,como_chegar from Sala;
create or replace Sala_Ficha as select identificacao,nome,departamento,responsavel,localizacao,horario_funcionamente from Sala;
