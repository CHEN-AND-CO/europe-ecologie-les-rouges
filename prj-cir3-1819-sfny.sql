-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 11 jan. 2019 à 22:23
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `frm1`
--

-- --------------------------------------------------------

--
-- Structure de la table `deplacement`
--

DROP TABLE IF EXISTS `deplacement`;
CREATE TABLE IF NOT EXISTS `deplacement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `annee` int(11) DEFAULT NULL,
  `mois` int(11) DEFAULT NULL,
  `date_validation` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_id1` int(11) DEFAULT NULL,
  `validation` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `fk_deplacement_user1_idx` (`user_id`),
  KEY `fk_deplacement_user2_idx` (`user_id1`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `deplacement`
--

INSERT INTO `deplacement` (`id`, `annee`, `mois`, `date_validation`, `created`, `updated`, `user_id`, `user_id1`, `validation`) VALUES
(1, 2018, 1, NULL, NULL, NULL, 2, NULL, NULL),
(2, 2019, 1, NULL, NULL, NULL, 1, NULL, NULL),
(3, 2019, 1, NULL, NULL, NULL, 2, NULL, NULL),
(4, 2019, 1, NULL, NULL, NULL, 3, NULL, NULL),
(5, 2019, 2, NULL, NULL, NULL, 1, NULL, NULL),
(7, 2019, 3, NULL, NULL, NULL, 2, NULL, NULL),
(8, 2019, 5, NULL, NULL, NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `deplacement_jour`
--

DROP TABLE IF EXISTS `deplacement_jour`;
CREATE TABLE IF NOT EXISTS `deplacement_jour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nb_km` double DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `jour` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `type_deplacement_id` int(11) DEFAULT NULL,
  `deplacement_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `fk_deplacement_jour_type_deplacement1_idx` (`type_deplacement_id`),
  KEY `fk_deplacement_jour_deplacement1_idx` (`deplacement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `deplacement_jour`
--

INSERT INTO `deplacement_jour` (`id`, `nb_km`, `montant`, `jour`, `date`, `created`, `updated`, `type_deplacement_id`, `deplacement_id`) VALUES
(1, 15.6, 7, 3, NULL, NULL, NULL, 1, 1),
(2, 15.6, 7, 5, NULL, NULL, NULL, 1, 1),
(3, 65, 45, 15, NULL, NULL, NULL, 1, 2),
(4, 10, 1, 18, NULL, NULL, NULL, 1, 2),
(5, 4, 0.5, 3, NULL, NULL, NULL, 1, 3),
(6, 123, 56, 28, NULL, NULL, NULL, 1, 4),
(7, 345, 12, 14, '2019-01-14', NULL, NULL, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `service`) VALUES
(1, 'Administration'),
(2, 'Informatique');

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

DROP TABLE IF EXISTS `societe`;
CREATE TABLE IF NOT EXISTS `societe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `societe` varchar(45) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `fk_societe_ville1_idx` (`ville_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `societe`
--

INSERT INTO `societe` (`id`, `societe`, `adresse`, `ville_id`) VALUES
(1, 'Isen Brest', '20 rue Cuirassé Bretagne', 1),
(2, 'Isen Nantes', '35 Avenue du Champ de Manœuvre', 2),
(3, 'Isen Caen', NULL, 4);

-- --------------------------------------------------------

--
-- Structure de la table `type_deplacement`
--

DROP TABLE IF EXISTS `type_deplacement`;
CREATE TABLE IF NOT EXISTS `type_deplacement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_deplacement` varchar(45) DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_deplacement`
--

INSERT INTO `type_deplacement` (`id`, `type_deplacement`, `montant`, `created`, `updated`) VALUES
(1, 'velo uniquement', 0.49, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type_user`
--

DROP TABLE IF EXISTS `type_user`;
CREATE TABLE IF NOT EXISTS `type_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_user` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_user`
--

INSERT INTO `type_user` (`id`, `type_user`) VALUES
(1, 'admin'),
(2, 'utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `distance_init` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `type_user_id` int(11) DEFAULT NULL,
  `societe_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `ville_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `fk_user_type_user_idx` (`type_user_id`),
  KEY `fk_user_societe1_idx` (`societe_id`),
  KEY `fk_user_service1_idx` (`service_id`),
  KEY `fk_user_ville1_idx` (`ville_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `adresse`, `distance_init`, `created`, `updated`, `type_user_id`, `societe_id`, `service_id`, `ville_id`) VALUES
(1, 'admin', NULL, NULL, NULL, '2018-09-12 00:00:00', '2018-09-12 00:00:00', 1, 1, 1, 1),
(2, 'Rambert', 'Julien', '1 Rue du Milieu', 15.6, '2018-09-12 00:00:00', '2019-01-11 22:13:37', 2, 2, 2, 1),
(3, 'Le Torc\'h', 'Kévin', '43 Rue Calmette et Guérin', 10, '2019-01-02 12:57:00', NULL, 1, 1, 2, 1),
(5, 'B Moigne', 'Alex', 'Stebre', 12, NULL, NULL, 1, 1, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ville` varchar(100) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `ville`, `cp`) VALUES
(1, 'Brest', '29200'),
(2, 'Nantes', '4400'),
(3, 'Rennes', '35000'),
(4, 'Caen', '14000'),
(5, 'Plouzané', '29280'),
(6, 'Carquefou', '44470'),
(7, 'toulon', '83000');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `deplacement`
--
ALTER TABLE `deplacement`
  ADD CONSTRAINT `fk_deplacement_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_deplacement_user2` FOREIGN KEY (`user_id1`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `deplacement_jour`
--
ALTER TABLE `deplacement_jour`
  ADD CONSTRAINT `fk_deplacement_jour_deplacement1` FOREIGN KEY (`deplacement_id`) REFERENCES `deplacement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_deplacement_jour_type_deplacement1` FOREIGN KEY (`type_deplacement_id`) REFERENCES `type_deplacement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `societe`
--
ALTER TABLE `societe`
  ADD CONSTRAINT `fk_societe_ville1` FOREIGN KEY (`ville_id`) REFERENCES `ville` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_service1` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_societe1` FOREIGN KEY (`societe_id`) REFERENCES `societe` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_type_user` FOREIGN KEY (`type_user_id`) REFERENCES `type_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_ville1` FOREIGN KEY (`ville_id`) REFERENCES `ville` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
