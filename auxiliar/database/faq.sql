-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 20-06-2018 a les 08:29:20
-- Versió del servidor: 10.1.33-MariaDB
-- Versió de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `psicoexperts_db`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `faq`
--

CREATE TABLE `faq` (
  `id_FAQ` smallint(5) UNSIGNED NOT NULL,
  `pregunta_FAQ` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `resposta_FAQ` text COLLATE utf8_spanish_ci NOT NULL,
  `categoria_FAQ` enum('infantil','adolescents','adults','parelles') COLLATE utf8_spanish_ci NOT NULL,
  `data_FAQ` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Bolcament de dades per a la taula `faq`
--

INSERT INTO `faq` (`id_FAQ`, `pregunta_FAQ`, `resposta_FAQ`, `categoria_FAQ`, `data_FAQ`) VALUES
(1, 'que passa nen?', 'blablablawfeefewfw', 'adults', '0000-00-00');

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_FAQ`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `faq`
--
ALTER TABLE `faq`
  MODIFY `id_FAQ` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
