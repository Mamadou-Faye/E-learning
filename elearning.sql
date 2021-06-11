-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 11 juin 2021 à 09:23
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `elearning`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(30) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `numAdmin` int(15) DEFAULT NULL,
  `password` text,
  `avatarAdmin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `name`, `email`, `numAdmin`, `password`, `avatarAdmin`) VALUES
(1, 'Mamadou Faye', 'fayem7409@gmail.com', 1, 'bd847a05f654ac0e5bd0af5ca7913a64cd0c3e57', '1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `idCours` int(250) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `dateAjout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pseudo`
--

CREATE TABLE `pseudo` (
  `idPseudo` int(30) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tuteurs`
--

CREATE TABLE `tuteurs` (
  `idTuteur` int(30) NOT NULL,
  `nameTuteur` varchar(80) DEFAULT NULL,
  `emailTuteur` varchar(80) DEFAULT NULL,
  `numTuteur` int(15) DEFAULT NULL,
  `password` text,
  `avatarTuteur` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`idCours`);

--
-- Index pour la table `pseudo`
--
ALTER TABLE `pseudo`
  ADD PRIMARY KEY (`idPseudo`);

--
-- Index pour la table `tuteurs`
--
ALTER TABLE `tuteurs`
  ADD PRIMARY KEY (`idTuteur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `idCours` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pseudo`
--
ALTER TABLE `pseudo`
  MODIFY `idPseudo` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tuteurs`
--
ALTER TABLE `tuteurs`
  MODIFY `idTuteur` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
