-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 23 jan. 2020 à 19:22
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `resto`
--
CREATE DATABASE resto;
-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `codeCat` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `libellecat` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`codeCat`, `libellecat`) VALUES
('E', 'Entrées'),
('P', 'Plats'),
('D', 'Desserts');

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `refplat` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codeCat` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomPlat` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `prix` decimal(5,2) DEFAULT NULL,
  `nomimg` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hitParade` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`refplat`, `codeCat`, `nomPlat`, `prix`, `nomimg`, `hitParade`) VALUES
('abr', 'P', 'Assortiment de viandes blanches et rouges', '12.00', 'menu-img-02.jpg', 4),
('bar', 'E', 'Bouchées à la reine revisitées', '8.00', 'menu-img-16.jpg', 4),
('bpt', 'E', 'Bœuf cuit à la braise', '13.50', 'menu-img-04.jpg', 5),
('cac', 'D', 'Charlotte au chocolat', '11.50', 'menu-img-11.jpg', 3),
('frn', 'D', 'Fruits rouges et assortiment de noix.', '9.00', 'menu-img-06.jpg', 5),
('lsa', 'P', 'Légumes de saison', '8.00', 'menu-img-07.jpg', 2),
('ncre', 'P', 'Linguine aux crevettes', '12.50', 'menu-img-03.jpg', 3),
('P', 'P', 'Oeufs et légumes au sésame grillé', '9.50', 'menu-img-12.jpg', 1),
('pfr', 'D', 'Parfait à la fraise', '10.00', 'menu-img-08.jpg', 4),
('pho', 'P', 'Pho au boeuf', '15.00', 'menu-img-01.jpg', 5),
('psr', 'D', 'Poutine sucrée revisitée', '10.00', 'menu-img-10.jpg', 5),
('rrv', 'P', 'Ratatouille revisitée', '12.50', 'menu-img-13.jpg', 1),
('sdc', 'P', 'Surprise du chef', '14.00', 'menu-img-14.jpg', 5),
('sld', 'E', 'Salade', '10.00', 'salade.jpg', 5),
('spl', 'P', 'Saumon à la plancha', '17.00', 'menu-img-05.jpg', 2),
('tls', 'E', 'Tartine de légumes de saison', '6.00', 'menu-img-15.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `login` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`login`, `password`) VALUES
('admin', 'admin'),
('userepul', 'epul');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`refplat`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
