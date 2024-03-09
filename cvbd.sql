-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 08 mars 2024 à 01:13
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cvbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `cvs`
--

CREATE TABLE `cvs` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` bigint(20) NOT NULL,
  `competence` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cvs`
--

INSERT INTO `cvs` (`id`, `nom`, `email`, `adresse`, `telephone`, `competence`, `photo`) VALUES
(8, 'ilhem', 'ilhem@gmail.com', '12500rue m', 50250250, 'html,css,js,php', '65ea56c8e0c89.png'),
(9, 'ilhem', 'ilhem@gmail.com', '12500rue m', 50200200, 'html,css,js,php', '65ea575b2ad10.png');

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(255) NOT NULL,
  `cv_id` int(255) NOT NULL,
  `experience_nom` varchar(255) NOT NULL,
  `experience_poste` varchar(255) NOT NULL,
  `experience_date_debut` date NOT NULL,
  `experience_date_fin` date NOT NULL,
  `experience_tache` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id`, `cv_id`, `experience_nom`, `experience_poste`, `experience_date_debut`, `experience_date_fin`, `experience_tache`) VALUES
(5, 8, 'system', 'emission d\'appel', '2024-03-01', '2024-04-30', 'aaa'),
(6, 8, 'banque', 'stagiaire', '2023-08-01', '2023-08-31', 'system'),
(7, 9, 'system', 'emission d\'appel', '2024-03-01', '2024-04-30', 'aaa');

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` int(255) NOT NULL,
  `cv_id` int(255) NOT NULL,
  `formation_nom` varchar(255) NOT NULL,
  `formation_degre_diplome` varchar(255) NOT NULL,
  `formation_annee_debut` date NOT NULL,
  `formation_annee_fin` date NOT NULL,
  `formation_domaine_etude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `cv_id`, `formation_nom`, `formation_degre_diplome`, `formation_annee_debut`, `formation_annee_fin`, `formation_domaine_etude`) VALUES
(5, 8, 'system', 'licence en informatique de gestion', '2022-09-01', '2025-06-05', 'E-Business'),
(6, 8, 'cifop ims', 'formation en algorithme en language c', '2022-11-01', '2022-12-31', 'E-Business'),
(7, 9, 'system', 'licence en informatique de gestion', '2022-09-01', '2025-06-05', 'E-Business');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
