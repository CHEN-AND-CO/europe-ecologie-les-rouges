-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 17 oct. 2018 à 06:14
-- Version du serveur :  5.5.60-0+deb8u1
-- Version de PHP :  7.0.32-1~dotdeb+8.1

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
CREATE DATABASE IF NOT EXISTS `frm1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `frm1`;

-- --------------------------------------------------------

--
-- Structure de la table `deplacement`
--

CREATE TABLE `deplacement` (
  `id` int(11) NOT NULL,
  `mois` int(11) NOT NULL,
  `date_validation` date NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `validation` tinyint(4) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_user_valide_par` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `deplacement_jour`
--

CREATE TABLE `deplacement_jour` (
  `id` int(11) NOT NULL,
  `nb_km` double NOT NULL,
  `montant` double NOT NULL,
  `jour` int(11) NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `id_deplacement` int(11) NOT NULL,
  `id_type_deplacement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE `societe` (
  `id` int(11) NOT NULL,
  `societe` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_ville` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_deplacement`
--

CREATE TABLE `type_deplacement` (
  `id` int(11) NOT NULL,
  `type_deplacement` varchar(50) NOT NULL,
  `montant` double NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_user`
--

CREATE TABLE `type_user` (
  `id` int(11) NOT NULL,
  `type_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `distance_init` double NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_type_user` int(11) NOT NULL,
  `id_ville` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `cp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `deplacement`
--
ALTER TABLE `deplacement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deplacement_user_FK` (`id_user`),
  ADD KEY `deplacement_user0_FK` (`id_user_valide_par`);

--
-- Index pour la table `deplacement_jour`
--
ALTER TABLE `deplacement_jour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deplacement_jour_deplacement_FK` (`id_deplacement`),
  ADD KEY `deplacement_jour_type_deplacement0_FK` (`id_type_deplacement`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `societe_user_FK` (`id_user`),
  ADD KEY `societe_ville0_FK` (`id_ville`);

--
-- Index pour la table `type_deplacement`
--
ALTER TABLE `type_deplacement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_service_FK` (`id_service`),
  ADD KEY `user_type_user0_FK` (`id_type_user`),
  ADD KEY `user_ville1_FK` (`id_ville`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `deplacement`
--
ALTER TABLE `deplacement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `deplacement_jour`
--
ALTER TABLE `deplacement_jour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `societe`
--
ALTER TABLE `societe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `type_deplacement`
--
ALTER TABLE `type_deplacement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `type_user`
--
ALTER TABLE `type_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `deplacement`
--
ALTER TABLE `deplacement`
  ADD CONSTRAINT `deplacement_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `deplacement_user0_FK` FOREIGN KEY (`id_user_valide_par`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `deplacement_jour`
--
ALTER TABLE `deplacement_jour`
  ADD CONSTRAINT `deplacement_jour_deplacement_FK` FOREIGN KEY (`id_deplacement`) REFERENCES `deplacement` (`id`),
  ADD CONSTRAINT `deplacement_jour_type_deplacement0_FK` FOREIGN KEY (`id_type_deplacement`) REFERENCES `type_deplacement` (`id`);

--
-- Contraintes pour la table `societe`
--
ALTER TABLE `societe`
  ADD CONSTRAINT `societe_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `societe_ville0_FK` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_service_FK` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`),
  ADD CONSTRAINT `user_type_user0_FK` FOREIGN KEY (`id_type_user`) REFERENCES `type_user` (`id`),
  ADD CONSTRAINT `user_ville1_FK` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
