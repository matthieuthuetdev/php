  

CREATE DATABASE IF NOT EXISTS `guiderestaurant` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `guiderestaurant`;

CREATE TABLE IF NOT EXISTS `restaurants` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `commentaire` text,
  `prix` decimal(8,2) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `note` double DEFAULT NULL,
  `visite` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `ck_note` CHECK ((`note` between 0 and 10))
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `restaurants` (`id`, `nom`, `commentaire`, `prix`, `adresse`, `note`, `visite`) VALUES
	(1, 'JEAN-YVES SCHILLINGER', 'Le JY\'S est un restaurant différent des autres avec un décor cosy et résolument contemporain qui attire une très belle clientèle cosmopolite. Jean-Yves Schillinger est un chef doublement étoilé créatif qui vous entraînera dans une ronde dépaysante à souhait où la cuisine du monde est à l\'honneurLe chef décline la cuisine fusion à sa façon. Une carte régulièrement renouvelée s\'égaye de créations audacieuses et de plats revisités avec modernité  et pertinence.', 50.00, '17 Rue de la Poissonnerie,68000 Colma', 9, '2019-12-05'),
	(2, 'L’ADRIATICO', 'Une des meilleurs pizzéria de la région Service très agréable, efficace et souriant Salle principale un peu bruyante mais cela donne un côté italien je recommande', 25.00, '6 route de Neuf Brisach, 68000, Colmar, France', 8, '2020-02-04');

