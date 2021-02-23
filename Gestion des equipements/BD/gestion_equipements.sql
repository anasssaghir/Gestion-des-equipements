-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 19 mai 2020 à 17:44
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `yassine_mh`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `email_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `username_admin`, `password_admin`, `email_admin`) VALUES
(1, 'yassine', 'mahsoun', 'y.mahsoun@mundiapolis.ma');

-- --------------------------------------------------------

--
-- Structure de la table `demande_equipement`
--

CREATE TABLE `demande_equipement` (
  `idDemandesEquipement` int(4) NOT NULL,
  `nom_equipement` varchar(50) NOT NULL,
  `marque` varchar(50) NOT NULL,
  `taille` varchar(50) NOT NULL,
  `quantite` int(4) NOT NULL,
  `reference` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande_equipement`
--

INSERT INTO `demande_equipement` (`idDemandesEquipement`, `nom_equipement`, `marque`, `taille`, `quantite`, `reference`) VALUES
(4, 'Clavier', 'AZERTY', '23', 30, 'A23'),
(5, 'Souris', 'AZE', '20', 100, 'A2354'),
(6, 'Imprimante', 'ZERG', '500', 10, 'N67845');

-- --------------------------------------------------------

--
-- Structure de la table `demande_installation`
--

CREATE TABLE `demande_installation` (
  `idDemandesInstallation` int(4) NOT NULL,
  `nom_logiciel` varchar(50) NOT NULL,
  `licence` varchar(50) NOT NULL,
  `version` varchar(50) NOT NULL,
  `langue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande_installation`
--

INSERT INTO `demande_installation` (`idDemandesInstallation`, `nom_logiciel`, `licence`, `version`, `langue`) VALUES
(2, 'CATIA', 'Gratuite', 'A5', 'FRANCAIS'),
(3, 'MS Project', 'Gratuite', '2009', 'FRANCAIS');

-- --------------------------------------------------------

--
-- Structure de la table `demande_intervention`
--

CREATE TABLE `demande_intervention` (
  `idDemandeIntervention` int(4) NOT NULL,
  `nom_equipement` varchar(50) NOT NULL,
  `probleme` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande_intervention`
--

INSERT INTO `demande_intervention` (`idDemandeIntervention`, `nom_equipement`, `probleme`) VALUES
(2, 'Ecran', 'Planter'),
(4, 'unite centrale', 'eteindre seule'),
(5, 'Unite', 'eteindre');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(50) NOT NULL,
  `nom_fonction` varchar(50) NOT NULL,
  `password_utilisateur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `nom_fonction`, `password_utilisateur`) VALUES
(1, 'yassine', 'Professeur', 'mahsoun');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `demande_equipement`
--
ALTER TABLE `demande_equipement`
  ADD PRIMARY KEY (`idDemandesEquipement`);

--
-- Index pour la table `demande_installation`
--
ALTER TABLE `demande_installation`
  ADD PRIMARY KEY (`idDemandesInstallation`);

--
-- Index pour la table `demande_intervention`
--
ALTER TABLE `demande_intervention`
  ADD PRIMARY KEY (`idDemandeIntervention`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `id_fonctions` (`nom_fonction`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `demande_equipement`
--
ALTER TABLE `demande_equipement`
  MODIFY `idDemandesEquipement` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `demande_installation`
--
ALTER TABLE `demande_installation`
  MODIFY `idDemandesInstallation` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `demande_intervention`
--
ALTER TABLE `demande_intervention`
  MODIFY `idDemandeIntervention` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
