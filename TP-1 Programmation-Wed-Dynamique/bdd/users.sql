-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 25 jan. 2018 à 19:59
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbpigier`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(6, 'Hasler', '$2y$10$p9YjRGDKXGjsAdjz3/xx..p6Vsl.rDlxW0GwxulvnAefcbhyUsAgS'),
(7, 'Manoel', '$2y$10$7ZOubP3gs8FMyFdxWrFMQuRyKAxFuhMA/c6aij.uVWr9xQGN8tDHi'),
(8, 'Edem', '$2y$10$TXcsL7tADaxHnqkyxCpeJejzn03l7ERGemrAZNkuM7oEWHdBR1XQ2'),
(16, 'DAGBA Narcisse', '$2y$10$m/RA1Dp85DjTEvW4nunzg.S1qkk.wNi.2KKN5aHcnXRHzw4eXXtGu'),
(15, 'Amos', '$2y$10$gRtWkAyK23cLwYgHKHueeeJf2TkQRY8MZJm3ZorL4KqTcJW20.Kze');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
