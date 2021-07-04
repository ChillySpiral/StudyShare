-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Jul 2021 um 20:02
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 8.0.3

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
(2, 'novalis', 'ibrahim@adouni.dev', 'Ibrahim', 'Adouni', '$2y$10$eYI5b50pF4V65hdrNwwEMOILtGatqyONiHTosPlHzEFj67rd6xY12', b'1', '2021-05-18 11:23:47', '2021-06-30 20:15:00'),
(3, 'laurell', 'Laurell@gmx.at', 'Laurell', 'Denk', '$2y$10$iM/ldMEgR6SFy/HuorQvz.CZZKQGUZ4onhvt7MR4AofnnUpZJ4/0K', b'1', '2021-06-04 12:22:25', '2022-06-21 11:20:33'),
(9, 'KyoHolic', 'adriankoch@mail.com', 'Adrian', 'Koch', '$2y$10$jS.iMfiwyzG8EGaw9EYy0OaNeFhU1i2dab86qI9XoJ5NIvAWI2X6C', b'0', '2021-07-03 19:55:11', ''),
(10, 'Xeelta', 'gessnerchris@gmx.de', 'Christian', 'Gessner', '$2y$10$G5Rw4M5TdGf5l.y.sVh0nu9O/R9YWOg9t5qkaJqP.D5DJw.6NWVcm', b'0', '2021-07-03 19:55:48', ''),
(11, 'legarou', 'mbilaver@outlook.com', 'Matilda', 'Bilaver', '$2y$10$5wkMm.hLPStykC6zCrKbyuxTPJyKWTHm24RJClfK9dTPAH0Ypc27a', b'0', '2021-07-03 19:56:42', ''),
(12, 'Lvnka', 'mweber@googlemail.com', 'Melina', 'Weber', '$2y$10$PccCI6/ugSLmOPutbtoDaOc3s/a8F8O3UGt55kG3vPml1zuZ5.Bkq', b'0', '2021-07-03 19:58:33', ''),
(13, 'tangens', 'lucatgnl@web.de', 'Luca', 'Tangl', '$2y$10$CwcsXv3CMLHY/ujWdWS5AecGeSw/Ngm7uReRsdo3HaaYG5.GxmZne', b'0', '2021-07-03 19:59:20', ''),
(14, 'OnlineFlowerGirl', 'chrisdenks@webmail.com', 'Christiane', 'Denkner', '$2y$10$k6K0oVwj0XeBAtxBkHLCYuZ20lvhDjEsY3yP2Lri7fb150u65/kS.', b'0', '2021-07-03 20:01:05', '');

--
-- Daten für Tabelle `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `subject_id`, `title`, `description`, `Review`, `filename`, `created_at`) VALUES
(8, 2, 4, 'IT - Security Zusammenfassung 1', 'Inhalt:\r\n- Grundlagen Security\r\n- Grundlagen Kryptographie\r\n- Symmetrische und Asymmetrische Verfahren\r\n- Anwendung von Zertifikaten\r\n- DAC/MAC/RBAC\r\n- Passwort-Entropie\r\n- Perimetersicherheit', b'1', 'infosec_kf.pdf', '2021-06-30 15:24:56'),
(9, 3, 4, 'Computer Security - Principles and Practice', 'Computer Security: Principles and Practice, 4th Edition, is ideal for courses in Computer/Network Security. The need for education in computer security and related topics continues to grow at a dramatic rate—and is essential for anyone studying Computer Science or Computer Engineering.', b'1', 'Computer Security - Principles and Practice 4th Global Edition (2018).pdf', '2021-06-30 15:27:58'),
(10, 10, 1, 'C++ OOP Basics', '- Software Tests\r\n- Klassen & Objekte\r\n- Konstruktoren\r\n- Dekonstruktor\r\n- Kopierkonstruktor\r\n- Setter Methoden\r\n- Getter Methoden\r\n- Speicherverwaltung\r\n- Programmstrukturierung', b'1', 'C++_OOP.pdf', '2021-06-30 19:12:59'),
(11, 10, 3, 'SQL Basics', '- Syntax\r\n- Select (Distinct)\r\n- WHERE\r\n- AND, OR, NOT\r\n- ORDER BY\r\n- INSERT INTO\r\n- NULL VALUES\r\n- Update\r\n- Delete\r\n- COUNT, AVG, SUM', b'1', 'SQL_Basics.pdf', '2021-06-30 19:14:26'),
(12, 11, 2, 'PHP - Zusammenfassung 1', '- Variables\r\n- Data Types\r\n- Switch\r\n- Loops\r\n- Arrays', b'0', 'PHP - Zusammenfassung 1.pdf', '2021-07-03 19:33:52'),
(13, 9, 2, 'PHP - Zusammenfassung 2', '- Cookies\r\n- Sessions\r\n- Filters\r\n- JSON\r\n- Exceptions', b'0', 'PHP - Zusammenfassung 2.pdf', '2021-07-03 19:34:28'),
(14, 3, 1, 'Oasencrawler', 'Inhalt:\r\n- Interface\r\n- Klassen\r\n- Objekte\r\n- Exceptions\r\n- Assert\r\n- Konstruktor\r\n- Dekonstruktor\r\n- Heap ', b'1', 'C++_OOP_Oasencrawler.pdf', '2021-07-03 19:36:00'),
(15, 3, 1, 'HOW TO: Operatoren überladen & Friends', '- Allgemein\r\n- Beispielcode\r\n', b'0', 'Operatoren_Friends (2).pdf', '2021-07-03 19:39:28'),
(16, 12, 3, 'XML und JSON', '- Dokumenterstellung\r\n- Verfahren\r\n- Speicherung\r\n- Übungen', b'0', 'Datenformate.pdf', '2021-07-03 19:42:01'),
(17, 14, 4, 'IT Security Zusammenfassung 2', '- Sichere Kommunikation 1\r\n- Sichere Kommunikation 2\r\n- Virtual Private Networks', b'1', 'ITZSFM2.pdf', '2021-07-03 19:43:53');

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
