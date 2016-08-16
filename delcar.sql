-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for delcar
CREATE DATABASE IF NOT EXISTS `delcar` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `delcar`;


-- Dumping structure for table delcar.about
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sobre` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table delcar.about: ~1 rows (approximately)
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` (`id`, `sobre`) VALUES
	(1, 'Em atividades desde Agosto de 2005 no sector de aluguer de automÃ³veis com e sem condutor, a DELCAR RENT-A-CAR, dispÃµe de uma frota diversificada de viaturas do tipo econÃ´mico, executivo e todo terreno. A DELCAR, reconhecidamente, vem primando pela prestaÃ§Ã£o de serviÃ§o de elevada qualidade, com seguranÃ§a e conforto, respeitando as normas e especificaÃ§Ãµes dos fabricantes em matÃ©ria de manutenÃ§Ã£o da sua frota. Relativamente ao serviÃ§o de aluguer o nosso critÃ©rio fundamental tem sido "ir ao encontro das necessidades dos clientes" fazendo a entrega/recolha das viaturas no Aeroporto e Porto da Praia, HotÃ©is e domicÃ­lios pessoais e profissionais.');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;


-- Dumping structure for table delcar.banner
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(200) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `ano` int(11) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table delcar.banner: ~2 rows (approximately)
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` (`id`, `tipo`, `marca`, `modelo`, `ano`, `imagem`) VALUES
	(1, 'Brevemente', 'Fiat', 'Punto', 2016, 'foto/banner/fiat_punto.jpg'),
	(2, 'Brevemente', 'Fiat', 'Tipo', 2016, 'foto/banner/Fiat_tipo.jpg');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;


-- Dumping structure for table delcar.contacto
CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefone` int(11) NOT NULL,
  `movel` int(11) NOT NULL,
  `movel_2` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table delcar.contacto: ~1 rows (approximately)
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` (`id`, `telefone`, `movel`, `movel_2`, `fax`, `email`, `endereco`) VALUES
	(1, 2623717, 9918044, 9857749, 2623719, 'cyberdel@cvtelecom.cv', 'Rua da UCCLA N 10- A.S.A, Praia');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;


-- Dumping structure for table delcar.servico
CREATE TABLE IF NOT EXISTS `servico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `conteudo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table delcar.servico: ~4 rows (approximately)
/*!40000 ALTER TABLE `servico` DISABLE KEYS */;
INSERT INTO `servico` (`id`, `nome`, `conteudo`) VALUES
	(1, 'Aluguer', 'Par alÃ©m do aluguer convencional temos disponÃ­vel um serviÃ§o de "aluguer de longa duraÃ§Ã£o" destinado a empresas e outras instituiÃ§Ãµes, proporcionando maior beneficio ao nÃ­vel da mobilidade, liberdade e tranquilidade, por um preÃ§o mais reduzido. Esta soluÃ§Ã£o Ã© ideal para pessoal deslocado na cidade da Praia em serviÃ§o temporÃ¡rio ou ferias por um perÃ­odo igual ou superior a um mÃªs. '),
	(2, 'Cadeiras de BebÃ©s', 'Dispomos de cadeiras para bebÃ© adaptadas Ã  sua altura/peso para poder garantir a seguranÃ§a dos filhos dos nossos clientes.'),
	(3, 'Chauffeur Service', 'A Delcar Chauffer Service, disponÃ­vel na cidade da Praia e para qualquer parte da ilha de santiago, com motoristas qualificados, oferecendo-lhe um serviÃ§o com discriÃ§Ã£o e profissionalismo'),
	(4, 'Veiculos Novos e Usados', 'A Delcar disponibiliza de um serviÃ§o de venda de veÃ­culos novos e usados para os nossos clientes. Temos a venda veÃ­culos do tipo: Fiat Panda, Mitsubishi L200 e Fiat Pinto.');
/*!40000 ALTER TABLE `servico` ENABLE KEYS */;


-- Dumping structure for table delcar.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table delcar.user: ~1 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`, `email`, `name`, `tipo`) VALUES
	(1, 'eddy', '12345', 'edy_silva14@hotmail.com', 'Edilson Mendes', 'admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;


-- Dumping structure for table delcar.veiculo
CREATE TABLE IF NOT EXISTS `veiculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `discricao` varchar(500) NOT NULL,
  `preco` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table delcar.veiculo: ~16 rows (approximately)
/*!40000 ALTER TABLE `veiculo` DISABLE KEYS */;
INSERT INTO `veiculo` (`id`, `marca`, `modelo`, `discricao`, `preco`, `image`) VALUES
	(1, 'Kia', 'Sportage', '2000 c.c | 4x4 | gasÃ³leo | 5 assentos | ar condicionado | 5 portas                           \r\n                                ', 73, 'foto/kia_sportage.jpg'),
	(4, 'Ford', 'Ranger', '2500 c.c | 4x4 | gasÃ³leo | 5 assentos | ar condicionado | 5 portas', 65, 'foto/ford_ranger.jpg'),
	(5, 'Toyota', 'Yares Sedan', '1300 c.c | gasolina | 5 assentos | ar condicionado | 5 portas', 54, 'foto/toyota_yaris_sedan.jpg'),
	(6, 'Toyota', 'Yaris', '1400 c.c | gasolina | 5 assentos | ar condicionado | 5 portas', 50, 'foto/toyota_yaris.jpg'),
	(7, 'Ford', 'Focus', '1600 c.c | galsina | 5 assentos | ar condicionado | 5 portas', 54, 'foto/ford_focus.png'),
	(8, 'Toyota', 'Landcruiser Prado', '3000 c.c | 4x4 | gasÃ³leo | 5 assentos | ar condicionado | 5 portas', 180, 'foto/toyota prado.jpg'),
	(9, 'Kia', 'Rio Sedan', '1200 c.c | gasolina | 5 assentos | ar condicionado | 5 portas', 54, 'foto/kin_sedam.jpg'),
	(10, 'Deihatsu', 'Terios', '1500 c.c | 4x4 |gasolina | 5 assentos | ar condicionado | 5 portas', 59, 'foto/terios.jpg'),
	(11, 'Ford', 'EcoSport', '1500 c.c | gasÃ³leo | 5 assentos | ar condicionado | 5 portas', 59, 'foto/ford_eco.jpg'),
	(12, 'Ford', 'Everest', '2500 c.c | 4x4 | gasÃ³leo | 7 assentos | ar condicionado | 5 portas', 71, 'foto/ford_everest.jpg'),
	(13, 'Renault', 'Duster', '1500 c.c | 4x4 | gasÃ³leo | 5 assentos | ar condicionado | 5 portas', 63, 'foto/renault-duster.jpg'),
	(15, 'Mitsubishi', 'L200', '2500 c.c | 4x4 | gasÃ³leo | 5 assentos | ar condicionado | 5 portas', 0, 'foto/mitsubishi_l200.jpg'),
	(16, 'Fiat', 'Panda', '1200 c.c | gasolina | 5 assentos | ar condicionado | 5 portas', 45, 'foto/fiatpanda.jpg'),
	(17, 'VolksWagen', 'UP', '1000 c.c | gasolina | 5 assentos | ar condicionado | 5 portas', 45, 'foto/volkswagen_up.jpg'),
	(18, 'Fiat', 'Tipo', '1400 c.c ||gasolina | 5 assentos | ar condicionado | 5 portas', 0, 'foto/fiat_tipo.jpg'),
	(19, 'Fiat', 'Punto', '1400 c.c | gasolina | 5 assentos | ar condicionado | 5 portas', 0, 'foto/fiat_punto.jpg');
/*!40000 ALTER TABLE `veiculo` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
