-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Nov 2022 um 14:59
-- Server-Version: 10.4.25-MariaDB
-- PHP-Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be17_cr4_wahida_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be17_cr4_wahida_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be17_cr4_wahida_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `library`
--

CREATE TABLE `library` (
  `libraryID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `ISBN_code` varchar(50) NOT NULL,
  `short_description` varchar(300) NOT NULL,
  `type` varchar(50) NOT NULL,
  `author_first_name` varchar(50) NOT NULL,
  `author_last_name` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_date` date NOT NULL,
  `availabilty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `library`
--

INSERT INTO `library` (`libraryID`, `title`, `image`, `ISBN_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_date`, `availabilty`) VALUES
(31, 'A Thousand Splendid Suns', '636f96ed86163.jpg', '637548293', 'A Thousand Splendid Suns is set in Afghanistan from the early 1960s to the early 2000s. Mariam, a young girl in the 1960s, grows up outside Herat, a small city in Afghanistan. Mariam has complicated feelings about her parents: She lives with her spiteful and stubborn mother, Nana.', 'book', 'Khaled', 'Hoessini', 'Bloom', '2007-05-22', 'available'),
(35, 'Mornings in Jenin', '636f98f62126d.jpg', '6736476473', 'Mornings in Jenin is a multi-generational story about a Palestinian family. Forcibly removed from the olive-farming village of Ein Hod by the newly formed state of Israel in 1948, the Abulhejos are displaced to live in canvas tents in the Jenin refugee camp.', 'book', 'Susan', 'Abulhawa', 'Bloomy', '2006-09-01', 'available'),
(38, 'And the Mountains Echoed ', '636f9e3220ea9.jpg', '5364563546', 'Khaled Hosseini\'s And the Mountains Echoed begins with a fable that a father tells his two children: A farmer who works hard to eke out a living for his family is forced to give up one of his five children to an evil giant.', 'book', 'Khaled', 'Hoesseini', 'Bloomy', '2013-05-21', 'available'),
(39, 'The Alchemist', '636f9f50184d9.jpeg', '6376473643', 'An Andalusian shepherd boy named Santiago dreams of a treasure while in a ruined church. He consults a Gypsy fortune-teller about the meaning of the recurring dream. The woman interprets it as a prophecy, telling the boy that he will discover a treasure at the Egyptian pyramids.', 'book', 'Paulo', 'Coelho', 'Harper Torch', '1988-01-01', 'available');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`libraryID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `library`
--
ALTER TABLE `library`
  MODIFY `libraryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
