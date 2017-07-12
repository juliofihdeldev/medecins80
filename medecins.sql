-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 12 Juillet 2017 à 15:12
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `medecins`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `ID_activites` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL,
  `etat` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `activites`
--

INSERT INTO `activites` (`ID_activites`, `id_users`, `titre`, `description`, `photo`, `etat`) VALUES
(28, 1, 'knknkn', 'jnnn', '1498924819_180 120  ok.png', ''),
(29, 1, 'knknkn', 'jnnn', '1498924821_180 120  ok.png', ''),
(27, 1, 'knknkn', 'jnnn', '1498924817_180 120  ok.png', ''),
(26, 1, 'jj', 'h ', '1498707047_180 120  ok.png', ''),
(25, 1, 'j', 'j', '1498706998_1024 500.jpg', ''),
(24, 1, 'kkkKK', 'kk', '1498706979_logo.jpg', ''),
(6, 1, 'Titre de master carte ', 'Titre de master carte ', '1498705852_mastercarte.png', ''),
(23, 1, 'kkkKK', 'kk', '1498706977_logo.jpg', ''),
(22, 1, 'Logo officiel de job etrouve', 'Le logo officiel de job etrouve', '1498706927_logopn.png', ''),
(21, 1, 'Job etrouve', 'Premier application mobile en moitier d\'emploi', '1498706841_4096.jpg', ''),
(20, 1, 'Job etrouvve activites', 'Job etrouve activite', '1498706781_img3.jpg', ''),
(19, 1, 'Job etrouvve activites', 'Job etrouve activite', '1498706779_img3.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `ID_photos` int(11) NOT NULL,
  `lien` int(11) NOT NULL,
  `ID_activites` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`ID`, `email`, `password`, `role`) VALUES
(1, 'm@gmail.com', 'm', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`ID_activites`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`ID_photos`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `ID_activites` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `ID_photos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
