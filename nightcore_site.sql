-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 31. Mrz 2019 um 23:05
-- Server-Version: 10.2.22-MariaDB
-- PHP-Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `nightcore_site`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nightcore_network`
--

CREATE TABLE `nightcore_network` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `uniqueid` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nightcore_network_stats`
--

CREATE TABLE `nightcore_network_stats` (
  `id` int(20) NOT NULL,
  `member` int(20) NOT NULL,
  `subs` int(200) NOT NULL,
  `views` int(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nightcore_start`
--

CREATE TABLE `nightcore_start` (
  `id` int(100) NOT NULL,
  `watchid` varchar(1000) COLLATE latin1_german1_ci NOT NULL,
  `genre` int(10) NOT NULL,
  `artist` varchar(1000) COLLATE latin1_german1_ci NOT NULL,
  `title` varchar(10000) COLLATE latin1_german1_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nightcore_user`
--

CREATE TABLE `nightcore_user` (
  `id` int(200) NOT NULL,
  `user` varchar(200) COLLATE latin1_german1_ci NOT NULL,
  `pw` varchar(200) COLLATE latin1_german1_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nightcore_user2`
--

CREATE TABLE `nightcore_user2` (
  `id` int(200) NOT NULL,
  `mail` varchar(1000) NOT NULL,
  `pw` varchar(1000) NOT NULL,
  `best` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Benutzer der Website (keine Admins)';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nightcore_vids`
--

CREATE TABLE `nightcore_vids` (
  `start` varchar(2000) COLLATE latin1_german1_ci NOT NULL,
  `nightcore` varchar(2000) COLLATE latin1_german1_ci NOT NULL,
  `kat` varchar(2000) COLLATE latin1_german1_ci NOT NULL,
  `mood` int(100) NOT NULL,
  `genre` int(100) NOT NULL,
  `artist` varchar(300) COLLATE latin1_german1_ci NOT NULL,
  `title` varchar(10000) COLLATE latin1_german1_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `nightcore_network`
--
ALTER TABLE `nightcore_network`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `nightcore_network_stats`
--
ALTER TABLE `nightcore_network_stats`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `nightcore_start`
--
ALTER TABLE `nightcore_start`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `nightcore_user`
--
ALTER TABLE `nightcore_user`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `nightcore_user2`
--
ALTER TABLE `nightcore_user2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `nightcore_network`
--
ALTER TABLE `nightcore_network`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT für Tabelle `nightcore_network_stats`
--
ALTER TABLE `nightcore_network_stats`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT für Tabelle `nightcore_start`
--
ALTER TABLE `nightcore_start`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT für Tabelle `nightcore_user`
--
ALTER TABLE `nightcore_user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT für Tabelle `nightcore_user2`
--
ALTER TABLE `nightcore_user2`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
