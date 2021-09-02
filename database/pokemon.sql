-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 10:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokemon`
--

-- --------------------------------------------------------

--
-- Table structure for table `boss`
--

CREATE TABLE `boss` (
  `name` varchar(9) DEFAULT NULL,
  `combat_power` int(4) DEFAULT NULL,
  `primary` varchar(7) DEFAULT NULL,
  `Tier` int(1) DEFAULT NULL,
  `Ground` int(1) DEFAULT NULL,
  `Rock` int(1) DEFAULT NULL,
  `Fire` int(1) DEFAULT NULL,
  `water` int(1) DEFAULT NULL,
  `steel` int(1) DEFAULT NULL,
  `ice` int(1) DEFAULT NULL,
  `poison` int(1) DEFAULT NULL,
  `electric` int(1) DEFAULT NULL,
  `normal` int(1) DEFAULT NULL,
  `fight` int(1) DEFAULT NULL,
  `bug` int(1) DEFAULT NULL,
  `ghost` int(1) DEFAULT NULL,
  `grass` int(1) DEFAULT NULL,
  `psychic` int(1) DEFAULT NULL,
  `flying` int(1) DEFAULT NULL,
  `dragon` int(1) DEFAULT NULL,
  `dark` varchar(1) DEFAULT NULL,
  `fairy` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `boss`
--

INSERT INTO `boss` (`name`, `combat_power`, `primary`, `Tier`, `Ground`, `Rock`, `Fire`, `water`, `steel`, `ice`, `poison`, `electric`, `normal`, `fight`, `bug`, `ghost`, `grass`, `psychic`, `flying`, `dragon`, `dark`, `fairy`) VALUES
('aron', 1500, 'steel', 3, 2, 0, 2, 1, 1, 0, 0, 1, 1, 2, 0, 1, 1, 0, 1, 1, '1', '0'),
('chansey', 1255, 'normal', 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, '1', '1'),
('eevee', 1500, 'normal', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, '1', '1'),
('farfecth', 1250, 'flying', 4, 0, 2, 1, 1, 1, 2, 1, 2, 1, 0, 1, 1, 0, 2, 1, 1, '1', '1'),
('garchomps', 3000, 'ground', 0, 2, 1, 0, 2, 1, 2, 0, 0, 1, 1, 1, 1, 2, 1, 1, 1, '1', '1'),
('gardevoir', 2800, 'psychic', 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 0, 2, 2, 1, 1, 0, 1, '2', '1'),
('kirlia', 2450, 'psychic', 2, 1, 1, 1, 1, 2, 1, 1, 1, 1, 0, 2, 2, 1, 1, 0, 1, '2', '1'),
('lickitung', 2750, 'normal', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, '1', '1'),
('lopunny', 2630, 'fight', 1, 1, 0, 1, 1, 0, 0, 1, 1, 0, 1, 1, 2, 1, 2, 2, 1, '0', '1'),
('mewto', 3100, 'psychic', 0, 1, 1, 1, 1, 2, 1, 1, 1, 1, 0, 2, 2, 1, 1, 0, 1, '2', '1'),
('rayquaza', 3835, 'dragon', 0, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, '1', '2'),
('vulpix', 1500, 'Fire', 3, 2, 2, 1, 2, 0, 0, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_user`
--

CREATE TABLE `jenis_user` (
  `role_id` int(100) NOT NULL,
  `jenis_user` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_user`
--

INSERT INTO `jenis_user` (`role_id`, `jenis_user`) VALUES
(1, 'ADMIN'),
(2, 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `my_pokemon`
--

CREATE TABLE `my_pokemon` (
  `id_user` int(100) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `combat_power` int(4) DEFAULT NULL,
  `primary` varchar(8) DEFAULT NULL,
  `Tier` int(1) DEFAULT NULL,
  `Ground` int(1) DEFAULT NULL,
  `Rock` int(1) DEFAULT NULL,
  `Fire` int(1) DEFAULT NULL,
  `water` int(1) DEFAULT NULL,
  `steel` int(1) DEFAULT NULL,
  `ice` int(1) DEFAULT NULL,
  `poison` int(1) DEFAULT NULL,
  `electric` int(1) DEFAULT NULL,
  `normal` int(1) DEFAULT NULL,
  `fight` int(1) DEFAULT NULL,
  `bug` int(1) DEFAULT NULL,
  `ghost` int(1) DEFAULT NULL,
  `grass` int(1) DEFAULT NULL,
  `psychic` int(1) DEFAULT NULL,
  `flying` int(1) DEFAULT NULL,
  `dragon` int(1) DEFAULT NULL,
  `dark` int(1) DEFAULT NULL,
  `fairy` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_pokemon`
--

INSERT INTO `my_pokemon` (`id_user`, `name`, `combat_power`, `primary`, `Tier`, `Ground`, `Rock`, `Fire`, `water`, `steel`, `ice`, `poison`, `electric`, `normal`, `fight`, `bug`, `ghost`, `grass`, `psychic`, `flying`, `dragon`, `dark`, `fairy`) VALUES
(1, 'Magikarp', 264, 'Water', 6, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 'Krabby', 797, 'Water', 5, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 'Horsea', 800, 'Water', 5, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 'Poliwag', 801, 'Water', 5, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 'Shellder', 828, 'Water', 5, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 'Psyduck', 1117, 'Water', 4, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Magikarp', 264, 'Water', 6, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Krabby', 797, 'Water', 5, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Staryu', 944, 'Water', 4, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Goldeen', 972, 'Water', 4, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Squirtle', 1015, 'Water', 4, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Seadra', 1725, 'Water', 3, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pokemon`
--

CREATE TABLE `pokemon` (
  `name` varchar(10) DEFAULT NULL,
  `combat_power` int(4) DEFAULT NULL,
  `primary` varchar(8) DEFAULT NULL,
  `Tier` int(1) DEFAULT NULL,
  `Ground` int(1) DEFAULT NULL,
  `Rock` int(1) DEFAULT NULL,
  `Fire` int(1) DEFAULT NULL,
  `water` int(1) DEFAULT NULL,
  `steel` int(1) DEFAULT NULL,
  `ice` int(1) DEFAULT NULL,
  `poison` int(1) DEFAULT NULL,
  `electric` int(1) DEFAULT NULL,
  `normal` int(1) DEFAULT NULL,
  `fight` int(1) DEFAULT NULL,
  `bug` int(1) DEFAULT NULL,
  `ghost` int(1) DEFAULT NULL,
  `grass` int(1) DEFAULT NULL,
  `psychic` int(1) DEFAULT NULL,
  `flying` int(1) DEFAULT NULL,
  `dragon` int(1) DEFAULT NULL,
  `dark` int(1) DEFAULT NULL,
  `fairy` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pokemon`
--

INSERT INTO `pokemon` (`name`, `combat_power`, `primary`, `Tier`, `Ground`, `Rock`, `Fire`, `water`, `steel`, `ice`, `poison`, `electric`, `normal`, `fight`, `bug`, `ghost`, `grass`, `psychic`, `flying`, `dragon`, `dark`, `fairy`) VALUES
('Magikarp', 264, 'Water', 6, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Caterpie', 446, 'Bug', 6, 2, 0, 0, 1, 0, 1, 0, 1, 1, 2, 1, 0, 2, 2, 0, 1, 2, 0),
('Diglett', 460, 'Ground', 6, 1, 2, 2, 0, 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Metapod', 481, 'Bug', 6, 2, 0, 0, 1, 0, 1, 0, 1, 1, 2, 1, 0, 2, 2, 0, 1, 2, 0),
('Rattata', 585, 'Normal', 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1),
('Abra', 604, 'Psychic', 5, 1, 1, 1, 1, 0, 1, 2, 1, 1, 2, 1, 1, 1, 1, 1, 1, 2, 1),
('Chansey', 679, 'Normal', 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1),
('Meowth', 761, 'Normal', 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1),
('Krabby', 797, 'Water', 5, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Horsea', 800, 'Water', 5, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Poliwag', 801, 'Water', 5, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Sandshrew', 804, 'Ground', 5, 1, 2, 2, 0, 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Shellder', 828, 'Water', 5, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Ekans', 830, 'Poison', 5, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Vulpix', 837, 'Fire', 5, 0, 0, 1, 0, 2, 2, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Voltorb', 845, 'Electric', 5, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
('NidoranF', 849, 'Poison', 5, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('NidoranM', 882, 'Poison', 5, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Mankey', 884, 'Fighting', 5, 1, 2, 1, 1, 2, 2, 1, 1, 2, 1, 0, 0, 1, 0, 0, 1, 2, 0),
('Pikachu', 894, 'Electric', 5, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
('Ditto', 926, 'Normal', 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1),
('Staryu', 944, 'Water', 4, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Goldeen', 972, 'Water', 4, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Dratini', 990, 'Dragon', 4, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 2, 0, 0),
('Cubone', 1013, 'Ground', 4, 1, 2, 2, 0, 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Squirtle', 1015, 'Water', 4, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Drowzee', 1082, 'Psychic', 4, 1, 1, 1, 1, 0, 1, 2, 1, 1, 2, 1, 1, 1, 1, 1, 1, 2, 1),
('Eevee', 1084, 'Normal', 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1),
('Machop', 1097, 'Fighting', 4, 1, 2, 1, 1, 2, 2, 1, 1, 2, 1, 0, 0, 1, 0, 0, 1, 2, 0),
('Seel', 1114, 'Water', 4, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Psyduck', 1117, 'Water', 4, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Kadabra', 1140, 'Psychic', 4, 1, 1, 1, 1, 0, 1, 2, 1, 1, 2, 1, 1, 1, 1, 1, 1, 2, 1),
('Koffing', 1160, 'Poison', 4, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Dugtrio', 1176, 'Ground', 4, 1, 2, 2, 0, 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Clefairy', 1209, 'Fairy', 4, 1, 1, 1, 1, 0, 1, 1, 1, 1, 2, 2, 1, 1, 1, 1, 2, 2, 1),
('Grimer', 1293, 'Poison', 4, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Growlithe', 1344, 'Fire', 4, 0, 0, 1, 0, 2, 2, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Poliwhirl', 1350, 'Water', 4, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Nidorino', 1382, 'Poison', 4, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Nidorina', 1414, 'Poison', 4, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Raticate', 1454, 'Normal', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1),
('Hitmonlee', 1503, 'Fighting', 3, 1, 2, 1, 1, 2, 2, 1, 1, 2, 1, 0, 0, 1, 0, 0, 1, 2, 0),
('Ponyta', 1526, 'Fire', 3, 0, 0, 1, 0, 2, 2, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Hitmonchan', 1527, 'Fighting', 3, 1, 2, 1, 1, 2, 2, 1, 1, 2, 1, 0, 0, 1, 0, 0, 1, 2, 0),
('Wartortle', 1594, 'Water', 3, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Lickitung', 1638, 'Normal', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1),
('Persian', 1643, 'Normal', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1),
('Electrode', 1657, 'Electric', 3, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
('Marowak', 1668, 'Ground', 3, 1, 2, 2, 0, 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Porygon', 1703, 'Normal', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1),
('Seadra', 1725, 'Water', 3, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Tangela', 1752, 'Grass', 3, 2, 2, 0, 2, 1, 0, 0, 2, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1),
('Dragonair', 1760, 'Dragon', 3, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 2, 0, 0),
('Machoke', 1773, 'Fighting', 3, 1, 2, 1, 1, 2, 2, 1, 1, 2, 1, 0, 0, 1, 0, 0, 1, 2, 0),
('Arbok', 1779, 'Poison', 3, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Sandslash', 1823, 'Ground', 3, 1, 2, 2, 0, 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Alakazam', 1826, 'Psychic', 3, 1, 1, 1, 1, 0, 1, 2, 1, 1, 2, 1, 1, 1, 1, 1, 1, 2, 1),
('Kingler', 1836, 'Water', 3, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Tauros', 1857, 'Normal', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1),
('Primeape', 1877, 'Fighting', 3, 1, 2, 1, 1, 2, 2, 1, 1, 2, 1, 0, 0, 1, 0, 0, 1, 2, 0),
('Raichu', 2042, 'Electric', 2, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
('Kangaskhan', 2057, 'Normal', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1),
('Seaking', 2058, 'Water', 2, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Electabuzz', 2134, 'Electric', 2, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
('Pinsir', 2137, 'Bug', 2, 2, 0, 0, 1, 0, 1, 0, 1, 1, 2, 1, 0, 2, 2, 0, 1, 2, 0),
('Jolteon', 2155, 'Electric', 2, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
('Hypno', 2199, 'Psychic', 2, 1, 1, 1, 1, 0, 1, 2, 1, 1, 2, 1, 1, 1, 1, 1, 1, 2, 1),
('Ninetales', 2203, 'Fire', 2, 0, 0, 1, 0, 2, 2, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Rapidash', 2215, 'Fire', 2, 0, 0, 1, 0, 2, 2, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Weezing', 2266, 'Poison', 2, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Magmar', 2281, 'Fire', 2, 0, 0, 1, 0, 2, 2, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Golduck', 2403, 'Water', 2, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Clefable', 2414, 'Fairy', 2, 1, 1, 1, 1, 0, 1, 1, 1, 1, 2, 2, 1, 1, 1, 1, 2, 2, 1),
('Blastoise', 2560, 'Water', 1, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Machamp', 2612, 'Fighting', 1, 1, 2, 1, 1, 2, 2, 1, 1, 2, 1, 0, 0, 1, 0, 0, 1, 2, 0),
('Muk', 2621, 'Poison', 1, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Flareon', 2662, 'Fire', 1, 0, 0, 1, 0, 2, 2, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Vaporeon', 2836, 'Water', 1, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Arcanine', 3005, 'Fire', 0, 0, 0, 1, 0, 2, 2, 1, 1, 1, 1, 2, 1, 2, 1, 1, 1, 1, 1),
('Snorlax', 3135, 'Normal', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pokemon___copy`
--

CREATE TABLE `pokemon___copy` (
  `name` varchar(8) DEFAULT NULL,
  `combat_power` int(3) DEFAULT NULL,
  `primary` varchar(6) DEFAULT NULL,
  `Tier` int(1) DEFAULT NULL,
  `Ground` int(1) DEFAULT NULL,
  `Rock` int(1) DEFAULT NULL,
  `Fire` int(1) DEFAULT NULL,
  `water` int(1) DEFAULT NULL,
  `steel` int(1) DEFAULT NULL,
  `ice` int(1) DEFAULT NULL,
  `poison` int(1) DEFAULT NULL,
  `electric` int(1) DEFAULT NULL,
  `normal` int(1) DEFAULT NULL,
  `fight` int(1) DEFAULT NULL,
  `bug` int(1) DEFAULT NULL,
  `ghost` int(1) DEFAULT NULL,
  `grass` int(1) DEFAULT NULL,
  `psychic` int(1) DEFAULT NULL,
  `flying` int(1) DEFAULT NULL,
  `dragon` int(1) DEFAULT NULL,
  `dark` int(1) DEFAULT NULL,
  `fairy` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pokemon___copy`
--

INSERT INTO `pokemon___copy` (`name`, `combat_power`, `primary`, `Tier`, `Ground`, `Rock`, `Fire`, `water`, `steel`, `ice`, `poison`, `electric`, `normal`, `fight`, `bug`, `ghost`, `grass`, `psychic`, `flying`, `dragon`, `dark`, `fairy`) VALUES
('Magikarp', 264, 'Water', 6, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Caterpie', 446, 'Bug', 6, 2, 0, 0, 1, 0, 1, 0, 1, 1, 2, 1, 0, 2, 2, 0, 1, 2, 0),
('Diglett', 460, 'Ground', 6, 1, 2, 2, 0, 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Metapod', 481, 'Bug', 6, 2, 0, 0, 1, 0, 1, 0, 1, 1, 2, 1, 0, 2, 2, 0, 1, 2, 0),
('Rattata', 585, 'Normal', 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(3) NOT NULL,
  `date_created` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `role_id`, `date_created`, `image`, `is_active`) VALUES
(1, 'yaha', 'yaha@gmail.com', '$2y$10$7.I/0Jd.I884guK2l6abquNvI2/wqNVO.0EvBI6QyoIk/EXbFsp1i', 2, 1627634913, 'default.jpg', 1),
(2, 'userkusasyang', 'user@gmail.com', '$2y$10$gWWkAyRLUGpnKkX1UM4HFe2FIU8KsWTS2D6b3p4Cvvz8ci6qmMnTi', 2, 1627797841, 'default.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
