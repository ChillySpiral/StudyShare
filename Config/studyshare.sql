-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Jun 2021 um 15:46
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `studyshare`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `documents`
--

CREATE TABLE `documents` (
  `id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `subject_id` int(8) NOT NULL,
  `title` varchar(64) NOT NULL,
  `description` text DEFAULT NULL,
  `Review` bit(1) NOT NULL DEFAULT b'0',
  `filename` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `subject_id`, `title`, `description`, `Review`, `filename`, `created_at`) VALUES
(2, 2, 1, 'hello', 'test', b'1', 'architecture_studyshare_group7.pdf', '2021-05-18 11:26:04'),
(4, 1, 1, 'asdf', 'asdfasdf', b'1', 'Bewerbung_Denk.pdf', '2021-06-07 11:19:40'),
(7, 5, 0, 'Test', '', b'1', 'ANGABEN_6-11.pdf', '2021-06-21 11:21:42');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ratings`
--

CREATE TABLE `ratings` (
  `user_id` int(8) NOT NULL,
  `document_id` int(8) NOT NULL,
  `rated_stars` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `subjects`
--

CREATE TABLE `subjects` (
  `id` int(8) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `subjects`
--

INSERT INTO `subjects` (`id`, `name`) VALUES
(0, 'Allgemein'),
(1, 'C++'),
(2, 'PHP'),
(3, 'Datenmanagment'),
(4, 'IT-Security');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `firstname` varchar(64) DEFAULT NULL,
  `lastname` varchar(64) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `is_admin` bit(1) NOT NULL DEFAULT b'0',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `subscription_expires_at` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `firstname`, `lastname`, `password`, `is_admin`, `created_at`, `subscription_expires_at`) VALUES
(1, 'DenkLa', 'laurell@gmx.at', 'Laurell', 'Denk', '$2y$10$EMXfMA2uxx1xwTxbpv7oI.eWp948uaEAUS0/9jjhNtIdKsOVp7jui', b'1', '2021-05-17 18:45:08', ''),
(2, 'novalis', 'ibrahim@adouni.dev', 'Ibrahim', 'Adouni', '$2y$10$eYI5b50pF4V65hdrNwwEMOILtGatqyONiHTosPlHzEFj67rd6xY12', b'1', '2021-05-18 11:23:47', '2021-06-30 20:15:00'),
(3, 'laurell', 'Laurell@gmx.at', 'Laurell', 'Denk', '$2y$10$iM/ldMEgR6SFy/HuorQvz.CZZKQGUZ4onhvt7MR4AofnnUpZJ4/0K', b'1', '2021-06-04 12:22:25', '2022-06-21 11:20:33'),
(4, 'asdfasdf', 'asdf@aasd.at', 'asdfasdf', 'asdfasdf', '$2y$10$lamgwk7zkLvqGwKN2afVnO1Lcix69vp.Mrt9fsWkSswCwlVrMmvSa', b'1', '2021-06-07 10:32:56', '2021-10-21 11:19:21'),
(5, 'user', 'muster@mail.com', 'Maxi', 'Musteruser', '$2y$10$bar3lCuP8zQX7fTpAw68lOJgq5gm3p/siF3Lfumqzl8yW10y4EH5e', b'1', '2021-06-07 10:32:59', '2021-08-21 11:18:43');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`),
  ADD KEY `fk_subject` (`subject_id`);

--
-- Indizes für die Tabelle `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`user_id`,`document_id`),
  ADD KEY `fk_document_ratings` (`document_id`);

--
-- Indizes für die Tabelle `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `fk_subject_documents` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_documents` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `fk_document_ratings` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_ratings` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
