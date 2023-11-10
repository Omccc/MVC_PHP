-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 10 nov. 2023 à 15:35
-- Version du serveur : 5.7.36
-- Version de PHP : 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dwwm_23_10_19`
--

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `author` varchar(55) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`id`, `src`, `title`, `description`, `author`, `created_at`, `updated_at`) VALUES
(1, 'https://cdn.pixabay.com/photo/2013/07/12/16/35/php-151199_1280.png', 'PHP', 'PHP: Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur web.', 'Rasmus Lerdorf', '2023-10-17 00:00:00', '2023-10-24 00:00:00'),
(2, 'https://miro.medium.com/v2/resize:fit:720/format:webp/1*H9yDFF4dp2LnZnFJV7t-Mg.jpeg', 'Symfony', 'Symfony est un ensemble de composants PHP ainsi qu\'un framework MVC libre écrit en PHP. Il fournit des fonctionnalités modulables et adaptables qui permettent de faciliter et d’accélérer le développement d\'un site web. ', ' Fabien Potencier', '2023-10-02 00:00:00', '2023-10-13 00:00:00'),
(3, 'https://www.techcronus.com/blog/wp-content/uploads/2021/08/Laravel-best-PHP-Framework-1024x682.jpg', 'Laravel', 'Laravel est un framework web open-source écrit en PHP respectant le principe modèle-vue-contrôleur et entièrement développé en programmation orientée objet. Laravel est distribué sous licence MIT, avec ses sources hébergées sur GitHub.', ' Taylor Otwell', '2023-10-01 00:00:00', '2023-10-12 00:00:00'),
(4, 'https://static.les-enovateurs.com/uploads/2020/03/Phalcon-un-framework-PHP.jpg', 'Phalcon', 'Phalcon est un framework PHP basé sur le patron de conception MVC et qui met en avant des performances élevées. Initialement sorti en 2012, ce framework libre est disponible sous licence BSD.', 'Andres Gutierrez ', '2023-10-06 00:00:00', '2023-10-15 00:00:00'),
(5, 'https://www.ideematic.com/wp-content/uploads/2018/02/cakephp-265x300.png', 'CakePHP', 'CakePHP est un framework web libre écrit en PHP distribué sous licence MIT. Il suit le motif de conception Modèle-Vue-Contrôleur et imite le fonctionnement de Ruby on Rails. ', 'Cake Software Foundation', '2023-10-12 00:00:00', '2023-10-15 00:00:00'),
(9, 'https://www.logiciel-libre.org/stock/img/product/logo-zend_3.png', 'Zend Framework', 'Le Zend Framework est un cadriciel pour PHP créé en mars 2006 par Zend Technologies, et distribué sous la Licence BSD Modifiée. Le 17 avril 2019.', 'Zend Technologies', '2023-11-03 11:12:24', '2023-11-03 11:12:24'),
(11, 'https://cdn.pixabay.com/photo/2018/05/08/08/44/artificial-intelligence-3382507_1280.jpg', 'Title test', 'Description test', 'Charles', '2023-11-03 11:12:59', '2023-11-03 11:12:59'),
(15, 'https://www.logiciel-libre.org/stock/img/product/logo-zend_3.png', 'Zend Framework', 'Le Zend Framework est un cadriciel pour PHP créé en mars 2006 par Zend Technologies, et distribué sous la Licence BSD Modifiée. Le 17 avril 2019.', 'Zend Technologies', '2023-11-03 11:12:24', '2023-11-03 11:12:24'),
(14, 'https://www.logiciel-libre.org/stock/img/product/logo-zend_3.png', 'Zend Framework', 'Le Zend Framework est un cadriciel pour PHP créé en mars 2006 par Zend Technologies, et distribué sous la Licence BSD Modifiée. Le 17 avril 2019.', 'Zend Technologies', '2023-11-03 11:12:24', '2023-11-03 11:12:24'),
(17, 'https://www.logiciel-libre.org/stock/img/product/logo-zend_3.png', 'Zend Framework', 'Le Zend Framework est un cadriciel pour PHP créé en mars 2006 par Zend Technologies, et distribué sous la Licence BSD Modifiée. Le 17 avril 2019.', 'Zend Technologies', '2023-11-03 11:12:24', '2023-11-03 11:12:24'),
(18, 'https://cdn.pixabay.com/photo/2013/07/12/16/35/php-151199_1280.png', 'PHP', 'PHP: Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur web.', 'Rasmus Lerdorf', '2023-10-17 00:00:00', '2023-10-24 00:00:00'),
(19, 'https://www.techcronus.com/blog/wp-content/uploads/2021/08/Laravel-best-PHP-Framework-1024x682.jpg', 'Laravel', 'Laravel est un framework web open-source écrit en PHP respectant le principe modèle-vue-contrôleur et entièrement développé en programmation orientée objet. Laravel est distribué sous licence MIT, avec ses sources hébergées sur GitHub.', ' Taylor Otwell', '2023-10-01 00:00:00', '2023-10-12 00:00:00'),
(20, 'https://www.ideematic.com/wp-content/uploads/2018/02/cakephp-265x300.png', 'CakePHP', 'CakePHP est un framework web libre écrit en PHP distribué sous licence MIT. Il suit le motif de conception Modèle-Vue-Contrôleur et imite le fonctionnement de Ruby on Rails. ', 'Cake Software Foundation ', '2023-10-12 00:00:00', '2023-10-15 00:00:00'),
(27, './uploads/1699608368.png', 'Test', 'Description test', 'Jean', '2023-11-10 10:26:08', '2023-11-10 10:26:08'),
(28, './uploads/1699608512.png', 'Test', 'Description test 2', 'Andres ', '2023-11-10 10:28:32', '2023-11-10 10:28:32'),
(30, './uploads/1699609035.jpeg', 'Test 3', 'Description test 3', 'Code', '2023-11-10 10:37:15', '2023-11-10 10:37:15'),
(36, './uploads/php-php.png', 'PHP PHP', 'Description test 6', 'EllisLab', '2023-11-10 14:56:30', '2023-11-10 14:56:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
