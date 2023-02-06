-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 06 fév. 2023 à 19:14
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `coursanglais`
--

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(20) NOT NULL,
  `sexe` varchar(12) NOT NULL,
  `adresse` varchar(25) NOT NULL,
  `classe` varchar(15) NOT NULL,
  `Contact` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `nom`, `prenom`, `date_naissance`, `lieu_naissance`, `sexe`, `adresse`, `classe`, `Contact`) VALUES
(2, 'RAZAFINDRAVOLA', 'Clara', '2023-01-07', 'Befelatanana', 'Masculin', 'Tanambao', 'Niveau B', 265825654),
(5, 'RAZAFINDRAVOLA', 'Juliette', '2023-01-19', 'Befelatanana', 'Masculin', 'Valpinson', 'Niveau A', 265825631),
(7, 'RAZAKABE', 'Fernando', '2023-01-19', 'Befelatanana', 'Masculin', 'Valpinson', 'Niveau B', 265825631),
(8, 'RAZAFINDRAVOLA', 'Juliette', '2023-01-19', 'Befelatanana', 'Feminin', 'Valpinson', 'Niveau B', 265825631),
(14, 'RAZAFINDRAVOLA', 'Patrick', '2023-01-07', 'Befelatanana', 'Feminin', 'Tanambao', 'Niveau B', 265825654);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `password`) VALUES
(1, '', 'Olivier', '080700');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
