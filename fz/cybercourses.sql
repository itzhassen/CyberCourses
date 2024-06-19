-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 22 jan. 2023 à 14:11
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cybercourses`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `code` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`code`, `nom`, `email`, `sujet`, `message`) VALUES
(1, 'Ben Daadouch', 'hassenddh7@gmail.com', 'Reclamation', 'Maajbtnich'),
(2, 'John', 'john44@gmail.com', 'Bonne continuation', 'Bravo');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `code` varchar(50) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `goals` varchar(500) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `formateur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`code`, `libelle`, `goals`, `date_debut`, `date_fin`, `formateur`) VALUES
('html_css', 'HTML & CSS', 'Learn web development basics : Learn to build static website', '2023-05-13', '2023-05-20', 'olfahamrouni00@yahoo.fr'),
('js', 'JavaScript', 'Improve the skills to create a web application ', '2023-09-12', '2023-09-22', 'anis.assas@yahoo.fr'),
('php_laravel', 'PHP & Laravel', 'Learning BackEnd web Development + SQL', '2023-11-15', '2023-11-30', 'aymenbouregba@gmail.com'),
('poo', 'JAVA & C#', 'Learn Object Oriented Programming Basics', '2023-03-10', '2023-03-15', 'blaghjimanel@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `instructor`
--

CREATE TABLE `instructor` (
  `civ` enum('Mr.','Mme.') NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `CIN` varchar(8) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `course` enum('php_laravel','html_css','js','poo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `instructor`
--

INSERT INTO `instructor` (`civ`, `Prenom`, `Nom`, `CIN`, `Tel`, `email`, `course`) VALUES
('Mr.', 'Anis', 'Assas', '13258441', '20148993', 'anis.assas@yahoo.fr', 'js'),
('Mr.', 'Aymen', 'Bouregba', '10225698', '26303144', 'aymenbouregba@gmail.com', 'php_laravel'),
('Mme.', 'Manel', 'Blaghji', '11235998', '98145602', 'blaghjimanel@gmail.com', 'poo'),
('Mme.', 'Olfa', 'Hamrouni', '11456990', '51220556', 'olfahamrouni00@yahoo.fr', 'html_css');

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE `participants` (
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `institut` varchar(50) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `exp` varchar(50) NOT NULL DEFAULT '-no experience-',
  `formation` enum('html_css','php_laravel','js','poo') NOT NULL,
  `resultat` enum('Accepted','Refused','Pending') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `participants`
--

INSERT INTO `participants` (`prenom`, `nom`, `email`, `institut`, `classe`, `tel`, `exp`, `formation`, `resultat`) VALUES
('Abdelhamid', 'TLILI', 'abdo@gmail.com', 'iset sousse', 'l2mdw', '50522333', '-no experience-', 'php_laravel', 'Refused'),
('Ahmed', 'ben Ahmed', 'ahmedbenahmed@gmail.com', 'ISET Tatouine', 'L1TI3', '59887450', '-no experience-', 'js', 'Accepted'),
('Ahmed', 'Haddad', 'ahmedhaddad@gmail.com', 'ESPRIT', 'Master Marketing Digital', '20144707', '', 'poo', 'Pending'),
('Aymen', 'Mouihbi', 'aymen00@hotmail.fr', 'ISET Nabeul', 'L3 MDW', '21300366', '', 'php_laravel', 'Pending'),
('Eya', 'Adouni', 'eyaadouni03@gmail.com', 'ISET DJERBA', 'L2DSI', '54636248', 'yesss', 'php_laravel', 'Accepted'),
('Eya', 'Adouni', 'eyaadouni03@gmail.com', 'ISET', 'L2DSI', '50326514', 'Oui, experience 2 ans', 'js', 'Refused'),
('Hassen', 'Ben Daadouch', 'hassenddh7@gmail.com', 'ISET DJERBA', 'L2DSI', '50365917', '-no experience-', 'html_css', 'Accepted'),
('Hassen', 'Ben Daadouch', 'hassenddh7@gmail.com', 'ISET DJERBA', 'L2DSI', '50365917', 'i have ', 'php_laravel', 'Accepted'),
('Hassen', 'Ben Daadouch', 'hassenddh7@gmail.com', 'ISET DJERBA', 'L2DSI', '50365917', 'YEES', 'poo', 'Accepted'),
('Hassen', 'Ben Daadouch', 'hassenddp@gmail.com', 'ISET DJERBA', 'L2DSI', '75202165', '', 'js', 'Accepted'),
('khalil', 'marai', 'khalil@gmail.com', 'iset rades', 'L3DSI', '25222666', 'just one month', 'html_css', 'Accepted'),
('Oussema', 'Khlifi', 'ousskhalifi44@yahoo.com', 'ISI Mahdia', 'L1 Sc.Info', '50212630', '-no experience-', 'php_laravel', 'Accepted'),
('Rihab', 'rebai', 'ryhabrebaii@hotmail.com', 'ISET Mahdia', 'L1TI5', '20331488', 'Just basics', 'js', 'Pending'),
('Sahar', 'Lahouel', 'saharlah1@gmail.com', 'isetCom', 'L2 DSI', '55606667', 'Yes i am professional at html', 'html_css', 'Pending'),
('Sarra', 'Lafi', 'Sarrap@gmail.com', 'HARVARD UNIVERSITY', 'L2MDW', '12345', '-no experience-', 'js', 'Accepted');

-- --------------------------------------------------------

--
-- Structure de la table `toutcomptes`
--

CREATE TABLE `toutcomptes` (
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institut` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `toutcomptes`
--

INSERT INTO `toutcomptes` (`prenom`, `nom`, `email`, `institut`, `tel`) VALUES
('Abdelhamid', 'TLILI', 'abdo@gmail.com', 'iset sousse', '50522333'),
('Ahmed', 'ben Ahmed', 'ahmedbenahmed@gmail.com', 'ISET Tatouine', '59887450'),
('Ahmed', 'Haddad', 'ahmedhaddad@gmail.com', 'ESPRIT', '20144707'),
('Aymen', 'Mouihbi', 'aymen00@hotmail.fr', 'ISET Nabeul', '21300366'),
('Eya', 'Adouni', 'eyaadouni03@gmail.com', 'ISET DJERBA', '54636248'),
('Hassen', 'Ben Daadouch', 'hassenddh7@gmail.com', 'ISET DJERBA', '50365917'),
('Hassen', 'Ben Daadouch', 'hassenddp@gmail.com', 'ISET DJERBA', '75202165'),
('khalil', 'marai', 'khalil@gmail.com', 'iset rades', '25222666'),
('Oussema', 'Hmida', 'oussema@gmail.com', 'ISET Mahdia', '54711195'),
('Rihab', 'rebai', 'ryhabrebaii@hotmail.com', 'ISET Mahdia', '20331488'),
('Sahar', 'Lahouel', 'saharlah1@gmail.com', 'isetCom', '55606667'),
('Youssef', 'Aroua', 'youssef@gmail.com', 'ISET Mahdia', '24999875');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `code` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `profil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`code`, `user`, `pass`, `profil`) VALUES
(1, 'khaled', 'cyber123', 'admin'),
(2, 'user', 'user', 'formateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`code`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`code`),
  ADD KEY `fk` (`formateur`);

--
-- Index pour la table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`email`,`formation`);

--
-- Index pour la table `toutcomptes`
--
ALTER TABLE `toutcomptes`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `fk` FOREIGN KEY (`formateur`) REFERENCES `instructor` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
