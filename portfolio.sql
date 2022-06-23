-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table portfolio.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table portfolio.projects: ~3 rows (approximately)
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` (`id`, `name`, `description`, `image`) VALUES
	(1, 'Meldingen Management Systeem', 'De Organisatie wil meldingen van gebruikers bewaren. \r\nOok willen ze meldingen gaan afhandelen. De afhandeling wordt gedaan door het personeel. \r\n', 'https://www.topdesk.com/nl/wp-content/media/sites/32/featured-images-incident-management-facebook-1200x630.jpg'),
	(2, '4 op een rij', '4 op een rij het spel', 'https://media.s-bol.com/r0lO1g452Om4/2xQ77ON/550x610.jpg'),
	(3, 'Restaurant Website', 'Website voor een restaurant, gebruiker kan account aanmaken en bestellen.', 'https://www.viewalmere.nl/assets/components/phpthumbof/cache/212.96f433329ba18fbb69aec5570cf11e53.jpg');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;

-- Dumping structure for table portfolio.reactions
CREATE TABLE IF NOT EXISTS `reactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `adress` varchar(100) DEFAULT NULL,
  `postal` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `message` text NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table portfolio.reactions: ~4 rows (approximately)
/*!40000 ALTER TABLE `reactions` DISABLE KEYS */;
INSERT INTO `reactions` (`id`, `name`, `email`, `subject`, `company`, `place`, `adress`, `postal`, `phone`, `message`, `date`) VALUES
	(1, 'Dion Cali', 'dion.cali2@gmail.com', 'test', '', NULL, '', '', '', 'test', NULL),
	(2, 'Dion Cali', 'dion.cali2@gmail.com', 'test', '', NULL, '', '', '', 'test', NULL),
	(3, 'Dion Cali', 'dion.cali2@gmail.com', 'test', '', '', '', '', '', 'test', NULL),
	(4, 'TEst', 'dion.cali2@gmail.com', 'test', '', '', '', '', '', 'dfsdf', '2022-06-19 00:00:00');
/*!40000 ALTER TABLE `reactions` ENABLE KEYS */;

-- Dumping structure for table portfolio.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `icon` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table portfolio.services: ~3 rows (approximately)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `name`, `description`, `icon`) VALUES
	(1, 'Web Design', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.', 'fa-paint-brush'),
	(2, 'Advertising', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.', 'fa-chart-line'),
	(3, 'Apps Design', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.', 'fa-code');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table portfolio.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `percent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table portfolio.skills: ~3 rows (approximately)
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` (`id`, `name`, `percent`) VALUES
	(1, 'PHP', 60),
	(2, 'HTML', 70),
	(3, 'CSS', 45);
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
