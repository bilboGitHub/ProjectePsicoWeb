-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 20-06-2018 a les 13:20:34
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
-- Estructura de la taula `cites`
--

CREATE TABLE `cites` (
  `data_cita` datetime NOT NULL,
  `id_pacient` smallint(5) UNSIGNED NOT NULL,
  `estat` enum('disponible','no disponible','ocupat') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'disponible',
  `id_doctor` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `doctor`
--

CREATE TABLE `doctor` (
  `id_doctor` smallint(5) UNSIGNED NOT NULL,
  `admin` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cognoms` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `infantil` enum('0','1') COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `adolescent` enum('0','1') COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `adult` enum('0','1') COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `id_usuari` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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

-- --------------------------------------------------------

--
-- Estructura de la taula `pacient`
--

CREATE TABLE `pacient` (
  `id_pacient` smallint(5) UNSIGNED NOT NULL,
  `nom` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cognoms` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dataNaixement` date NOT NULL,
  `especialitat` enum('infantil','adolescents','adults') COLLATE utf8_spanish_ci NOT NULL,
  `id_usuari` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `sessions`
--

CREATE TABLE `sessions` (
  `data_sessio` datetime NOT NULL,
  `id_pacient` smallint(5) UNSIGNED NOT NULL,
  `id_doctor` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `usuari`
--

CREATE TABLE `usuari` (
  `id_usuari` smallint(5) UNSIGNED NOT NULL,
  `mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenya` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipus` enum('0','1','2') COLLATE utf8_spanish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `cites`
--
ALTER TABLE `cites`
  ADD PRIMARY KEY (`data_cita`,`id_pacient`),
  ADD KEY `id_doctor` (`id_doctor`),
  ADD KEY `id_pacient` (`id_pacient`);

--
-- Índexs per a la taula `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id_doctor`),
  ADD KEY `id_usuari` (`id_usuari`);

--
-- Índexs per a la taula `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_FAQ`);

--
-- Índexs per a la taula `pacient`
--
ALTER TABLE `pacient`
  ADD PRIMARY KEY (`id_pacient`),
  ADD KEY `id_usuari` (`id_usuari`);

--
-- Índexs per a la taula `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id_pacient`,`data_sessio`),
  ADD KEY `id_doctor` (`id_doctor`);

--
-- Índexs per a la taula `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`id_usuari`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id_doctor` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `faq`
--
ALTER TABLE `faq`
  MODIFY `id_FAQ` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la taula `pacient`
--
ALTER TABLE `pacient`
  MODIFY `id_pacient` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `usuari`
--
ALTER TABLE `usuari`
  MODIFY `id_usuari` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `cites`
--
ALTER TABLE `cites`
  ADD CONSTRAINT `cites_ibfk_1` FOREIGN KEY (`id_doctor`) REFERENCES `doctor` (`id_doctor`),
  ADD CONSTRAINT `cites_ibfk_2` FOREIGN KEY (`id_pacient`) REFERENCES `pacient` (`id_pacient`);

--
-- Restriccions per a la taula `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`);

--
-- Restriccions per a la taula `pacient`
--
ALTER TABLE `pacient`
  ADD CONSTRAINT `pacient_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id_usuari`);

--
-- Restriccions per a la taula `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`id_doctor`) REFERENCES `doctor` (`id_doctor`),
  ADD CONSTRAINT `sessions_ibfk_2` FOREIGN KEY (`id_pacient`) REFERENCES `pacient` (`id_pacient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
