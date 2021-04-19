-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 apr 2021 om 13:09
-- Serverversie: 10.4.13-MariaDB
-- PHP-versie: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connfy`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `meeting`
--

CREATE TABLE `meeting` (
  `meetingid` int(11) NOT NULL,
  `naam` varchar(45) NOT NULL,
  `aantal` int(10) NOT NULL,
  `lengte` int(10) NOT NULL,
  `rout` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `meeting`
--

INSERT INTO `meeting` (`meetingid`, `naam`, `aantal`, `lengte`, `rout`) VALUES
(5, 'trest', 2, 2, 2),
(6, 'trest', 2, 2, 2),
(7, 'trest', 2, 2, 2),
(8, 'trest', 2, 2, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `meeting_notes`
--

CREATE TABLE `meeting_notes` (
  `mnid` int(11) NOT NULL,
  `noteid` int(30) NOT NULL,
  `meetingid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `meeting_notes`
--

INSERT INTO `meeting_notes` (`mnid`, `noteid`, `meetingid`) VALUES
(4, 6, 0),
(5, 7, 2),
(7, 8, 8);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `notes`
--

CREATE TABLE `notes` (
  `noteid` int(10) NOT NULL,
  `coleft` int(10) NOT NULL,
  `cotop` int(10) NOT NULL,
  `tekst` varchar(45) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `notes`
--

INSERT INTO `notes` (`noteid`, `coleft`, `cotop`, `tekst`, `image`) VALUES
(6, 0, 0, 'test', 'Naamloos.png'),
(7, 0, 0, 'test', 'Naamloos.png'),
(8, 0, 0, 'asd', ''),
(9, 0, 0, 'fhdfdg', 'Screenshot_3.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`userid`, `username`, `pass`, `email`) VALUES
(1, 'user1', 'anana', 'anass_salhi@outlook.com'),
(3, 'gebruiker', 'wachtwoord', 'as.cool@live.nl');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_notes`
--

CREATE TABLE `user_notes` (
  `u_nid` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`meetingid`);

--
-- Indexen voor tabel `meeting_notes`
--
ALTER TABLE `meeting_notes`
  ADD PRIMARY KEY (`mnid`);

--
-- Indexen voor tabel `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`noteid`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexen voor tabel `user_notes`
--
ALTER TABLE `user_notes`
  ADD PRIMARY KEY (`u_nid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `meeting`
--
ALTER TABLE `meeting`
  MODIFY `meetingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `meeting_notes`
--
ALTER TABLE `meeting_notes`
  MODIFY `mnid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `notes`
--
ALTER TABLE `notes`
  MODIFY `noteid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `user_notes`
--
ALTER TABLE `user_notes`
  MODIFY `u_nid` int(45) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
